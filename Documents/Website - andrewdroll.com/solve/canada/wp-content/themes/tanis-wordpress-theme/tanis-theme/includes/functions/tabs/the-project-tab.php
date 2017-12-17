<?php

// ***** The project tab *****
$tab_3 = $panel->createTab( array('name' => 'The project') );

// display this section
$tab_3->createOption( array('name' => 'Display this section', 'id' => 'tab_3_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this section in the coming soon page', 'default' => true) );
// section order
$tab_3->createOption( array('name' => 'Section order', 'id' => 'tab_3_order', 'type' => 'select',
							'desc' => 'Choose the order of this section in the coming soon page',
							'options' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'), 
							'default' => '1') );
// top menu name
$tab_3->createOption( array('name' => 'Top menu name', 'id' => 'tab_3_menu_name', 'type' => 'text',
							'desc' => 'Enter the name to display on the top menu for this section', 'default' => 'The project') );
// background
$tab_3->createOption( array('name' => 'Background', 'id' => 'tab_3_bg', 'type' => 'select',
							'desc' => 'Choose the type of background for this section',
							'options' => array('white' => 'White', 'image' => 'Fullscreen image'), 'default' => 'white') );
// fullscreen image
$tab_3->createOption( array('name' => 'Background image', 'id' => 'tab_3_bg_image', 'type' => 'upload',
							'desc' => 'Upload your image to use as fullscreen background') );
// title
$tab_3->createOption( array('name' => 'Title', 'id' => 'tab_3_title', 'type' => 'text', 'desc' => 'Enter the title',
							'default' => 'About this project') );
// description
$tab_3->createOption( array('name' => 'Description', 'id' => 'tab_3_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
							'media_buttons' => false, 'rows' => 6) );
// *******************************************************************

// ***** Boxes options *****

// heading separator
$tab_3->createOption( array('name' => 'Box 1', 'type' => 'heading') );
// display this box
$tab_3->createOption( array('name' => 'Display this box', 'id' => 'tab_3_box_1_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this box', 'default' => true) );
// icon
$tab_3->createOption( array('name' => 'Icon', 'id' => 'tab_3_box_1_icon', 'type' => 'text', 
							'desc' => 'Enter the name of the icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-magic') );
// title
$tab_3->createOption( array('name' => 'Box title', 'id' => 'tab_3_box_1_title', 'type' => 'text', 'desc' => 'Enter the title',
							'default' => 'New Features') );
// description
$tab_3->createOption( array('name' => 'Box description', 'id' => 'tab_3_box_1_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.',
							'media_buttons' => false, 'rows' => 4) );
// *******************************************************************
// heading separator
$tab_3->createOption( array('name' => 'Box 2', 'type' => 'heading') );
// display this box
$tab_3->createOption( array('name' => 'Display this box', 'id' => 'tab_3_box_2_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this box', 'default' => true) );
// icon
$tab_3->createOption( array('name' => 'Icon', 'id' => 'tab_3_box_2_icon', 'type' => 'text', 
							'desc' => 'Enter the name of the icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-gear') );
// title
$tab_3->createOption( array('name' => 'Box title', 'id' => 'tab_3_box_2_title', 'type' => 'text', 'desc' => 'Enter the title',
							'default' => 'Responsive Layout') );
// description
$tab_3->createOption( array('name' => 'Box description', 'id' => 'tab_3_box_2_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.',
							'media_buttons' => false, 'rows' => 4) );
// *******************************************************************
// heading separator
$tab_3->createOption( array('name' => 'Box 3', 'type' => 'heading') );
// display this box
$tab_3->createOption( array('name' => 'Display this box', 'id' => 'tab_3_box_3_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this box', 'default' => true) );
// icon
$tab_3->createOption( array('name' => 'Icon', 'id' => 'tab_3_box_3_icon', 'type' => 'text', 
							'desc' => 'Enter the name of the icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-pencil') );
// title
$tab_3->createOption( array('name' => 'Box title', 'id' => 'tab_3_box_3_title', 'type' => 'text', 'desc' => 'Enter the title',
							'default' => 'Flat Design') );
// description
$tab_3->createOption( array('name' => 'Box description', 'id' => 'tab_3_box_3_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.',
							'media_buttons' => false, 'rows' => 4) );
// *******************************************************************
// heading separator
$tab_3->createOption( array('name' => 'Box 4', 'type' => 'heading') );
// display this box
$tab_3->createOption( array('name' => 'Display this box', 'id' => 'tab_3_box_4_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this box', 'default' => false) );
// icon
$tab_3->createOption( array('name' => 'Icon', 'id' => 'tab_3_box_4_icon', 'type' => 'text', 
							'desc' => 'Enter the name of the icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => '') );
// title
$tab_3->createOption( array('name' => 'Box title', 'id' => 'tab_3_box_4_title', 'type' => 'text', 'desc' => 'Enter the title',
							'default' => '') );
// description
$tab_3->createOption( array('name' => 'Box description', 'id' => 'tab_3_box_4_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => '', 'media_buttons' => false, 'rows' => 4) );
// *******************************************************************
// heading separator
$tab_3->createOption( array('name' => 'Box 5', 'type' => 'heading') );
// display this box
$tab_3->createOption( array('name' => 'Display this box', 'id' => 'tab_3_box_5_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this box', 'default' => false) );
// icon
$tab_3->createOption( array('name' => 'Icon', 'id' => 'tab_3_box_5_icon', 'type' => 'text', 
							'desc' => 'Enter the name of the icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => '') );
// title
$tab_3->createOption( array('name' => 'Box title', 'id' => 'tab_3_box_5_title', 'type' => 'text', 'desc' => 'Enter the title',
							'default' => '') );
// description
$tab_3->createOption( array('name' => 'Box description', 'id' => 'tab_3_box_5_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => '', 'media_buttons' => false, 'rows' => 4) );
// *******************************************************************
// heading separator
$tab_3->createOption( array('name' => 'Box 6', 'type' => 'heading') );
// display this box
$tab_3->createOption( array('name' => 'Display this box', 'id' => 'tab_3_box_6_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this box', 'default' => false) );
// icon
$tab_3->createOption( array('name' => 'Icon', 'id' => 'tab_3_box_6_icon', 'type' => 'text', 
							'desc' => 'Enter the name of the icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => '') );
// title
$tab_3->createOption( array('name' => 'Box title', 'id' => 'tab_3_box_6_title', 'type' => 'text', 'desc' => 'Enter the title',
							'default' => '') );
// description
$tab_3->createOption( array('name' => 'Box description', 'id' => 'tab_3_box_6_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => '', 'media_buttons' => false, 'rows' => 4) );
// *******************************************************************

// save button
$tab_3->createOption( array('type' => 'save') );

?>