<?php
/**
 * @package     Joomla.site
 * @subpackage  com_config
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Loads the default override for the Zen Grid Framework
$base = dirname(dirname(dirname(__FILE__)));
$override = preg_replace('/'.preg_quote($base, '/').'/', '', __FILE__, 1);
include($base.'/zengrid/'.$override);