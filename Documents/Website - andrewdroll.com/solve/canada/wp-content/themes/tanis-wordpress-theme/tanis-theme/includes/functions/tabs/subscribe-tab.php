<?php

// ***** Subscribe tab *****
$tab_2 = $panel->createTab( array('name' => 'Subscribe') );

// display this section
$tab_2->createOption( array('name' => 'Display this section', 'id' => 'tab_2_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this section in the coming soon page', 'default' => true) );
// section order
$tab_2->createOption( array('name' => 'Section order', 'id' => 'tab_2_order', 'type' => 'select',
							'desc' => 'Choose the order of this section in the coming soon page',
							'options' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'), 
							'default' => '2') );
// top menu name
$tab_2->createOption( array('name' => 'Top menu name', 'id' => 'tab_2_menu_name', 'type' => 'text',
							'desc' => 'Enter the name to display on the top menu for this section', 'default' => 'Subscribe') );
// background
$tab_2->createOption( array('name' => 'Background', 'id' => 'tab_2_bg', 'type' => 'select',
							'desc' => 'Choose the type of background for this section',
							'options' => array('white' => 'White', 'image' => 'Fullscreen image'), 'default' => 'white') );
// fullscreen image
$tab_2->createOption( array('name' => 'Background image', 'id' => 'tab_2_bg_image', 'type' => 'upload',
							'desc' => 'Upload your image to use as fullscreen background') );
// title
$tab_2->createOption( array('name' => 'Title', 'id' => 'tab_2_title', 'type' => 'text', 'desc' => 'Enter the title',
							'default' => 'Subscribe to our newsletter') );
// description
$tab_2->createOption( array('name' => 'Description', 'id' => 'tab_2_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => 'Sign up now to our newsletter and you\'ll be one of the first to know when the site is ready:',
							'media_buttons' => false, 'rows' => 6) );

// heading separator --> ** FORM **
$tab_2->createOption( array('name' => 'Form', 'type' => 'heading') );

// placeholder
$tab_2->createOption( array('name' => 'Placeholder', 'id' => 'tab_2_placeholder', 'type' => 'text', 
							'desc' => 'Enter the placeholder for the email input field', 'default' => 'Enter your email...') );
// button text
$tab_2->createOption( array('name' => 'Button text', 'id' => 'tab_2_button', 'type' => 'text', 
							'desc' => 'Enter the text for the submit button', 'default' => 'Subscribe') );

// invalid email message
$tab_2->createOption( array('name' => 'Invalid email message', 'id' => 'tab_2_invalid_email', 'type' => 'text',
		'desc' => 'Enter the text for the \'invalid email\' message', 'default' => 'Insert a valid email address!') );
// email success message
$tab_2->createOption( array('name' => 'Email success message', 'id' => 'tab_2_success', 'type' => 'text',
		'desc' => 'Enter the text for the success message', 'default' => 'Thanks for your subscription!') );


// heading separator --> ** SUBSCRIPTION TYPE **
$tab_2->createOption( array('name' => 'Subscription type', 'type' => 'heading') );

// Subscription type
$tab_2->createOption( array('name' => 'Subscription type', 'id' => 'tab_2_subscription_type', 'type' => 'select',
		'desc' => 'Choose the subscription type. Email - you receive the subscribers in your email; MailChimp - the subscribers are added in your MailChimp list',
		'options' => array('email' => 'Email', 'mailchimp' => 'MailChimp'), 'default' => 'email') );

// heading separator --> ** EMAIL SETTINGS **
$tab_2->createOption( array('name' => 'Email settings', 'type' => 'heading') );
// email where to receive the notification
$tab_2->createOption( array('name' => 'Notification email', 'id' => 'tab_2_email', 'type' => 'text', 
							'desc' => 'Enter the email where you want to receive the notification when someone subscribes', 
							'default' => 'contact.azmind@gmail.com') );

// heading separator --> ** MAILCHIMP SETTINGS **
$tab_2->createOption( array('name' => 'MailChimp settings', 'type' => 'heading') );
// mailchimp api key
$tab_2->createOption( array('name' => 'MailChimp API key', 'id' => 'tab_2_mailchimp_api_key', 'type' => 'text',
		'desc' => 'Enter your MailChimp API Key',
		'default' => 'MAILCHIMP-API-KEY') );
// mailchimp list id
$tab_2->createOption( array('name' => 'MailChimp list id', 'id' => 'tab_2_mailchimp_list_id', 'type' => 'text',
		'desc' => 'Enter your MailChimp list id, where you want to save the subscribers',
		'default' => 'MAILCHIMP-LIST-ID') );
// mailchimp error message
$tab_2->createOption( array('name' => 'MailChimp error message', 'id' => 'tab_2_mailchimp_error_message', 'type' => 'text',
		'desc' => 'Enter the text for the MailChimp error message',
		'default' => 'An error occurred! Please try again later.') );

// save button
$tab_2->createOption( array('type' => 'save') );

?>