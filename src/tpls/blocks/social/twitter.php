<?php
defined('_JEXEC') or die;

/* =====================================================================
Template:	Presto Gallery - Ajax Driven template gallery for Joomla
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */

$current_url = JURI::current('true');


?>

<?php if($this->params->twitter_share) { ?>

	<a id="social-twitter" href="https://twitter.com/share?url=<?php echo $current_url;?>&via=<?php echo $this->params->twitter_username;?>&text=" class="popup">
			<span class="zen-animate fadeInRightBig animated-faster fa fa-twitter zen-icon zen-icon-twitter"></span>
	</a>
	
<?php } else { ?>
	
	<a id="social-twitter" href="http://www.twitter.com/<?php echo $this->params->twitter_username;?>" target="_blank">
			<span class="zen-animate fadeInRightBig animated-faster fa fa-twitter zen-icon zen-icon-twitter"></span>
	</a>

<?php } ?>


<?php if($this->params->twitter_share) { ?>
	<script>
		jQuery(document).ready(function ($) {
			// Twitter Link Constructor
			var twitter_link = $('#social-twitter').attr('href');
			
			// Get title on page
			// Made it broad for anumber of use cases but will retrieve h1 or h2 if not available
			var title = $('#midCol h1:first').text();
			
				if(typeof title ==="undefined") {
					description = $('h2:first').text();
				}
				
			twitter_link += ' ' + title;
				
			$('#social-twitter').attr('href', twitter_link);
		});
	</script>
<?php } ?>