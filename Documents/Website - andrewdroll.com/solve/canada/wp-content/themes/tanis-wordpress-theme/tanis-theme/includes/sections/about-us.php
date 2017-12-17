<?php
	if($titan->getOption('tab_5_bg') == "image" && tanis_get_image_src($titan, "tab_5_bg_image") != "") {
		$fullscreen_bg_class_5 = "section-container-full-bg";
	}
?>

        <!-- Who's behind this -->
        <div class="whos-behind-container section-container <?php echo $fullscreen_bg_class_5; ?>">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-8 col-sm-offset-2 whos-behind section-description wow fadeInLeftBig">
	                    <h3><?php echo $titan->getOption('tab_5_title'); ?></h3>
	                    <div><?php echo $titan->getOption('tab_5_description'); ?></div>
	                </div>
	            </div>
			<?php
				$active_boxes_2 = tanis_active_boxes($titan, "tab_5");
	        	$active_boxes_2_nr = count($active_boxes_2);
	        	foreach($active_boxes_2 as $k => $box_nr) {
	        		if(($k + 1) % 3 == 1) {
	        		?>
	        			<div class="row">
	        		<?php
	        		}
	        	?>
	        		<div class="col-sm-4 whos-behind-box-1 wow fadeInUp">
	                	<div class="whos-behind-photo">
	                		<img src="<?php echo tanis_get_image_src($titan, 'tab_5_box_' . $box_nr . '_image'); ?>" alt="member-<?php echo $box_nr; ?>-image">
	                		<div class="whos-behind-role"><?php echo $titan->getOption('tab_5_box_' . $box_nr . '_role'); ?></div>
	                	</div>
	                	<h4><?php echo $titan->getOption('tab_5_box_' . $box_nr . '_name'); ?></h4>
	                	<div><?php echo $titan->getOption('tab_5_box_' . $box_nr . '_description'); ?></div>
                		<div class="whos-behind-social">
                		<?php
                			foreach(tanis_active_member_social_icons($titan, "tab_5", $box_nr) as $icon_nr) {
                				$icon_name = $titan->getOption('tab_5_box_' . $box_nr . '_social_icon_' . $icon_nr);
                				$icon_link = $titan->getOption('tab_5_box_' . $box_nr . '_social_icon_' . $icon_nr . '_link');
                				if(strpos($icon_name, 'envelope') !== FALSE) {
                					$icon_link = "mailto:" . $icon_link;
                				}
                			?>
                				<a href="<?php echo $icon_link; ?>" target="_blank"><i class="fa <?php echo $icon_name; ?>"></i></a>
                			<?php
                			}
                		?>
                		</div>
	                </div>
	        	<?php
	        		if(($k + 1) % 3 == 0 || ($k + 1) == $active_boxes_2_nr) {
	        		?>
	        			</div>
	        		<?php
	        		}
	        	}
			?>  
			<?php
				if($titan->getOption('tab_5_motto_display') == true) {
			?>
	            <!-- Our motto -->
	            <div class="row">
	                <div class="col-sm-12 our-motto wow fadeInLeftBig">
	                    <h4><?php echo $titan->getOption('tab_5_motto_title'); ?></h4>
	                    <div class="our-motto-text"><?php echo $titan->getOption('tab_5_motto_description'); ?></div>
	                </div>
	            </div>
	        <?php
				}
	        ?>
	        </div>
        </div>
