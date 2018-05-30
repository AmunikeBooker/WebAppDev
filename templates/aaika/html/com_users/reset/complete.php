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
  <div class="aaika_form2 <?php echo $this->pageclass_sfx?>">
    <?php if ($this->params->get('show_page_heading')) : ?>
    <h1> <?php echo $this->escape($this->params->get('page_heading')); ?> </h1>
    <?php endif; ?>
    <form action="<?php echo JRoute::_('index.php?option=com_users&task=reset.complete'); ?>" method="post" class="form-validate sky-form">
      <?php foreach ($this->form->getFieldsets() as $fieldset) : ?>
      <p><?php echo JText::_($fieldset->label); ?></p>
      <fieldset>
        <section>
          <div class="row">
            <?php foreach ($this->form->getFieldset($fieldset->name) as $name => $field) : ?>
            <label class="label col col-5"><?php echo $field->label; ?></label>
            <div class="col col-7">
              <label class="input"><?php echo $field->input; ?></label>
            </div>
            <?php endforeach; ?>
          </div>
        </section>
      </fieldset>
      <?php endforeach; ?>
      <footer>
        <button type="submit" class="validate subbutton"><?php echo JText::_('JSUBMIT'); ?></button>
        <?php echo JHtml::_('form.token'); ?> </footer>
    </form>
  </div>
</div>
