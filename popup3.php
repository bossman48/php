<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<?php
 global $current_user;
      get_currentuserinfo();
  $customer_id=$current_user->ID;
  $sp_or_cart=1;
  $ticaretCRMoptions_message=get_option('ticaretCRMoptions_message');

 ?>
<!-- Trigger/Open The Modal -->
<input type="button" id="insert_empty_cart_button" name="request_button" onclick="ponpilii()"value="<?php echo $ticaretCRMoptions_message['requestbutton'];  ?>">
<form action = "#" method = "POST">

<!-- The Modal -->
<div id="popup3myModal" class="modal" onclick="ponpilii3()">


  <!-- Modal content --><div id="loader"> </div>
  <div class="modal-content">
    <span onclick="ponpilii2()" class="close">&times;</span>
	<div class="woocommerce-billing-fields">
	<h3> </h3>
	<div class="woocommerce-billing-fields__field-wrapper">
		<p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
			<label for="billing_first_name" id="Name1">
				<?php echo $ticaretCRMoptions_message['name'];  ?>
				<abbr class="required" title="gerekli">*</abbr>
			</label>
			<input type="text" class="input-text" name="billing_first_name" id="billing_first_name" placeholder="Kobe" value="<?echo $current_user->user_firstname;?>"  autocomplete="given-name" autofocus="autofocus" min="2" max="100" required>
		</p>
		<p class="form-row form-row-last validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_last_name_field" data-priority="20">
			<label for="billing_last_name" class="">
				<?php echo $ticaretCRMoptions_message['surname'];  ?>
				<abbr class="required" title="gerekli">*</abbr>
			</label>
			<input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="Bryant" value="<?echo $current_user->user_lastname;?>" autocomplete="family-name" min="2" max="100" required>
		</p>
		<p class="form-row form-row-first validate-required validated company-name" id="billing_company_field" data-priority="30">
			<label for="billing_company" class="">
				<?php echo $ticaretCRMoptions_message['company_name'];  ?>
			</label>
			<input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="Securify"  value="<?echo get_user_meta( $customer_id, 'billing_company', true );?>" autocomplete="organization" min="2" max="100">
		</p>
		<p class="form-row form-row-last validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_address_1_field" data-priority="50">
			<label for="billing_address_1" class="">
				<?php echo $ticaretCRMoptions_message['address'];  ?>
				<abbr class="required" title="gerekli">*</abbr>
			</label>
			<input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Çankaya/ANKARA" value="<?echo get_user_meta( $customer_id, 'shipping_address_1', true );echo get_user_meta( $customer_id, 'shipping_address_2', true );echo get_user_meta( $customer_id, 'shipping_city', true );?>" autocomplete="address-line1" maxlength="60" min="2" max="100" required>
		</p>
		<p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_phone_field" data-priority="100">
			<label for="billing_phone" class="">
				<?php echo $ticaretCRMoptions_message['phone'];  ?>
				<abbr class="required" title="gerekli">*</abbr>
			</label>
			<input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="+90-555-55-55" value="<?echo get_user_meta( $customer_id, 'billing_phone', true );?>" autocomplete="tel"  inputmode="numeric" >
		</p>
		<p class="form-row form-row-last validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_email_field" data-priority="110">
			<label for="billing_email" class="">
				<?php echo $ticaretCRMoptions_message['email_address'];  ?>
				<abbr class="required" title="gerekli">*</abbr>
			</label>
			<input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="xxx@gmail.com" autocomplete="email username" min="6" max="100" value="<?  echo $current_user->user_email;?>" required>
		</p>
    <p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field">
    <label><?php echo $ticaretCRMoptions_message['product'];  ?> </label>
    <input type="text" class="input-text " name="sp_name" id="products" value="<?echo $sp_name;?>" readonly>
    </p>
    <p class="form-row form-row-last validate-required woocommerce-invalid woocommerce-invalid-required-field ">
      <label><?php echo $ticaretCRMoptions_message['quantities'];  ?></label>
      <input type="number" class="input-text " name="billing_quantities" id="billing_email" inputmode="numeric" min="0"  required>
    </p>
		<p class="form-row notes" id="order_comments_field" data-priority="150">
			<label for="order_comments" class="form-row-first" ><?php echo $ticaretCRMoptions_message['brief_overview'];  ?></label>
      <?php
      echo '<input type="hidden" name="sp_name" value="'. $sp_name. '">';
            echo '<input type="hidden" name="image" value="'. $image. '">';
            echo '<input type="hidden" name="link" value="'. $link. '">';
            echo '<input type="hidden" name="description" value="'. $description. '">';
            echo '<input type="hidden" name="description_normal" value="'. $description_normal. '">';
       ?>
      <textarea name="order_comments" id="order_comments" style="width:100%;"></textarea>
    </p>
 <p class="form-row form-row-wide woocommerce-validated" id="submit_request_button">
    <input type="submit" name="submit_request_button" value="<?php echo $ticaretCRMoptions_message['submit'];  ?>">
<br><br><br>
  <?php
echo '<input type="hidden" name="pro_price" value="'. $pro_price. '">';
echo '<input type="hidden" name="pro_in_tax" value="'. $pro_in_tax. '">';
echo '<input type="hidden" name="tax_rate_sp" value="'. $tax_rate_sp. '">';
echo '<input type="hidden" name="tax_status" value="'.$tax_status.'">';
echo '<input type="hidden" name="tax_class" value="'.$tax_class.'">';
echo '<input type="hidden" name="currency" value="'. $currency. '">';
echo '<input type="hidden" name="coupon" value="'. $coupon. '">';
echo '<input type="hidden" name="currency_symbol" value="'. $currency_symbol. '">';
?>
  </p>
	</div>
	</div>
  </div>
</div>
</form>
</html>
