<?php
defined('_JEXEC') or die;

/* =====================================================================
Template:	Presto Gallery - Ajax Driven template gallery for Joomla
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */

$current_url = JURI::current('true'); 
if(isset($this->params->socialicons)) {
	$socialicons = $this->params->socialicons;
}

?>

<?php if($this->check_social() || $this->countModules('panel')) { ?>
	
	<div class="social-wrap fixed">	
		
		<?php 
		
		if($this->params->pinterest) { 
			$this->loadBlock('social/pinterest'); 
		} 
		
		if($this->params->facebook) { 
			$this->loadBlock('social/facebook'); 
		} 
		
		if($this->params->twitter) { 
			$this->loadBlock('social/twitter'); 
		 }
		 
		 if($this->params->gplus) { 
		 	$this->loadBlock('social/gplus'); 
		  } 
		  
		  if($this->check_extra_social()) {
				
				// Create alternating classes
				$i = 0;  		
	  			foreach ($this->params->socialicons as $link => $icon) {
	  			
	  			if($i == 1) {
	  				$class="secondary animated-slower";
	  				$i = 0;
	  			} else {
	  				$class="primary animated-faster";
	  				$i = $i + 1;
	  			}
	  			 ?>
	  			
	  			<a target="_blank" href="<?php echo $link;?>"><span class="<?php echo $class;?> zen-animate fadeInRightBig fa fa-<?php echo $icon;?> zen-icon zen-icon-<?php echo $icon;?>"></span></a>
	  	<?php } 
	  	} 
	  	
	  	if($this->countModules('panel')) { ?>
	  	<a class="zen-modal-trigger" data-target="zen-panel-1" href="#" >
	  		<span class="zen-animate fadeInRightBig animated fa fa-plus zen-icon zen-icon-plus primary"></span>
	  	</a>
	  	<?php } ?>
	</div>	
	<script>
		jQuery(document).ready(function ($) {
			$(document).on('click', '.popup', function(){
				newwindow=window.open($(this).attr('href'),'','height=200,width=450');
			    if (window.focus) {newwindow.focus()}
			    return false;
			 });
		});
	</script>
<?php } ?>