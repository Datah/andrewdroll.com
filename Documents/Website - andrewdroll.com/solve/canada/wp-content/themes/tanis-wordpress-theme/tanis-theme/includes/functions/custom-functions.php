<?php

/*
 * Gets the src of the image uploaded by the user (in the theme options)
 */
function tanis_get_image_src($titan_instance, $option_id) {
	$image_id = $titan_instance->getOption( $option_id );
	$imageSrc = $image_id;
	if ( is_numeric( $image_id ) ) {
		$imageAttachment = wp_get_attachment_image_src( $image_id, "full" );
		$imageSrc = $imageAttachment[0];
	}
	return $imageSrc;
}

/*
 * Gets the width and height of the image uploaded by the user (in the theme options)
*/
function tanis_get_image_size($titan_instance, $option_id) {
	$image_id = $titan_instance->getOption( $option_id );
	if ( is_numeric( $image_id ) ) {
		$imageAttachment = wp_get_attachment_image_src( $image_id, "full" );
		return array($imageAttachment[1], $imageAttachment[2]);
	}
	return array(0, 0);
}

/*
 * Coming soon section background slideshow
 */
function tanis_coming_soon_slideshow($titan_instance, $option_id) {
	$array_ids = array();
	$image_id_1 = $titan_instance->getOption( $option_id . '1' );
	$image_id_2 = $titan_instance->getOption( $option_id . '2' );
	$image_id_3 = $titan_instance->getOption( $option_id . '3' );
	$image_id_4 = $titan_instance->getOption( $option_id . '4' );
	$image_id_5 = $titan_instance->getOption( $option_id . '5' );
	
	if(!empty($image_id_1)) { $array_ids[] = $image_id_1; }
	if(!empty($image_id_2)) { $array_ids[] = $image_id_2; }
	if(!empty($image_id_3)) { $array_ids[] = $image_id_3; }
	if(!empty($image_id_4)) { $array_ids[] = $image_id_4; }
	if(!empty($image_id_5)) { $array_ids[] = $image_id_5; }
	
	$images_number = count($array_ids);
	$return_text = "";
	// only one background image
	if ( $images_number == 1 ) {
		$imageSrc = $array_ids[0];
		if ( is_numeric( $array_ids[0] ) ) {
    		$imageAttachment = wp_get_attachment_image_src( $array_ids[0], "full" );
    		$imageSrc = $imageAttachment[0];
    	}
    	$return_text = $imageSrc;
	}
	// multiple background images
	elseif ( $images_number >= 1 ) {
		$return_text = array();
		foreach ( $array_ids as $k => $value ) {
			$imageSrc = $value;
			if ( is_numeric( $value ) ) {
	    		$imageAttachment = wp_get_attachment_image_src( $value, "full" );
	    		$imageSrc = $imageAttachment[0];
	    	}
	    	$return_text[] = $imageSrc;
		}
	}
	return array('images_src' => $return_text, 'images_number' => $images_number);
}

/*
 * Returns an array with the chosen sections to display, in the chosen order
 */
function tanis_chosen_sections($titan_instance) {
	$array_sections = array('2' => 'subscribe', '3' => 'the-project', '4' => 'testimonials', 
							'5' => 'about-us', '6' => 'contact');
	$array_active_sections = array();
	foreach($array_sections as $k => $value) {
		if($titan_instance->getOption('tab_' . $k . '_display') == true) {
			$array_active_sections[] = array('order' => $titan_instance->getOption('tab_' . $k . '_order'), 'section' => $value);
		}
	}
	usort($array_active_sections, function($a, $b) {
		return $a['order'] - $b['order'];
	});
	return $array_active_sections;
}

/*
 * Returns an array with the active top menu items
 */
function tanis_top_menu_items($titan_instance) {
	$array_section_containers = array('2' => 'subscribe-container', '3' => 'about-container', '4' => 'testimonials-container', 
							'5' => 'whos-behind-container', '6' => 'contact-container');
	$array_menu_items = array();
	foreach($array_section_containers as $k => $value) {
		if($titan_instance->getOption('tab_' . $k . '_display') == true) {
			$array_menu_items[] = array('order' => $titan_instance->getOption('tab_' . $k . '_order'),
										'section-container' => $value,
										'menu-item-name' => $titan_instance->getOption('tab_' . $k . '_menu_name'));
		}
	}
	usort($array_menu_items, function($a, $b) {
		return $a['order'] - $b['order'];
	});
	return $array_menu_items;
}

