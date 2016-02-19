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
	
	// Define template name
	if (!defined('TEMPLATE')) {
		define( 'TEMPLATE', basename(dirname(dirname(dirname(__FILE__)))));
	}
	
	jimport('joomla.filesystem.folder');
	jimport('joomla.filesystem.file');
	
	// Get folder name
	$folder = $jinput->get('folder','','RAW');
	$width = $jinput->get('width');
	$height = $jinput->get('height');
	
	$thumb_folder = $folder . '/thumbs/';
	$images = $zgf->files(ROOT_PATH .'/' . $folder);

	include(TEMPLATE_PATH .'zengrid/libs/resize/imageresize.php');
	
	foreach ($images as $key => $image) {
		$image = $folder.'/'.$image;
		
		$thumb = ZenToolsResizeImageHelper::getResizedImage($image, ($width), ($height), 'crop', $thumb_folder);
	}
	
} else {
	header("Location: ".JUri::base());
	die();
}