<?php
/**
 * ------------------------------------------------------------------------
 * JUDownload for Joomla 3.x
 * ------------------------------------------------------------------------
 *
 * @copyright      Copyright (C) 2010-2016 JoomUltra Co., Ltd. All Rights Reserved.
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 * @author         JoomUltra Co., Ltd
 * @website        http://www.joomultra.com
 * @----------------------------------------------------------------------@
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

require dirname(__FILE__) . '/helper.php';

// Initialise variables.
$lang         = JFactory::getLanguage();
$user         = JFactory::getUser();
$app          = JFactory::getApplication();
$hideMainmenu = $app->input->get('hidemainmenu');

$show_menu = $params->get('show_menu', 0);
if ($show_menu)
{
	$hideMainmenu = false;
}

// Get the authorised components and sub-menus.
$menuItems = ModJUDownloadMenuHelper::getJUDownloadMenu();

// Render the module layout
require JModuleHelper::getLayoutPath('mod_judownload_menu', $params->get('layout', 'default'));
