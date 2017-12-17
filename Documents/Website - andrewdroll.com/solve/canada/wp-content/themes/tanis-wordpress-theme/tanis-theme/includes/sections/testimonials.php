<?php
	if($titan->getOption('tab_4_bg') == "image" && tanis_get_image_src($titan, "tab_4_bg_image") != "") {
		$fullscreen_bg_class_4 = "section-container-full-bg";
	}
?>

        <!-- Testimonials -->
        <div class="testimonials-container section-container <?php echo $fullscreen_bg_class_4; ?>">
	        <div class="container">
	        
	            <div class="row">
	                <div class="col-sm-12 testimonials section-description wow fadeIn">
	                    <h3><?php echo $titan->getOption('tab_4_title'); ?></h3>
	                </div>
	            </div>
	            
	            <div class="row">
	                <div class="col-sm-10 col-sm-offset-1 testimonial-list wow fadeInUp">
	                	<div role="tabpanel">
	                	
							<!-- Tab panes -->
	                		<div class="tab-content">
			                <?php
			                	foreach(tanis_active_boxes($titan, "tab_4") as $box_nr) {
									$active_testimonial = "";
									if($box_nr == 1) {
										$active_testimonial = "in active";
									}
			                ?>
				                    <div role="tabpanel" class="tab-pane fade <?php echo $active_testimonial; ?>" id="tab<?php echo $box_nr; ?>">
		                				<div class="testimonial-image">
		                					<img src="<?php echo tanis_get_image_src($titan, 'tab_4_box_' . $box_nr . '_image'); ?>" 
		                																					alt="testimonial-<?php echo $box_nr; ?>-image">
		                				</div>
		                				<div class="testimonial-text"><?php echo $titan->getOption('tab_4_box_' . $box_nr . '_text'); ?></div>
		                			</div>
			                <?php
			                	}
			                ?>
			                </div>
			                
			                <!-- Nav tabs -->
	                		<ul class="nav nav-tabs" role="tablist">
	                		<?php
		                		foreach(tanis_active_boxes($titan, "tab_4") as $box_nr) {
		                			$active_testimonial = "";
		                			if($box_nr == 1) {
		                				$active_testimonial = "active";
		                			}
	                		?>
	                			<li role="presentation" class="<?php echo $active_testimonial; ?>">
	                				<a href="#tab<?php echo $box_nr; ?>" aria-controls="tab<?php echo $box_nr; ?>" role="tab" data-toggle="tab"></a>
	                			</li>
	                		<?php
			                	}
			                ?>
	                		</ul>
	                
	                	</div>
					</div>
	            </div>
	            
	        </div>
        </div>
        