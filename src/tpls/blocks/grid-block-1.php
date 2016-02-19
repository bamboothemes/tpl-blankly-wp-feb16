<?php
defined('_JEXEC') or die;

/* =====================================================================
Template:	Xero - Base theme for the Zen Grid Framework v4.
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */ ?>	


<?php if($this->checkSpotlight('grid1')) {?>
	<section id="grid1wrap" class="clearfix <?php echo $this->rowClass('grid1');?>">
		<div class="zen-container">
			<a id="grid1-link" name="grid1-link"></a>
			<?php $this->getModules('grid1');?>
		</div>
	</section>
<?php } ?>