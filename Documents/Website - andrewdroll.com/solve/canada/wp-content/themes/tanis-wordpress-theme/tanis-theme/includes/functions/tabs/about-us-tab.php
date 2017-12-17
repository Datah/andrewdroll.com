<?php

// ***** About us tab *****
$tab_5 = $panel->createTab( array('name' => 'About us') );

// display this section
$tab_5->createOption( array('name' => 'Display this section', 'id' => 'tab_5_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this section in the coming soon page', 'default' => true) );
// section order
$tab_5->createOption( array('name' => 'Section order', 'id' => 'tab_5_order', 'type' => 'select',
							'desc' => 'Choose the order of this section in the coming soon page',
							'options' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'), 
							'default' => '4') );
// top menu name
$tab_5->createOption( array('name' => 'Top menu name', 'id' => 'tab_5_menu_name', 'type' => 'text',
							'desc' => 'Enter the name to display on the top menu for this section', 'default' => 'About us') );
// background
$tab_5->createOption( array('name' => 'Background', 'id' => 'tab_5_bg', 'type' => 'select',
							'desc' => 'Choose the type of background for this section',
							'options' => array('white' => 'White', 'image' => 'Fullscreen image'), 'default' => 'white') );
// fullscreen image
$tab_5->createOption( array('name' => 'Background image', 'id' => 'tab_5_bg_image', 'type' => 'upload',
							'desc' => 'Upload your image to use as fullscreen background') );
// title
$tab_5->createOption( array('name' => 'Title', 'id' => 'tab_5_title', 'type' => 'text', 'desc' => 'Enter the title',
							'default' => 'Who\'s behind this') );
// description
$tab_5->createOption( array('name' => 'Description', 'id' => 'tab_5_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => 'Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam.',
							'media_buttons' => false, 'rows' => 6) );
// *******************************************************************

// ***** Members options *****

// heading separator --> ** MEMBER 1 **
$tab_5->createOption( array('name' => 'Member 1', 'type' => 'heading') );
// display this member
$tab_5->createOption( array('name' => 'Display this member', 'id' => 'tab_5_box_1_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this member', 'default' => true) );
// image
$tab_5->createOption( array('name' => 'Image', 'id' => 'tab_5_box_1_image', 'type' => 'upload', 'desc' => 'Upload the member image') );
// name
$tab_5->createOption( array('name' => 'Name', 'id' => 'tab_5_box_1_name', 'type' => 'text', 'desc' => 'Enter the member name', 'default' => 'Joana White') );
// role
$tab_5->createOption( array('name' => 'Role', 'id' => 'tab_5_box_1_role', 'type' => 'text', 'desc' => 'Enter the member role', 'default' => 'Developer') );
// description
$tab_5->createOption( array('name' => 'Description', 'id' => 'tab_5_box_1_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.',
							'media_buttons' => false, 'rows' => 4) );
