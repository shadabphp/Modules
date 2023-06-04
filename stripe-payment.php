<?php
/**
 * The site's entry point.
 *
 * Loads the relevant template part,
 * the loop is executed (when needed) by the relevant template part.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
 
<?php 
if (isset($_POST['card_number'])) {


    // download the stripe-php library from https://github.com/stripe/stripe-php
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
                'customer_email' => 'email12@gmail.com',
                'order_id' => 12345,
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
?>

<form  id="payment_form">
  <input type="text" name="card_number" placeholder="Card Number">
  <input type="text" name="expiry_month" placeholder="Expiry Month">
  <input type="text" name="expiry_year" placeholder="Expiry Year">
  <input type="text" name="cvc" placeholder="CVC">
  <input type="submit" value="Pay">
</form>
 
   
<?php
get_footer();
