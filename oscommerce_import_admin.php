<h1 >
		Appsila WooQuote
		<small>1.0.0</small>
	</h1>

	<div class="nav-tab-wrapper">
		&nbsp;
		<ul class="tab-menu">
			<li><a class="nav-tab nav-tab-active" name="tab1 "style="" onclick="tab1" id="hasan1" href="#tab1">WooQuote Plugin Settings</a></li>
			<li><a class="nav-tab nav-tab-active" name="tab2 "style=""  onclick="tab2" id="hasan2" href="#tab2">Label Translation</a></li>
			<li><a class="nav-tab nav-tab-active" name="tab3 "style=""  onclick="tab3" id="hasan3" href="#tab3">Help and Installation</a></li>
			</ul>
	</div>


<div class="tms-container">

	<div class="alignright"></div>

	<div id="tms_admin_tab_content">

		<form method="post" id="tms_setup_form" onsubmit="handle_form_submission()" action="#">
			<div class="metabox-holder columns-2" id="post-body">
				<table width="100%">
					<tr valign="top">
						<td>
							<div id="post-body-content">
								<div id="namediv" class="stuffbox" style="width:100%;float:left;">

									<div class="tab-container">
										<div id="tab1" class="tab-content">
											<div id ="headingdiv" style="margin-top:20px; margin-left:5%; width:86%; padding:2%; background-color:#f3f2f2; box-shadow: 2px 2px 5px 0px #424242; text-align:left;float: left;">

												<div class="postbox-container" style="width:60%">
													<h3>WooQuote Plugin and Appsila Backend </h3>
													<ol style="font-size:14px;">
														<li>Get <b>quote requests</b> from your customers both in Product and Cart Pages.</li></br>
														<li><b>Real time transfer</b> customer, products and quote requests to your Appsila Backend.</li></br>
														<li>Check automatically generated quote in Appsila, <b>make discounts</b> if you wish.</li></br>
														<li><b>Generate</b> quote document or <b>mail</b> it to your customer instantly.</li></br>
														<li>Follow-up <b>all details</b> of your Customers/Leads in one place.</li></br>
														<li>Manage your <b>sales pipeline</b>, get visual <b>reports</b>.</li></br>
														<li>Assign <b>Tasks</b>, use shared <b>calendar</b>, define <b>workflows</b>.</li></br>
													</ol>
													Visit our website for more details <a target="_blank" href="http://wooquote.appsila.com">http://wooquote.appsila.com</a>
													<br />
												</div>
												<div class="postbox-container" style="width:40%; text-align:center;">
													<h3>Please contact us for more details</h3>

													<a class="button button-secondary" href="mailto:support@appsila.com"><b>Email</b></a>
													<p>
													<b>Email : support@appsila.com</b><br />
													</p>
												</div>

											</div>


											<div id ="headingdiv" style="margin-top:20px; margin-left:5%; width:90%; padding:10px; padding-right:0px; padding-left:0px; background-color:#FAFAFA; box-shadow: 2px 2px 5px 0px #424242; text-align:center;float: left;">
												<h3 style="padding-top:20px; padding-left:20px; color:#424242" id="head1">WooQuote Plugin Settings</h3>
												<h4 style="padding-left:20px; color:#424242" id="head2">Please fill in the following form to activate your WooQuote. </h4><br>


												<div id="formtext">
												<h2 style="text-align:center; color:#424242 ">Form Details</h2>
												</div>

											</div>

                      <?PHP
											$ticaretCRMoptions = get_option('ticaretCRMoptions');
                      $ticaretCRMoptions_message=get_option('ticaretCRMoptions_message');

                        ?>
                <div id="loader"> </div>
											<div>
												<table class="form-table editcomment" style="margin-left:5%; padding:20px; padding-right:0px; width:90%; box-shadow:2px 2px 5px 0px #424242; padding:2px; ">
													<tbody>
														<tr class="tms_tr_settings_Facebook" style="background-color:#EEE">
															<td id="email">Email:  <a onclick="toggleproviderhelp('Facebook')" href="#help">(?)</a></td>

															<td><input type="text" id="email-api" name="email-api" dir="ltr" value="<?php echo $ticaretCRMoptions['email']; ?>" required></td>
															<td><p class="description" style="font-size:90%">Select your email for Registeration.</p></td>
															<td></td>
														</tr>
														<tr class="tms_tr_settings_Facebook" style="background-color:#EEE">
															<td>Apikey of WooQuote:  <a onclick="toggleproviderhelp('Facebook')" href="#help">(?)</a></td>

															<td><input type="text" id="website-api" name="website-api" dir="ltr" value="<?php echo $ticaretCRMoptions['apikey'];  ?>" required></td>
															<td><p class="description" style="font-size:90%">Enter your shop url.</p></td>
															<td style="background-color:#EEE;">If you don't have apikey please visit <a href="http://wooquote.appsila.com">WooQuote web site</a> to get one!</td>
														</tr>
														<tr class="tms_tr_settings_Facebook" style="background-color:#E1E1E1">
															<td>Woocommerce API Consumer Key:  <a onclick="toggleproviderhelp('Facebook')" href="#help">(?)</a></td>

															<td><input type="text" id="wc-api-key" name="wc-api-key" dir="ltr" value="<?php echo $ticaretCRMoptions['wc_api_key'];  ?>" required></td>
															<td><p class="description" style="font-size:90%">Create a new Woocommerce API Consumer Key.</p></td>
															<td style="background-color:#E1E1E1;">Check Help and Installation Tab</td>
														</tr>
														<tr class="tms_tr_settings_Facebook" style="background-color:#E1E1E1">
															<td>Woocommerce API Consumer Secret:  <a onclick="toggleproviderhelp('Facebook')" href="#help">(?)</a></td>

															<td><input type="text" id="wc-api-key" name="wc-api-secret" dir="ltr" value="<?php echo $ticaretCRMoptions['wc_api_secret']; ?> " required></td>
															<td><p class="description" style="font-size:90%">Create a new Woocommerce API Consumer Secret.</p></td>
															<td style="background-color:#E1E1E1;">Check Help and Installation Tab</td>
														</tr>

                                <tbody>
    															<tr class="tms_tr_settings_Facebook" style="background-color:#EEE">
    																<td>Hostname  </td>

    																<td><input type="text" id="user-api" name="hostname" dir="ltr" value="<?php echo $ticaretCRMoptions['hostname'];  ?>"  required></td>
    																<td><p class="description" style="font-size:90%">Enter Your Website Hostname</p></td>
                                  <td></td>
    															</tr>
                                  <tbody id='checkbox'>
                                    <tr class="tms_tr_settings_Facebook" style="background-color:#EEE">
      																<td>
      																	<p>WooQuote Enabled</p>
      																</td>
      																<td>

                                            <input type="checkbox" name="enable" value"enabled" class="enable" id="enable" style="width: 0.1%;" <?php if ($ticaretCRMoptions['enable'] == "on") echo "checked"; ?>>
      																</td>
                                      <td>
                                      </td>
                                      <td>
                                      </td>
      															</tr>
                              </tbody>
    															<tr class="tms_tr_settings_Facebook">
                                    <td><input type="submit" value="SAVE CHANGES" name="product_transfer_type_button" id="product_transfer_type_button" class="button-primary" style="width: 150px; background-color:#0097A7; border: 1px solid #0097A7; color:#FFFFFF; box-shadow: 1px 1px 1px 0px #424242"></td>
                                  </tr>
    														</tbody>
													</tbody>
												</table>
											</div>
                      <?php
                              echo '<input type="hidden" name="e_mail" value="'. $e_mail. '">';
                              echo '<input type="hidden" name="web_url" value="'. $web_url. '">';
                              echo '<input type="hidden" name="consumer_key" value="'. $consumer_key. '">';
                              echo '<input type="hidden" name="consumer_secret" value="'. $consumer_secret. '">';
                              echo '<input type="hidden" name="ticaretcrm_key" value="'. $ticaretcrm_key. '">';
                              echo '<input type="hidden" name="hostname_database" value="'. $hostname_database. '">';
                      ?>
											<div>
											</div>
                    </form>
										</div>
										<div> <br></div>
										<div id="tab2" class="tab-content">
											<div style="float:left; width:100%; margin-left:5%; ">
												<h2 style="color:#424242"> Message Settings </h2>
												<form action="" method="post">
      											<div>
      												<table class="form-table editcomment" style="margin-left:5%; padding:20px; padding-right:0px; width:90%; box-shadow:2px 2px 5px 0px #424242; padding:2px; ">
      													<tbody>
      														<tr class="tms_tr_settings_Facebook" style="background-color:#EEE">
      															<td>Request a Quote</td>
                                    <td><input type="text" id="requestbutton" name="requestbutton" dir="ltr" value="<?php echo $ticaretCRMoptions_message['requestbutton'];  ?>" ></td>
      															<td><p class="description" style="font-size:90%">Please translate the text of "Request a Quote" Button.</p></td>
      															<td></td>
      														</tr>
      														<tr class="tms_tr_settings_Facebook" style="background-color:#EEE">
      															<td>Thank you for your request.<br>We will return to you as soon as possible</td>
      															<td><input type="text" id="success_message_1" name="success_message_1" dir="ltr" value="<?php echo $ticaretCRMoptions_message['success_message_1'];  ?>" ></td>
      															<td><p class="description" style="font-size:90%">Please translate the text displayed after successful request submit. Put &lt;br&gt; for line break.</p></td>
      															<td></td>
      														</tr>
      														<tr class="tms_tr_settings_Facebook" style="background-color:#E1E1E1">
      															<td>WooQuote licence has expired!<br>Please contact with your site provider.</td>
      															<td><input type="text" id="licence_error" name="licence_error" dir="ltr" value="<?php echo $ticaretCRMoptions_message['licence_error'];  ?>" ></td>
      															<td><p class="description" style="font-size:90%">Please translate the licence error message.Put &lt;br&gt; for line break.</p></td>
      															<td></td>
      														</tr>
      														<tr class="tms_tr_settings_Facebook" style="background-color:#E1E1E1">
      															<td>Wrong Apikey or E-mail!<br>Please check your Apikey and E-mail.</td>
      															<td><input type="text" id="api_email_error" name="api_email_error" dir="ltr" value="<?php echo $ticaretCRMoptions_message['api_email_error']; ?>" ></td>
      															<td><p class="description" style="font-size:90%">Please translate the apikey or email error message.Put &lt;br&gt; for line break.</p></td>
      															<td></td>
      														</tr>
                                  <tr class="tms_tr_settings_Facebook" style="background-color:#E1E1E1">
      															<td>Name</td>
      															<td><input type="text" id="name" name="name" dir="ltr" value="<?php echo $ticaretCRMoptions_message['name']; ?>" ></td>
      															<td><p class="description" style="font-size:90%">Please translate the name.</p></td>
      															<td></td>
      														</tr>
                                  <tr class="tms_tr_settings_Facebook" style="background-color:#E1E1E1">
      															<td>Surname</td>
      															<td><input type="text" id="surname" name="surname" dir="ltr" value="<?php echo $ticaretCRMoptions_message['surname']; ?>" ></td>
      															<td><p class="description" style="font-size:90%">Please translate the surname.</p></td>
      															<td></td>
      														</tr>
                                  <tr class="tms_tr_settings_Facebook" style="background-color:#E1E1E1">
      															<td>Company Name</td>
      															<td><input type="text" id="company_name" name="company_name" dir="ltr" value="<?php echo $ticaretCRMoptions_message['company_name']; ?>" ></td>
      															<td><p class="description" style="font-size:90%">Please translate the company name</p></td>
      															<td></td>
      														</tr>
                                  <tr class="tms_tr_settings_Facebook" style="background-color:#E1E1E1">
      															<td>Address</td>
      															<td><input type="text" id="address" name="address" dir="ltr" value="<?php echo $ticaretCRMoptions_message['address']; ?>" ></td>
      															<td><p class="description" style="font-size:90%">Please translate the address</p></td>
      															<td></td>
      														</tr>
                                  <tr class="tms_tr_settings_Facebook" style="background-color:#E1E1E1">
      															<td>Phone</td>
      															<td><input type="text" id="phone" name="phone" dir="ltr" value="<?php echo $ticaretCRMoptions_message['phone']; ?>" ></td>
      															<td><p class="description" style="font-size:90%">Please translate the phone</p></td>
      															<td></td>
      														</tr>
                                  <tr class="tms_tr_settings_Facebook" style="background-color:#E1E1E1">
      															<td>e-mail Address</td>
      															<td><input type="text" id="email_address" name="email_address" dir="ltr" value="<?php echo $ticaretCRMoptions_message['email_address']; ?>" ></td>
      															<td><p class="description" style="font-size:90%">Please translate the email address</p></td>
      															<td></td>
      														</tr>
                                  <tr class="tms_tr_settings_Facebook" style="background-color:#E1E1E1">
      															<td>Product</td>
      															<td><input type="text" id="product" name="product" dir="ltr" value="<?php echo $ticaretCRMoptions_message['product']; ?>" ></td>
      															<td><p class="description" style="font-size:90%">Please translate the product</p></td>
      															<td></td>
      														</tr>
                                  <tr class="tms_tr_settings_Facebook" style="background-color:#E1E1E1">
      															<td>Quantities</td>
      															<td><input type="text" id="quantities" name="quantities" dir="ltr" value="<?php echo $ticaretCRMoptions_message['quantities']; ?>" ></td>
      															<td><p class="description" style="font-size:90%">Please translate the quantities</p></td>
      															<td></td>
      														</tr>
                                  <tr class="tms_tr_settings_Facebook" style="background-color:#E1E1E1">
      															<td>Brief Overview</td>
      															<td><input type="text" id="brief_overview" name="brief_overview" dir="ltr" value="<?php echo $ticaretCRMoptions_message['brief_overview']; ?>" ></td>
      															<td><p class="description" style="font-size:90%">Please translate the brief overview</p></td>
      															<td></td>
      														</tr>
                                  <tr class="tms_tr_settings_Facebook" style="background-color:#E1E1E1">
      															<td>Submit</td>
      															<td><input type="text" id="submit" name="submit" dir="ltr" value="<?php echo $ticaretCRMoptions_message['submit']; ?>" ></td>
      															<td><p class="description" style="font-size:90%">Please translate the submit</p></td>
      															<td></td>
      														</tr>
                                      <tbody>
                                        <td><input type="submit" value="SAVE CHANGES" name="product_transfer_type_button_message" id="product_transfer_type_button_message" class="button-primary" style="width: 150px; background-color:#0097A7; border: 1px solid #0097A7; color:#FFFFFF; box-shadow: 1px 1px 1px 0px #424242"></td>
          															<tr class="tms_tr_settings_Facebook">
                                      </tr>
          														</tbody>

      													</tbody>
      												</table>
      											</div>
												</form>
											</div>
											<div style="clear:both;"></div>
										</div>
										<br />
										<div id="tab3" class="tab-content">
											<div id="tab3" class="inside" style="float: left;width: 98%;" >
												<h2 style="padding-left:25px; color:#424242">Follow below Steps to start using WooQuote with your WooCommerce:</h2>
													<h4 style="padding-left:45px; color:#424242"><b>Step 1:</b> Fill form in Plugin Settings Tab with email (you used during purchase), APIKey and website url of your woocommerce site.</b></h4>
													<h4 style="padding-left:45px; color:#424242"><b>Step 2:</b> WooQuote plugin requires WooCommerce Consumer/Secret Keys to create coupon automatically.</h4>
														<p style="padding-left:92px; color:#424242">Simple steps for getting WooCommerce Consumer Key and Secret Key.</p>
														<p style="padding-left:92px; color:#424242">Step 2.1 You enable REST API access in WooCommerce Plugin.</p>
														<p style="padding-left:92px; color:#424242">Step 2.2 You create new KEY in WooCommerce and give access of read/write in it.</p>
														<p style="padding-left:92px; color:#424242">Step 2.3 Then you copy/paste Consumer and Secret keys in the form in Plugins Settings Tab.</p>
													<h4 style="padding-left:125px; color:#424242"><b>Detailed steps to get WooCommerce "CONSUMER KEY" and "CONSUMER SECRET".</b></h4>
														<p style="padding-left:150px; color:#424242">a. Open new window on web browser of Wordpress Admin Panel to follow below steps.</p>
														<p style="padding-left:150px; color:#424242">b. Go to WooCommerce Plugin in new window and find WooCommerce > Settings > API</p>
														<p style="padding-left:150px; color:#424242">c. In "API" Page, find Settings, Keys/Apps, and Webhooks Tabs.</p>
														<p style="padding-left:150px; color:#424242">d. Go to "Settings" tab, Click on "Enable REST API" and then click on "Save Changes".</p>
														<p style="padding-left:150px; color:#424242">e. Go to WooCommerce > Settings > API > Key/Apps > Add Key. Click Button Add Key.</p>
														<p style="padding-left:150px; color:#424242">f. Add Key Name and Set Read/Write permission in permission field.</p>
														<p style="padding-left:150px; color:#424242">g. Press "Generate API Key" button</p>
														<p style="padding-left:150px; color:#424242">h. Nice now you have Consumer Key and Consumer Secert with you.</p>
														<p style="padding-left:150px; color:#424242">i. Just Copy paste them in the form in Plugins Settings Tab.</p>
														<p style="padding-left:150px; color:#424242">j. Incase of problem email to support@appsila.com</p>
													<h4 style="padding-left:45px; color:#424242"><b>Step 3:</b> Just press Save Changes and wait for success message. If you have a failure message please check your email and API-Key</h4>
													<h4 style="padding-left:45px; color:#424242"><b>Step 4:</b> If you wish you can translate all labels in Labels Translation Tab.</b></h4>
													<h4 style="padding-left:45px; color:#424242"><b>Step 5:</b> Well done. You can start using WooQuote with your WooCommerce site.</h4>
											</div>
											<br>
										</div>
										<div style="width:100%;float:left;"><p style="padding-left: 20px;">Incase of any issues in understanding the above steps, Please email us at <a href="mailto:support@appsila.com">support@appsila.com</a><br/></p></div>
									</div>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
	</div>
</div>