// ** social icons **
// icon 1
$tab_5->createOption( array('name' => 'Social icon 1', 'id' => 'tab_5_box_1_social_icon_1', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-facebook') );
// icon 1 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_1_social_icon_1_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '#') );
// icon 2
$tab_5->createOption( array('name' => 'Social icon 2', 'id' => 'tab_5_box_1_social_icon_2', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-twitter') );
// icon 2 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_1_social_icon_2_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '#') );
// icon 3
$tab_5->createOption( array('name' => 'Social icon 3', 'id' => 'tab_5_box_1_social_icon_3', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-linkedin') );
// icon 3 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_1_social_icon_3_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '#') );
// icon 4
$tab_5->createOption( array('name' => 'Social icon 4', 'id' => 'tab_5_box_1_social_icon_4', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-envelope') );
// icon 4 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_1_social_icon_4_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => 'info@domain.com') );
// *******************************************************************

// heading separator --> ** MEMBER 2 **
$tab_5->createOption( array('name' => 'Member 2', 'type' => 'heading') );
// display this member
$tab_5->createOption( array('name' => 'Display this member', 'id' => 'tab_5_box_2_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this member', 'default' => true) );
// image
$tab_5->createOption( array('name' => 'Image', 'id' => 'tab_5_box_2_image', 'type' => 'upload', 'desc' => 'Upload the member image') );
// name
$tab_5->createOption( array('name' => 'Name', 'id' => 'tab_5_box_2_name', 'type' => 'text', 'desc' => 'Enter the member name', 'default' => 'Sarah Red') );
// role
$tab_5->createOption( array('name' => 'Role', 'id' => 'tab_5_box_2_role', 'type' => 'text', 'desc' => 'Enter the member role', 'default' => 'Founder') );
// description
$tab_5->createOption( array('name' => 'Description', 'id' => 'tab_5_box_2_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.',
							'media_buttons' => false, 'rows' => 4) );
// ** social icons **
// icon 1
$tab_5->createOption( array('name' => 'Social icon 1', 'id' => 'tab_5_box_2_social_icon_1', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-facebook') );
// icon 1 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_2_social_icon_1_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '#') );
// icon 2
$tab_5->createOption( array('name' => 'Social icon 2', 'id' => 'tab_5_box_2_social_icon_2', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-twitter') );
// icon 2 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_2_social_icon_2_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '#') );
// icon 3
$tab_5->createOption( array('name' => 'Social icon 3', 'id' => 'tab_5_box_2_social_icon_3', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-linkedin') );
// icon 3 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_2_social_icon_3_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '#') );
// icon 4
$tab_5->createOption( array('name' => 'Social icon 4', 'id' => 'tab_5_box_2_social_icon_4', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-envelope') );
// icon 4 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_2_social_icon_4_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => 'info@domain.com') );
// *******************************************************************

// heading separator --> ** MEMBER 3 **
$tab_5->createOption( array('name' => 'Member 3', 'type' => 'heading') );
// display this member
$tab_5->createOption( array('name' => 'Display this member', 'id' => 'tab_5_box_3_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this member', 'default' => true) );
// image
$tab_5->createOption( array('name' => 'Image', 'id' => 'tab_5_box_3_image', 'type' => 'upload', 'desc' => 'Upload the member image') );
// name
$tab_5->createOption( array('name' => 'Name', 'id' => 'tab_5_box_3_name', 'type' => 'text', 'desc' => 'Enter the member name', 'default' => 'Tim Brown') );
// role
$tab_5->createOption( array('name' => 'Role', 'id' => 'tab_5_box_3_role', 'type' => 'text', 'desc' => 'Enter the member role', 'default' => 'Designer') );
// description
$tab_5->createOption( array('name' => 'Description', 'id' => 'tab_5_box_3_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.',
							'media_buttons' => false, 'rows' => 4) );
// ** social icons **
// icon 1
$tab_5->createOption( array('name' => 'Social icon 1', 'id' => 'tab_5_box_3_social_icon_1', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-facebook') );
// icon 1 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_3_social_icon_1_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '#') );
// icon 2
$tab_5->createOption( array('name' => 'Social icon 2', 'id' => 'tab_5_box_3_social_icon_2', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-twitter') );
// icon 2 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_3_social_icon_2_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '#') );
// icon 3
$tab_5->createOption( array('name' => 'Social icon 3', 'id' => 'tab_5_box_3_social_icon_3', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-linkedin') );
// icon 3 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_3_social_icon_3_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '#') );
// icon 4
$tab_5->createOption( array('name' => 'Social icon 4', 'id' => 'tab_5_box_3_social_icon_4', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-envelope') );
// icon 4 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_3_social_icon_4_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => 'info@domain.com') );
// *******************************************************************

// heading separator --> ** MEMBER 4 **
$tab_5->createOption( array('name' => 'Member 4', 'type' => 'heading') );
// display this member
$tab_5->createOption( array('name' => 'Display this member', 'id' => 'tab_5_box_4_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this member', 'default' => false) );
// image
$tab_5->createOption( array('name' => 'Image', 'id' => 'tab_5_box_4_image', 'type' => 'upload', 'desc' => 'Upload the member image') );
// name
$tab_5->createOption( array('name' => 'Name', 'id' => 'tab_5_box_4_name', 'type' => 'text', 'desc' => 'Enter the member name', 'default' => '') );
// role
$tab_5->createOption( array('name' => 'Role', 'id' => 'tab_5_box_4_role', 'type' => 'text', 'desc' => 'Enter the member role', 'default' => '') );
// description
$tab_5->createOption( array('name' => 'Description', 'id' => 'tab_5_box_4_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => '', 'media_buttons' => false, 'rows' => 4) );
// ** social icons **
// icon 1
$tab_5->createOption( array('name' => 'Social icon 1', 'id' => 'tab_5_box_4_social_icon_1', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/', 'default' => '') );
// icon 1 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_4_social_icon_1_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '') );
// icon 2
$tab_5->createOption( array('name' => 'Social icon 2', 'id' => 'tab_5_box_4_social_icon_2', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/', 'default' => '') );
// icon 2 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_4_social_icon_2_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '') );
// icon 3
$tab_5->createOption( array('name' => 'Social icon 3', 'id' => 'tab_5_box_4_social_icon_3', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/', 'default' => '') );
// icon 3 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_4_social_icon_3_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '') );
// icon 4
$tab_5->createOption( array('name' => 'Social icon 4', 'id' => 'tab_5_box_4_social_icon_4', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/', 'default' => '') );
// icon 4 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_4_social_icon_4_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '') );
// *******************************************************************

// heading separator --> ** MEMBER 5 **
$tab_5->createOption( array('name' => 'Member 5', 'type' => 'heading') );
// display this member
$tab_5->createOption( array('name' => 'Display this member', 'id' => 'tab_5_box_5_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this member', 'default' => false) );
// image
$tab_5->createOption( array('name' => 'Image', 'id' => 'tab_5_box_5_image', 'type' => 'upload', 'desc' => 'Upload the member image') );
// name
$tab_5->createOption( array('name' => 'Name', 'id' => 'tab_5_box_5_name', 'type' => 'text', 'desc' => 'Enter the member name', 'default' => '') );
// role
$tab_5->createOption( array('name' => 'Role', 'id' => 'tab_5_box_5_role', 'type' => 'text', 'desc' => 'Enter the member role', 'default' => '') );
// description
$tab_5->createOption( array('name' => 'Description', 'id' => 'tab_5_box_5_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => '', 'media_buttons' => false, 'rows' => 4) );
// ** social icons **
// icon 1
$tab_5->createOption( array('name' => 'Social icon 1', 'id' => 'tab_5_box_5_social_icon_1', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/', 'default' => '') );
// icon 1 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_5_social_icon_1_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '') );
// icon 2
$tab_5->createOption( array('name' => 'Social icon 2', 'id' => 'tab_5_box_5_social_icon_2', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/', 'default' => '') );
// icon 2 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_5_social_icon_2_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '') );
// icon 3
$tab_5->createOption( array('name' => 'Social icon 3', 'id' => 'tab_5_box_5_social_icon_3', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/', 'default' => '') );
// icon 3 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_5_social_icon_3_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '') );
// icon 4
$tab_5->createOption( array('name' => 'Social icon 4', 'id' => 'tab_5_box_5_social_icon_4', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/', 'default' => '') );
// icon 4 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_5_social_icon_4_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '') );
// *******************************************************************

// heading separator --> ** MEMBER 6 **
$tab_5->createOption( array('name' => 'Member 6', 'type' => 'heading') );
// display this member
$tab_5->createOption( array('name' => 'Display this member', 'id' => 'tab_5_box_6_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this member', 'default' => false) );
// image
$tab_5->createOption( array('name' => 'Image', 'id' => 'tab_5_box_6_image', 'type' => 'upload', 'desc' => 'Upload the member image') );
// name
$tab_5->createOption( array('name' => 'Name', 'id' => 'tab_5_box_6_name', 'type' => 'text', 'desc' => 'Enter the member name', 'default' => '') );
// role
$tab_5->createOption( array('name' => 'Role', 'id' => 'tab_5_box_6_role', 'type' => 'text', 'desc' => 'Enter the member role', 'default' => '') );
// description
$tab_5->createOption( array('name' => 'Description', 'id' => 'tab_5_box_6_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => '', 'media_buttons' => false, 'rows' => 4) );
// ** social icons **
// icon 1
$tab_5->createOption( array('name' => 'Social icon 1', 'id' => 'tab_5_box_6_social_icon_1', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/', 'default' => '') );
// icon 1 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_6_social_icon_1_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '') );
// icon 2
$tab_5->createOption( array('name' => 'Social icon 2', 'id' => 'tab_5_box_6_social_icon_2', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/', 'default' => '') );
// icon 2 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_6_social_icon_2_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '') );
// icon 3
$tab_5->createOption( array('name' => 'Social icon 3', 'id' => 'tab_5_box_6_social_icon_3', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/', 'default' => '') );
// icon 3 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_6_social_icon_3_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '') );
// icon 4
$tab_5->createOption( array('name' => 'Social icon 4', 'id' => 'tab_5_box_6_social_icon_4', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/', 'default' => '') );
// icon 4 link
$tab_5->createOption( array('name' => 'Icon link', 'id' => 'tab_5_box_6_social_icon_4_link', 'type' => 'text', 'desc' => 'Enter the icon link', 'default' => '') );
// *******************************************************************

// ***** Our motto *****

// heading separator
$tab_5->createOption( array('name' => 'Our motto', 'type' => 'heading') );
// display this section
$tab_5->createOption( array('name' => 'Display this section', 'id' => 'tab_5_motto_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this section', 'default' => true) );
// title
$tab_5->createOption( array('name' => 'Title', 'id' => 'tab_5_motto_title', 'type' => 'text', 'desc' => 'Enter the title', 'default' => 'Our Motto') );
// description
$tab_5->createOption( array('name' => 'Description', 'id' => 'tab_5_motto_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => '"Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful."',
							'media_buttons' => false, 'rows' => 4) );

// save button
$tab_5->createOption( array('type' => 'save') );

?>