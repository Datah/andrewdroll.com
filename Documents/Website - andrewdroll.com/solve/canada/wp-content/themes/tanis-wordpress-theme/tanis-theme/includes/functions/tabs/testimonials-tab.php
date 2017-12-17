<?php

// ***** Testimonials tab *****
$tab_4 = $panel->createTab( array('name' => 'Testimonials') );

// display this section
$tab_4->createOption( array('name' => 'Display this section', 'id' => 'tab_4_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this section in the coming soon page', 'default' => true) );
// section order
$tab_4->createOption( array('name' => 'Section order', 'id' => 'tab_4_order', 'type' => 'select',
							'desc' => 'Choose the order of this section in the coming soon page',
							'options' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'), 
							'default' => '3') );
// top menu name
$tab_4->createOption( array('name' => 'Top menu name', 'id' => 'tab_4_menu_name', 'type' => 'text',
							'desc' => 'Enter the name to display on the top menu for this section', 'default' => 'Testimonials') );
// background
$tab_4->createOption( array('name' => 'Background', 'id' => 'tab_4_bg', 'type' => 'select',
							'desc' => 'Choose the type of background for this section',
							'options' => array('white' => 'White', 'image' => 'Fullscreen image'), 'default' => 'white') );
// fullscreen image
$tab_4->createOption( array('name' => 'Background image', 'id' => 'tab_4_bg_image', 'type' => 'upload',
							'desc' => 'Upload your image to use as fullscreen background') );
// title
$tab_4->createOption( array('name' => 'Title', 'id' => 'tab_4_title', 'type' => 'text', 'desc' => 'Enter the title',
							'default' => 'What our clients say') );
// *******************************************************************

// ***** Single testimonials options *****

// heading separator
$tab_4->createOption( array('name' => 'Testimonial 1', 'type' => 'heading') );
// display this testimonial
$tab_4->createOption( array('name' => 'Display this testimonial', 'id' => 'tab_4_box_1_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this testimonial', 'default' => true) );
// text
$tab_4->createOption( array('name' => 'Testimonial text', 'id' => 'tab_4_box_1_text', 'type' => 'editor',
							'desc' => 'Enter the description',
							'default' => 'Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.<br><a href="#" target="_blank">John Doe, johndoe.com</a>',
							'media_buttons' => false, 'rows' => 4) );
// image
$tab_4->createOption( array('name' => 'Testimonial image', 'id' => 'tab_4_box_1_image', 'type' => 'upload',
							'desc' => 'Upload the testimonial image') );
// *******************************************************************
// heading separator
$tab_4->createOption( array('name' => 'Testimonial 2', 'type' => 'heading') );
// display this testimonial
$tab_4->createOption( array('name' => 'Display this testimonial', 'id' => 'tab_4_box_2_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this testimonial', 'default' => true) );
// text
$tab_4->createOption( array('name' => 'Testimonial text', 'id' => 'tab_4_box_2_text', 'type' => 'editor',
							'desc' => 'Enter the description',
							'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet.<br><a href="#" target="_blank">Jane Jonsson, blog.jane.com</a>',
							'media_buttons' => false, 'rows' => 4) );
// image
$tab_4->createOption( array('name' => 'Testimonial image', 'id' => 'tab_4_box_2_image', 'type' => 'upload',
							'desc' => 'Upload the testimonial image') );
// *******************************************************************
// heading separator
$tab_4->createOption( array('name' => 'Testimonial 3', 'type' => 'heading') );
// display this testimonial
$tab_4->createOption( array('name' => 'Display this testimonial', 'id' => 'tab_4_box_3_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this testimonial', 'default' => true) );
// text
$tab_4->createOption( array('name' => 'Testimonial text', 'id' => 'tab_4_box_3_text', 'type' => 'editor',
							'desc' => 'Enter the description',
							'default' => 'Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.<br><a href="#" target="_blank">John Doe, johndoe.com</a>',
							'media_buttons' => false, 'rows' => 4) );
// image
$tab_4->createOption( array('name' => 'Testimonial image', 'id' => 'tab_4_box_3_image', 'type' => 'upload',
							'desc' => 'Upload the testimonial image') );
// *******************************************************************
// heading separator
$tab_4->createOption( array('name' => 'Testimonial 4', 'type' => 'heading') );
// display this testimonial
$tab_4->createOption( array('name' => 'Display this testimonial', 'id' => 'tab_4_box_4_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this testimonial', 'default' => true) );
// text
$tab_4->createOption( array('name' => 'Testimonial text', 'id' => 'tab_4_box_4_text', 'type' => 'editor',
							'desc' => 'Enter the description',
							'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet.<br><a href="#" target="_blank">Jane Jonsson, blog.jane.com</a>',
							'media_buttons' => false, 'rows' => 4) );
// image
$tab_4->createOption( array('name' => 'Testimonial image', 'id' => 'tab_4_box_4_image', 'type' => 'upload',
							'desc' => 'Upload the testimonial image') );
// *******************************************************************
// heading separator
$tab_4->createOption( array('name' => 'Testimonial 5', 'type' => 'heading') );
// display this testimonial
$tab_4->createOption( array('name' => 'Display this testimonial', 'id' => 'tab_4_box_5_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this testimonial', 'default' => false) );
// text
$tab_4->createOption( array('name' => 'Testimonial text', 'id' => 'tab_4_box_5_text', 'type' => 'editor',
							'desc' => 'Enter the description', 'default' => '', 'media_buttons' => false, 'rows' => 4) );
// image
$tab_4->createOption( array('name' => 'Testimonial image', 'id' => 'tab_4_box_5_image', 'type' => 'upload',
							'desc' => 'Upload the testimonial image') );
// *******************************************************************
// heading separator
$tab_4->createOption( array('name' => 'Testimonial 6', 'type' => 'heading') );
// display this testimonial
$tab_4->createOption( array('name' => 'Display this testimonial', 'id' => 'tab_4_box_6_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this testimonial', 'default' => false) );
// text
$tab_4->createOption( array('name' => 'Testimonial text', 'id' => 'tab_4_box_6_text', 'type' => 'editor',
							'desc' => 'Enter the description', 'default' => '', 'media_buttons' => false, 'rows' => 4) );
// image
$tab_4->createOption( array('name' => 'Testimonial image', 'id' => 'tab_4_box_6_image', 'type' => 'upload',
							'desc' => 'Upload the testimonial image') );
// *******************************************************************

// save button
$tab_4->createOption( array('type' => 'save') );

?>