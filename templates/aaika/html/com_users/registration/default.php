<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
?>

<div class="content_fullwidth less2">
  <div class="reg_form <?php echo $this->pageclass_sfx?>">
    <?php if ($this->params->get('show_page_heading')) : ?>
    <div class="page-header">
      <h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
    </div>
    <?php endif; ?>
    <form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=registration.register'); ?>" method="post" class="sky-form2" enctype="multipart/form-data">
      <header><?php echo $this->escape($this->params->get('page_heading')); ?></header>
      <?php foreach ($this->form->getFieldsets() as $fieldset): // Iterate through the form fieldsets and display each one.?>
      <?php $fields = $this->form->getFieldset($fieldset->name);?>
      <?php if (count($fields)):?>
      <fieldset>
        <?php if (isset($fieldset->label)):// If the fieldset has a label set, display it as the legend.
		?>
        <?php endif;?>
        <?php foreach ($fields as $field) :// Iterate through the fields in the set and display them.?>
        <?php if ($field->hidden):// If the field is hidden, just display the input.?>
        <?php echo $field->input;?>
        <?php else:?>
        <section>
          <label class="input"> <?php echo $field->input;?> </label>
        </section>
        <?php endif;?>
        <?php endforeach;?>
      </fieldset>
      <?php endif;?>
      <?php endforeach;?>
      <footer>
        <button type="submit" class="subbutton"><?php echo JText::_('JREGISTER');?></button>
        <a href="<?php echo JRoute::_('');?>" title="<?php echo JText::_('JCANCEL');?>"><?php echo JText::_('JCANCEL');?></a>
        <input type="hidden" name="option" value="com_users" />
        <input type="hidden" name="task" value="registration.register" />
        <?php echo JHtml::_('form.token');?> </footer>
    </form>
  </div>
</div>
<div class="clearfix margin_top7"></div>
