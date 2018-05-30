<?php
// no direct access
defined('_JEXEC') or die;
?>
<?php if(count($items)): ?>

<div class="rbps">
  <?php foreach ($items as $key=>$item):	?>
  <div class="one_third animate" data-anim-type="fadeInUp" data-anim-delay="300"> <img src="<?php echo $item->image; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($item->title); ?>"/>
    <div class="date">
      <h5><a ><strong><?php echo JHTML::_('date', $item->created, JText::_('d')); ?></strong> <?php echo JHTML::_('date', $item->created, JText::_('M y')); ?></a></h5>
    </div>
    <div class="contarea">
      <h5><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h5>
      <p><?php echo $item->introtext; ?></p>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<?php endif; ?>
