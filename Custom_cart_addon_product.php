// cart,php page content 

<style>
			.plans {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: center;

  max-width: 970px;
  padding: 30px;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  background: #fff;
  -webkit-box-shadow: 0 0 10px rgb(0 0 0 / 10%);
  box-shadow: 0 0 10px rgb(0 0 0 / 10%);
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  gap: 10px;
}

.plans .plan input[type="radio"] {
  position: absolute;
  opacity: 0;
}

.plans .plan {
  cursor: pointer;
  width: 48.5%;
}
 
.plans .plan .plan-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 10px;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  border: 1px solid #CECECE;
  border-radius: 10px;
  -webkit-transition: -webkit-box-shadow 0.4s;
  transition: -webkit-box-shadow 0.4s;
  -o-transition: box-shadow 0.4s;
  transition: box-shadow 0.4s;
  transition: box-shadow 0.4s, -webkit-box-shadow 0.4s;
  position: relative;
  min-height: 160px;
  align-items: center;
}

.plans .plan .plan-content img {
  margin-right: 20px;
  height: 40px;
}

.plans .plan .plan-details span {
  margin-bottom: 10px;
  display: block;
  font-size: 18px;
  line-height: 24px;
  color: #252f42;
}

.container .title {
  font-size: 26px;
  font-weight: 400;
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  color: #252f42;
  margin-bottom: 40px;
  text-align: center;
}

.plans .plan .plan-details p {
  color: #646a79;
  font-size: 14px;
  line-height: 18px;
}

.plans .plan .plan-content:hover {
  -webkit-box-shadow: 0px 3px 5px 0px #e8e8e8;
  box-shadow: 0px 3px 5px 0px #e8e8e8;
}

.plans .plan input[type="radio"]:checked + .plan-content:after {
  content: "";
  position: absolute;
  height: 16px;
  width: 16px;
  background: #000;
  right: 10px;
  top: 5px;
  border-radius: 100%;
  border: 3px solid #fff;
  -webkit-box-shadow: 0px 0px 0px 2px #000;
  box-shadow: 0px 0px 0px 2px #000;
}

.plans .plan input[type="radio"]:checked + .plan-content {
  border: 1px solid #000;
  background: #eaf1fe;
  -webkit-transition: ease-in 0.3s;
  -o-transition: ease-in 0.3s;
  transition: ease-in 0.3s;
}
.submit-test-btn{margin-top: 10px; padding: 0 70px;}
@media screen and (max-width: 991px) {
  .plans {
    margin: 0 20px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    padding: 40px;
  }

  .plans .plan {
    width: 100%;
  }

  .plan.complete-plan {
    margin-top: 20px;
  }

  .plans .plan .plan-content .plan-details {
    width: 70%;
    display: inline-block;
  }

  .plans .plan input[type="radio"]:checked + .plan-content:after {
    top: 45%;
    -webkit-transform: translate(-50%);
    -ms-transform: translate(-50%);
    transform: translate(-50%);
  }
}

@media screen and (max-width: 767px) {
  .plans .plan .plan-content .plan-details {
    width: 60%;
    display: inline-block;
  }
}

@media screen and (max-width: 540px) {
  .plans .plan .plan-content img {
    margin-bottom: 20px;
    height: 56px;
    -webkit-transition: height 0.4s;
    -o-transition: height 0.4s;
    transition: height 0.4s;
  }

  .plans .plan input[type="radio"]:checked + .plan-content:after {
    top: 20px;
    right: 10px;
  }

  .plans .plan .plan-content .plan-details {
    width: 100%;
  }

  .plans .plan .plan-content {
    padding: 20px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: baseline;
    -ms-flex-align: baseline;
    align-items: baseline;
  }
}

/* inspiration */
.inspiration {
  font-size: 12px;
  margin-top: 50px;
  position: absolute;
  bottom: 10px;
  font-weight: 300;
}

