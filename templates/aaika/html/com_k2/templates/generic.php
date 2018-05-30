<?php
// no direct access
defined('_JEXEC') or die;

?>

<!-- Start K2 Generic (search/date) Layout -->

<?php if($this->params->get('show_page_title') || JRequest::getCmd('task')=='search' || JRequest::getCmd('task')=='date'): ?>
<!-- Page title -->

<h3> <?php echo $this->escape($this->params->get('page_title')); ?> </h3>
<?php endif; ?>
<?php if(JRequest::getCmd('task')=='search' && $this->params->get('googleSearch')): ?>
<!-- Google Search container -->
<div id="<?php echo $this->params->get('googleSearchContainer'); ?>"></div>
<?php endif; ?>
<?php if(count($this->items)): ?>
<?php foreach($this->items as $item): ?>
<div class="blog_post">
  <div class="blog_postcontent">
    <?php if($this->params->get('genericItemImage') && !empty($item->imageGeneric)): ?>
    <div class="image_frame"> <a href="<?php echo $item->link; ?>" title="<?php if(!empty($item->image_caption)) echo K2HelperUtilities::cleanHtml($item->image_caption); else echo K2HelperUtilities::cleanHtml($item->title); ?>"> <img src="<?php echo $item->imageGeneric; ?>" alt="<?php if(!empty($item->image_caption)) echo K2HelperUtilities::cleanHtml($item->image_caption); else echo K2HelperUtilities::cleanHtml($item->title); ?>" style="width:100%; height:auto;" /> </a> </div>
    <?php else: ?>
    <div class="video_frame"> <?php echo $item->video; ?> </div>
    <?php endif; ?>
    <h3><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h3>
    <div class="clearfix"></div>
    <div class="margin_top1"></div>
    <?php echo $item->introtext; ?> <a class="k2ReadMore" href="<?php echo $item->link; ?>"> <?php echo JText::_('K2_READ_MORE'); ?> </a> 
    <!-- End K2 Item Layout --> 
  </div>
</div>
<div class="clearfix divider_line9"></div>
<?php endforeach; ?>

<!-- Pagination -->
<?php if($this->pagination->getPagesLinks()): ?>
<div class="pagination center"> <b> <?php echo $this->pagination->getPagesLinks(); ?></b> <?php echo $this->pagination->getPagesCounter(); ?> </div>
<?php endif; ?>
<?php else: ?>
<?php if(!$this->params->get('googleSearch')): ?>
<!-- No results found -->
<div id="genericItemListNothingFound">
  <p><?php echo JText::_('K2_NO_RESULTS_FOUND'); ?></p>
</div>
<?php endif; ?>
<?php endif; ?>
<div class="clearfix marb12"></div>
<!-- End K2 Generic (search/date) Layout --> 
