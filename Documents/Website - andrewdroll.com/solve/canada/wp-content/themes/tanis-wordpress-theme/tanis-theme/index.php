<?php get_header(); ?>

<?php
	$titan = TitanFramework::getInstance( 'tanis' );
?>
		
        <!-- Coming Soon -->
        <div class="coming-soon">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        	<div class="logo wow fadeInDown">
                        		<h1><a href=""><?php bloginfo( 'name' ); ?></a></h1>
                        	</div>
                            <h2 class="wow fadeInLeftBig"><?php echo $titan->getOption( 'tab_1_title' ); ?></h2>
                            <div class="wow fadeInLeftBig"><?php echo $titan->getOption( 'tab_1_description' ); ?></div>
                            <div class="timer wow fadeInUp">
                                <div class="days-wrapper">
                                    <span class="days"></span> <br>days
                                </div>
                                <div class="hours-wrapper">
                                    <span class="hours"></span> <br>hours
                                </div>
                                <div class="minutes-wrapper">
                                    <span class="minutes"></span> <br>minutes
                                </div>
                                <div class="seconds-wrapper">
                                    <span class="seconds"></span> <br>seconds
                                </div>
                            </div>
                            <p class="top-arrow wow fadeInUp">
                            	<i class="fa fa-angle-down"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        	foreach(tanis_chosen_sections($titan) as $section) {
        		include 'includes/sections/' . $section['section'] . '.php';
        	}
        ?>

<?php get_footer(); ?>
