
<!-- The Modal -->
<div id="popup10myModal"  class="modal-son">
  <?php
  //$my_plugin=WP_PLUGIN_DIR .'/osmanplugin';
  $errormsg = sanitize_text_field($_POST['msg']);
  $durum=sanitize_text_field($_POST['durum']);
  //$my_plugin=WP_PLUGIN_DIR . 'osmanplugin/images/info-low-part.png';
   $my_plugin_appsila=plugins_url('/WooQuote/images/error-appsila.png');
    ?>
  <!-- Modal content -->
  <div class="modal-content-son" onclick="popup10()">
    <center><img  class="appsila_image" src="<?PHP echo $my_plugin_appsila;?>" ><center>
	 <center><h2 ><?PHP echo $errormsg;?></h2> </center>
   <center>  <td><input type="submit" value="CLOSE" name="product_transfer_type_button" id="close" onclick="popup10Close()" class="button-primary" ></td>
  </center>
    <p></p>
	   <div class="woocommerce-billing-fields">
      </div>
    </div>
  </div>
