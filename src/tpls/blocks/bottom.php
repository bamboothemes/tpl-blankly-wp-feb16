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

<?php if($this->checkSpotlight('bottom')) {?>
	<section id="bottomwrap" class="clearfix <?php echo $this->rowClass('bottom');?>">
		<div class="zen-container">
			<a id="bottom-link" name="bottom-link"></a>
			<?php $this->getModules('bottom');?>
		</div>
	</section>
<?php } ?>