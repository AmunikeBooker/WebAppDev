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
?>

<div class="content_fullwidth less2">
  <div class="login_form <?php echo $this->pageclass_sfx?>">
    <?php if ($this->params->get('show_page_heading')) : ?>
    <div class="page-header">
      <h1> <?php echo $this->escape($this->params->get('page_heading')); ?> </h1>
    </div>
    <?php endif; ?>
    <?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
    <div class="login-description">
      <?php endif; ?>
      <?php if ($this->params->get('logindescription_show') == 1) : ?>
      <?php echo $this->params->get('login_description'); ?>
      <?php endif; ?>
      <?php if (($this->params->get('login_image') != '')) :?>
      <img src="<?php echo $this->escape($this->params->get('login_image')); ?>" class="login-image" alt="<?php echo JTEXT::_('COM_USER_LOGIN_IMAGE_ALT')?>"/>
      <?php endif; ?>
      <?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
    </div>
    <?php endif; ?>
    <form action="<?php echo JRoute::_('index.php?option=com_users&task=user.login'); ?>" method="post" class="sky-form2">
      <header><?php echo $this->escape($this->params->get('page_heading')); ?></header>
      <fieldset">
      <?php  $i=0; ?>
      <?php foreach ($this->form->getFieldset('credentials') as $field) : ?>
      <?php if (!$field->hidden) : 
				?>
      <section>
        <div class="row">
          <label class="label col col-4"> <?php echo $field->label; ?> </label>
          <div class="col col-8">
            <label class="input">
              <?php 
								 
								  if($i==0)
								  { ?>
              <i class="icon-append icon-user"></i>
              <?php } else { ?>
              <i class="icon-append icon-lock"></i>
              <?php }  ?>
              <?php echo $field->input; ?> </label>
          </div>
        </div>
      </section>
      <?php endif;  $i++; ?>
      <?php endforeach; ?>
      <?php if ($this->tfa): ?>
      <div class="control-group">
        <div class="control-label"> <?php echo $this->form->getField('secretkey')->label; ?> </div>
        <div class="controls"> <?php echo $this->form->getField('secretkey')->input; ?> </div>
      </div>
      <?php endif; ?>
      <section>
        <div class="row">
          <div class="col col-4"></div>
          <div class="col col-8">
            <div class="note"> <a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>"> <?php echo JText::_('COM_USERS_LOGIN_RESET'); ?></a><br />
              <a href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>"> <?php echo JText::_('COM_USERS_LOGIN_REMIND'); ?></a><br />
              <?php
                            $usersConfig = JComponentHelper::getParams('com_users');
                            if ($usersConfig->get('allowUserRegistration')) : ?>
              <a href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>"> <?php echo JText::_('COM_USERS_LOGIN_REGISTER'); ?></a><br />
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>
      <?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
      <section>
        <div class="row">
          <div class="col col-4"></div>
          <div class="col col-8">
            <label class="checkbox">
              <input id="remember" type="checkbox" name="remember" class="inputbox" value="yes"/>
              <i></i><?php echo JText::_('COM_USERS_LOGIN_REMEMBER_ME') ?></label>
          </div>
        </div>
      </section>
      <?php endif; ?>
      </fieldset>
      <footer>
        <div class="fright">
          <button type="submit" class="subbutton"> <?php echo JText::_('JLOGIN'); ?> </button>
        </div>
      </footer>
      <input type="hidden" name="return" value="<?php echo base64_encode($this->params->get('login_redirect_url', $this->form->getValue('return'))); ?>" />
      <?php echo JHtml::_('form.token'); ?>
    </form>
  </div>
</div>
<div class="clearfix margin_top7"></div>
