<?php
/*
* @package Aaika
* @copyright (C) 2015 by Joomlastars - All rights reserved!
* @license GNU General Public License, version 2 (http://www.gnu.org/licenses/gpl-2.0.html)
* @author Joomlastars <stars.joomla@gmail.com>
* @authorurl <http://themeforest.net/user/joomlastars>
*/
?>
<?php ini_set("display_errors","0");
$app = JFactory::getApplication();
$menu   = $app->getMenu();
$menu1 = $menu->getActive();
$this->setTitle( $this->getTitle());
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$pagetitle=$doc->getTitle();

$_SESSION['language']=$this->language;

require("php/variables.php");
?>

<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="<?php echo $this->language; ?>" class="no-js">
<!--<![endif]-->
<!-- head -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- this styles only adds some repairs on idevices  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<jdoc:include type="head" />
<!-- css -->
<!-- Google fonts - witch you want to use - (rest you can just remove) -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- ######### CSS STYLES ######### -->

<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/reset.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/font-awesome/css/font-awesome.min.css">

<!-- animations -->
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />

<!-- responsive devices styles -->
<link rel="stylesheet" media="screen" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/responsive-leyouts.css" type="text/css" />

<!-- shortcodes -->
<link rel="stylesheet" media="screen" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/shortcodes.css" type="text/css" />
<link rel="stylesheet" media="screen" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/comingsoon/csoon.css" type="text/css" />
<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/comingsoon/jquery.bcat.bgswitcher.js"></script>
<!-- ######### JS FILES ######### -->
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/comingsoon/jquery.flipTimer.js"></script>

<!-- animations -->
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/animations/js/animations.min.js" type="text/javascript"></script>
</head>
<!-- /head -->

<!-- =========================================
    body
    ========================================== -->
<body>
<div id="bg-body"> </div>
<!--end -->
<div class="site_wrapper">
  <div class="comingsoon_page">
    <div class="container">
      <div class="topcontsoon"> <img src="templates/aaika/images/logo-2.png" alt="" />
        <div class="clearfix"></div>
        <h5><?php echo $cstitle; ?></h5>
      </div>
      <!-- end section -->
      
      <div class="countdown_dashboard">
        <div class="flipTimer">
          <div class="days"></div>
          <div class="hours"></div>
          <div class="minutes"></div>
          <div class="seconds"></div>
          <div class="clearfix"></div>
          <div class="fttext">DAYS</div>
          <div class="fttext">HRS</div>
          <div class="fttext">MIN</div>
          <div class="fttext">SEC</div>
        </div>
      </div>
      <!-- end section -->
      
      <div class="clearfix"></div>
      <div class="socialiconssoon">
        <p><?php echo $csdesc; ?></p>
        <div class="clearfix marb4"></div>
        <?php if($this->countModules('js-subscribe')) { ?>
        <jdoc:include type="modules" name="js-subscribe" style="footertop" />
        <?php } ?>
        <div class="clearfix"></div>
        <ul>
          <jdoc:include type="modules" name="js-sociallinks" style="nomoduletablediv" />
        </ul>
      </div>
      <!-- end section --> 
      
    </div>
  </div>
</div>
<script type="text/javascript">
var srcBgArray = ["./templates/aaika/js/comingsoon/img-slider-1.jpg","./templates/aaika/js/comingsoon/img-slider-2.jpg","./templates/aaika/js/comingsoon/img-slider-3.jpg"];

jQuery(document).ready(function() {
  jQuery('#bg-body').bcatBGSwitcher({
    urls: srcBgArray,
    alt: 'Full screen background image',
    links: true,
    prevnext: true
  });
});
  jQuery(document).ready(function() {
      //Callback works only with direction = "down"
      jQuery('.flipTimer').flipTimer({ direction: 'down', date: 'August 1, 2015 08:30:30', callback: function() { alert('times up!'); } });
    });
  </script>
</body>
<!-- /body -->
</html>
<!-- /html -->