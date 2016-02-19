<?php
defined('_JEXEC') or die;

/* =====================================================================
Template:	Xero - Base theme for the Zen Grid Framework v4.
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */

//
//
// Lazyload Images
//
//

if($this->params->lazyload) { ?>

	<script>
		jQuery(document).ready(function($){
			$("<?php echo $this->params->llselector; ?>").not("<?php echo $this->params->llnotselector; ?>").lazyload({
				effect : "fadeIn"
		});
	});
	</script>
<?php } ?>



<?php 

//
//
// Back To top button
//
//

if($this->params->backtotop) {?>

<div id="toTop" class="hidden-phone zen-fixed zen-scroll-top btn btn-secondary"><a id="toTopLink"><?php if($this->params->backtotopicon) {?><span class="fa fa-arrow-up zen-icon zen-icon-arrow-up"></span><?php } ?><span id="toTopText"><?php echo $this->params->backtotoptext;?></span></a></div>
<script>
	jQuery(document).ready(function($){
			
			$(window).scroll(function () {
			
				if ($(this).scrollTop() >200) {
				 	$("#toTop").fadeIn();
				}
				else {
				 	$("#toTop").fadeOut();
				}
			});
		
			$("#toTop").click(function() {
				$("html, body").animate({ scrollTop: 0 }, "slow");
				 return false;
			});
	});
</script>
<?php } ?>



<?php 

if($this->params->accordion) {

//
// Accordion
//


?>


<script>
jQuery(document).ready(function($){
	
	
	$('.sidebar').zenaccordion({
	
		<?php if($this->params->accordionOpenFirst) { ?>
  		 openfirst: true,
  		 <?php } 
  		 if($this->params->accordionShowActive) { ?>
  		 showactive: true,
  		 <?php } ?>
  		 type:"<?php echo $this->params->accordionType ?>"
 	});
 	

});
</script>
<?php } ?>





<?php if($this->params->onepage) {

//
// One Page
// 

?>


<script>
jQuery(document).ready(function($){
	// Das ist Smooth linking
	$('#navwrap a,#off-canvas-menu a,.smooth').smoothScroll({
		offset: -120,
		easing: 'swing'
	});
	
	$('#navwrap a').click(function() {
		$('#navwrap a').parent().removeClass('active'); 
		$(this).parent().addClass('active');
		return false;
	});
	
	$('#off-canvas-menu a').live('click', function() {		
		
		$('#off-canvas-menu a').smoothScroll({
			offset: -120,
			easing: 'swing'
		});
		
		return false;
	});
});
</script>
<?php } ?>


<?php if($this->params->stickynav) {

//
// Sticky Nav
// 

?>
<script>
jQuery(document).ready(function($){
	
	var win      = $(window),
	    fxel     = $('#navwrap'),
	    fill     = $('#sticky-fill'),
	    navheight = $('#menu').height(),
	    eloffset = fxel.offset().top;
	 
	    $(fill).height(navheight);

	win.scroll(function() {
	    if (eloffset < win.scrollTop()) {
	        fxel.addClass("fixed");
	        $('html').addClass("fixed");
	        $(fill).addClass('visible').removeClass('hidden');
	    } else {
	        fxel.removeClass("fixed");
	        $('html').removeClass("fixed");
	        $(fill).removeClass('visible').addClass('hidden');
	    }
	});
});
</script>
<?php } ?>


<?php 

if($this->params->navcollapse_type =="select") {

//
// Select menu
//


?>


<script>
jQuery(window).ready(function ($) {
   $('#menu ul').ReSmenu({
   		activeClass:  'current',
   		maxWidth:     '<?php echo $this->params->navcollapse;?>'                   // Size to which the menu is responsive
    });
});
</script>
<?php } ?>


<?php 

if($this->params->navcollapse_type =="toggle" && $this->params->enable_responsive) { 

//
//
// Toggle menu
//
//

?>
	<script>
		jQuery(document).ready(function ($) {
		   	$('#navwrap nav').meanmenu({
		   		<?php if($this->params->onepage) { ?>
		   		onePage: true,
		   		<?php } ?>
		   		meanScreenWidth: '<?php echo str_replace('px','',$this->params->navcollapse);?>' 
		   	});
		});
	</script>
<?php } ?>

<?php 

//
//
// Enable Animations
//
//

if($this->params->enable_animations) { ?>
	<script>
	 new WOW().init();
	</script>
<?php } ?>




<!-- Fonts -->
<?php if($this->params->use_font_loader) {

//
//
// Google FOnts
//
//

echo $this->fonts(
				$this->params->bodyfont,
				$this->params->headingfont,
				$this->params->navfont,
				$this->params->logofont,
				$this->params->customfont,
				$this->params->bodyfont_custom,
				$this->params->headingfont_custom,
				$this->params->navfont_custom,
				$this->params->logofont_custom,
				$this->params->customfont_custom
); 

}?>