/*
 * Returns an array with the active boxes
 */
function tanis_active_boxes($titan_instance, $tab) {
	$array_active_boxes = array();
	for($i = 1; $i <= 6; $i++) {
		if($titan_instance->getOption($tab . '_box_' . $i . '_display') == true) {
			$array_active_boxes[] = $i;
		}
	}
	return $array_active_boxes;
}

/*
 * Returns an array with the member's active social icons
 */
function tanis_active_member_social_icons($titan_instance, $tab, $box) {
	$array_active_icons = array();
	for($i = 1; $i <= 4; $i++) {
		if($titan_instance->getOption($tab . '_box_' . $box . '_social_icon_' . $i) != "") {
			$array_active_icons[] = $i;
		}
	}
	return $array_active_icons;
}

/*
 * Returns an array with the active address lines
 */
function tanis_active_address_lines($titan_instance, $tab) {
	$array_active_lines = array();
	for($i = 1; $i <= 5; $i++) {
		if($titan_instance->getOption($tab . '_address_line_' . $i . '_icon') != "") {
			$array_active_lines[] = $i;
		}
	}
	return $array_active_lines;
}

/*
 * Returns an array with the active footer social icons
 */
function tanis_active_footer_social_icons($titan_instance, $tab) {
	$array_active_icons = array();
	for($i = 1; $i <= 6; $i++) {
		if($titan_instance->getOption($tab . '_icon_' . $i) != "") {
			$array_active_icons[] = $i;
		}
	}
	return $array_active_icons;
}

/*
 * Enqueue scripts
 */
