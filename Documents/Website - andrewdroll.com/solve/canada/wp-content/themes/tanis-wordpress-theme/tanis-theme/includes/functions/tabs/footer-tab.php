<?php

// ***** Footer tab *****
$tab_7 = $panel->createTab( array('name' => 'Footer') );

// copyright
$tab_7->createOption( array('name' => 'Copyright text', 'id' => 'tab_7_copyright', 'type' => 'editor', 'desc' => 'Enter the text',
							'default' => '&copy; Tanis - WordPress Coming Soon Theme<br>All rights reserved.',
							'media_buttons' => false, 'rows' => 4) );
// *******************************************************************

// heading separator --> ** Social icons **
$tab_7->createOption( array('name' => 'Social icons', 'type' => 'heading') );

// icon 1
$tab_7->createOption( array('name' => 'Icon 1', 'id' => 'tab_7_icon_1', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-facebook') );
// icon 1 link
$tab_7->createOption( array('name' => 'Icon 1 link', 'id' => 'tab_7_icon_1_link', 'type' => 'text', 
							'desc' => 'Enter the icon link', 'default' => 'http://facebook.com') );
// icon 2
$tab_7->createOption( array('name' => 'Icon 2', 'id' => 'tab_7_icon_2', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-twitter') );
// icon 2 link
$tab_7->createOption( array('name' => 'Icon 2 link', 'id' => 'tab_7_icon_2_link', 'type' => 'text', 
							'desc' => 'Enter the icon link', 'default' => 'http://twitter.com') );
// icon 3
$tab_7->createOption( array('name' => 'Icon 3', 'id' => 'tab_7_icon_3', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-google-plus') );
// icon 3 link
$tab_7->createOption( array('name' => 'Icon 3 link', 'id' => 'tab_7_icon_3_link', 'type' => 'text', 
							'desc' => 'Enter the icon link', 'default' => '#') );
// icon 4
$tab_7->createOption( array('name' => 'Icon 4', 'id' => 'tab_7_icon_4', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-dribbble') );
// icon 4 link
$tab_7->createOption( array('name' => 'Icon 4 link', 'id' => 'tab_7_icon_4_link', 'type' => 'text', 
							'desc' => 'Enter the icon link', 'default' => '#') );
// icon 5
$tab_7->createOption( array('name' => 'Icon 5', 'id' => 'tab_7_icon_5', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => 'fa-pinterest') );
// icon 5 link
$tab_7->createOption( array('name' => 'Icon 5 link', 'id' => 'tab_7_icon_5_link', 'type' => 'text', 
							'desc' => 'Enter the icon link', 'default' => '#') );
// icon 6
$tab_7->createOption( array('name' => 'Icon 6', 'id' => 'tab_7_icon_6', 'type' => 'text', 
							'desc' => 'Enter the name of the social icon, you can find the available icons here: fontawesome.io/icons/',
							'default' => '') );
// icon 6 link
$tab_7->createOption( array('name' => 'Icon 6 link', 'id' => 'tab_7_icon_6_link', 'type' => 'text', 
							'desc' => 'Enter the icon link', 'default' => '') );
// *******************************************************************

// save button
$tab_7->createOption( array('type' => 'save') );

?>