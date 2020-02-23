=== Appsila WooQuote ===
Contributors: Securify Ltd.
Donate link: 
Tags: request a quote button, woocommerce request for quote, woocommerce request a quote shortcode, request a quote, quote, appsila, woocommerce, shop, ecommerce, e-commerce, quotations, request for quote, rfq, raq, proposal, ask an estimate, email quote, CRM, Low-code, Quote template
Requires at least: 4.0.0
Tested up to: 4.9.4
Stable tag: 
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Appsila WooQuote is a plugin that enables your customers send quote requests from your woocommerce shop which will then be tracked in a full functional Appsila CRM backend provided with the plugin.  

== Description ==

Appsila WooQuote plugin enables your customers send quote requests from your Wooc-Commerce shop which will then be tracked in a full functional Appsila CRM backend provided with the plugin. When the plugin is activated, it simply adds a “Request a Quote” button in single product and cart pages. In WooQuote, the usual behavior of customers are not changed. If customer wants to request a quote for more than one product, he can add the products into the cart as usual and simply click Request a Quote button. After clicking the button, if user logged into your shop, membership account information is automatically gathered and populated to the request form. Otherwise; the customer can fill in the form and writes the details of his request. If customer wants to send a quote request for only one product, he can use the Request a Quote button in single product page in just as the same way in the cart page. 

One of the main difference of the Appsila WooQuote plugin when compared to the other similar plugins is that it provides not only a simple quote management, but also a full functional low-code CRM backend to your WooCommerce. With this backend application, you can track all the phases of your sales pipeline (i.e. lead in, contact made, proposal made, converted or lost), insert notes and activities, attach documents, manage your product information, your customers, tasks, calendar and reports. 

When your potential customer makes a request on your shop, a new lead generated into your CRM, the requested products are transferred into CRM products module with its main data and finally a quote is automatically generated. You notice the new quote request via an email sent to you from Appsila. By clicking the link in the email, you can instantly log into the system and view the details of the quote. You can see the message of your customer and make discounts if you wish. When applied a discount, the system automatically connects to your WooCommerce site and creates a discount coupon. You can send email to your customer with a predefined email template attached with a quote document generated automatically in your company’s document format and logo. So all these issues occur just in a minute. You customer can easily apply the coupon you sent in the cart page and continue to checkout. 

The responsive design of Appsila CRM, enables you to check quote requests via your mobile phone or tablet and send quote documents to your customers while you are in mobile. 

The plugin also enables you to translate all the text labels displayed to your customers including the request a quote button text so that you can use it in any language you want. 

The Appsila backend system is a magic software platform called hpaPaaS (high productivity application platform as a service) by Gartner. It enables you create your data model and customize all the system and reports without writing code. These systems are also called as low-code rapid application development platforms. The main features of the platform are given below:

Drag-N-Drop Modelling: This feature allows application modules to be designed by drag and drop method, 1:1, 1:N and N:M relationships between modules to be established, and interdependencies among module fields to be adjusted.

Microflows for Applications & Process Logic: This feature allows modelling business processes and enables to run the workflows according to specified business rules.

User Specific Views and Filters: This feature allows making searches among data available in the application according to numerous filtering criteria and compiling user specific list views.

Dynamic Dashboard and Reports: The dashboard on which basic statistical information and graphs related with the application are available. It provides an overview of data available as soon as the user logs in to the system.

Responsive UI for Web & Mobile: This feature allows the application developed to be viewed as desired on devices with different screen sizes such as mobile phones, tablet computers and the web.

Template Processing Engine: This feature allows creating professional outputs in Word and PDF formats by using the data fields in the system dynamically. 

Fine-Grained Application Security: This feature allows the entire infrastructure of the system to function securely, defining access control according to roles and profiles, and making domain based authorizations.

API Manager: The extension, which allows retrieving all modules of the system via RESTful APIs and performing CRUD operations.

Official documentation of Appsila WooQuote Plugin

For a more detailed description of options and features of Appsila WooQuote plugin, please visit http://wooquote.appsila.com/documentation 


== Installation ==

It is important to note that Appsila WooQuote is request a quote plugin for WooCommerce. So in order to be able to use the plugin, you should first install WooCommerce plugin. 
If you have already installed WooCommerce, you can follow the below steps to activate the plugin:
	• Download plugin zip file. 
	• Unzip the downloaded zip file.
	• Upload the plugin folder into the wp-content/plugins/ directory of your WordPress site.
	• Activate Appsila WooQuote from Plugins page

Configuration
	1.Once you installed the plugin, you will see WooQuote Menu Item in your Wordpress admin menu. When you click it, you will see WooQuote Plugin Page. 
		In WooQuote Plugin Page there are 3 tab pages:
			• Plugin Settings Page: In this page, you can make the settings of your plugin in order to be able to use it with your Appsila Backend. 
			• Label Translation: In this page, you can easily translate all the label fields displayed to your customers into your language
			• Help and Installation: In this page you can have information about the configuration of your plugin. 

	2.In Plugin Settings Tab, You need to fill in the following credentials:
		Email: You should enter the email address you used during the purchase. 
		Apikey of WooQuote: You should enter the APIKEY  included in the e-mail sent to you after your purchase.
		Hostname: The site url of your wordpress including your shop. Please take into account that you can use only one hostname address with the given APIKEY. Unless the url is correct, the transactions will not be performed with your WooCommerce and Appsila Backend. 
		WooQuote Enabled: This checkbox is used to enable and disable WooQuote easily. 
		WooCommerce API Consumer Key and Secret: These fields are required in order to generate automatic discount coupons when you apply discount to the quote in your Appsila Backend. In order to be able to enter these keys, you should first generate them in your WooCommerce Settings. Please follow the following steps:
			• Go to WooCommerce->Settings->API tab and enable the REST API.
			• Click “Key/Apps” option. 
			• After clicking “Add Key”, you can enter a description, select the user and permissions. You should select “Read/Write” option in Permissions. Otherwise your Appsila Backend cannot generate coupons in your WooCommerce. After filling the form, click Generate API Key. 
			• Now you can use the generated Consumer Key and Secret in your plugin settings page:
	3.Once you completed filling the form in Plugin Settings Page, click Save Changes button below and wait for success message. 
	4.If you have a failure message please check your email and API-Key again. 
	5.If you wish you can translate all labels displayed in your system in Labels Translation Tab.
	6.Well done. The settings of your plugin completed.  You can start using WooQuote with your WooCommerce site.

Please check http://wooquote.appsila.com/documentation to reach the official installation and configuration guide with the screenshots. 



== Frequently asked questions ==

Please check the http://wooquote.appsila.com  for frequently asked questions. 

== Screenshots ==

1-Plugin Settings Page of Appsila WooQuote
2-Label Translation
3-Request a Quote from Single Product Page
4-Request a Quote from Cart Page
5-Appsila CRM Backend Dashboard
6-Products Module of Appsila CRM
7-Automatically Generated Quote
8-Making Discounts on Quote
9-Automatically Generated PDF Quote Document

== Changelog ==

1.0.0 – Released: April 5 , 2018
* Initial release


