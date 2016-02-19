<?php
defined('_JEXEC') or die;

/* =====================================================================
Template:	Xero - Base theme for the Zen Grid Framework v4.
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2013
Copyright:	Anthony Olsen - (C) 2013 - All rights reserved
/* ===================================================================== */ 

$offcanvas = 0;

if($this->countModules('offcanvas') || $this->params->navcollapse_type =="offcanvas") {
	$offcanvas = 1;
}

$nav_collapse = str_replace('px', '', $this->params->navcollapse);

?>

<?php if ($offcanvas) : ?>
<div class="sb-slidebar off-canvas-<?php echo $this->params->offcanvas_position; ?> sb-width-<?php echo $this->params->offcanvas_width;?>">
	<div class="off-canvas-inner">
		<div class="off-canvas-heading">
			<span class="sb-close"><span class="zen-icon-remove zen-icon fa fa-remove"></span></span>
		</div>
		<div class="off-canvas-body">
			<div id="off-canvas-menu"><ul></ul></div>
			<?php $this->loadModule('offcanvas');?>
		</div>
	</div>
</div>
 <?php endif;?> 
 
<?php if ($offcanvas) : ?> 
<script>
	
	jQuery(document).ready(function($) {
			
		<?php if($this->params->navcollapse_type =="offcanvas") { ?>	
			
				// Append nav if required
				$('body').append_nav('<?php echo str_replace('px', '', $this->params->navcollapse);?>');	
						
				$(window).resize(function() {
					$('body').append_nav('<?php echo str_replace('px', '', $this->params->navcollapse);?>');			
				});
			
			 	<?php // Only add accordion class if not using one page mode
			 		if(!($this->params->onepage)) { ?>
					
				 					 			
			 	<?php } ?>
			
			 
			
		<?php } ?>	
			
			$.slidebars();
		});

</script>
<?php endif;?> 