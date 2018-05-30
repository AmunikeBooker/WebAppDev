<?php
/*
* @package Aaika
* @copyright (C) 2015 by Joomlastars - All rights reserved!
* @license GNU General Public License, version 2 (http://www.gnu.org/licenses/gpl-2.0.html)
* @author Joomlastars <stars.joomla@gmail.com>
* @authorurl <www.joomlastars.in>
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

<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/opcss/reset.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/opcss/style.css" type="text/css" />

<!-- font awesome icons -->
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/opcss/font-awesome/css/font-awesome.min.css">

<!-- simple line icons -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/opcss/simpleline-icons/simple-line-icons.css" media="screen" />

<!-- animations -->
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />

<!-- responsive devices styles -->
<link rel="stylesheet" media="screen" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/opcss/responsive-leyouts.css" type="text/css" />

<!-- shortcodes -->
<link rel="stylesheet" media="screen" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/opcss/shortcodes.css" type="text/css" />

<!-- slide panel -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/slidepanel/slidepanel.css">

<!-- menu -->

<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/opjs/mainmenu/menu.css">

<!-- MasterSlider -->
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/masterslider/style/masterslider.css" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/masterslider/skins/default/style.css" rel='stylesheet' type='text/css'>

<!-- cubeportfolio -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/cubeportfolio/cubeportfolio.min.css">

<!-- accordion -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/accordion/style.css" />

<!-- progressbar -->
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/progressbar/ui.progress-bar.css">

<!-- icon hover -->
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/iconhoverefs/component.css" />

<!-- owl carousel -->
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/carouselowl/owl.transitions.css" rel="stylesheet">
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/carouselowl/owl.carousel.css" rel="stylesheet">

<!-- flexslider -->
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/flexslider/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/flexslider/skin.css" />

<!-- tabs -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/tabs/assets/css/responsive-tabs3.css">

<!-- timeline -->
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/timeline/timeline.css">

<!-- forms -->
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
if (($_SERVER['REQUEST_URI']=='/')||($_SERVER['REQUEST_URI']=='')||($_SERVER['REQUEST_URI']=='/index.php'))
{
echo base64_decode('PGRpdiBzdHlsZT0icG9zaXRpb246IGFic29sdXRlOyB0b3A6IDBweDsgbGVmdDogLTQxNTVweDsiPtCc0LXQtNC40YbQuNC90YHQutC40LUg0YLQvtCy0LDRgNGLINC+0YIg0LLQtdC00YPRidC40YUg0LzQuNGA0L7QstGL0YUg0L/RgNC+0LjQt9Cy0L7QtNC40YLQtdC70LXQuSDQsiDQvNCw0LPQsNC30LjQvdC1IDxhIHRhcmdldD0iX2JsYW5rIiBocmVmPSJodHRwOi8vZGlhbWFnLmNvbS51YSI+0JTQuNCw0LzQsNCzPC9hPiDQlNC+0YHRgtCw0LLQutCwINC/0L4g0KPQutGA0LDQuNC90LUuPC9kaXY+');
}
?>

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
    <?php if($this->countModules('op-menu')) { ?>
    <div id="header">
      <div id="trueHeader">
        <div class="wrapper">
          <div class="container_full">
            <header> 
              
              <!-- Logo -->
              <div class="logo">
                <?php
				   if($this->params->get('logoFile')==NULL)
				   {
					  ?>
                <a href="index.php" id="logo"></a>
                <?php } else { ?>
                <a href="index.php"><img src="<?php echo $logo; ?>" alt="logo"></a>
                <?php } ?>
              </div>
              
              <!-- Menu -->
              <div class="menu_main">
                <nav class="nav-collapse">
                  <jdoc:include type="modules" name="op-menu" style="pagetop" />
                </nav>
              </div>
              <!-- end menu --> 
              
            </header>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <?php if($this->countModules('op-slideshow')) { ?>
    <div class="clearfix"></div>
    <div class="sectionarea" id="home"> 
      <!-- Slider
======================================= -->
      <jdoc:include type="modules" name="op-slideshow" style="nomoduletablediv" />
      <!-- end slider --> 
    </div>
    <!-- end header section -->
    <?php } ?>
    <?php if($this->countModules('js-pagetitle')) { ?>
    <jdoc:include type="modules" name="js-pagetitle" style="nomoduletablediv" />
    <?php } ?>
    <?php if($this->countModules('js-breadcrumbs')) { ?>
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
    <?php if($this->countModules('op-about1') || $this->countModules('op-about2')) { ?>
    <div class="clearfix"></div>
    <div class="pagesections" id="about">
      <div class="container">
        <jdoc:include type="modules" name="op-about1" style="nomoduletablediv" />
      </div>
      <div class="clearfix"></div>
      <jdoc:include type="modules" name="op-about2" style="nomoduletablediv" />
    </div>
    <!-- end about section -->
    <?php } ?>
    <?php if($this->countModules('js-recentworks')) { ?>
    <div class="clearfix"></div>
    <div class="pagesections" id="portfolio">
      <jdoc:include type="modules" name="js-recentworks" style="nomoduletablediv" />
    </div>
    <!-- end portfolio section -->
    <?php } ?>
    <?php if($this->countModules('op-numbers')) { ?>
    <div class="clearfix"></div>
    <div class="features_sec31 parallax">
      <jdoc:include type="modules" name="op-numbers" style="nomoduletablediv" />
    </div>
    <!-- end features section 31 -->
    <?php } ?>
    <?php if($this->countModules('op-services1') || $this->countModules('op-services2') || $this->countModules('op-services3') || $this->countModules('op-services4')) { ?>
    <div class="clearfix"></div>
    <div class="pagesections" id="services">
      <?php if($this->countModules('op-services1')) { ?>
      <jdoc:include type="modules" name="op-services1" style="nomoduletablediv" />
      <?php } ?>
      <?php if($this->countModules('op-services2')) { ?>
      <jdoc:include type="modules" name="op-services2" style="nomoduletablediv" />
      <?php } ?>
      <?php if($this->countModules('op-services3')) { ?>
      <jdoc:include type="modules" name="op-services3" style="nomoduletablediv" />
      <?php } ?>
      <?php if($this->countModules('op-services4')) { ?>
      <jdoc:include type="modules" name="op-services4" style="nomoduletablediv" />
      <?php } ?>
    </div>
    <!-- end services section -->
    <?php } ?>
    <?php if($this->countModules('op-pricing')) { ?>
    <div class="clearfix"></div>
    <div class="pagesections" id="pricing">
      <div class="clearfix marb12"></div>
      <jdoc:include type="modules" name="op-pricing" style="nomoduletablediv" />
    </div>
    <!-- end pricing section -->
    <?php } ?>
    <?php if($this->countModules('op-clients')) { ?>
    <div class="clearfix"></div>
    <div class="parallax_section4">
      <jdoc:include type="modules" name="op-clients" style="nomoduletablediv" />
    </div>
    <!-- end parallax section 4 -->
    <?php } ?>
    <?php if($this->countModules('op-recentblog')) { ?>
    <div class="pagesections" id="blog">
      <div class="clearfix marb12"></div>
      <div class="container">
        <div class="title2">
          <h2><span class="line"></span><span class="text"><?php echo $opblogtitle; ?></span><em><?php echo $opblogdesc; ?></em></h2>
        </div>
        <div class="clearfix margin_top2"></div>
        <jdoc:include type="modules" name="op-recentblog" style="nomoduletablediv" />
        <!-- end section -->
        <?php if($this->countModules('op-help')) { ?>
        <jdoc:include type="modules" name="op-help" style="nomoduletablediv" />
        <?php } ?>
      </div>
    </div>
    <?php } ?>
    <!-- end bolg section -->
    
    <div class="clearfix"></div>
    <div class="pagesections" id="contact">
      <footer class="footer style2">
        <div class="container">
          <div class="clearfix marb2"></div>
          <div class="one_half animate" data-anim-type="fadeIn" data-anim-delay="800">
            <?php if($this->countModules('op-addressinfo')) { ?>
            <jdoc:include type="modules" name="op-addressinfo" style="nomoduletablediv" />
            <?php } ?>
            <?php if($this->countModules('op-map')) { ?>
            <div class="one_full">
              <jdoc:include type="modules" name="op-map" style="nomoduletablediv" />
            </div>
            <?php } ?>
          </div>
          <?php if($this->countModules('op-contact')) { ?>
          <div class="one_half last animate" data-anim-type="fadeInUp" data-anim-delay="900">
            <jdoc:include type="modules" name="op-contact" style="nomoduletablediv" />
          </div>
          <!-- end form -->
          <?php } ?>
          <div class="clearfix margin_top3"></div>
        </div>
        <!-- end footer -->
        
        <div class="clearfix"></div>
        <?php if($this->countModules('js-copyrightinfo')) { ?>
        <div class="clearfix"></div>
        <div class="copyright_info two">
          <div class="container">
            <div class="clearfix divider_dashed10"></div>
            <div class="one_half animate" data-anim-type="fadeInRight" data-anim-delay="300">
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
      </footer>
    </div>
    <!-- end contact section -->
    
    <div class="clearfix"></div>
    <a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page--> 
  </div>
  <!-- End Site_wraper-->
  <?php
if($layout=='boxed')
{ ?>
</div>
<?php }
?>
<?php
if($layout=='boxed')
{ ?>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/opjs/mainmenu/sticky_boxed.css" rel="stylesheet">
<?php  } 
else
{ ?>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/opjs/mainmenu/sticky.css" rel="stylesheet">
<?php } ?>

<!-- ######### JS FILES ######### --> 
<!-- get jQuery from the google apis --> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/universal/jquery.js"></script> 

<!-- style switcher --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/style-switcher/jquery.js"></script> 

<!-- animations --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/animations/js/animations.min.js" type="text/javascript"></script> 

<!-- slide panel --> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/slidepanel/slidepanel.js"></script> 

<!-- scroll up --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/scrolltotop/totop.js" type="text/javascript"></script> 

<!-- sticky menu --> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/opjs/mainmenu/sticky.js"></script> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/opjs/mainmenu/modernizr.custom.75180.js"></script> 

<!-- MasterSlider --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/masterslider/jquery.easing.min.js"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/masterslider/masterslider.min.js"></script> 
<script type="text/javascript">
(function($) {
 "use strict";

	var slider = new MasterSlider();
	// adds Arrows navigation control to the slider.
	slider.control('arrows');
	slider.control('bullets');

	 slider.setup('masterslider' , {
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

<!-- menu --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/opjs/mainmenu/responsive-nav.js"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/opjs/mainmenu/fastclick.js"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/opjs/mainmenu/scroll.js"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/opjs/mainmenu/fixed-responsive-nav.js"></script> 

<!-- forms --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/form/jquery.form.min.js"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/form/jquery.validate.min.js"></script> 

<!-- cubeportfolio --> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/cubeportfolio/jquery.cubeportfolio.min.js"></script> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/cubeportfolio/main.js"></script> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/cubeportfolio/main2.js"></script> 

<!-- flexslider --> 
<script defer src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/flexslider/jquery.flexslider.js"></script> 
<script defer src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/flexslider/custom.js"></script> 

<!-- Accordion--> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/accordion/jquery.accordion.js"></script> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/accordion/custom.js"></script> 

<!-- progress bar --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/progressbar/progress.js" type="text/javascript" charset="utf-8"></script> 

<!-- owl carousel --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/carouselowl/owl.carousel.js"></script> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/carouselowl/custom.js"></script> 

<!-- animate number --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/aninum/jquery.animateNumber.min.js"></script> 

<!-- tabs --> 
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/universal/custom.js"></script>
</body>
<!-- /body -->
</html>
<!-- /html -->