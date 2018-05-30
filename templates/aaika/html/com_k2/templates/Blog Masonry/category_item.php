<?php
// no direct access
defined('_JEXEC') or die;

// Define default image size (do not change)
K2HelperUtilities::setDefaultImage($this->item, 'itemlist', $this->params);

?>

<!-- Start K2 Item Layout -->
<?php if($this->item->introtext == 'cbp-l-grid-masonry-height4') : ?>

<li class="cbp-item <?php echo $this->item->introtext; ?>"> <a href="<?php echo $this->item->link; ?>" class="cbp-caption">
  <div class="cbp-caption-defaultWrap two"> <img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" style="width:<?php echo $this->item->imageWidth; ?>px; height:auto;" /> </div>
  <div class="cbp-caption-activeWrap two">
    <div class="cbp-l-caption-alignCenter">
      <div class="cbp-l-caption-body">
        <div class="cbp-l-caption-title"><?php echo $this->item->title; ?></div>
        <div class="cbp-l-caption-desc"><i class="fa fa-calendar"></i> <strong><?php echo JHTML::_('date', $this->item->created , JText::_('d M Y')); ?></strong> <i class="fa fa-comment"></i>
          <?php if(!empty($this->item->event->K2CommentsCounter)): ?>
          <!-- K2 Plugins: K2CommentsCounter --> 
          <?php echo $this->item->event->K2CommentsCounter; ?>
          <?php else: ?>
          <?php if($this->item->numOfComments > 0): ?>
          <?php echo $this->item->numOfComments; ?> <?php echo ($this->item->numOfComments>1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?>
          <?php else: ?>
          <?php echo JText::_('K2_BE_THE_FIRST_TO_COMMENT'); ?>
          <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  </a> </li>
<?php else: ?>
<li class="cbp-item <?php echo $this->item->introtext; ?>"> <a href="<?php echo $this->item->link; ?>" class="cbp-caption">
  <div class="cbp-caption-defaultWrap two"> <img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" style="width:<?php echo $this->item->imageWidth; ?>px; height:auto;" /> </div>
  <div class="cbp-caption-activeWrap three">
    <div class="cbp-l-caption-alignCenter">
      <div class="cbp-l-caption-body">
        <div class="cbp-l-caption-title"><?php echo $this->item->title; ?></div>
        <div class="cbp-l-caption-desc"><i class="fa fa-calendar"></i> <strong><?php echo JHTML::_('date', $this->item->created , JText::_('d M Y')); ?></strong> <i class="fa fa-comment"></i>
          <?php if(!empty($this->item->event->K2CommentsCounter)): ?>
          <!-- K2 Plugins: K2CommentsCounter --> 
          <?php echo $this->item->event->K2CommentsCounter; ?>
          <?php else: ?>
          <?php if($this->item->numOfComments > 0): ?>
          <?php echo $this->item->numOfComments; ?> <?php echo ($this->item->numOfComments>1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?>
          <?php else: ?>
          <?php echo JText::_('K2_BE_THE_FIRST_TO_COMMENT'); ?>
          <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  </a> </li>
<?php endif; ?>

<!-- End K2 Item Layout --> 
