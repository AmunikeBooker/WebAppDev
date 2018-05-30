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

class ModJUDownloadMenuHelper
{
	public static function getJUDownloadMenu()
	{
		if (!JComponentHelper::isEnabled('com_judownload') || !JFactory::getUser()->authorise('core.manage', 'com_judirectory'))
		{
			return null;
		}

		JLoader::register('JUDownloadHelper', JPATH_ADMINISTRATOR . '/components/com_judownload/helpers/judownload.php');

		$menuItems          = new StdClass();
		$menuItems->text    = JText::_('COM_JUDOWNLOAD');
		$menuItems->submenu = array();

		if (JUDownloadHelper::checkGroupPermission(null, "listcats"))
		{
			$subMenuItem          = new StdClass();
			$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_MANAGER');
			$subMenuItem->link    = 'index.php?option=com_judownload&view=listcats';
			$subMenuItem->submenu = array();
			$menuItems->submenu[] = $subMenuItem;

			if (JUDownloadHelper::checkGroupPermission("document.add"))
			{
				$managerSubMenuItem       = new StdClass();
				$managerSubMenuItem->text = JText::_('MOD_JUDOWNLOAD_MENU_ADD_NEW_DOCUMENT');
				$managerSubMenuItem->link = 'index.php?option=com_judownload&task=document.add';
				$subMenuItem->submenu[]   = $managerSubMenuItem;
			}

			if (JUDownloadHelper::checkGroupPermission("category.add"))
			{
				$managerSubMenuItem       = new StdClass();
				$managerSubMenuItem->text = JText::_('MOD_JUDOWNLOAD_MENU_ADD_NEW_CATEGORY');
				$managerSubMenuItem->link = 'index.php?option=com_judownload&task=category.add';
				$subMenuItem->submenu[]   = $managerSubMenuItem;
			}

			if (self::isProVersion() && JUDownloadHelper::checkGroupPermission(null, "pendingdocuments"))
			{
				$managerSubMenuItem       = new StdClass();
				$managerSubMenuItem->text = JText::_('MOD_JUDOWNLOAD_MENU_PENDING_DOCUMENTS');
				$managerSubMenuItem->link = 'index.php?option=com_judownload&view=pendingdocuments';
				$subMenuItem->submenu[]   = $managerSubMenuItem;
			}
		}

		if (JUDownloadHelper::checkGroupPermission(null, "fields"))
		{
			$subMenuItem          = new StdClass();
			$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_FIELDS');
			$subMenuItem->link    = 'index.php?option=com_judownload&view=fields';
			$subMenuItem->submenu = array();
			$menuItems->submenu[] = $subMenuItem;

			if (self::isProVersion())
			{
				if (JUDownloadHelper::checkGroupPermission("field.add"))
				{
					$fieldsSubMenuItem       = new StdClass();
					$fieldsSubMenuItem->text = JText::_('MOD_JUDOWNLOAD_MENU_ADD_NEW_FIELD');
					$fieldsSubMenuItem->link = 'index.php?option=com_judownload&task=field.add';
					$subMenuItem->submenu[]  = $fieldsSubMenuItem;
				}

				if (JUDownloadHelper::checkGroupPermission(null, "fieldgroups"))
				{
					$fieldsSubMenuItem       = new StdClass();
					$fieldsSubMenuItem->text = JText::_('MOD_JUDOWNLOAD_MENU_FIELD_GROUPS');
					$fieldsSubMenuItem->link = 'index.php?option=com_judownload&view=fieldgroups';
					$subMenuItem->submenu[]  = $fieldsSubMenuItem;
				}

				if (JUDownloadHelper::checkGroupPermission("field.add"))
				{
					$fieldsSubMenuItem       = new StdClass();
					$fieldsSubMenuItem->text = JText::_('MOD_JUDOWNLOAD_MENU_ADD_NEW_FIELD_GROUP');
					$fieldsSubMenuItem->link = 'index.php?option=com_judownload&task=fieldgroup.add';
					$subMenuItem->submenu[]  = $fieldsSubMenuItem;
				}
			}
		}

		if (JUDownloadHelper::checkGroupPermission(null, "comments"))
		{
			$subMenuItem          = new StdClass();
			$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_COMMENTS');
			$subMenuItem->link    = 'index.php?option=com_judownload&view=comments';
			$subMenuItem->submenu = array();
			$menuItems->submenu[] = $subMenuItem;

			if (JUDownloadHelper::checkGroupPermission(null, "pendingcomments"))
			{
				$commentsSubMenuItem       = new StdClass();
				$commentsSubMenuItem->text = JText::_('MOD_JUDOWNLOAD_MENU_PENDING_COMMENTS');
				$commentsSubMenuItem->link = 'index.php?option=com_judownload&view=pendingcomments';
				$subMenuItem->submenu[]    = $commentsSubMenuItem;
			}
		}

		if (self::isProVersion())
		{
			if (JUDownloadHelper::checkGroupPermission(null, "emails"))
			{
				$subMenuItem          = new StdClass();
				$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_EMAILS');
				$subMenuItem->link    = 'index.php?option=com_judownload&view=emails';
				$subMenuItem->submenu = array();
				$menuItems->submenu[] = $subMenuItem;

				if (JUDownloadHelper::checkGroupPermission("email.add"))
				{
					$emailsSubMenuItem       = new StdClass();
					$emailsSubMenuItem->text = JText::_('MOD_JUDOWNLOAD_MENU_ADD_NEW_EMAIL');
					$emailsSubMenuItem->link = 'index.php?option=com_judownload&task=email.add';
					$subMenuItem->submenu[]  = $emailsSubMenuItem;
				}
			}
		}

		if (JUDownloadHelper::checkGroupPermission(null, "licenses"))
		{
			$subMenuItem          = new StdClass();
			$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_LICENSES');
			$subMenuItem->link    = 'index.php?option=com_judownload&view=licenses';
			$subMenuItem->submenu = array();
			$menuItems->submenu[] = $subMenuItem;

			if (JUDownloadHelper::checkGroupPermission("license.add"))
			{
				$licensesSubMenuItem       = new StdClass();
				$licensesSubMenuItem->text = JText::_('MOD_JUDOWNLOAD_MENU_ADD_NEW_LICENSE');
				$licensesSubMenuItem->link = 'index.php?option=com_judownload&task=license.add';
				$subMenuItem->submenu[]    = $licensesSubMenuItem;
			}
		}

		if (self::isProVersion())
		{
			if (JUDownloadHelper::checkGroupPermission(null, "reports"))
			{
				$subMenuItem          = new StdClass();
				$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_REPORTS');
				$subMenuItem->link    = 'index.php?option=com_judownload&view=reports';
				$subMenuItem->submenu = array();
				$menuItems->submenu[] = $subMenuItem;
			}

			if (JUDownloadHelper::checkGroupPermission(null, "logs"))
			{
				$subMenuItem          = new StdClass();
				$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_LOGS');
				$subMenuItem->link    = 'index.php?option=com_judownload&view=logs';
				$subMenuItem->submenu = array();
				$menuItems->submenu[] = $subMenuItem;

				if (JUDownloadHelper::checkGroupPermission(null, "clones"))
				{
					$logsSubMenuItem        = new StdClass();
					$logsSubMenuItem->text  = JText::_('MOD_JUDOWNLOAD_MENU_CLONES');
					$logsSubMenuItem->link  = 'index.php?option=com_judownload&view=clones';
					$subMenuItem->submenu[] = $logsSubMenuItem;
				}
			}
		}

		if (JUDownloadHelper::checkGroupPermission(null, "plugins"))
		{
			$subMenuItem          = new StdClass();
			$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_PLUGINS');
			$subMenuItem->link    = 'index.php?option=com_judownload&view=plugins';
			$subMenuItem->submenu = array();
			$menuItems->submenu[] = $subMenuItem;

			if (JUDownloadHelper::checkGroupPermission("plugin.add"))
			{
				$pluginsSubMenuItem       = new StdClass();
				$pluginsSubMenuItem->text = JText::_('MOD_JUDOWNLOAD_MENU_INSTALL_PLUGIN');
				$pluginsSubMenuItem->link = 'index.php?option=com_judownload&task=plugin.add';
				$subMenuItem->submenu[]   = $pluginsSubMenuItem;
			}
		}

		if (JUDownloadHelper::checkGroupPermission(null, "styles"))
		{
			$subMenuItem          = new StdClass();
			$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_TEMPLATE_STYLES');
			$subMenuItem->link    = 'index.php?option=com_judownload&view=styles';
			$subMenuItem->submenu = array();
			$menuItems->submenu[] = $subMenuItem;

			if (JUDownloadHelper::checkGroupPermission("style.add"))
			{
				$templateStylesSubMenuItem       = new StdClass();
				$templateStylesSubMenuItem->text = JText::_('MOD_JUDOWNLOAD_MENU_ADD_NEW_TEMPLATE_STYLE');
				$templateStylesSubMenuItem->link = 'index.php?option=com_judownload&task=style.add';
				$subMenuItem->submenu[]          = $templateStylesSubMenuItem;
			}

			if (self::isProVersion())
			{
				if (JUDownloadHelper::checkGroupPermission(null, "templates"))
				{
					$templateStylesSubMenuItem       = new StdClass();
					$templateStylesSubMenuItem->text = JText::_('MOD_JUDOWNLOAD_MENU_TEMPLATES');
					$templateStylesSubMenuItem->link = 'index.php?option=com_judownload&view=templates';
					$subMenuItem->submenu[]          = $templateStylesSubMenuItem;
				}

				if (JUDownloadHelper::checkGroupPermission("template.add"))
				{
					$templateStylesSubMenuItem       = new StdClass();
					$templateStylesSubMenuItem->text = JText::_('MOD_JUDOWNLOAD_MENU_ADD_NEW_TEMPLATE');
					$templateStylesSubMenuItem->link = 'index.php?option=com_judownload&task=template.add';
					$subMenuItem->submenu[]          = $templateStylesSubMenuItem;
				}
			}
		}

		$subMenuItem          = new StdClass();
		$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_DASHBOARD');
		$subMenuItem->link    = 'index.php?option=com_judownload&view=dashboard';
		$subMenuItem->submenu = array();
		$menuItems->submenu[] = $subMenuItem;

		if (JUDownloadHelper::checkGroupPermission(null, "languages"))
		{
			$subMenuItem          = new StdClass();
			$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_LANGUAGES');
			$subMenuItem->link    = 'index.php?option=com_judownload&view=languages';
			$subMenuItem->submenu = array();
			$menuItems->submenu[] = $subMenuItem;
		}

		if (self::isProVersion() && JUDownloadHelper::checkGroupPermission(null, "collections"))
		{
			$subMenuItem          = new StdClass();
			$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_COLLECTIONS');
			$subMenuItem->link    = 'index.php?option=com_judownload&view=collections';
			$subMenuItem->submenu = array();
			$menuItems->submenu[] = $subMenuItem;
		}

		if (JUDownloadHelper::checkGroupPermission(null, "tags"))
		{
			$subMenuItem          = new StdClass();
			$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_TAGS');
			$subMenuItem->link    = 'index.php?option=com_judownload&view=tags';
			$subMenuItem->submenu = array();
			$menuItems->submenu[] = $subMenuItem;
		}

		if (self::isProVersion())
		{
			if (JUDownloadHelper::checkGroupPermission(null, "subscriptions"))
			{
				$subMenuItem          = new StdClass();
				$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_SUBSCRIPTIONS');
				$subMenuItem->link    = 'index.php?option=com_judownload&view=subscriptions';
				$subMenuItem->submenu = array();
				$menuItems->submenu[] = $subMenuItem;
			}

			if (JUDownloadHelper::checkGroupPermission(null, "tmpfiles"))
			{
				$subMenuItem          = new StdClass();
				$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_TMP_FILES');
				$subMenuItem->link    = 'index.php?option=com_judownload&view=tmpfiles';
				$subMenuItem->submenu = array();
				$menuItems->submenu[] = $subMenuItem;
			}

			if (JUDownloadHelper::checkGroupPermission(null, "users"))
			{
				$subMenuItem          = new StdClass();
				$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_USERS');
				$subMenuItem->link    = 'index.php?option=com_judownload&view=users';
				$subMenuItem->submenu = array();
				$menuItems->submenu[] = $subMenuItem;
			}

			if (JUDownloadHelper::checkGroupPermission(null, "moderators"))
			{
				$subMenuItem          = new StdClass();
				$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_MODERATORS');
				$subMenuItem->link    = 'index.php?option=com_judownload&view=moderators';
				$subMenuItem->submenu = array();
				$menuItems->submenu[] = $subMenuItem;
			}
		}

		if (JUDownloadHelper::checkGroupPermission(null, "treestructure"))
		{
			$subMenuItem          = new StdClass();
			$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_TREE_STRUCTURE');
			$subMenuItem->link    = 'index.php?option=com_judownload&view=treestructure';
			$subMenuItem->submenu = array();
			$menuItems->submenu[] = $subMenuItem;
		}

		if (JUDownloadHelper::checkGroupPermission(null, "globalconfig"))
		{
			$subMenuItem          = new StdClass();
			$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_GLOBAL_CONFIG');
			$subMenuItem->link    = 'index.php?option=com_judownload&view=globalconfig';
			$subMenuItem->submenu = array();
			$menuItems->submenu[] = $subMenuItem;
		}

		if (JUDownloadHelper::checkGroupPermission(null, "tools"))
		{
			$subMenuItem          = new StdClass();
			$subMenuItem->text    = JText::_('MOD_JUDOWNLOAD_MENU_TOOLS');
			$subMenuItem->link    = 'index.php?option=com_judownload&view=tools';
			$subMenuItem->submenu = array();
			$menuItems->submenu[] = $subMenuItem;
		}

		return $menuItems;
	}

	public static function isProVersion()
	{
		return JFile::exists(JPATH_ADMINISTRATOR . '/components/com_judownload/controllers/pendingdocuments.php');
	}
}
