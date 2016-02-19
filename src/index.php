<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank.ly
 */
 
 include_once FRAMEWORK_PATH . '/zen.php'; 
 $zen = new zen4();
 

 $layout_file = 'default.php';
 
 if(isset($zen->params->layout_file)) {
 	$layout_file = $zen->params->layout_file;
 }
 
 // Include the layout file
 include TEMPLATE_PATH  . '/tpls/'.$layout_file;

