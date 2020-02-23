<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">




<?php
          global $current_user;
          get_currentuserinfo();
          $customer_id=$current_user->ID;
          $sp_or_cart=0;
 ?>
</head>
        <?PHP
          $ticaretCRMoptions_message=get_option('ticaretCRMoptions_message');
        ?>
<form action = "" onsubmit="return handle_form_submission()" method = "POST">
<div id="loader"> </div>
<input type="button" id="insert_empty_cart_button" name="request_button" onclick="ponpili();" value="<?php echo $ticaretCRMoptions_message['requestbutton'];  ?>">
<!-- The Modal -->
<div id="popup2myModal" class="modal" onclick="ponpili3()">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" onclick="ponpili2()">&times;</span>
	<div class="woocommerce-billing-fields">
	<h3> </h3>
	<div class="woocommerce-billing-fields__field-wrapper">
		<p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
			<label for="billing_first_name" id="Name1">
				<?php echo $ticaretCRMoptions_message['name']; ?>
				<abbr class="required" title="gerekli">*</abbr>
			</label>
			<input type="text" class="input-text"  name="billing_first_name" id="billing_first_name"  value="<?echo $current_user->user_firstname;?>" autocomplete="given-name" autofocus="autofocus" min="2" max="100" >
		</p>
		<p class="form-row form-row-last validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_last_name_field" data-priority="20">
			<label for="billing_last_name" class="">
				<?php echo $ticaretCRMoptions_message['surname']; ?>
				<abbr class="required" title="gerekli">*</abbr>
			</label>
			<input type="text" class="input-text "  name="billing_last_name" id="billing_last_name"  value="<?echo $current_user->user_lastname;?>" autocomplete="family-name" min="2" max="100"  >
		</p>
		<p class="form-row form-row-first validate-required validated company-name" id="billing_company_field" data-priority="30">
			<label for="billing_company" class="">
				<?php echo $ticaretCRMoptions_message['company_name']; ?>
			</label>
			<input type="text" class="input-text "  name="billing_company" id="billing_company"  value="<?echo get_user_meta( $customer_id, 'billing_company', true );?>" autocomplete="organization" min="2" max="100" >
		</p>
		<p class="form-row form-row-last validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_address_1_field" data-priority="50">
			<label for="billing_address_1" class="">
				<?php echo $ticaretCRMoptions_message['address']; ?>
				<abbr class="required" title="gerekli">*</abbr>
			</label>
			<input type="text" class="input-text "  name="billing_address_1" id="billing_address_1"  value="<?echo get_user_meta( $customer_id, 'shipping_address_1', true );echo get_user_meta( $customer_id, 'shipping_address_2', true );echo get_user_meta( $customer_id, 'shipping_city', true );?> " autocomplete="address-line1" maxlength="60" min="2" max="100" >
		</p>
		<p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_phone_field" data-priority="100">
			<label for="billing_phone" class="">
				<?php echo $ticaretCRMoptions_message['phone']; ?>
				<abbr class="required" title="gerekli">*</abbr>
			</label>
			<input type="tel" class="input-text "  name="billing_phone" id="billing_phone"  value="<?echo get_user_meta( $customer_id, 'billing_phone', true );?>" autocomplete="tel"   >
		</p>
		<p class="form-row form-row-last validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_email_field" data-priority="110">
			<label for="billing_email" class="">
				<?php echo $ticaretCRMoptions_message['email_address']; ?>
				<abbr class="required" title="gerekli">*</abbr>
			</label>
			<input type="email" class="input-text "  name="billing_email" id="billing_email"  autocomplete="email username" min="6" max="100" value="<?  echo $current_user->user_email;?>" >
		</p>
		<p class="form-row   notes" id="order_comments_field" data-priority="130">
			<label for="order_comments" class="form-row-first" ><?php echo $ticaretCRMoptions_message['brief_overview']; ?></label>
      <textarea name="order_comments" id="order_comments" style="width:100%;"></textarea>
		</p>
		<p class="form-row form-row-wide woocommerce-validated" id="submit_request_button">
<input type="submit" name="submit_request_button" onclick="return handle_form_submission()" value="<?php echo $ticaretCRMoptions_message['submit'];  ?>">
<?php
        echo '<input type="hidden" name="pnamestr" value="'. $pnamestr. '">';
        echo '<input type="hidden" name="pimagestr" value="'. $pimagestr. '">';
        echo '<input type="hidden" name="pskustr" value="'. $pskustr. '">';
        echo '<input type="hidden" name="psku_quantitystr" value="'. $psku_quantitystr. '">';
        echo '<input type="hidden" name="pimage_linkstr" value="'. $pimage_linkstr. '">';
        echo '<input type="hidden" name="pshort_descriptionstr" value="'. $pshort_descriptionstr. '">';
        echo '<input type="hidden" name="pdescriptionstr" value="'. $pdescriptionstr. '">';
        echo '<input type="hidden" name="pline_totalstr" value="'. $pline_totalstr. '">';
        echo '<input type="hidden" name="currency" value="'. $currency. '">';
        echo '<input type="hidden" name="currency_symbol" value="'. $currency_symbol. '">';
        echo '<input type="hidden" name="ppricestr" value="'. $ppricestr. '">';
        echo '<input type="hidden" name="pquantitystr" value="'. $pquantitystr. '">';
        echo '<input type="hidden" name="ptaxstr" value="'. $ptaxstr. '">';
        echo '<input type="hidden" name="ptax_statusstr" value="'. $ptax_statusstr. '">';
        echo '<input type="hidden" name="ptax_classstr" value="'. $ptax_classstr. '">';
        echo '<input type="hidden" name="psale_pricestr" value="'. $psale_pricestr. '">' . '<br>';
        echo '<input type="hidden" name="total" value="' . str_replace(';','-',$total_cart) . '" >' . '<br>';
        echo '<input type="hidden" name="total_tax" value="' . $total_tax . '" >' . '<br>';
        echo '<input type="hidden" name="total_shipping" value="' . $total_shipping . '" >';
        echo '<input type="hidden" name="coupon" value="'. $coupon. '">';
        echo '<input type="hidden" name="sp_or_cart" value="' . $sp_or_cart . '" >';
        echo '<input type="hidden" name="pregular_pricestr" value="'. $pregular_pricestr. '">' . '<br>';
?>
		</p>
	</div>
	</div>
  </div>
</div>
</form>
</html>
