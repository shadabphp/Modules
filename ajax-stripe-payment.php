 

<form  id="payment_form">
  <input type="text" name="card_number" placeholder="Card Number">
  <input type="text" name="expiry_month" placeholder="Expiry Month">
  <input type="text" name="expiry_year" placeholder="Expiry Year">
  <input type="text" name="cvc" placeholder="CVC">
  <input type="submit" value="Pay">
</form>
<script>
jQuery('#payment_form').on('submit', function(e){
   e.preventDefault();
   var card_no = jQuery('[name="card_number"]').val();
   var expiry_month = jQuery('[name="expiry_month"]').val();
   var expiry_year = jQuery('[name="expiry_year"]').val();
   var cvc = jQuery('[name="cvc"]').val();
   jQuery.ajax({
    url: '<?php echo admin_url('admin-ajax.php'); ?>',
    type: 'post',
    data: {action:'stripe_payment', card_number:card_no,expiry_month:expiry_month,expiry_year:expiry_year,cvc:cvc},
    success: function(data){
         alert(data)
    }
   })
});
</script>
 

// ajax on functions.php

add_action('wp_ajax_stripe_payment', 'stripe_payment_function');
add_action('wp_ajax_nopriv_stripe_payment', 'stripe_payment_function');
function stripe_payment_function() {
 

if (isset($_POST['card_number'])) {
    require_once(get_template_directory() . '/stripe-php/init.php');
    \Stripe\Stripe::setApiKey('sk_test_pG6Rpq6gboGdCXzksKMYvcjR006f3Tavwj');

    $cardNumber = $_POST['card_number'];
    $expiryMonth = $_POST['expiry_month'];
    $expiryYear = $_POST['expiry_year'];
    $cvc = $_POST['cvc'];

    try {
        $token = \Stripe\Token::create([
            'card' => [
                'number' => $cardNumber,
                'exp_month' => $expiryMonth,
                'exp_year' => $expiryYear,
                'cvc' => $cvc,
            ],
        ]);

        $charge = \Stripe\Charge::create([
            'amount' => 1000, // amount in cents
            'currency' => 'usd',
            'description' => 'Example Charge',
            'source' => $token->id,
            'metadata' => [
                'customer_email' => 'example123@gmail.com',
                'order_id' => 99999,
              ],
        ]);

        // Retrieve and handle response data
  $chargeId = $charge->id;
  $amount = $charge->amount;
  $currency = $charge->currency;
  $status = $charge->status;
  $transactionId = $charge->id;

   
  // Do something with the response data
  echo "Charge ID: " . $chargeId . "<br>";
  echo "Amount: " . $amount . "<br>";
  echo "Currency: " . $currency . "<br>";
  echo "Status: " . $status . "<br>";

  // Payment success, do additional processing
  if ($status === 'succeeded') {
    echo "Payment successful!";
  } else {
    // Handle failed payment
    // ...
  }
    } catch (\Stripe\Exception\CardException $e) {
        // Card declined or other card error
        echo "Payment failed: " . $e->getMessage();
    }
}

}