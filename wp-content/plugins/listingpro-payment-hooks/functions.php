<?php
	if(!function_exists('add_my_payment_method_to_listingpro')){
		function add_my_payment_method_to_listingpro(){
			/* 
				use these param
				array(
					'name' => 'bambora',
					'image' => 'https://cdn3.iconfinder.com/data/icons/unicons-vector-icons-pack/32/more-128.png',
				);
				
			*/
			$makePaymentArry = array(
				'name' => 'bambora',
				'image' => 'https://cdn3.iconfinder.com/data/icons/unicons-vector-icons-pack/32/more-128.png',
			);
			echo lp_print_payment_html($makePaymentArry);
				
		}
	}
	add_action('lp_add_custom_payment_method_html', 'add_my_payment_method_to_listingpro', 1);
	
	
	
	
	/* ==================process custom payment (custom function for developers only) remove it after testing================ */
	if(!function_exists('process_my_custom_payment')){
		function process_my_custom_payment($method, $listingID, $planID){
			/* 
				* method name as given in add_my_payment_method_to_listingpro array
				*******Class functions of LP_payment*********
				* Create object of class and use following functions
				* lp_get_success_page function
				* lp_get_error_page function
				* lp_get_total_purchase_price function
				* lp_save_payment_details_in_db($dataArray = array()) function
				* sample $dataArray = array(
					'listing_id'=> $listingID,
					'status'=> $status,
					'description'=> $description,
					'summary'=> $summary,
					'token'=> $token,
					'translation_id'=> $translation_id,

				);
				
				
				
			*/
			if($method=="bambora"){
				/* execute his code for payment */
				$paymentObj = new LP_payment();
				$totalPrice = $paymentObj->lp_get_total_purchase_price($listingID, $planID);
				
				
				
				$status = 'success'; // Here user need to call there function for payment and need to process payment and get success/fail
				if(!empty($status=="success")){
					if(!empty($totalPrice)){
						
						$description = esc_html__('Description text for payment', 'textdomain');
						$summary = esc_html__('Summary text for payment', 'textdomain');
						$token = 'testtoken44545454ggg'; //get token from payment
						$translation_id = '4444dddd'; //get translation_id from payment
						
						$dataArray = array(
							'listing_id'=> $listingID,
							'status'=> $status,
							'description'=> $description,
							'summary'=> $summary,
							'token'=> $token,
							'translation_id'=> $translation_id,
						);
						$returnQuery = $paymentObj->lp_save_payment_details_in_db($dataArray);
						
						exit(print_r($returnQuery));
						/* 
							* if $returnQuery has successfully return wpdb result, redirect page to success, else redirect to failed page
						*/
						if(!empty($returnQuery)){
							/* sucesss page */
							$sucessPage = $paymentObj->lp_get_success_page;
							wp_redirect( $sucessPage );
							exit;
						}
						else{
							/* failed page */
							$failedPage = $paymentObj->lp_get_error_page;
							wp_redirect( $failedPage );
							exit;
						}
						
					}
				}
				
				
				
			}
				
		}
	}
	add_action('lp_process_new_payment_method', 'process_my_custom_payment', 10, 3);
	
	
	
	
	
	/* ================== for printing araay of action =============== */
	
	if(!function_exists('lp_print_payment_html')){
		function lp_print_payment_html($below_shortcode){
			
			$outputArray = null;
			
			if(is_array($below_shortcode)){
                if ( array_key_exists("name",$below_shortcode) && array_key_exists("image",$below_shortcode) ){
                    $paymentName = $below_shortcode['name'];
                    $paymentImg = $below_shortcode['image'];
                    
                    /* printing the action */
                    $outputArray ='<div class="lp-method-wrap">';
                    $outputArray .='<label>';
                    
                    
                    $outputArray .='<div class="radio radio-danger">
                                        <input type="radio" name="plan" id="'.$paymentName.'" value="'.$paymentName.'">
                                        <label for="'.$paymentName.'">
                                         
                                        </label>
                                </div><p>'.esc_html__('Bambora','listingpro-plugin').'</p>';
                    
                        $outputArray .= '<div class="lp-checkout-payment-img"><img src="'.esc_attr($paymentImg).'"></div>';
                    
                    $outputArray .='</label>';
                    $outputArray .='</div>';
                }
            }
			
			return $outputArray;
		}
	}