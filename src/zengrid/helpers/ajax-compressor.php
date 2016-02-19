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
defined( 'ZEN_ALLOW' ) or die( 'Restricted access' );


$jinput = JFactory::getApplication()->input;
$admin = $jinput->get('admin');

if($admin) {
	jimport('joomla.filesystem.file');
	
	// Define template name
	if (!defined('TEMPLATE')) {
		define( 'TEMPLATE', basename(dirname(dirname(dirname(__FILE__)))));
	}
	
	jimport('joomla.filesystem.path');
	jimport('joomla.filesystem.file');
	
	// Receive Data
	$template_id = $jinput->get('id');
		
	// Files from Assets.xml
	$files = $jinput->get('files', '', 'RAW');
	$files = explode(',', $files);
	
	$wowjs = $jinput->get('wowjs');
	
	if($wowjs) {
		$files[] = '../zengrid/libs/zengrid/js/wow.min.js';
	}
	
	$files = array_filter($files);
	
	// Add path variable
	$path = JPATH_SITE . '/templates/' . $this->template.'/js/';
	
	// Import Compile Library
	require_once JPath::clean(__DIR__ . '/../libs/jshrink/minifier.php');
	
	// Create file array
	$compress = array();
	$buffer ="";
	
	foreach ($files as $key => $file) {
		if($file !=="") {
			$buffer .= JFile::read($path . $file) . "\n";	
		}
	}
	
	
	// Custom Files from Admin
	$custom = $jinput->get('custom', '', 'RAW');
	
	if($custom !=="") {
		$custom = explode(',', $custom);
	
		foreach ($custom as $key => $file) {
			
			$file = preg_replace('/\s+/', '', $file);
			if($file !=="") {
				$buffer .= JFile::read($file) . "\n";
			}	
		}
	}
	
	// Minify all the scripts
	$minifiedCode = \JShrink\Minifier::minify($buffer);
	
	// Write the compressed file
	JFile::write($path.'template-'.$template_id.'.js', $minifiedCode);
	
	
	// Create gzipped version
	$gzip = '<?php ob_start ("ob_gzhandler");
	    header("Content-type: application/js; charset: UTF-8");
	    header("Cache-Control: must-revalidate");
	    $offset = 60 * 60 ;
	    $ExpStr = "Expires: " .
	    gmdate("D, d M Y H:i:s",
	    time() + $offset) . " GMT";
	    header($ExpStr);?>';
	
	$gzip .= $minifiedCode;
	
	// Write the compressed file
	JFile::write($path.'template-'.$template_id.'.php', $gzip);
} else {
	header("Location: ".JUri::base());
	die();
}