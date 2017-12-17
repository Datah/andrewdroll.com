<?php

// ***** Contact tab *****
$tab_6 = $panel->createTab( array('name' => 'Contact') );

// display this section
$tab_6->createOption( array('name' => 'Display this section', 'id' => 'tab_6_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this section in the coming soon page', 'default' => true) );
// section order
$tab_6->createOption( array('name' => 'Section order', 'id' => 'tab_6_order', 'type' => 'select',
							'desc' => 'Choose the order of this section in the coming soon page',
							'options' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'), 
							'default' => '5') );
// top menu name
$tab_6->createOption( array('name' => 'Top menu name', 'id' => 'tab_6_menu_name', 'type' => 'text',
							'desc' => 'Enter the name to display on the top menu for this section', 'default' => 'Contact') );
// background
$tab_6->createOption( array('name' => 'Background', 'id' => 'tab_6_bg', 'type' => 'select',
							'desc' => 'Choose the type of background for this section',
							'options' => array('white' => 'White', 'image' => 'Fullscreen image'), 'default' => 'white') );
// fullscreen image
$tab_6->createOption( array('name' => 'Background image', 'id' => 'tab_6_bg_image', 'type' => 'upload',
							'desc' => 'Upload your image to use as fullscreen background') );
// title
$tab_6->createOption( array('name' => 'Title', 'id' => 'tab_6_title', 'type' => 'text', 'desc' => 'Enter the title',
							'default' => 'Contact us') );
// description
$tab_6->createOption( array('name' => 'Description', 'id' => 'tab_6_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
							'media_buttons' => false, 'rows' => 6) );
// *******************************************************************

// heading separator --> ** Contact form **
$tab_6->createOption( array('name' => 'Contact form', 'type' => 'heading') );
// title
$tab_6->createOption( array('name' => 'Title', 'id' => 'tab_6_contact_form_title', 'type' => 'text', 'desc' => 'Enter the title',
							'default' => 'Send us a message') );
// email
$tab_6->createOption( array('name' => 'Email', 'id' => 'tab_6_contact_form_email', 'type' => 'text',
							'desc' => 'Enter the email where you want to receive the message',
							'default' => 'contact.azmind@gmail.com') );
// success message
$tab_6->createOption( array('name' => 'Success message', 'id' => 'tab_6_contact_form_success', 'type' => 'editor',
							'desc' => 'Enter the text for the success message',
							'default' => 'Thanks for contacting us! We will get back to you very soon.',
							'media_buttons' => false, 'rows' => 4) );
// *******************************************************************

// heading separator --> ** Map **
$tab_6->createOption( array('name' => 'Map', 'type' => 'heading') );
// display this section
$tab_6->createOption( array('name' => 'Display this section', 'id' => 'tab_6_map_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this section', 'default' => true) );
// title
$tab_6->createOption( array('name' => 'Title', 'id' => 'tab_6_map_title', 'type' => 'text', 'desc' => 'Enter the title',
							'default' => 'Come visit us') );
// latitude
$tab_6->createOption( array('name' => 'Latitude', 'id' => 'tab_6_map_latitude', 'type' => 'text', 'desc' => 'Enter the latitude',
							'default' => '45.067883') );
// longitude
$tab_6->createOption( array('name' => 'Longitude', 'id' => 'tab_6_map_longitude', 'type' => 'text', 'desc' => 'Enter the longitude',
							'default' => '7.687231') );
// *******************************************************************

// heading separator --> ** Address **
$tab_6->createOption( array('name' => 'Address', 'type' => 'heading') );
// title
$tab_6->createOption( array('name' => 'Title', 'id' => 'tab_6_address_title', 'type' => 'text', 'desc' => 'Enter the title',
							'default' => 'Address') );
// line 1 icon
$tab_6->createOption( array('name' => 'Line 1 icon', 'id' => 'tab_6_address_line_1_icon', 'type' => 'text', 
							'desc' => 'Enter the name of the icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-map-marker') );
// line 1 text
$tab_6->createOption( array('name' => 'Line 1 text', 'id' => 'tab_6_address_line_1_text', 'type' => 'editor', 'desc' => 'Enter the text',
							'default' => 'Via Principe Amedeo 9, 10100, Torino, TO, Italy', 'media_buttons' => false, 'rows' => 4) );
// line 2 icon
$tab_6->createOption( array('name' => 'Line 2 icon', 'id' => 'tab_6_address_line_2_icon', 'type' => 'text', 
							'desc' => 'Enter the name of the icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-phone') );
// line 2 text
$tab_6->createOption( array('name' => 'Line 2 text', 'id' => 'tab_6_address_line_2_text', 'type' => 'editor', 'desc' => 'Enter the text',
							'default' => 'Phone: 0039 333 12 68 347', 'media_buttons' => false, 'rows' => 4) );
// line 3 icon
$tab_6->createOption( array('name' => 'Line 3 icon', 'id' => 'tab_6_address_line_3_icon', 'type' => 'text', 
							'desc' => 'Enter the name of the icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => '') );
// line 3 text
$tab_6->createOption( array('name' => 'Line 3 text', 'id' => 'tab_6_address_line_3_text', 'type' => 'editor', 'desc' => 'Enter the text',
							'default' => '', 'media_buttons' => false, 'rows' => 4) );
// line 4 icon
$tab_6->createOption( array('name' => 'Line 4 icon', 'id' => 'tab_6_address_line_4_icon', 'type' => 'text', 
							'desc' => 'Enter the name of the icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => '') );
// line 4 text
$tab_6->createOption( array('name' => 'Line 4 text', 'id' => 'tab_6_address_line_4_text', 'type' => 'editor', 'desc' => 'Enter the text',
							'default' => '', 'media_buttons' => false, 'rows' => 4) );
// line 5 icon
$tab_6->createOption( array('name' => 'Line 5 icon', 'id' => 'tab_6_address_line_5_icon', 'type' => 'text', 
							'desc' => 'Enter the name of the icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => '') );
// line 5 text
$tab_6->createOption( array('name' => 'Line 5 text', 'id' => 'tab_6_address_line_5_text', 'type' => 'editor', 'desc' => 'Enter the text',
							'default' => '', 'media_buttons' => false, 'rows' => 4) );
// *******************************************************************

// save button
$tab_6->createOption( array('type' => 'save') );

?>