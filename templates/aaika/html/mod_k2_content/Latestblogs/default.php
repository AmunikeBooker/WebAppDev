<?php
// no direct access
defined('_JEXEC') or die;
?>

<div class="onecol_sixty">
  <h3 class="unline"><i class="fa fa-comments"></i> Latest Blogs</h3>
  <div class="clearfix"></div>
  <?php if(count($items)): ?>
  <?php foreach ($items as $key=>$item):	?>
  <div class="lblogs animate" data-anim-type="fadeIn" data-anim-delay="300">
    <div class="lbimg"><img src="<?php echo $item->image; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($item->title); ?>"/> <span><strong><?php echo JHTML::_('date', $item->created, JText::_('F')); ?></strong> <?php echo JHTML::_('date', $item->created, JText::_('d')); ?></span> </div>
    <h5><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h5>
    <a class="smlinks"><i class="fa fa-eye"></i> <?php echo $item->hits; ?></a>
    <?php if($params->get('itemCommentsCounter') && $componentParams->get('comments')): ?>
    <?php if(!empty($item->event->K2CommentsCounter)): ?>
    <!-- K2 Plugins: K2CommentsCounter --> 
    <?php echo $item->event->K2CommentsCounter; ?>
    <?php else: ?>
    <?php if($item->numOfComments>0): ?>
    <a class="smlinks" href="<?php echo $item->link.'#itemCommentsAnchor'; ?>"> <i class="fa fa-comment"></i><?php echo $item->numOfComments; ?>
    <?php if($item->numOfComments>1) echo JText::_('K2_COMMENTS'); else echo JText::_('K2_COMMENT'); ?>
    </a>
    <?php else: ?>
    <a class="smlinks" href="<?php echo $item->link.'#itemCommentsAnchor'; ?>"> <i class="fa fa-comment"></i><?php echo JText::_('K2_BE_THE_FIRST_TO_COMMENT'); ?> </a>
    <?php endif; ?>
    <?php endif; ?>
    <?php endif; ?>
    <?php echo $item->introtext; ?> <a class="remobut" href="<?php echo $item->link; ?>"> <?php echo JText::_('K2_READ_MORE'); ?> </a> </div>
  <?php endforeach; ?>
  <?php endif; ?>
  
  <!-- end section --> 
  
</div>
