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
	
	// Get theme name
	$theme = $jinput->get('theme');
	
	
	$path = '/templates/'.TEMPLATE.'/';
	
	JFile::delete(ROOT_PATH.$path.'css/theme.'.$theme.'.css');
	JFile::delete(ROOT_PATH.$path.'css/theme.'.$theme.'.php');
	JFile::delete(ROOT_PATH.$path.'settings/themes/theme.'.$theme.'.json');
	
	echo 'The '.$theme.' theme and related assets have been deleted.';
} else {
	header("Location: ".JUri::base());
	die();
}