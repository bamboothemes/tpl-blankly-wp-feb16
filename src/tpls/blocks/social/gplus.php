<?php
defined('_JEXEC') or die;

/* =====================================================================
Template:	Presto Gallery - Ajax Driven template gallery for Joomla
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */

$current_url = JURI::current('true'); ?>

<?php if($this->params->gplus_share) { ?>
<a class="popup" href="https://plus.google.com/share?url=<?php echo $current_url;?>" >
   <span class="zen-animate fadeInRightBig animated-slower fa fa-google-plus zen-icon zen-icon-google-plus"></span>
</a>

<script src="https://apis.google.com/js/platform.js" async defer ></script>

<?php } else { ?>
	
	<a target="_blank" href="<?php echo $this->params->gplus_url;?>" >
	   <span class="zen-animate fadeInRightBig animated-slower fa fa-google-plus zen-icon zen-icon-google-plus"></span>
	</a>

<?php } ?>