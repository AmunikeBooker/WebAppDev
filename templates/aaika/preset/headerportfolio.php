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
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- ######### CSS STYLES ######### -->

<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/reset.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/style.css" type="text/css" />

<!-- font awesome icons -->
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/font-awesome/css/font-awesome.min.css">

<!-- simple line icons -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/simpleline-icons/simple-line-icons.css" media="screen" />

<!-- animations -->
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />

<!-- responsive devices styles -->
<link rel="stylesheet" media="screen" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/responsive-leyouts.css" type="text/css" />

<!-- shortcodes -->
<link rel="stylesheet" media="screen" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/shortcodes.css" type="text/css" />

<!-- slide panel -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/slidepanel/slidepanel.css">

<!-- accordion -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/accordion/style.css" />

<!-- progressbar -->
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/progressbar/ui.progress-bar.css">

<!-- MasterSlider -->
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/masterslider/style/masterslider.css" />
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/masterslider/skins/default/style.css" />
<link href='<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/masterslider/ms-lightbox.css' rel='stylesheet' type='text/css'>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/masterslider/prettyPhoto.css"  rel='stylesheet' type='text/css'/>

<!-- icon hover -->
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/iconhoverefs/component.css" />

<!-- basic slider -->
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/basicslider/bacslider.css" />

<!-- cubeportfolio -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/cubeportfolio/cubeportfolio.min.css">

<!-- flexslider -->
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/flexslider/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/flexslider/skin.css" />

<!-- tabs -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/tabs/assets/css/responsive-tabs.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/tabs/assets/css/responsive-tabs2.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/tabs/assets/css/responsive-tabs3.css">

<!-- tooltips -->
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/tooltips/darktooltip.css" />

<!-- owl carousel -->
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/carouselowl/owl.transitions.css" rel="stylesheet">
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/carouselowl/owl.carousel.css" rel="stylesheet">

<!-- timeline -->
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/timeline/timeline.css">

<!-- image hover effects -->
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/ihovereffects/main.css">

<!-- forms -->
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/form/sky-forms2.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/form/sky-forms.css" type="text/css" media="all">

<?php
	
	if((!$this->countModules('js-left')) && ($this->countModules('js-right')) )
    {
	$cls = "content_left";
	}
	if(($this->countModules('js-left')) && (!$this->countModules('js-right')) )
    {
	$cls = "content_right";
	}
?>
<?php
$app = JFactory::getApplication();
$menu = $app->getMenu();
$lang = JFactory::getLanguage();
if ($menu->getActive() == $menu->getDefault($lang->getTag())) {?>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/condition.css" rel="stylesheet" type="text/css" />
<?php }
?>
<?php if ($menu->getActive() != $menu->getDefault()) 
{ 
    $innerpages="innerpages";
}

?>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/mainmenu/bootstrap.min.css" rel="stylesheet">
<?php 
//  Boxed Layout set by preset
if($layout=='boxed')
{ ?>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/boxed.css" rel="stylesheet">
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/mainmenu/menu-2_boxed.css" rel="stylesheet">
<?php } else { ?>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/mainmenu/menu-2.css" rel="stylesheet">
<?php } ?>

<!-- tabs -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/tabs/tabwidget/tabwidget.css" />

<!-- Color Css -->
<?php
if($themecolor != "default") { 	?>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/colors/<?php echo  $_SESSION['themecolor']; ?>.css" rel="stylesheet" type="text/css" />
<?php } ?>
</head>
<!-- /head -->

<!-- =========================================
    body
    ========================================== -->
<body>
<?php
if($layout=='boxed')
{ ?>
<?php $path= JURI::base().'templates/'.$this->template."/images/elements/pattern".$pattern.".png"; ?>
<style type="text/css">
 body {
    background: url("<?php echo $path ;?>") repeat fixed center top rgba(0, 0, 0, 0);
 }
</style>
<div class="wrapper_boxed">
  <?php }
