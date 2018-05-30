<?php
// no direct access
defined('_JEXEC') or die;
?>
<?php if(count($items)): ?>

<ul class="recent_posts_list">
  <?php foreach ($items as $key=>$item):	?>
  <li> <span><a class="moduleItemImage" href="<?php echo $item->link; ?>" title="<?php echo JText::_('K2_CONTINUE_READING'); ?> &quot;<?php echo K2HelperUtilities::cleanHtml($item->title); ?>&quot;"> <img src="<?php echo $item->image; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($item->title); ?>"/> </a></span> <a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a> <i><?php echo JHTML::_('date', $item->created, JText::_('M d Y')); ?></i> </li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>
