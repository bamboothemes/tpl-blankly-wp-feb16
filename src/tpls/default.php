<?php defined('ZEN_ALLOW') or die();

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php echo $zen->bodyclass();?> zen-grid" data-navcollapse="<?php echo str_replace('px', '', $zen->params->navcollapse); ?>" data-gridcollapse="<?php echo str_replace('px', '', $zen->params->gridcollapse); ?>">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<?php if(!$zen->params->use_font_loader) {
	$zen->loadFonts();
} ?>



<?php $zen->loadBlock('head'); ?>

<?php wp_head(); ?>


<?php 	// Load Boostrap Js as well?
		if(
		(	$zen->params->framework_version == "bootstrap2" || 
			$zen->params->framework_version == "bootstrap3") 
			&& $zen->params->framework_enable) {
				JHtml::_('bootstrap.framework');
		}
		
?>
	 	
	
	
</head>

<body> 

	<div id="zen-wrap">
	
   		<?php echo $zen->params->after_body_scripts;?>
    	
    	<?php $zen->loadBlock('top'); ?>
  
    	<?php $zen->loadBlock('header'); ?>
    	
    	<?php $zen->loadBlock('logo'); ?>
    	
    	<?php $zen->loadBlock('menu'); ?>
    	
    	<?php $zen->loadBlock('banner'); ?>
    	
    	<?php $zen->loadBlock('tabs'); ?>
    	
    	<?php $zen->loadBlock('grid-block-1'); ?>
    	
    	<?php $zen->loadBlock('grid-block-2'); ?>
    	
    	<?php $zen->loadBlock('grid-block-3'); ?>
    	
    	<?php if(!$zen->hideMain()) {
    			$zen->loadBlock('main'); 
    	}?>
    	
    	<?php $zen->loadBlock('grid-block-4'); ?>
    	
    	<?php $zen->loadBlock('grid-block-5'); ?>
    	
    	<?php $zen->loadBlock('grid-block-6'); ?>
		
		<?php $zen->loadBlock('bottom'); ?>
		
		<?php $zen->loadBlock('footer'); ?>
		
		<?php $zen->loadBlock('debug'); ?>
		
	</div>	

	<?php $zen->loadBlock('social'); ?>
	
	<?php $zen->loadBlock('off-canvas'); ?>
	
	<?php $zen->loadBlock('panel'); ?>
	
	<?php $zen->loadBlock('scripts'); ?>
	
	<?php $zen->load_footer();?>
	
	<?php echo $zen->params->before_body_scripts;?>
	
	</body>
</html>