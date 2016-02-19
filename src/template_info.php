<?php
/**
 * @package		##package##
 * @subpackage	##subpackage##
 * @author		##author##
 * @copyright 	##copyright##
 * @license		##license##
 * @version		##version##
 */
 
// no direct access
// Use this file to publish information for your template 
// in the overview area.

defined('ZEN_ALLOW') or die();

// Instantiate $zgf
$zgf = new zen();

$zgfversion = $zgf->get_xml('zengrid/zen.xml');

?>

<div class="preview-left">
	<img class="templatePreview" src="../<?php echo TEMPLATE_PATH_RELATIVE;?>/template_preview.png" alt="Template Preview" />
</div>
<div class="preview-right">
	<h3>XERO is a blank starting point for the Zen Grid Framework version 4.</h3>
	<p> It's a stand alone theme that is lightweight and fast straight out of the box. Please ensure that you also have the zenmenu plugin and zen shortcode plugin installed to take advantage of it's extra functionality.</p>
	
	<h3>Useful Links</h3>
	<p>
		<a class="uk-button uk-button-primary" href="http://www.joomlabamboo.com/joomla-templates/xero">Template Features</a>
		<a class="uk-button uk-button-primary" href="http://docs.joomlabamboo.com/joomla-templates/xero-documentation">Template Documentation</a>
		<a class="uk-button uk-button-primary" href="http://docs.joomlabamboo.com/zen-grid-framework-4/">Zengridframework V4 Documentation</a> 
		<a class="uk-button uk-button-primary" href="http://www.joomlabamboo.com/index.php?option=com_kunena&view=category&catid=677&Itemid=215">Template Support</a>
	</p>
	
	<h3>Associated Extensions</h3>
	<p>
		<a class="uk-button uk-button-primary" href="http://docs.joomlabamboo.com/zen-grid-framework-4/menus/Zen-menu-plugin.html">Zenmenu</a> 
		<a class="uk-button uk-button-primary" href="http://docs.joomlabamboo.com/zen-grid-framework-4/theme/Using-shortcodes.html">Zen Shortcodes</a>
	</p>

	
	<h3>Built with the <?php echo $zgfversion->name;?></h3>
	<p><?php echo $zgfversion->description;?></p>
	<p><a href="<?php echo $zgfversion->link;?>">View Zen Grid Framework V4 Features</a></p>
	<p>
	<strong>Version:</strong> <?php echo $zgfversion->version;?> | <strong>Release Date:</strong> <?php echo $zgfversion->date;?> | <strong>Changelog:</strong> <a href="<?php echo $zgfversion->changelog;?>">View</a></p>
</div>



