<?php
/**
 * @package     Joomla.Site
 * @subpackage  Template.system
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;


/*
 * xhtml (divs and font headder tags)
 */
function modChrome_nomoduletable($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>

<div class="<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
  <?php if ((bool) $module->showtitle) : ?>
  <h2><?php echo $module->title; ?></h2>
  <?php endif; ?>
  <?php echo $module->content; ?> </div>
<?php endif;
}

function modChrome_nomoduletablediv($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
<?php if ((bool) $module->showtitle) : ?>
<h4 class="lmb"><?php echo $module->title; ?></h4>
<?php endif; ?>
<?php echo $module->content; ?>
<?php endif;
}

function modChrome_footerbottom($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
<div class="<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?> animate" data-anim-type="fadeInUp" data-anim-delay="300">
  <?php if ((bool) $module->showtitle) : ?>
  <h4 class="lmb"><?php echo $module->title; ?></h4>
  <?php endif; ?>
  <?php echo $module->content; ?> </div>
<?php endif;
}

function modChrome_leftright($module, &$params, &$attribs)
{
     $main = $module->title;
	
	 $title1 = substr($main, 0, strpos($main, ' '));
	 $title2 = substr($main, strpos($main, ' '));
	
	 	
	if (!empty ($module->content)) { ?>
<div class="<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
  <?php if ($module->showtitle) { ?>
  <div class="sidebar_title">
    <h4><?php echo $title1;?><i><?php echo $title2;?></i></h4>
  </div>
  <?php }; ?>
  <?php echo $module->content; ?></div>
<div class="clearfix margin_top4"></div>
<?php };
}

function modChrome_pagetop($module, &$params, &$attribs)
{
	if ($module->content)
	{
		echo "<div class=\"top_intro " . htmlspecialchars($params->get('moduleclass_sfx')) . "\">";
		if ($module->showtitle)
		{
			echo "<h5 class=\"white\">" . $module->title . "</h5>";
		}
		echo $module->content;
		echo "</div>";
	}
}

function modChrome_footertop($module, &$params, &$attribs)
{
	$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

	if ($module->content)
	{
		echo "<div class=\"colleft animate\" data-anim-type=\"fadeIn\" data-anim-delay=\"300\">";
			if(!empty($moduleclass_sfx)){
				echo '<div class="'.$moduleclass_sfx.'">';
			}

			if ($module->showtitle)
			{
				echo "<div class=\"left\"><h6>" . $module->title . "</h6></div>";
			}
				echo $module->content;

			if(!empty($moduleclass_sfx)){
				echo '</div>';
			}						
		echo "</div>";
		echo "<div class=\"colcenter\">&nbsp;</div>";
		
	}
}
function modChrome_footer2links($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
<div class="<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
  <?php 
  if ($module->content)
	{
		echo "<div class=\"qlinks animate\" data-anim-type=\"fadeInUp\" data-anim-delay=\"200\">";
			
			if ($module->showtitle)
			{
				echo "<h4 class=\"lmb\">" . $module->title . "</h4>";
			}
				echo $module->content;
						
		echo "</div>";
		
	}
    ?>
</div>
<?php endif;
}

function modChrome_footer2blog($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
<div class="<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
  <?php 
  if ($module->content)
	{
		echo "<div class=\"fbposts animate\" data-anim-type=\"fadeInUp\" data-anim-delay=\"300\">";
			
			if ($module->showtitle)
			{
				echo "<h4>" . $module->title . "</h4>";
			}
				echo $module->content;
						
		echo "</div>";
		
	}
    ?>
</div>
<div class="clearfix margin_top2"></div>
<?php endif;
}

function modChrome_footer2tag($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
<div class="<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
  <?php 
  if ($module->content)
	{
		echo "<div class=\"ftags animate\" data-anim-type=\"fadeInUp\" data-anim-delay=\"300\">";
			
			if ($module->showtitle)
			{
				echo "<h4>" . $module->title . "</h4>";
			}
				echo $module->content;
						
		echo "</div>";
		
	}
    ?>
</div>
<?php endif;
}

function modChrome_footer2about($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
<div class="<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
  <?php 
  if ($module->content)
	{
			if ($module->showtitle)
			{
				echo "<h4 class=\"lmb\">" . $module->title . "</h4>";
			}
				echo $module->content;
						
		
	}
    ?>
</div>
<div class="clearfix margin_top5"></div>
<?php endif;
}

function modChrome_footer2contact($module, &$params, &$attribs)
{

	if (!empty ($module->content)) : ?>
<div class="clearfix margin_top2"></div>
<div class="<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
  <?php 
  if ($module->content)
	{
			if ($module->showtitle)
			{
				echo "<h4 class=\"lmb\">" . $module->title . "</h4>";
			}
				echo $module->content;
						
		
	}
    ?>
</div>
<?php endif;
}
?>
