<?php
// no direct access
defined('_JEXEC') or die;

?>
<?php foreach ($tags as $tag): ?>
<?php if(!empty($tag->tag)): ?>

<a href="<?php echo $tag->link; ?>" title="<?php echo $tag->count.' '.JText::_('K2_ITEMS_TAGGED_WITH').' '.K2HelperUtilities::cleanHtml($tag->tag); ?>"> <?php echo $tag->tag; ?> </a>
<?php endif; ?>
<?php endforeach; ?>
