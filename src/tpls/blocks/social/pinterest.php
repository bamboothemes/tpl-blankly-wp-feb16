<?php
defined('_JEXEC') or die;

/* =====================================================================
Template:	Presto Gallery - Ajax Driven template gallery for Joomla
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */

	// Set up the link value 
	$link = $this->params->pinterest_url;
?>
	
<a id="social-pinterest" href="<?php echo $link;?>" target="_blank"><span class="zen-animate fadeInRightBig animated fa fa-pinterest zen-icon zen-icon-pinterest"></span></a>

<?php if($this->params->pinterest_share) { ?>

	<script>
		jQuery(document).ready(function ($) {
		
			// Build the links for the various services.
			// We would normally use PHP for this
			// But since we want to use the same code for non html overrides
			// Lets do it this way and in one spot
			
			var description = $('#midCol p:first').text();
			
				
			// Check if description is available]
			// If not specify the first p on the page
			
			if(typeof description ==="undefined") {
				description = $('p:first').text();
			}
			
			// Get First image		
			var first_image = $('main img').attr('src');
			
			// Specify relative url
			var relative_url = '<?php echo JURI::base('true');?>';
		
			// If not first image
			if(typeof first_image !=="undefined") {
				// Remove the relative url from the first image
				first_image = url + first_image.replace(relative_url, '');
			} else {
				first_image = '<?php echo $this->params->pinterest_default_image;?>';
			}
			
			// Create url var
			var url = '<?php echo JURI::base();?>';
		
			// Create the link
			var pinterest_link = 'http://www.pinterest.com/pin/create/button/?url=' + url + '&media=' + first_image + '&description=' + description;
		
			// Replace the link
			$('#social-pinterest').attr('href', pinterest_link).attr('class','pin-it popup');
			
		});
	</script>
<?php } ?>