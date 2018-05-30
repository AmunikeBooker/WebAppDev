<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>

<header> <?php echo JText::_('COM_USERS_PROFILE_CORE_LEGEND'); ?> </header>
<fieldset id="users-profile-core">
  <section>
    <div class="row">
      <label class="label col col-5"> <?php echo JText::_('COM_USERS_PROFILE_NAME_LABEL'); ?> </label>
      <div class="label col col-7"> <?php echo $this->data->name; ?> </div>
    </div>
    <div class="row">
      <label class="label col col-5"> <?php echo JText::_('COM_USERS_PROFILE_USERNAME_LABEL'); ?> </label>
      <div class="label col col-7"> <?php echo htmlspecialchars($this->data->username); ?> </div>
    </div>
    <div class="row">
      <label class="label col col-5"> <?php echo JText::_('COM_USERS_PROFILE_REGISTERED_DATE_LABEL'); ?> </label>
      <div class="label col col-7"> <?php echo JHtml::_('date', $this->data->registerDate); ?> </div>
    </div>
    <div class="row">
      <label class="label col col-5"> <?php echo JText::_('COM_USERS_PROFILE_LAST_VISITED_DATE_LABEL'); ?> </label>
      <?php if ($this->data->lastvisitDate != '0000-00-00 00:00:00'){?>
      <div class="label col col-7"> <?php echo JHtml::_('date', $this->data->lastvisitDate); ?> </div>
      <?php }
		else
		{?>
      <div class="label col col-7"> <?php echo JText::_('COM_USERS_PROFILE_NEVER_VISITED'); ?> </div>
      <?php } ?>
    </div>
  </section>
</fieldset>