function tanis_load_scripts() {
	$titan = TitanFramework::getInstance('tanis');
	wp_enqueue_script('tanis-bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.5', true);
	wp_enqueue_script('tanis-backstretch-js', get_template_directory_uri() . '/assets/js/jquery.backstretch.min.js', array('jquery'), '2.0.4', true);
	wp_enqueue_script('tanis-wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '0.1.9', true);
	wp_enqueue_script('tanis-countdown-js', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array('jquery'), '2.0.2', true);
	wp_enqueue_script('tanis-maps-api-js', '//maps.google.com/maps/api/js?sensor=true', array('jquery'), null, true);
	wp_enqueue_script('tanis-ui-maps-js', get_template_directory_uri() . '/assets/js/jquery.ui.map.min.js', array('jquery'), null, true);
	wp_enqueue_script('tanis-scripts-js', get_template_directory_uri() . '/assets/js/scripts.js', array(), null, true);
	wp_localize_script('tanis-scripts-js', 'tanis_scripts_js_vars', array(
	        'timer_count_to'       => $titan->getOption('tab_1_timer'),
			'coming_soon_bg'       => tanis_coming_soon_slideshow($titan, 'tab_1_background_image_'),
			'subscribe_bg'         => array('bg_type' => $titan->getOption('tab_2_bg'), 'image_src' => tanis_get_image_src($titan, 'tab_2_bg_image')),
			'ajaxurl'              => admin_url('admin-ajax.php'),
			'nonce_subscribe'      => wp_create_nonce('tanis-nonce-subscribe'),
			'the_project_bg'       => array('bg_type' => $titan->getOption('tab_3_bg'), 'image_src' => tanis_get_image_src($titan, 'tab_3_bg_image')),
			'testimonials_bg'      => array('bg_type' => $titan->getOption('tab_4_bg'), 'image_src' => tanis_get_image_src($titan, 'tab_4_bg_image')),
			'about_us_bg'          => array('bg_type' => $titan->getOption('tab_5_bg'), 'image_src' => tanis_get_image_src($titan, 'tab_5_bg_image')),
			'contact_bg'           => array('bg_type' => $titan->getOption('tab_6_bg'), 'image_src' => tanis_get_image_src($titan, 'tab_6_bg_image')),
			'nonce_contact'        => wp_create_nonce('tanis-nonce-contact'),
			'contact_map'          => array('lat' => $titan->getOption('tab_6_map_latitude'), 'lng' => $titan->getOption('tab_6_map_longitude')),
		)
    );
}
add_action('wp_enqueue_scripts', 'tanis_load_scripts');

/*
 * Send subscription
 */
function tanis_send_subscription() {
	// check nonce
	$nonce = $_POST['nonce_subscribe']; 	
	if( ! wp_verify_nonce($nonce, 'tanis-nonce-subscribe'))
		die('Busted!');
	$titan = TitanFramework::getInstance('tanis');
	
	// check subscription type: email, mailchimp
	// EMAIL
	if( $titan->getOption('tab_2_subscription_type') == "email" ) {
		
		$emailTo = $titan->getOption('tab_2_email');
		$subscriber_email = addslashes(trim($_POST['email']));
		// generate the response
		$response = "";
		if( ! tanis_is_email($subscriber_email) ) {
			$response = array('type' => 'email', 'valid' => 0);
		}
		else {
			$response = array('type' => 'email', 'valid' => 1);
			// Send email
			$subject = 'New Subscriber (tanis wp)!';
			$body = "You have a new subscriber!\n\nEmail: " . $subscriber_email;
			mail($emailTo, $subject, $body);
		}
		// response output
		header("Content-Type: application/json");
		echo json_encode($response);
		exit;
		
	}
	// MAILCHIMP
	elseif( $titan->getOption('tab_2_subscription_type') == "mailchimp" ) {
		
		$mailchimp_api_key = $titan->getOption('tab_2_mailchimp_api_key');
		$mailchimp_list_id = $titan->getOption('tab_2_mailchimp_list_id');
		$subscriber_email = addslashes(trim($_POST['email']));
		// generate the response
		$response = "";
		if( ! tanis_is_email($subscriber_email) ) {
			$response = array('type' => 'mailchimp', 'valid' => 0);
		}
		else {
			$merge_vars = array();
			$MailChimp = new \Drewm\MailChimp($mailchimp_api_key);
			$result = $MailChimp->call('lists/subscribe', array(
					'id'                => $mailchimp_list_id,
					'email'             => array('email' => $subscriber_email),
					'merge_vars'        => $merge_vars,
					'double_optin'      => true,
					'update_existing'   => true,
					'replace_interests' => false,
					'send_welcome'      => false,
			));
			if ($result == false) {
				$response = array('type' => 'mailchimp', 'valid' => 2);
			}
			else {
				$response = array('type' => 'mailchimp', 'valid' => 1);
			}
		}
		// response output
		header("Content-Type: application/json");
		echo json_encode($response);
		exit;
		
	}
	
}
add_action('wp_ajax_tanis-ajax-subscribe-action', 'tanis_send_subscription');
add_action('wp_ajax_nopriv_tanis-ajax-subscribe-action', 'tanis_send_subscription');

/*
 * Send contact message
 */
function tanis_send_contact_message() {
	// check nonce
	$nonce = $_POST['nonce_contact']; 	
	if( ! wp_verify_nonce($nonce, 'tanis-nonce-contact'))
		die('Busted!');		
    $titan = TitanFramework::getInstance('tanis');
	$emailTo = $titan->getOption('tab_6_contact_form_email');

    $clientEmail = addslashes(trim($_POST['email']));
    $subject = addslashes(trim($_POST['subject']));
    $message = addslashes(trim($_POST['message']));

    // generate the response
    $response = array('emailMessage' => '', 'subjectMessage' => '', 'messageMessage' => '');

    if( ! tanis_is_email($clientEmail)) {
        $response['emailMessage'] = 'Invalid email!';
    }
    if($subject == '') {
        $response['subjectMessage'] = 'Empty subject!';
    }
    if($message == '') {
        $response['messageMessage'] = 'Empty message!';
    }
    if(tanis_is_email($clientEmail) && $subject != '' && $message != '') {
        // Send email
		$headers = "From: " . $clientEmail . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
		mail($emailTo, $subject . " (tanis wp)", $message, $headers);
    }
    // response output
	header("Content-Type: application/json");
	echo json_encode($response);
	exit;
}
add_action('wp_ajax_tanis-ajax-contact-action', 'tanis_send_contact_message');
add_action('wp_ajax_nopriv_tanis-ajax-contact-action', 'tanis_send_contact_message');

/*
 * Email address verification
 */
function tanis_is_email($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/*
 * HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
 */
function tanis_ie_html5_shim_respond() {
    echo '<!--[if lt IE 9]>';
    echo '<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>';
    echo '<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_footer', 'tanis_ie_html5_shim_respond', 20);

?>