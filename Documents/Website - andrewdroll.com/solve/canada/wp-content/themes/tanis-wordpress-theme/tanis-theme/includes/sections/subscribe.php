<?php
	if($titan->getOption('tab_2_bg') == "image" && tanis_get_image_src($titan, "tab_2_bg_image") != "") {
		$fullscreen_bg_class_2 = "section-container-full-bg";
	}
?>

		<!-- Subscription form -->
		<div class="subscribe-container section-container <?php echo $fullscreen_bg_class_2; ?>">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 subscribe section-description wow fadeInLeftBig">
	                    <h3><?php echo $titan->getOption('tab_2_title'); ?></h3>
	                    <div><?php echo $titan->getOption('tab_2_description'); ?></div>
	                    
	                    <form class="form-inline" role="form" action="" method="post">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="subscribe-email"><?php echo $titan->getOption('tab_2_placeholder'); ?></label>
	                    		<input type="text" name="email" placeholder="<?php echo $titan->getOption('tab_2_placeholder'); ?>" 
	                    				class="subscribe-email form-control" id="subscribe-email">
	                    	</div>
	                    	<button type="submit" class="btn"><?php echo $titan->getOption('tab_2_button'); ?></button>
	                    </form>
	                    
	                    <div class="success-message"><?php echo $titan->getOption('tab_2_success'); ?></div>
	                    <div class="error-message"><?php echo $titan->getOption('tab_2_invalid_email'); ?></div>
	                    <div class="mailchimp-error-message"><?php echo $titan->getOption('tab_2_mailchimp_error_message'); ?></div>
	                </div>
	            </div>
	        </div>
        </div>
        