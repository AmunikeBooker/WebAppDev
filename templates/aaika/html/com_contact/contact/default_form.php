<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');

if (isset($this->error)) : ?>

<div class="contact-error"> <?php echo $this->error; ?> </div>
<?php endif; ?>
<div class="cforms">
  <form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate sky-form2">
    <fieldset>
      <div class="row">
        <section class="col col-6">
          <label class="label"><?php echo $this->form->getLabel('contact_name'); ?></label>
          <label class="input"><i class="icon-append icon-user"></i> <?php echo $this->form->getInput('contact_name'); ?> </label>
        </section>
        <section class="col col-6">
          <label class="label"><?php echo $this->form->getLabel('contact_email'); ?></label>
          <label class="input"> <i class="icon-append icon-envelope-alt"></i> <?php echo $this->form->getInput('contact_email'); ?> </label>
        </section>
      </div>
      <section>
        <label class="label"><?php echo $this->form->getLabel('contact_subject'); ?></label>
        <label class="input"> <i class="icon-append icon-tag"></i> <?php echo $this->form->getInput('contact_subject'); ?> </label>
      </section>
      <section>
        <label class="label"><?php echo $this->form->getLabel('contact_message'); ?></label>
        <label class="textarea"> <i class="icon-append icon-comment"></i> <?php echo $this->form->getInput('contact_message'); ?> </label>
      </section>
      <?php if ($this->params->get('show_email_copy')) { ?>
      <section>
        <label class="checkbox"> <?php echo $this->form->getInput('contact_email_copy'); ?> <i></i><?php echo $this->form->getLabel('contact_email_copy'); ?></label>
      </section>
      <?php } ?>
    </fieldset>
    <?php //Dynamically load any additional fields from plugins. ?>
    <?php foreach ($this->form->getFieldsets() as $fieldset) : ?>
    <?php if ($fieldset->name != 'contact'):?>
    <?php $fields = $this->form->getFieldset($fieldset->name);?>
    <?php foreach ($fields as $field) : ?>
    <div class="control-group">
      <?php if ($field->hidden) : ?>
      <div class="controls"> <?php echo $field->input;?> </div>
      <?php else:?>
      <div class="control-label"> <?php echo $field->label; ?>
        <?php if (!$field->required && $field->type != "Spacer") : ?>
        <span class="optional"><?php echo JText::_('COM_CONTACT_OPTIONAL');?></span>
        <?php endif; ?>
      </div>
      <div class="controls"><?php echo $field->input;?></div>
      <?php endif;?>
    </div>
    <?php endforeach;?>
    <?php endif ?>
    <?php endforeach;?>
    <footer>
      <button class="subbutton validate colorchan" type="submit"><?php echo JText::_('COM_CONTACT_CONTACT_SEND'); ?></button>
    </footer>
    <input type="hidden" name="option" value="com_contact" />
    <input type="hidden" name="task" value="contact.submit" />
    <input type="hidden" name="return" value="<?php echo $this->return_page;?>" />
    <input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
    <?php echo JHtml::_('form.token'); ?>
  </form>
</div>
