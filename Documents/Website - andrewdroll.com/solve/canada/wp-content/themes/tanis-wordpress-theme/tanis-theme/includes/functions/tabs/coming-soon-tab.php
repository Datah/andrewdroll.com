<?php

// ***** Coming soon tab *****
$tab_1 = $panel->createTab( array('name' => 'Coming Soon') );

// top menu name
$tab_1->createOption( array('name' => 'Top menu name', 'id' => 'tab_1_menu_name', 'type' => 'text',
							'desc' => 'Enter the name to display on the top menu for this section', 'default' => 'Top') );
// background slideshow images
$tab_1->createOption( array('name' => 'Background image 1', 'id' => 'tab_1_background_image_1', 'type' => 'upload', 'desc' => 'Upload your image') );
$tab_1->createOption( array('name' => 'Background image 2', 'id' => 'tab_1_background_image_2', 'type' => 'upload', 'desc' => 'Upload your image') );
$tab_1->createOption( array('name' => 'Background image 3', 'id' => 'tab_1_background_image_3', 'type' => 'upload', 'desc' => 'Upload your image') );
$tab_1->createOption( array('name' => 'Background image 4', 'id' => 'tab_1_background_image_4', 'type' => 'upload', 'desc' => 'Upload your image') );
$tab_1->createOption( array('name' => 'Background image 5', 'id' => 'tab_1_background_image_5', 'type' => 'upload', 'desc' => 'Upload your image') );
// logo
$tab_1->createOption( array('name' => 'Logo', 'id' => 'tab_1_logo', 'type' => 'upload',
							'desc' => 'Upload your logo image (max width 200px, max height 110px)') );
// logo @2x
$tab_1->createOption( array('name' => 'Logo @2x', 'id' => 'tab_1_logo_2x', 'type' => 'upload',
							'desc' => 'Upload the @2x version of the logo, double size, for Retina displays (iPhone, iPad)') );
// title
$tab_1->createOption( array('name' => 'Title', 'id' => 'tab_1_title', 'type' => 'text', 'desc' => 'Enter the title',
							'default' => 'We\'re coming soon') );
// description
$tab_1->createOption( array('name' => 'Description', 'id' => 'tab_1_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => 'We are working very hard on the new version of our site. It will bring a lot of new features. Stay tuned!',
							'media_buttons' => false, 'rows' => 6) );
// timer
$tab_1->createOption( array('name' => 'Countdown timer', 'id' => 'tab_1_timer', 'type' => 'text',
							'desc' => 'Enter the date you want to count to, in the format YYYY/MM/DD', 'default' => '2015/12/15') );
// save button
$tab_1->createOption( array('type' => 'save') );

?>