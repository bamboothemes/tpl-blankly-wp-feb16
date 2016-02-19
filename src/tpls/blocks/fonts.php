<?php defined('ZEN_ALLOW') or die();

/* =====================================================================
Template:	Xero - Base theme for the Zen Grid Framework v4.
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */

$bodyfont = $this->params->bodyfont;
$headingfont = $this->params->headingfont; 
$navfont = $this->params->navfont; 
$logofont = $this->params->logofont; 

$customfont = $this->params->customfont;
$customfontselector = $this->params->customfontselector;

if($customfont == "-1") {
	$customfont = $this->params->customfont_custom;
}


?>

<style type="text/css">
<?php 
	if($bodyfont == "-1") { ?>
			html > body {
				font-family: <?php echo zen4::cleanFonts($this->params->bodyfont_custom); ?>;
				
			}
	<?php } else { ?>
			html > body {
				font-family: <?php echo $bodyfont ?>;
			}
	<?php } 

		if($headingfont == "-1") { 
			?>
			h1, h2, h3, h4, h5, h6, blockquote {
				font-family: <?php echo zen4::cleanFonts($this->params->headingfont_custom); ?>;
			}
	<?php } else {  ?>
			h1, h2, h3, h4, h5, h6, blockquote {
				font-family: <?php echo $headingfont ?>;
			}
	<?php } ?>
	
	<?php  if($navfont == "-1") { 
				?>
				#navwrap li a, #navwrap li span {
					font-family: <?php echo zen4::cleanFonts($this->params->navfont_custom); ?>;
				}
	<?php } else {  ?>
				#navwrap li a, #navwrap li span  {
					font-family: <?php echo $navfont ?>;
			}
	<?php } ?>
		
	<?php  if($logofont == "-1") { 
				?>
				#logo h1,#logo h2,#logo h3,#logo h4 {
					font-family: <?php echo zen4::cleanFonts($this->params->logofont_custom); ?>;
				}
	<?php } else {  ?>
				#logo h1,#logo h2,#logo h3,#logo h4  {
					font-family: <?php echo $logofont; ?>;
				}
	<?php } ?>
	
	<?php if($customfontselector !=="") { ?>
		<?php echo $customfontselector ?> {font-family:<?php echo $customfont; ?>;<?php echo $this->params->customFontCSS ?>}
		
	<?php }?>
</style>