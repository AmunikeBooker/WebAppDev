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
//Preset Options
$home = $this->params->get('home');
// Homepage set by preset
if($home == 'home_default')
{
	require("preset/home_default.php");	
}
else if($home == 'home1')
{
	require("preset/home-1.php");	
}
else if($home == 'home2')
{
	require("preset/home-2.php");	
}
else if($home == 'home3')
{
	require("preset/home-3.php");	
}
else if($home == 'home4')
{
	require("preset/home-4.php");	
}
else if($home == 'home5')
{
	require("preset/home-5.php");	
}
else if($home == 'home6')
{
	require("preset/home-6.php");	
}
else if($home == 'home7')
{
require("preset/home-7.php");	
}
else if($home == 'home8')
{
require("preset/home-8.php");	
}
else if($home == 'home9')
{
	require("preset/home-9.php");	
}
else if($home == 'home10')
{
	require("preset/home-10.php");	
}
else if($home == 'home11')
{
	require("preset/home-11.php");	
}
else if($home == 'home12')
{
	require("preset/home-12.php");	
}
else if($home == 'home13')
{
	require("preset/home-13.php");	
}
else if($home == 'home14')
{
	require("preset/home-14.php");	
}
else if($home == 'home15')
{
	require("preset/textslider.php");	
}
else if($home == 'home16')
{
	require("preset/headerportfolio.php");	
}
else if($home == 'home17')
{
	require("preset/sliderform.php");	
}
else if($home == 'home18')
{
	require("preset/headerform.php");	
}
else if($home == 'home19')
{
	require("preset/header-1.php");	
}
else if($home == 'home20')
{
	require("preset/header-2.php");	
}
else if($home == 'home21')
{
	require("preset/header-3.php");	
}
else if($home == 'home22')
{
	require("preset/header-4.php");	
}
else if($home == 'home23')
{
	require("preset/header-5.php");	
}
else if($home == 'home24')
{
	require("preset/header-6.php");	
}
else if($home == 'home25')
{
	require("preset/header-9.php");	
}
else if($home == 'onepage')
{
	require("preset/onepage.php");	
}
else if($home == 'comingsoon')
{
	require("preset/comingsoon.php");	
}
?>