<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JLoader::register('JHtmlUsers', JPATH_COMPONENT . '/helpers/html/users.php');
JHtml::register('users.spacer', array('JHtmlUsers', 'spacer'));
JHtml::register('users.helpsite', array('JHtmlUsers', 'helpsite'));
JHtml::register('users.templatestyle', array('JHtmlUsers', 'templatestyle'));
JHtml::register('users.admin_language', array('JHtmlUsers', 'admin_language'));
JHtml::register('users.language', array('JHtmlUsers', 'language'));
JHtml::register('users.editor', array('JHtmlUsers', 'editor'));

?>

<header> <?php echo JText::_('COM_USERS_SETTINGS_FIELDSET_LABEL'); ?> </header>
<?php $fields = $this->form->getFieldset('params'); ?>
<?php if (count($fields)) : ?>
<fieldset id="users-profile-custom">
  <section>
    <div class="row">
      <?php foreach ($fields as $field):
		if (!$field->hidden) :?>
      <label class="label col col-5"><?php echo $field->title; ?></label>
      <div class="label col col-7">
        <?php if (JHtml::isRegistered('users.'.$field->id)):?>
        <?php echo JHtml::_('users.'.$field->id, $field->value);?>
        <?php elseif (JHtml::isRegistered('users.'.$field->fieldname)):?>
        <?php echo JHtml::_('users.'.$field->fieldname, $field->value);?>
        <?php elseif (JHtml::isRegistered('users.'.$field->type)):?>
        <?php echo JHtml::_('users.'.$field->type, $field->value);?>
        <?php else:?>
        <?php echo JHtml::_('users.value', $field->value);?>
        <?php endif;?>
      </div>
      <?php endif;?>
      <?php endforeach;?>
    </div>
  </section>
</fieldset>
<?php endif;?>
