<?php defined('ZEN_ALLOW') or die();

/* =====================================================================
Template:	Xero - Base theme for the Zen Grid Framework v4.
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */


?>
<div class="zen-row">
	<div class="zen-spotlight">
	
	<?php 
			
			// Used to count the number of items that the user
			// Has published in the layout tool.
			// We compare that later on to see if we should honour the layout tool
			// Otherwise we end up with empty space in the layout.
			// Loop through the modules to see all modules that are listed are published
			
			$equalcols = 0;
			$i = 0;
			$gridprefix = 'zen-col zen-col-';
			$equalise_columns = $this->params->force_equal;
			
			foreach ($modules as $module => $width) {
				
				$published = (is_active_sidebar($module)?1:0);
				
				// We cant count the main content as being published
				if($module == 'maincontent') {
					$published = 1;
				}
				
				if(!$published) {
					
					// Check to see if we should equalise the columns
					// if not all modules are published on a specific page
					if($equalise_columns) {
						$equalcols = 1;
					}
					
				} else {
					$i = $i + 1;
				}
			}

		if($i) {
			foreach ($modules as $module => $width) {
				
				if($equalcols) {
					$width = 12 / $i;
				}
				
				
				if($module == 'maincontent') { ?>
					
					<div id="midCol" class="<?php echo $gridprefix;?><?php echo $width;?>">
					
						<?php $this->loadBlock('main-content'); ?>
					
					</div>
			
				<?php } else {
				
					if (is_active_sidebar($module)) : ?>
		
						<div id="<?php echo $module;?>" class="<?php echo $gridprefix;?><?php echo $width;?>">
			
							<?php $this->loadModule($module);?>
		
						</div>
		
					<?php endif;
				}
			} 
		}?>
	</div>
</div>