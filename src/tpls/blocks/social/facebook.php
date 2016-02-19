<?php
defined('_JEXEC') or die;

/* =====================================================================
Template:	Presto Gallery - Ajax Driven template gallery for Joomla
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */

$link = $this->params->facebook_url;
$current_url = JURI::current();


// Check for share param
if($this->params->facebook_share) { 

	$link = "javascript:myPopup('https://www.facebook.com/sharer/sharer.php?u=$current_url'); return false;";
} 
?>
	
<a id="social-facebook" onClick="<?php echo $link;?>" href="<?php echo $link;?>" target="_blank"> 
	<span class="zen-animate fadeInRightBig animated fa fa-facebook zen-icon zen-icon-facebook"></span>
</a>

<script>
	// Function for popups
	function myPopup(url) {
		window.open( url, "myWindow", "status = 1, height = 500, width = 450, resizable = 0" );
	}
</script>