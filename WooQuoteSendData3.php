<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function wooQuoteSendData3($data_array)

          {

          $returnid = 0;
            $date=date('d.m.Y ');

          $ticaretCRMoptions = get_option('ticaretCRMoptions');
          $email=$ticaretCRMoptions["email"];
          $website_api=$ticaretCRMoptions["apikey"];
          $wc_api_key=$ticaretCRMoptions["wc_api_key"];
          $wc_api_secret=$ticaretCRMoptions["wc_api_secret"];
          $hostname=$data_array["hostname"];



            $data_string='{"email":"'. $email .'","apikey":"' . $website_api. '","wc_api_key":"' . $wc_api_key . '","wc_api_secret":"' . $wc_api_secret . '","hostname":"' . $hostname . '","licencestartdate":"2008-11-11","licenceexpiredate":"2009-11-11"
          }';

          $url='https://woocrm.azurewebsites.net/api/Activate_Account?code=nn/UVwAywb4OorHC8ac7sfL02Mm4tUJL5Y6jIZnlYrtzS/FFKOHVmg==&clientId=default';
          $header=array('Content-Type'=>'application/json; charset=UTF-8','x-lang'=>'tr','x-timezone'=>'180');
          $response = wp_remote_post( $url, array(
                'method' => 'POST',
                  'headers' => $header,
                'body' => $data_string
            )
          );
          $result=$response["body"];


                         if ($result == 1 ) {
                           
                           $returnid = 1;
                         } else if($result == 2){
                           $returnid=2;
                         }
                         else {
                            $returnid = 0;
                         }

                         return $returnid;

          }

?>
