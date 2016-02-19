<?php
defined('_JEXEC') or die;

/* =====================================================================
Template:	Xero - Base theme for the Zen Grid Framework v4.
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */


$assets = $this->getassets(); 
$settings = $this->getParams();
$layout = $settings->layout;
$settings = $settings->params;
$theme_params = $this->getThemeParams();
$add_to_compressor = explode(',', $this->params->add_to_compressor);
$add_to_compiler = explode(',', $this->params->add_to_compiler);
?>

<?php $this->loadModule('debug');?>

<?php if($this->params->print_settings) { ?>
	
	<div class="zen-container">
	  <div class="zen-row">
	  		<div class="zen-col zen-col-12">
	  			<h3>Files Loaded by assets.xml</h3>
	  			<pre><?php foreach ($assets as $key => $asset) {
	  				if($asset !=="") {
	  					echo $asset;
	  					echo '<br />';
	  				}
	  			} ?>
	  			</pre>
	  			
	  			<h3>Files Loaded by Add to Compressor Admin Setting</h3>
	  				<pre><?php foreach ($add_to_compressor as $key => $asset) {
	  					if($asset !=="") {
	  						echo $asset;
	  						echo '<br />';
	  					}
	  				} ?>
	  				</pre>
	  			
	  			<h3>Files Loaded by Add to Compiler Admin Setting</h3>
  					<pre><?php foreach ($add_to_compiler as $key => $asset) {
  						if($asset !=="") {
  							echo $asset;
  							echo '<br />';
  						}
  					} ?>
  					</pre>
	  					
	  		</div>
	  </div>
	</div>
	<div class="zen-container">
	  <div class="zen-row">
			<div class="zen-col zen-col-4">
				<h3>Template Settings</h3>
				<pre><?php // Get Template settings
				
				foreach ($settings as $key => $setting) {
					if(!is_object($setting)) {
						echo '<strong>'. $key . '</strong>-' . $setting;
						echo '<br />';
					}
					
					else {
						echo '<strong>'. $key . '</strong>-';
						print_r($setting);
					}
				} ?>
				</pre>
			</div>
			
			<div class="zen-col zen-col-4">
				<h3>Layout Settings</h3>
				<pre><?php // Get Template settings				
				foreach ($layout as $key => $layout) {
					
					foreach ($layout->positions as $key => $position) {
						echo 'Position: ';
						echo $key;
						echo ' - ';
						echo $position;	
						echo ' cols';
						echo '<br/>';
					}
					echo 'Classes: ';
					echo $layout->classes->classes;
					echo '<br/>';
					echo '------';
					echo '<br/>';
				} ?>
				</pre>
			</div>
			
			<div class="zen-col zen-col-4">
				<h3>Theme Settings</h3>
				<pre>
					<?php // Get Template settings		
						
					foreach ($theme_params as $key => $param) {
						
						echo '<strong>'. $key . '</strong>-' . $param;
						echo '<br />';
					} ?>
				</pre>
			</div>
		</div>
	</div>
	<?php	// Get Theme Settings
		
		
			
 } ?>
