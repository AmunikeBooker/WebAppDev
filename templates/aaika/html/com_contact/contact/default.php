<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$cparams = JComponentHelper::getParams('com_media');

jimport('joomla.html.html.bootstrap');

$app = JFactory::getApplication();
$template   = $app->getTemplate(true);
$params     = $template->params;
$menu = JSite::getMenu();
$menu1 = $menu->getActive();
// pagetitel
$pagetitle = $menu1->title;

?>
<?php
	   $app = JFactory::getApplication();
	   $template   = $app->getTemplate(true);
	   $params     = $template->params;
	   
	    $con_line1 = $params->get('con_line1');
		$con_line2 = $params->get('con_line2');
		$con_line3 = $params->get('con_line3');
		



		?>
<?php 
		   if($pagetitle=='Contact Style 1')
		   {
		   $contact_layout='contact1';

		   }
		   else if($pagetitle=='Contact Style 2')
		   {
		   $contact_layout='contact2';
		   }
		  else if($pagetitle=='Contact Style 3')
		   {
		   $contact_layout='contact3';
		   }
		   ?>
<?php 
if($contact_layout=='contact1')
{?>

<div class="content_fullwidth less">
  <div class="one_full">
    <?php
		 //Map 1
		 $document = &JFactory::getDocument();
         $renderer       = $document->loadRenderer('modules');
         $position       = 'js-contactmap1';
         $options        = array('style' => 'raw');
         echo $renderer->render($position, $options, null); 
        ?>
  </div>
  <div class="clearfix marb10"></div>
  <div class="two_third">
    <p><?php echo $con_line1; ?></p>
    <br />
    <p><?php echo $con_line2; ?> <strong><?php echo $con_line3; ?></strong></p>
    <br />
    <br />
    <br />
    <header>Send Us a <strong>Message!</strong></header>
    <?php  echo $this->loadTemplate('form');  ?>
  </div>
  <!-- end section -->
  
  <div class="one_third last">
    <div class="address_info two">
      <?php
		 // Address 1
         $document = &JFactory::getDocument();
         $renderer       = $document->loadRenderer('modules');
         $position       = 'js-contactadd1';
         $options        = array('style' => 'raw');
         echo $renderer->render($position, $options, null); 
		 ?>
    </div>
    <!-- end section -->
    
    <div class="address_info two">
      <?php
		 // Address 2
         $document = &JFactory::getDocument();
         $renderer       = $document->loadRenderer('modules');
         $position       = 'js-contactadd2';
         $options        = array('style' => 'raw');
         echo $renderer->render($position, $options, null); 
		 ?>
    </div>
    <!-- end section --> 
  </div>
</div>
<?php  } ?>
<?php 
       if($contact_layout=='contact2')
       {?>
<div class="content_fullwidth">
  <div class="one_half">
    <p><?php echo $con_line1; ?></p>
    <br />
    <p><?php echo $con_line2; ?> <strong><?php echo $con_line3; ?></strong></p>
    <br />
    <br />
    <br />
    <?php  echo $this->loadTemplate('form');  ?>
  </div>
  <div class="one_half last">
    <div class="address_info">
      <?php
		 // Address 1
         $document = &JFactory::getDocument();
         $renderer       = $document->loadRenderer('modules');
         $position       = 'js-contactadd1';
         $options        = array('style' => 'raw');
         echo $renderer->render($position, $options, null); 
		 ?>
    </div>
    <div class="clearfix"></div>
    <h4>Find the <strong>Address</strong></h4>
    <?php
		 //Map 1
		 $document = &JFactory::getDocument();
         $renderer       = $document->loadRenderer('modules');
         $position       = 'js-contactmap2';
         $options        = array('style' => 'raw');
         echo $renderer->render($position, $options, null); 
        ?>
    <?php } ?>
  </div>
</div>
<div class="clearfix marb12"></div>
<?php 
       if($contact_layout=='contact3')
       {?>
<div class="container">
  <div class="content_fullwidth less">
    <div class="two_third">
      <p><?php echo $con_line1; ?></p>
      <br />
      <p><?php echo $con_line2; ?> <strong><?php echo $con_line3; ?></strong></p>
      <br />
      <br />
      <br />
      <?php  echo $this->loadTemplate('form');  ?>
      <br />
      <div class="one_full">
        <?php
		 //Map 1
		 $document = &JFactory::getDocument();
         $renderer       = $document->loadRenderer('modules');
         $position       = 'js-contactmap3';
         $options        = array('style' => 'raw');
         echo $renderer->render($position, $options, null); 
        ?>
      </div>
    </div>
    <!-- end section -->
    <div class="one_third last">
      <div class="address_info two">
        <?php
		 // Address 1
         $document = &JFactory::getDocument();
         $renderer       = $document->loadRenderer('modules');
         $position       = 'js-contactadd1';
         $options        = array('style' => 'raw');
         echo $renderer->render($position, $options, null); 
		 ?>
      </div>
      <!-- end section -->
      
      <div class="address_info two">
        <?php
		 // Address 1
         $document = &JFactory::getDocument();
         $renderer       = $document->loadRenderer('modules');
         $position       = 'js-contactadd2';
         $options        = array('style' => 'raw');
         echo $renderer->render($position, $options, null); 
		 ?>
      </div>
      <!-- end section --> 
      
    </div>
  </div>
</div>
<div class="clearfix marb12"></div>
<?php } ?>
