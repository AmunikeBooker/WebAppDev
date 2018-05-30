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

<div class="content_fullwidth less2">
  <div class="aaika_form <?php echo $this->pageclass_sfx?>">
    <div class="sky-form2">
      <?php if ($this->params->get('show_page_heading')) : ?>
      <header><?php echo $this->escape($this->params->get('page_heading')); ?></header>
    </div>
    <?php endif; ?>
    <?php if (JFactory::getUser()->id == $this->data->id) : ?>
    <footer>
      <div class="fright"> <a class="subbutton" href="<?php echo JRoute::_('index.php?option=com_users&task=profile.edit&user_id='.(int) $this->data->id);?>"> <?php echo JText::_('COM_USERS_EDIT_PROFILE'); ?></a> </div>
    </footer>
    <?php endif; ?>
    <?php echo $this->loadTemplate('core'); ?> <?php echo $this->loadTemplate('params'); ?> <?php echo $this->loadTemplate('custom'); ?> </div>
</div>
<div class="clearfix margin_top7"></div>