?>
  <!-- Site_wraper-->
  <div class="site_wrapper">
    <?php if($this->countModules('js-pagetop')) { ?>
    <div id="sliderWrap">
      <div id="openCloseIdentifier"></div>
      <div id="slider">
        <div id="sliderContent">
          <div class="container">
            <jdoc:include type="modules" name="js-pagetop" style="pagetop" />
          </div>
        </div>
      </div>
      <div id="openCloseWrap"><a href="#" class="topMenuAction" id="topMenuImage"><img src="templates/aaika/js/slidepanel/open.png" alt="open" title="open" /></a></div>
    </div>
    <?php } ?>
    <!-- end slide wrap -->
    
    <div class="clearfix"></div>
    <header class="header <?php echo $innerpages; ?>">
      <div class="container"> 
        
        <!-- Logo -->
        <div class="logo">
          <?php
				   if($this->params->get('logoFile')==NULL)
				   {
					  ?>
          <a href="index.php" id="logo2"></a>
          <?php } else { ?>
          <a href="index.php"><img src="<?php echo $logo; ?>" alt="logo2"></a>
          <?php } ?>
        </div>
        
        <!-- Navigation Menu -->
        <nav class="menu_main">
          <div class="navbar yamm navbar-default">
            <div class="container">
              <div class="navbar-header">
                <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  > <span>Menu</span>
                  <button type="button" > <i class="fa fa-bars"></i></button>
                </div>
              </div>
              <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">
                <?php if($this->countModules('js-menu')) { ?>
                <jdoc:include type="modules" name="js-menu" style="nomoduletablediv" />
                <?php } ?>
              </div>
            </div>
          </div>
        </nav>
        <!-- end Navigation Menu -->
      </div>
    </header>
    <div class="clearfix"></div>
    <!-- Slider
