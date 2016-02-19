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

<?php if($this->checkSpotlight('grid6')) {?>
	<section id="grid6wrap" class="clearfix <?php echo $this->rowClass('grid6');?>">
		<div class="zen-container">
			<a id="grid6-link" name="grid6-link"></a>
			<?php $this->getModules('grid6');?>
		</div>
	</section>
<?php } ?>