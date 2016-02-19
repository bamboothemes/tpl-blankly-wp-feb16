<?php defined('ZEN_ALLOW') or die();

/* =====================================================================
Template:	Xero - Base theme for the Zen Grid Framework v4.
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */


?>
<a id="home-link" name="home-link"></a>
<?php if($this->checkSpotlight('top')) {?>
<section id="topwrap" class="clearfix <?php echo $this->rowClass('top');?>">
	<div class="zen-container">
		<?php $this->getModules('top');?>
	</div>
</section>
<?php } ?>