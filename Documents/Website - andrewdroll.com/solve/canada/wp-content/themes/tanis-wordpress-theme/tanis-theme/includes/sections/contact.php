<?php
	if($titan->getOption('tab_6_bg') == "image" && tanis_get_image_src($titan, "tab_6_bg_image") != "") {
		$fullscreen_bg_class_6 = "section-container-full-bg";
	}
?>

        <!-- Contact us -->
        <div class="contact-container section-container <?php echo $fullscreen_bg_class_6; ?>">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-8 col-sm-offset-2 contact section-description wow fadeInLeftBig">
	                    <h3><?php echo $titan->getOption('tab_6_title'); ?></h3>
	                    <div><?php echo $titan->getOption('tab_6_description'); ?></div>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-7 contact-form wow fadeInUp">
	                    <h4><?php echo $titan->getOption('tab_6_contact_form_title'); ?></h4>
	                    
	                    <form role="form" action="" method="post">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="contact-email">Email</label>
	                        	<input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="contact-subject">Subject</label>
	                        	<input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="contact-message">Message</label>
	                        	<textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-message"></textarea>
	                        </div>
	                        <button type="submit" class="btn">Send it</button>
	                    </form>

	                    <div class="contact-success-message"><?php echo $titan->getOption('tab_6_contact_form_success'); ?></div>
	                </div>
	                <div class="col-sm-5 contact-address wow fadeInUp">
	                <?php
						if($titan->getOption('tab_6_map_display') == true) {
					?>
	                    <h4><?php echo $titan->getOption('tab_6_map_title'); ?></h4>
	                    <div class="map"></div>
					<?php
						}
			        ?>
	                    <h4><?php echo $titan->getOption('tab_6_address_title'); ?></h4>
	                <?php
	                	foreach(tanis_active_address_lines($titan, "tab_6") as $line_nr) {
	                	?>
	                	<div class="address-line">
	                		<i class="fa <?php echo $titan->getOption('tab_6_address_line_' . $line_nr . '_icon'); ?>"></i>
	                		<?php echo $titan->getOption('tab_6_address_line_' . $line_nr . '_text'); ?>
	                	</div>
	                	<?php
	                	}
	                ?>
	                </div>
	            </div>
	        </div>
        </div>