.inspiration a {
  color: #666;
}
@media screen and (max-width: 767px) {
  /* inspiration */
  .inspiration {
    display: none;
  }
</style>

		<div id="cart-collaterals" class="cart-collaterals">
            <!-- <div class="cs-test-choice">
            </div> -->
            <div class="container">
  <div class="plans">
    <div class="title">SELECT THE TYPE OF TEST</div>
    <label class="plan basic-plan" for="basic">
      <input checked type="radio" name="plan" id="basic" value="5062"/>
      <div class="plan-content">
        <img loading="lazy" src="https://builtdemo.info/examineme/wp-content/uploads/2022/11/finger-prick-kit.png" alt="" />
        <div class="plan-details">
          <span>Finger prick kit<br>(Free)</span>
          <p>Your kit will include multiple lancets and micro containers to collect your sample.</p>
        </div>
      </div>
    </label>
    <label class="plan complete-plan" for="complete">
      <input type="radio" id="complete" name="plan" value="5065"/>
      <div class="plan-content">
        <img loading="lazy" src="https://builtdemo.info/examineme/wp-content/uploads/2022/11/clinic-icon.png" alt="" />
        <div class="plan-details">
          <span>Visit our partner clinic<br>($30)</span>
          <p>Book an appointment with one of our nationwide partner clinics where you can have your blood drawn by a healthcare professional.</p>
        </div>
      </div>
    </label>
    <label class="plan complete-plan" for="complete1">
      <input type="radio" id="complete1" name="plan" value="5067"/>
      <div class="plan-content">
        <img loading="lazy" src="https://builtdemo.info/examineme/wp-content/uploads/2022/11/appointment-icon.png" alt="" />
        <div class="plan-details">
          <span>Home phlebotomy appointment<br>($55)</span>
          <p>Book an appointment with one of our nationwide mobile phlebotomists who will come to you.</p>
        </div>
      </div>
    </label>
    <label class="plan complete-plan" for="complete2">
      <input type="radio" id="complete2" name="plan" value="5069"/>
      <div class="plan-content">
        <img loading="lazy" src="https://builtdemo.info/examineme/wp-content/uploads/2022/11/myself-icon.png" alt="" />
        <div class="plan-details">
          <span>Organise a phlebotomist myself<br>(Free)</span>
          <p>We provide you with a phlebotomy kit so you can organise a professional to draw your blood.</p>
        </div>
      </div>
    </label>
    
  </div>
</div>






<?php 

global $woocommerce;
$items = $woocommerce->cart->get_cart();
foreach ( $items as $item => $cart_item ) {
 
    $terms = get_the_terms( $cart_item['product_id'], 'product_cat' );
    $cat =  $terms[0]->slug;
    if($cat == 'service-fee'){
      $service_fee = 'true';
      $service_product = $cart_item['product_id'];
      $active_plan = '[value="'.$service_product.'"]';
      
      echo "<script>jQuery('".$active_plan."').prop('checked', true);</script>";
    }  							    
}

if($service_fee !== 'true'){
  function add_this_script_footer() { 
    ?>
    <script>
    jQuery('#basic').trigger('change');
    </script>
    <?php } 
    add_action('wp_footer', 'add_this_script_footer');
}
?>





<script>
 
jQuery('[name="plan"]').on('change', function(){
   
    var spinner = jQuery('#loader');
    spinner.show();
    var selected_plan = jQuery('[name="plan"]:checked').val();
    
     jQuery.ajax({
							   url: '<?php echo admin_url('admin-ajax.php'); ?>',
							   type: "POST",
							   data:{ 
									    action: 'add_service_product', selected_plan:selected_plan },
										success: function(data) {											
											if(data.status == 'done'){
                                                var url = '<?php echo get_the_permalink(); ?>';
                                                window.location.href = url;
                                            } 
                                            spinner.hide();
									 },
								}); 
});

 
</script>



// functions.php code for change plan or automatically


// First create category for cat addon product this is called "service-fee". Afte that we can add or remove product based id.


add_action('wp_ajax_add_service_product', 'add_service_product_function');
add_action('wp_ajax_nopriv_add_service_product', 'add_service_product_function');

function add_service_product_function() {
    
    
        $service_fee = 'false';
		$selected_product =  $_POST['selected_plan'];
		global $woocommerce;
		$items = $woocommerce->cart->get_cart();
        foreach ( $items as $item => $cart_item ) {
		 
			  $terms = get_the_terms( $cart_item['product_id'], 'product_cat' );
			  $cat =  $terms[0]->slug;
			  if($cat == 'service-fee'){
				$service_fee = 'true';
				$service_product = $cart_item['product_id'];
				WC()->cart->remove_cart_item( $item );
			  }  							    
        }


		$woocommerce->cart->add_to_cart( $selected_product );
        $done = 'done';
		$response = array();
	 
		$response['status'] = $done;
		wp_send_json($response);
		wp_die();

}
 
// below the code for display fee on the cart total box.


add_action( 'woocommerce_cart_totals_custom_text', 'action_woocommerce_cart_totals_before_shipping', 10, 0 ); 

function action_woocommerce_cart_totals_before_shipping(  ) {

	global $woocommerce;
	$items = $woocommerce->cart->get_cart();
	$service_fee = 'false';
	foreach ( $items as $item => $cart_item ) {
	 
		  $terms = get_the_terms( $cart_item['product_id'], 'product_cat' );
		  $cat =  $terms[0]->slug;
		  if($cat == 'service-fee'){
			$service_fee = 'true';
			$service_product = $cart_item['product_id'];
			 
		  }  							    
	}

 if( $service_fee == 'true'){
	 $_product = wc_get_product( $service_product );
	$fee = $_product->get_regular_price();
	echo "<tr class='cart-subtotal'><th>TYPE OF TEST: </th><td class='custom-fee'>$".$fee."</td></tr>";
 }

   
}