<?php

// ***** General tab *****
$tab_0 = $panel->createTab( array('name' => 'General') );

// main color
$tab_0->createOption( array('name' => 'Main color', 'id' => 'tab_0_color', 'type' => 'color',
							'desc' => 'Enter the main color, used for buttons, hovers, links', 'default' => '#42bfc2') );
// favicon
$tab_0->createOption( array('name' => 'Favicon', 'id' => 'tab_0_favicon', 'type' => 'upload',
							'desc' => 'Upload your favicon') );

// save button
$tab_0->createOption( array('type' => 'save') );

?>