<?php
// no direct access
defined('_JEXEC') or die;

// Define default image size (do not change)
K2HelperUtilities::setDefaultImage($this->item, 'itemlist', $this->params);

?>

<!-- Start K2 Item Layout -->
<div class="blog_post">	
  <div class="blog_postcontent">
  
            <?php if($this->item->params->get('catItemImage') && !empty($this->item->image)): ?>
            <div class="image_frame">
            <a href="<?php echo $this->item->link; ?>" title="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>">
		    	<img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" />
		    </a>
            </div>
            <?php endif; ?>
    <?php if($this->item->params->get('catItemVideo') && !empty($this->item->video)): ?>
    <!-- Item video -->
    <div class="video_frame small">
    <?php if($this->item->videoType=='embedded'): ?>
    <?php echo $this->item->video; ?>
    <?php else: ?>
    <?php echo $this->item->video; ?>
    <?php endif; ?>
    </div>
    <?php endif; ?>
  
  <h3><a href="<?php echo $this->item->link; ?>"><?php echo $this->item->title; ?></a></h3>
      <ul class="post_meta_links">
          <li><a class="date"><?php echo JHTML::_('date', $this->item->created , JText::_('d M Y')); ?></a></li>
          <li class="post_by">
          <i><?php echo K2HelperUtilities::writtenBy($this->item->author->profile->gender); ?>:</i>
			<?php if(isset($this->item->author->link) && $this->item->author->link): ?>
			<a rel="author"><?php echo $this->item->author->name; ?></a>
			<?php else: ?>
			<?php echo $this->item->author->name; ?>
			<?php endif; ?>
            </li>
          <li class="post_categoty">
			<i><?php echo JText::_('K2_PUBLISHED_IN'); ?>:</i>
			<a href="<?php echo $this->item->category->link; ?>"><?php echo $this->item->category->name; ?></a>
        </li>
          <li class="post_comments"><i>note:</i> 
          <?php if(!empty($this->item->event->K2CommentsCounter)): ?>
			<!-- K2 Plugins: K2CommentsCounter -->
			<?php echo $this->item->event->K2CommentsCounter; ?>
		<?php else: ?>
			<?php if($this->item->numOfComments > 0): ?>
			<a href="<?php echo $this->item->link; ?>#itemCommentsAnchor">
				<?php echo $this->item->numOfComments; ?> <?php echo ($this->item->numOfComments>1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?>
			</a>
			<?php else: ?>
			<a href="<?php echo $this->item->link; ?>#itemCommentsAnchor">
				<?php echo JText::_('K2_BE_THE_FIRST_TO_COMMENT'); ?>
			</a>
			<?php endif; ?>
		<?php endif; ?>
          </li>
      </ul>
   <div class="clearfix"></div>
   <div class="margin_top1"></div>
  <?php echo $this->item->introtext; ?>
  <a class="k2ReadMore" href="<?php echo $this->item->link; ?>">
			<?php echo JText::_('K2_READ_MORE'); ?>
		</a>
  </div>
</div>
<!-- /# end post -->
<div class="clearfix divider_line9"></div>
<!-- End K2 Item Layout -->
