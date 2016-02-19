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

<?php if($this->checkSpotlight('header')) {?>
	<section id="headerwrap" class="clearfix <?php echo $this->rowClass('header');?>">
		<div class="zen-container">
			<a id="header-link" name="header-link"></a>
			<?php $this->getModules('header');?>
		</div>
	</section>
<?php } ?>