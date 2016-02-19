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

<?php if($this->checkSpotlight('tabs')) {?>
	<section id="tabwrap" class="clearfix <?php echo $this->rowClass('tabs');?>">
		<div class="zen-container">
			<a id="tabs-link" name="tabs-link"></a>
			<div class="zen-row">
				<div class="zen-spotlight">
					
						<?php echo $this->loadModule('tabs', 'zentabs');?>
				</div>
			</div>
		</div>
	</section>
<?php }?>