<?php
// no direct access
defined('_JEXEC') or die;
$link = $_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].$_SERVER['PATH_INFO'];
?>
<?php if(JRequest::getInt('print')==1): ?>
<!-- Print button at the top of the print page only -->


<a class="itemPrintThisPage" rel="nofollow" href="#" onclick="window.print();return false;"> <span><?php echo JText::_('K2_PRINT_THIS_PAGE'); ?></span> </a>
<?php endif; ?>

<!-- Start K2 Item Layout --> 
<span id="startOfPageId<?php echo JRequest::getInt('id'); ?>"></span>
<div class="clearfix marb8"></div>
<div class="blog_post">
  <div class="blog_postcontent">
    <?php if($this->item->params->get('catItemImage') && !empty($this->item->image)): ?>
    <div class="image_frame"> <a href="<?php echo $this->item->link; ?>" title="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>"> <img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" /> </a> </div>
    <?php endif; ?>
    <?php if($this->item->params->get('catItemVideo') && !empty($this->item->video)): ?>
    <!-- Item video -->
    <div class="video_frame">
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
      <li class="post_by"> <i><?php echo K2HelperUtilities::writtenBy($this->item->author->profile->gender); ?>:</i>
        <?php if(isset($this->item->author->link) && $this->item->author->link): ?>
        <a rel="author"><?php echo $this->item->author->name; ?></a>
        <?php else: ?>
        <?php echo $this->item->author->name; ?>
        <?php endif; ?>
      </li>
      <li class="post_categoty"> <i><?php echo JText::_('K2_PUBLISHED_IN'); ?>:</i> <a href="<?php echo $this->item->category->link; ?>"><?php echo $this->item->category->name; ?></a> </li>
      <li class="post_comments"><i>note:</i>
        <?php if(!empty($this->item->event->K2CommentsCounter)): ?>
        <!-- K2 Plugins: K2CommentsCounter --> 
        <?php echo $this->item->event->K2CommentsCounter; ?>
        <?php else: ?>
        <?php if($this->item->numOfComments > 0): ?>
        <a href="<?php echo $this->item->link; ?>#itemCommentsAnchor"> <?php echo $this->item->numOfComments; ?> <?php echo ($this->item->numOfComments>1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?> </a>
        <?php else: ?>
        <a href="<?php echo $this->item->link; ?>#itemCommentsAnchor"> <?php echo JText::_('K2_BE_THE_FIRST_TO_COMMENT'); ?> </a>
        <?php endif; ?>
        <?php endif; ?>
      </li>
    </ul>
    <div class="clearfix"></div>
    <div class="margin_top1"></div>
    <?php echo $this->item->introtext; ?> <a class="k2ReadMore" href="<?php echo $this->item->link; ?>"> <?php echo JText::_('K2_READ_MORE'); ?> </a> </div>
</div>
<div class="clearfix divider_line9 lessm"></div>
<div class="sharepost">
  <h5 class="light">Share this Post</h5>
  <ul>
    <li><a title="" data-toggle="tooltip" href="https://twitter.com/share" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
    <li><a title="" data-toggle="tooltip" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo $link; ?>','Facebook','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="<?php echo $link; ?>" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
    <li><a title="" data-toggle="tooltip" onclick="window.open('https://plus.google.com/share?url=<?php echo $link; ?>','Google plus','width=585,height=666,left='+(screen.availWidth/2-292)+',top='+(screen.availHeight/2-333)+''); return false;" href="https://plus.google.com/share?url=<?php echo $link; ?>" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
    <li><a title="" data-toggle="tooltip" href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
    <li><a title="" data-toggle="tooltip" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $link; ?>','Linkedin','width=863,height=500,left='+(screen.availWidth/2-431)+',top='+(screen.availHeight/2-250)+''); return false;" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $link; ?>" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
  </ul>
</div>
<!-- end share post links -->

<div class="clearfix"></div>
<?php if($this->item->params->get('itemAuthorBlock') && empty($this->item->created_by_alias)): ?>
<!-- Author Block -->
<h5 class="light">About the Author</h5>
<div class="about_author">
  <?php if($this->item->params->get('itemAuthorImage') && !empty($this->item->author->avatar)): ?>
  <a rel="author" href="<?php echo $this->item->author->profile->url; ?>" target="_blank"><img class="itemAuthorAvatar" src="<?php echo $this->item->author->avatar; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($this->item->author->name); ?>" /></a>
  <?php endif; ?>
  <a rel="author" href="<?php echo $this->item->author->profile->url; ?>" target="_blank"><?php echo $this->item->author->name; ?></a><br />
  <?php if($this->item->params->get('itemAuthorDescription') && !empty($this->item->author->profile->description)): ?>
  <?php echo $this->item->author->profile->description; ?>
  <?php endif; ?>
</div>
<!-- end about author -->

<?php endif; ?>
<div class="clearfix margin_top7"></div>
<div class="one_half">
  <div class="popular-posts-area">
    <h5 class="light">Recent Posts</h5>
    <div class="clearfix marb2"></div>
    <?php
			   // Recent Posts
			   $document = &JFactory::getDocument();
			   $renderer       = $document->loadRenderer('modules');
			   $position       = 'js-recentposts';
			   $options        = array('style' => 'raw');
			   echo $renderer->render($position, $options, null); 
			   ?>
  </div>
</div>
<!-- end recent posts -->

<div class="one_half last">
  <div class="popular-posts-area">
    <h5 class="light">Popular Posts</h5>
    <div class="clearfix marb2"></div>
    <?php
			   // Recent Posts
			   $document = &JFactory::getDocument();
			   $renderer       = $document->loadRenderer('modules');
			   $position       = 'js-popularposts';
			   $options        = array('style' => 'raw');
			   echo $renderer->render($position, $options, null); 
			   ?>
  </div>
</div>
<!-- end popular posts -->

<div class="clearfix divider_line9 lessm"></div>
<?php if($this->item->params->get('itemComments') && ( ($this->item->params->get('comments') == '2' && !$this->user->guest) || ($this->item->params->get('comments') == '1'))): ?>
<!-- K2 Plugins: K2CommentsBlock --> 
<?php echo $this->item->event->K2CommentsBlock; ?>
<?php endif; ?>
<?php if($this->item->params->get('itemComments') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2')) && empty($this->item->event->K2CommentsBlock)): ?>
<!-- Item comments --> 
<a name="itemCommentsAnchor" id="itemCommentsAnchor"></a>
<?php if($this->item->params->get('commentsFormPosition')=='above' && $this->item->params->get('itemComments') && !JRequest::getInt('print') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2' && K2HelperPermissions::canAddComment($this->item->catid)))): ?>
<!-- Item comments form -->
<div class="itemCommentsForm"> <?php echo $this->loadTemplate('comments_form'); ?> </div>
<?php endif; ?>
<?php if($this->item->numOfComments>0 && $this->item->params->get('itemComments') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2'))): ?>
<!-- Item user comments -->
<h5> (<?php echo $this->item->numOfComments; ?>) <?php echo ($this->item->numOfComments>1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?> </h5>
<div class="mar_top_bottom_lines_small3"></div>
<div class="comment_wrap">
  <?php foreach ($this->item->comments as $key=>$comment): ?>
  <?php if($comment->userImage): ?>
  <div class="gravatar"><img src="<?php echo $comment->userImage; ?>" alt="<?php echo JFilterOutput::cleanText($comment->userName); ?>" width="<?php echo $this->item->params->get('commenterImgWidth'); ?>" /></div>
  <?php endif; ?>
  <div class="comment_content">
    <div class="comment_meta">
      <div class="comment_author"><?php echo $comment->userName; ?> - <i><?php echo JHTML::_('date', $comment->commentDate, JText::_('F d Y')); ?></i></div>
    </div>
    <div class="comment_text">
      <p><?php echo $comment->commentText; ?></p>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<div class="itemCommentsPagination"> <?php echo $this->pagination->getPagesLinks(); ?> </div>
<?php endif; ?>
<?php if($this->item->params->get('commentsFormPosition')=='below' && $this->item->params->get('itemComments') && !JRequest::getInt('print') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2' && K2HelperPermissions::canAddComment($this->item->catid)))): ?>
<!-- Item comments form -->
<div class="comment_form"> <?php echo $this->loadTemplate('comments_form'); ?> </div>
<?php endif; ?>
<?php $user = JFactory::getUser(); if ($this->item->params->get('comments') == '2' && $user->guest): ?>
<div><?php echo JText::_('K2_LOGIN_TO_POST_COMMENTS'); ?></div>
<?php endif; ?>
<?php endif; ?>
<div class="clearfix marb12"></div>
<!-- End K2 Item Layout --> 
