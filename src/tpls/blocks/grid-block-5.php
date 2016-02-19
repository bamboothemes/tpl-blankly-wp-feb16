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

<?php if($this->checkSpotlight('grid5')) {?>
	<section id="grid5wrap" class="clearfix <?php echo $this->rowClass('grid5');?>">
		<div class="zen-container">
			<a id="grid5-link" name="grid5-link"></a>
			<?php $this->getModules('grid5');?>
		</div>
	</section>
<?php } ?>