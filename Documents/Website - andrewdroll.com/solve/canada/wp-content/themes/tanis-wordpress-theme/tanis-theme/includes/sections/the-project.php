<?php
	if($titan->getOption('tab_3_bg') == "image" && tanis_get_image_src($titan, "tab_3_bg_image") != "") {
		$fullscreen_bg_class_3 = "section-container-full-bg";
	}
?>

        <!-- About the project -->
        <div class="about-container section-container <?php echo $fullscreen_bg_class_3; ?>">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-8 col-sm-offset-2 about section-description wow fadeInLeftBig">
	                    <h3><?php echo $titan->getOption('tab_3_title'); ?></h3>
	                    <div><?php echo $titan->getOption('tab_3_description'); ?></div>
	                </div>
	            </div>
	        <?php
	        	$active_boxes = tanis_active_boxes($titan, "tab_3");
	        	$active_boxes_nr = count($active_boxes);
	        	foreach($active_boxes as $k => $box_nr) {
	        		if(($k + 1) % 3 == 1) {
	        		?>
	        			<div class="row">
	        		<?php
	        		}
	        	?>
	        		<div class="col-sm-4 about-box-1 wow fadeInUp">
	        			<div class="row">
	        			
	        				<div class="col-sm-4">
	        					<div class="about-box-1-icon">
			                		<i class="fa <?php echo $titan->getOption('tab_3_box_' . $box_nr . '_icon'); ?>"></i>
			                	</div>
		                	</div>
		                	
		                	<div class="col-sm-8">
			                    <h4><?php echo $titan->getOption('tab_3_box_' . $box_nr . '_title'); ?></h4>
			                    <div><?php echo $titan->getOption('tab_3_box_' . $box_nr . '_description'); ?></div>
		                    </div>
	                    
	                    </div>
	                </div>
	        	<?php
	        		if(($k + 1) % 3 == 0 || ($k + 1) == $active_boxes_nr) {
	        		?>
	        			</div>
	        		<?php
	        		}
	        	}
	        ?>  
	        </div>
        </div>
        