======================================= -->
    <?php 
  if($this->countModules('js-slideshow8')) { ?>
    <jdoc:include type="modules" name="js-slideshow8" style="nomoduletablediv" />
    <?php }  ?>
    <!-- end slider -->
    
    <?php if($this->countModules('js-pagetitle')) { ?>
    <jdoc:include type="modules" name="js-pagetitle" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-breadcrumbs')) { ?>
    <div class="bgimage"></div>
    <div class="page_title2">
      <div class="container">
        <h1><?php echo $doc->getTitle(); ?></h1>
        <jdoc:include type="modules" name="js-breadcrumbs" style="nomoduletablediv" />
      </div>
    </div>
    <?php } ?>
    <!-- end page title --> 
    
    <!-- content Section -->
    <?php if ($menu->getActive() != $menu->getDefault()) { 
			  ?>
    <div class="container">
      <?php if($this->countModules('js-left')) { ?>
      <div class="left_sidebar">
        <jdoc:include type="modules" name="js-left" style="leftright" />
      </div>
      <?php } ?>
      <div class="<?php echo $cls; ?>">
        <jdoc:include type="message" />
        <jdoc:include type="component" />
      </div>
      <?php if($this->countModules('js-right')) { ?>
      <div class="right_sidebar">
        <jdoc:include type="modules" name="js-right" style="leftright" />
      </div>
      <?php } ?>
      <?php if ($menu->getActive() == $menu->getDefault()) { ?>
      <div class="clearfix"></div>
      <?php } else { ?>
      <div class="clearfix mar_top4"></div>
      <?php } ?>
    </div>
    <?php } ?>
    <?php if($this->countModules('js-features30')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-features30" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('home1_js-features31')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="home1_js-features31" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-recentworks2')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-recentworks2" style="nomoduletablediv" />
    <?php } ?>
    <!-- end recent works -->
    
    <?php if($this->countModules('js-features32')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-features32" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('home1_js-parallax4')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="home1_js-parallax4" style="nomoduletablediv" />
    <!-- end features section 13 -->
    <?php } ?>
    
    <!-- About Style 2 -->
    <?php if($this->countModules('js-features55')) { ?>
    <jdoc:include type="modules" name="js-features55" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-features56')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-features56" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-features57')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-features57" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-features38')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-features38" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-features58')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-features58" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-flipclientinfo')) { ?>
    <jdoc:include type="modules" name="js-flipclientinfo" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-features59')) { ?>
    <div class="clearfix marb8"></div>
    <jdoc:include type="modules" name="js-features59" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-parallax8')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-parallax8" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-aboutstyle4')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-aboutstyle4" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-features60')) { ?>
    <jdoc:include type="modules" name="js-features60" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-parallax7')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-parallax7" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-features37')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-features37" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-features33')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-features33" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-aboutstyle5')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-aboutstyle5" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-aboutstyle1')) { ?>
    <div class="clearfix"></div>
    <div class="divider_line2 nop"></div>
    <div class="container">
      <jdoc:include type="modules" name="js-aboutstyle1" style="nomoduletablediv" />
    </div>
    <!-- end all sections -->
    <?php } ?>
    <?php if($this->countModules('js-features54')) { ?>
    <div class="clearfix marb12"></div>
    <div class="features_sec54">
      <div class="container">
        <jdoc:include type="modules" name="js-features54" style="nomoduletablediv" />
      </div>
    </div>
    <!-- end features section 54 -->
    <?php } ?>
    <?php if($this->countModules('js-features49')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-features49" style="nomoduletablediv" />
    <!-- end features section 49 -->
    <?php } ?>
    <?php if($this->countModules('js-features61')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-features61" style="nomoduletablediv" />
    <!-- end features section 13 -->
    <?php } ?>
    <?php if($this->countModules('js-features53')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-features53" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-features4')) { ?>
    <div class="clearfix"></div>
    <div class="features_sec4">
      <div class="container">
        <jdoc:include type="modules" name="js-features4" style="nomoduletablediv" />
      </div>
    </div>
    <!-- end features section 4 -->
    <?php } ?>
    <?php if($this->countModules('js-servicesstyle1')) { ?>
    <div class="clearfix margin_top12"></div>
    <jdoc:include type="modules" name="js-servicesstyle1" style="nomoduletablediv" />
    <!-- end features section 13 -->
    <?php } ?>
    <?php if($this->countModules('js-parallax9')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-parallax9" style="nomoduletablediv" />
    <!-- end parallax section 9 -->
    <?php } ?>
    <?php if($this->countModules('js-servicesstyle2')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-servicesstyle2" style="nomoduletablediv" />
    <!-- end counters4 section -->
    <?php } ?>
    <?php if($this->countModules('js-servicesstyle3')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-servicesstyle3" style="nomoduletablediv" />
    <!-- end counters4 section -->
    <?php } ?>
    <?php if($this->countModules('js-servicesstyle4')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-servicesstyle4" style="nomoduletablediv" />
    <!-- end counters4 section -->
    <?php } ?>
    <?php if($this->countModules('js-servicesstyle5')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-servicesstyle5" style="nomoduletablediv" />
    <!-- end counters4 section -->
    <?php } ?>
    <?php if($this->countModules('js-teamstyle1')) { ?>
    <div class="clearfix"></div>
    <jdoc:include type="modules" name="js-teamstyle1" style="nomoduletablediv" />
    <!-- end counters4 section -->
    <?php } ?>
    <?php if($this->countModules('js-teamstyle1')) { ?>
    <jdoc:include type="modules" name="js-videobackground" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-features13')) { ?>
    <div class="clearfix margin_top9"></div>
    <div class="features_sec13">
      <jdoc:include type="modules" name="js-features13" style="nomoduletablediv" />
    </div>
    <!-- end features section 13 -->
    <?php } ?>
    <div class="clearfix"></div>
    <footer class="footer style2">
      <div class="container">
        <jdoc:include type="modules" name="js-footer2links" style="footer2links" />
        <div class="one_fourth">
          <jdoc:include type="modules" name="js-footer2blog" style="footer2blog" />
          <!-- end footer blogs -->
          <jdoc:include type="modules" name="js-footer2tag" style="footer2tag" />
        </div>
        <!-- end address -->
        
        <div class="one_fourth animate" data-anim-type="fadeInUp" data-anim-delay="300">
          <jdoc:include type="modules" name="js-footer2about" style="footer2about" />
          <jdoc:include type="modules" name="js-footer2tweet" style="nomoduletablediv" />
        </div>
        <!-- end site info -->
        
        <div class="one_fourth last animate" data-anim-type="fadeInUp" data-anim-delay="300">
          <jdoc:include type="modules" name="js-footer2address" style="nomoduletablediv" />
          <jdoc:include type="modules" name="js-footer2contact" style="footer2contact" />
        </div>
        <!-- end about --> 
        
      </div>
      <!-- end footer -->
      
      <div class="clearfix"></div>
      <?php if($this->countModules('js-copyrightinfo')) { ?>
      <div class="clearfix"></div>
      <div class="copyright_info two">
        <div class="container">
          <div class="clearfix divider_dashed10"></div>
          <div class="one_half animate" data-anim-type="fadeInRight">
            <jdoc:include type="modules" name="js-copyrightinfo" style="nomoduletablediv" />
          </div>
          <div class="one_half last">
            <ul class="footer_social_links two">
              <jdoc:include type="modules" name="js-sociallinks" style="nomoduletablediv" />
            </ul>
          </div>
        </div>
      </div>
      <!-- end copyright info -->
      <?php } ?>
      <!-- end copyright info --> 
      
    </footer>
    <a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page--> 
  </div>
  <!-- End Site_wraper-->
  <?php
