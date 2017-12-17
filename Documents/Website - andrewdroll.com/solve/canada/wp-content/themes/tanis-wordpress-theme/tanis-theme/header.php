<?php
	$titan = TitanFramework::getInstance( 'tanis' );
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="" <?php language_attributes(); ?>> <!--<![endif]-->

    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title('-', true, 'right'); bloginfo( 'name' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,500,500italic">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        
        <style>
        	a, a:hover, a:focus, nav a:hover, .error-message, .mailchimp-error-message, 
        	.whos-behind-box-1 .whos-behind-social a:hover, .whos-behind-box-1 .whos-behind-social a:focus {
        		color: <?php echo $titan->getOption( 'tab_0_color' ); ?>;
        	}
        	
        	::-moz-selection { background: <?php echo $titan->getOption( 'tab_0_color' ); ?>; }
        	::selection { background: <?php echo $titan->getOption( 'tab_0_color' ); ?>; }
        	
        	.timer .days-wrapper:hover,
			.timer .hours-wrapper:hover,
			.timer .minutes-wrapper:hover,
			.timer .seconds-wrapper:hover,
			.about-box-1 .about-box-1-icon {
				background: <?php echo $titan->getOption( 'tab_0_color' ); ?>;
			}
			
			.whos-behind-box-1 .whos-behind-photo .whos-behind-social, button.btn, 
			.testimonial-list .nav-tabs li.active a, .testimonial-list .nav-tabs li.active a:focus, 
			.whos-behind-box-1 .whos-behind-photo .whos-behind-role {
				background: <?php echo $titan->getOption( 'tab_0_color' ); ?>;
			}
						
			.contact-form form .contact-error, 
			input[type="text"]:focus, textarea:focus, textarea.form-control:focus, 
			.section-container-full-bg input[type="text"]:focus, 
			.section-container-full-bg textarea:focus, 
			.section-container-full-bg textarea.form-control:focus {
				border-color: <?php echo $titan->getOption( 'tab_0_color' ); ?>;
			}
			
        	<?php
        		$logo_src = tanis_get_image_src($titan, "tab_1_logo");
        		if($logo_src != "") {
        	?>
        			.coming-soon .logo a { background-image: url(<?php echo $logo_src; ?>); }
        	<?php
        		}
        		$logo_2x_src = tanis_get_image_src($titan, "tab_1_logo_2x");
        		$logo_2x_bg_size = tanis_get_image_size($titan, "tab_1_logo");
        		if($logo_2x_src != "") {
        	?>
        			/* Retina-ize images/icons */

					@media
					only screen and (-webkit-min-device-pixel-ratio: 2),
					only screen and (   min--moz-device-pixel-ratio: 2),
					only screen and (     -o-min-device-pixel-ratio: 2/1),
					only screen and (        min-device-pixel-ratio: 2),
					only screen and (                min-resolution: 192dpi),
					only screen and (                min-resolution: 2dppx) {
						
						/* logo */
					    .coming-soon .logo a {
					    	background-image: url(<?php echo $logo_2x_src; ?>) !important;
					    	background-repeat: no-repeat !important;
					    	background-size: <?php echo $logo_2x_bg_size[0]; ?>px <?php echo $logo_2x_bg_size[1]; ?>px !important;
					    }
						
					}
        	<?php
        		}
        	?>
        </style>

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo tanis_get_image_src($titan, "tab_0_favicon"); ?>">
        
        <?php wp_head(); ?>

    </head>

    <body>

		<!-- Top menu -->
		<nav>
			<a class="scroll-link" href="#top">Top</a>
		<?php
			foreach(tanis_top_menu_items($titan) as $menu_item) {
			?>
				<a class="scroll-link" href="#<?php echo $menu_item['section-container']; ?>"><?php echo $menu_item['menu-item-name']; ?></a>
			<?php
			}
		?>			
			<div class="hide-menu">
				<a href="" rel="tooltip" data-placement="bottom" data-original-title="Hide menu">
					<i class="fa fa-bars"></i>
				</a>
			</div>
		</nav>
		<div class="show-menu">
			<a href="" rel="tooltip" data-placement="bottom" data-original-title="Show menu">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		