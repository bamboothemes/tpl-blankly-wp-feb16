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
	jimport('joomla.filesystem.folder');
	jimport('joomla.filesystem.file');
	
	$jinput = JFactory::getApplication()->input;
	$template_id = $jinput->get('id');
	$type = $jinput->get('type');
	$name = $jinput->get('name');
	$name = strtolower(str_replace(' ', '-', $name));
	// Settings
	$content = $jinput->get('content' ,'', 'RAW');
	
	$path = 'templates/'.TEMPLATE.'/settings/'.$type.'/';
	
	$fileName = $path . $name . '.json';
	
	if( JFile::write($fileName, $content) )
	{
	 
	}
}
else {
	header("Location: ".JUri::base());
	die();
}