if($layout=='boxed')
{ ?>
</div>
<?php }
?>

<!-- ######### JS FILES ######### --> 
<!-- get jQuery from the google apis --> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/universal/jquery.js"></script> 

<!-- style switcher --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/style-switcher/jquery.js"></script> 

<!-- animations --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/animations/js/animations.min.js" type="text/javascript"></script> 

<!-- slide panel --> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/slidepanel/slidepanel.js"></script> 

<!-- mega menu --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/mainmenu/bootstrap.min.js"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/mainmenu/customeUI.js"></script> 

<!-- tab widget --> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/tabs/tabwidget/tabwidget.js"></script> 

<!-- scroll up --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/scrolltotop/totop.js" type="text/javascript"></script> 

<!-- sticky menu --> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/mainmenu/sticky-main.js"></script> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/mainmenu/modernizr.custom.75180.js"></script> 

<!-- cubeportfolio --> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/cubeportfolio/jquery.cubeportfolio.min.js"></script> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/cubeportfolio/main.js"></script> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/cubeportfolio/main2.js"></script> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/cubeportfolio/main3.js"></script> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/cubeportfolio/main4.js"></script> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/cubeportfolio/main5.js"></script> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/cubeportfolio/main6.js"></script> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/cubeportfolio/main7.js"></script> 
<!-- Accordion--> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/accordion/jquery.accordion.js"></script> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/accordion/custom.js"></script> 

<!-- progress bar --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/progressbar/progress.js" type="text/javascript" charset="utf-8"></script> 

<!-- flexslider --> 
<script defer src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/flexslider/jquery.flexslider.js"></script> 
<script defer src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/flexslider/custom.js"></script> 

<!-- basic slider --> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/basicslider/bacslider.js"></script> 
<script type="text/javascript">
(function($) {
 "use strict";
 
	$(document).ready(function() {
		$(".main-slider-container").sliderbac();
	});
	
})(jQuery);
</script> 

<!-- tabs --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script> 

<!-- tooltips --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/tooltips/jquery.darktooltip.js"></script> 

<!-- owl carousel --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/carouselowl/owl.carousel.js"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/carouselowl/custom.js"></script> 

<!-- animate number --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/aninum/jquery.animateNumber.min.js"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/timeline/modernizr.js"></script> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/universal/custom.js"></script> 

<!-- MasterSlider --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/masterslider/jquery.easing.min.js"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/masterslider/masterslider.min.js"></script> 
<script type="text/javascript">
(function($) {
 "use strict";
	var slider2 = new MasterSlider();

	 slider2.setup('masterslider2' , {
		 width:1400,    // slider standard width
		 height:520,   // slider standard height
		 space:0,
		 speed:45,
		 layout:'fullwidth',
		 loop:true,
		 preload:0,
		 autoplay:true,
		 view:"basic"
	});
	
})(jQuery);
</script> 
<script type="text/javascript">      
 (function(jQuery) {
 "use strict";
 
    var slider = new MasterSlider();
 
    slider.control('arrows');  
    slider.control('lightbox');
    slider.control('thumblist' , {autohide:false ,dir:'h',align:'bottom', width:130, height:85, margin:5, space:5 , hideUnder:400});
 
    slider.setup('masterslider' , {
        width:750,
        height:400,
        space:5,
        loop:true,
        view:'fade'
    });
     
    jQuery(document).ready(function(){
        jQuery("a[rel^='prettyPhoto']").prettyPhoto();
    });

})(jQuery);
</script> 
<script type="text/javascript">
(function($) {
 "use strict";

	var slider = new MasterSlider();
	// adds Arrows navigation control to the slider.

	 slider.setup('slideshow4' , {
		 width:1400,    // slider standard width
		 height:750,   // slider standard height
		 space:0,
		 speed:45,
		 layout:'fullwidth',
		 loop:true,
		 preload:0,
		 autoplay:true,
		 view:"basic"
	});
	
})(jQuery);
</script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/masterslider/jquery.prettyPhoto.js"></script> 

<!-- classyloader--> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/classyloader/jquery.classyloader.min.js"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/custom.js"></script>
</body>
<!-- /body -->
</html>
<!-- /html -->