<?php
defined('_JEXEC') or die;

/* =====================================================================
Template:	Xero - Base theme for the Zen Grid Framework v4.
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */ ?>
<?php if($this->checkSpotlight('grid4')) {?>
<section id="grid4wrap" class="clearfix <?php echo $this->rowClass('grid4');?>">
	<div class="zen-container">
		<a id="grid4-link" name="grid4-link"></a>
		<?php $this->getModules('grid4');?>
	</div>
</section>
<?php } ?>