<?php
defined('_JEXEC') or die;

/* =====================================================================
Template:	Xero - Base theme for the Zen Grid Framework v4.
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */

?>

<?php if($this->checkSpotlight('banner')) {?>
	<section id="bannerwrap" class="clearfix <?php echo $this->rowClass('banner');?>">
		<div class="zen-container">
			<a id="banner-link" name="banner-link"></a>
			<?php $this->getModules('banner');?>
		</div>
	</section>
<?php }?>