<?php
defined('_JEXEC') or die;

/* =====================================================================
Template:	Xero - Base theme for the Zen Grid Framework v4.
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */ ?>

<?php if($this->checkSpotlight('grid3')) { ?>
<section id="grid3wrap" class="clearfix <?php echo $this->rowClass('grid3');?>">
	<div class="zen-container">
		<a id="grid3-link" name="grid3-link"></a>
		<?php $this->getModules('grid3');?>
	</div>
</section>
<?php } ?>