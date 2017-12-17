<?php
	$titan = TitanFramework::getInstance( 'tanis' );
?>

        <!-- Footer -->
        <footer>
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-7 footer-copyright">
	                    <?php echo $titan->getOption('tab_7_copyright'); ?>
	                </div>
	                <div class="col-sm-5 footer-social">
	                <?php
	                	foreach(tanis_active_footer_social_icons($titan, "tab_7") as $icon_nr) {
	                		$icon_name = $titan->getOption('tab_7_icon_' . $icon_nr);
	                		$icon_link = $titan->getOption('tab_7_icon_' . $icon_nr . '_link');
	                		if(strpos($icon_name, 'envelope') !== FALSE) {
	                			$icon_link = "mailto:" . $icon_link;
	                		}
	                	?>
	                		<a href="<?php echo $icon_link; ?>" target="_blank">
	                			<i class="fa <?php echo $icon_name; ?>"></i>
	                		</a>
	                	<?php
	                	}
	                ?>
	                </div>
	            </div>
	        </div>
        </footer>
        
        <?php wp_footer(); ?>

    </body>

</html>