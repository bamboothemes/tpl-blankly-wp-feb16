<?php
defined('_JEXEC') or die;

/* =====================================================================
Template:	Xero - Base theme for the Zen Grid Framework v4.
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */ 

if($this->params->enable_responsive) { ?>
	<?php if($this->params->allow_pinch) { ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0,  user-scalable=yes, shrink-to-fit=no"/>
	<?php } else { ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no"/>
	<?php } ?>
	<meta name="HandheldFriendly" content="true" />
	<meta name="apple-mobile-web-app-capable" content="YES" />
<?php } 

	wp_head(); 
	
	// Font Loader
	if(!$this->params->use_font_loader) {
		$this->loadFonts();
	} 
	
	
	// Load theme css and custom.css if it exists
	$this->load_css(); 
	$this->load_asset('css/custom','.css', 0); 
	
	 // Typekit fonts
	if(isset($this->params->use_typekit)) { 
		
			if($this->params->use_typekit) { ?>
				<script src="//use.typekit.net/<?php echo $this->params->typekit_id;?>.js"></script>
				<script>try{Typekit.load();}catch(e){}</script>
	<?php 	} 
	}
	
	// Load Template fonts
	$this->loadBlock('fonts'); 
	
	// Load theme javascript
	$this->load_js(); ?>