<?php
/*
* @package Aaika
* @copyright (C) 2015 by Joomlastars - All rights reserved!
* @license GNU General Public License, version 2 (http://www.gnu.org/licenses/gpl-2.0.html)
* @author Joomlastars <stars.joomla@gmail.com>
* @authorurl <http://themeforest.net/user/joomlastars>
*/
?>
<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );
$path = $this->baseurl.'/templates/'.$this->template;
$app = JFactory::getApplication();

//factory
$document = JFactory::getDocument();

//General
$app->getCfg('sitename');
$siteName = $this->params->get('siteName');
$templateparams	= $app->getTemplate(true)->params;

//Logo Options
$logo = $this->params->get('logoFile');

//Color Options
$themecolor = $this->params->get('themecolor');
$_SESSION['themecolor'] = $themecolor;

//Home Versions
$home = $this->params->get('home');
 
//Layout Options
$layout = $this->params->get('layout');

//Pattern options
$pattern = $this->params->get('pattern');

//Social Media Options
$social = $this->params->get('social');
$_SESSION['social']=$social;

//OP Recent blog
$opblogtitle = $this->params->get('opblogtitle');
$opblogdesc = $this->params->get('opblogdesc');

// Comingsoon description
$cstitle = $this->params->get('cstitle');
$csdesc = $this->params->get('csdesc');

// Contact title for slider with form
$ctitle1 = $this->params->get('ctitle1');
$ctitle2 = $this->params->get('ctitle2');
?>