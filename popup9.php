<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<div id="popup9myModal" class="modal-son">
  <?php
  $infomsg = sanitize_text_field($_POST['msg']);
    $durum=sanitize_text_field($_POST['durum']);
   $my_plugin_appsila=plugins_url('/WooQuote/images/info_appsila.png');
    ?>
  <!-- Modal content -->
  <div class="modal-content-son" onclick="popup9()">
      <center><img  class="appsila_image" src="<?PHP echo $my_plugin_appsila;?>" ></center>
	 <center><h2 > <?PHP echo $infomsg;?></h2> </center>
   <center>  <td><input type="submit" value="CLOSE" name="product_transfer_type_button" onclick="popup9Close()" id="close" class="button-primary" ></td>
   </center>
    <p></p>


    </div>
  </div>
</html>
