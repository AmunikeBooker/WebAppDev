<?php
// no direct access
defined('_JEXEC') or die;
?>
<?php if(count($items)): ?>
<?php foreach ($items as $key=>$item):	?>

<a class="moduleItemImage" href="<?php echo $item->link; ?>" title="<?php echo JText::_('K2_CONTINUE_READING'); ?> &quot;<?php echo K2HelperUtilities::cleanHtml($item->title); ?>&quot;"> <img src="<?php echo $item->image; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($item->title); ?>"/> <?php echo $item->title; ?> </a>
<?php endforeach; ?>
<?php endif; ?>
