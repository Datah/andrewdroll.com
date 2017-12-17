<?php

/*
 * TITAN FRAMEWORK (ADMIN PANEL)
 * 
 * When using the embedded framework, use it only if the framework
 * plugin isn't activated.
 */

// Don't do anything when we're activating a plugin to prevent errors
// on redeclaring Titan classes
if ( ! empty( $_GET['action'] ) && ! empty( $_GET['plugin'] ) ) {
    if ( $_GET['action'] == 'activate' ) {
        return;
    }
}
// Check if the framework plugin is activated
$useEmbeddedFramework = true;
$activePlugins = get_option('active_plugins');
if ( is_array( $activePlugins ) ) {
    foreach ( $activePlugins as $plugin ) {
        if ( is_string( $plugin ) ) {
            if ( stripos( $plugin, '/titan-framework.php' ) !== false ) {
                $useEmbeddedFramework = false;
                break;
            }
        }
    }
}
// Use the embedded Titan Framework
if ( $useEmbeddedFramework && ! class_exists( 'TitanFramework' ) ) {
    require_once( trailingslashit( dirname( __FILE__ ) ) . 'titan-framework/titan-framework.php' );
}


/*
 * Titan code
 */

$titan = TitanFramework::getInstance('tanis');

// Create admin page & menu
$panel = $titan->createAdminPanel(array('name' => 'Tanis Theme Options'));


// include tabs
require_once('includes/functions/tabs/general-tab.php');
require_once('includes/functions/tabs/coming-soon-tab.php');
require_once('includes/functions/tabs/the-project-tab.php');
require_once('includes/functions/tabs/subscribe-tab.php');
require_once('includes/functions/tabs/testimonials-tab.php');
require_once('includes/functions/tabs/about-us-tab.php');
require_once('includes/functions/tabs/contact-tab.php');
require_once('includes/functions/tabs/footer-tab.php');

// mailchimp
require_once('assets/MailChimp.php');

// custom functions
require_once('includes/functions/custom-functions.php');


?>