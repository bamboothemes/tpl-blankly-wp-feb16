<?php
defined('_JEXEC') or die;

/* =====================================================================
Template:	Xero - Base theme for the Zen Grid Framework v4.
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */ ?>

<?php if($this->checkSpotlight('grid2')) {?>
	<section id="grid2wrap" class="clearfix <?php echo $this->rowClass('grid2');?>">
		<div class="zen-container">
			<a id="grid2-link" name="grid2-link"></a>
			<?php $this->getModules('grid2');?>
		</div>
	</section>
<?php } ?>