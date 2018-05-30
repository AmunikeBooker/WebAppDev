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
  <div class="aaika_form <?php echo $this->pageclass_sfx?>">
    <?php if ($this->params->get('show_page_heading')) : ?>
    <div class="page-header">
      <h1> <?php echo $this->escape($this->params->get('page_heading')); ?> </h1>
    </div>
    <?php endif; ?>
    <form id="user-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=reset.request'); ?>" method="post" class="form-validate form-horizontal sky-form2">
      <header>Password recovery</header>
      <?php foreach ($this->form->getFieldsets() as $fieldset) : ?>
      <p><?php echo JText::_($fieldset->label); ?></p>
      <fieldset>
        <?php foreach ($this->form->getFieldset($fieldset->name) as $name => $field) : ?>
        <section>
          <div class="row">
            <label class="label col col-4"> <?php echo $field->label; ?> </label>
            <div class="col col-8">
              <label class="input"> <?php echo $field->input; ?> </label>
            </div>
          </div>
        </section>
        <?php endforeach; ?>
      </fieldset>
      <?php endforeach; ?>
      <footer>
        <button type="submit" class="subbutton validate" > <?php echo JText::_('JSUBMIT'); ?> </button>
        <?php echo JHtml::_('form.token'); ?> </footer>
    </form>
  </div>
</div>
<div class="clearfix margin_top7"></div>
