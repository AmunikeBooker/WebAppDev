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

/**
 * Installation class to perform additional changes during install/uninstall/update
 *
 * @package     Joomla.Administrator
 * @subpackage  com_digicom
 * @since       3.4
 */
class mod_judownload_menuInstallerScript
{

	/**
	 * Method to install the extension
	 * $parent is the class calling this method
	 *
	 * @return void
	 */
	function install($parent)
	{
		//echo '<p>The module has been installed</p>';
	}

	/**
	 * Method to uninstall the extension
	 * $parent is the class calling this method
	 *
	 * @return void
	 */
	function uninstall($parent)
	{
		//echo '<p>The module has been uninstalled</p>';
	}

	/**
	 * Method to update the extension
	 * $parent is the class calling this method
	 *
	 * @return void
	 */
	function update($parent)
	{
		//echo '<p>The module has been updated to version' . $parent->get('manifest')->version . '</p>';
	}

	/**
	 * Method to run before an install/update/uninstall method
	 * $parent is the class calling this method
	 * $type is the type of change (install, update or discover_install)
	 *
	 * @return void
	 */
	function preflight($type, $parent)
	{
		//echo '<p>Anything here happens before the installation/update/uninstallation of the module</p>';
	}

	/**
	 * Method to run after an install/update/uninstall method
	 * $parent is the class calling this method
	 * $type is the type of change (install, update or discover_install)
	 *
	 * @return void
	 */
	function postflight($type, $parent)
	{
		$module = JTable::getInstance('Module', 'JTable');
		$module->load(array('module' => 'mod_judownload_menu'));
		$module->position  = 'menu';
		$module->published = 1;
		$module->ordering  = 1;
		$module->access    = 3;
		$module->params    = '{"show_menu":"0"}';

		if (!$module->check())
		{
			JFactory::getApplication()->enqueueMessage(JText::sprintf('Can not publish module. Error: %s', $module->getError()));
		}

		// Now store the module
		if (!$module->store())
		{
			JFactory::getApplication()->enqueueMessage(JText::sprintf('Can not publish module. Error: %s', $module->getError()));
		}

		// Now we need to handle the module assignments
		self::assignMenu($module->id);
	}

	public static function assignMenu($pk)
	{
		// Now we need to handle the module assignments
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true)
			->select('COUNT(*)')
			->from($db->quoteName('#__modules_menu'))
			->where($db->quoteName('moduleid') . ' = ' . $pk);
		$db->setQuery($query);
		$result = $db->loadResult();

		// Insert the new records into the table
		if (!$result)
		{
			$query->clear()
				->insert($db->quoteName('#__modules_menu'))
				->columns(array($db->quoteName('moduleid'), $db->quoteName('menuid')))
				->values($pk . ', ' . 0);
			$db->setQuery($query);
			$db->execute();
		}

		return true;
	}

}