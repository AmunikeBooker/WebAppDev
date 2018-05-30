<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

// Create shortcuts to some parameters.
$params		= $this->item->params;
$images     = json_decode($this->item->images);
$urls       = json_decode($this->item->urls);
$canEdit	= $this->item->params->get('access-edit');
$user		= JFactory::getUser();

JHtml::_('behavior.caption');

// URL for Social API
$cur_url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

// OpenGraph support
$template_config = new JConfig();
$uri = JURI::getInstance();
$article_attribs = json_decode($this->item->attribs, true);
$pin_image = '';
$og_title = $this->escape($this->item->title);
$og_type = 'article';
$og_url = $cur_url;
if (isset($images->image_fulltext) and !empty($images->image_fulltext)) {     $og_image = $uri->root() . htmlspecialchars($images->image_fulltext);
     $pin_image = $uri->root() . htmlspecialchars($images->image_fulltext);
} else {
     $og_image = '';
     preg_match('/src="([^"]*)"/', $this->item->text, $matches);
     
     if(isset($matches[0])) {
     	$pin_image = $uri->root() . substr($matches[0], 5,-1);
     }
}

$og_site_name = $template_config->sitename;
$og_desc = '';


if(isset($article_attribs['og:title'])) {
     $og_title = ($article_attribs['og:title'] == '') ? $this->escape($this->item->title) : $this->escape($article_attribs['og:title']);
     $og_type = $this->escape($article_attribs['og:type']);
     $og_url = $cur_url;
     $og_image = ($article_attribs['og:image'] == '') ? $og_image : $uri->root() . $article_attribs['og:image'];
     $og_site_name = ($article_attribs['og:site_name'] == '') ? $template_config->sitename : $this->escape($article_attribs['og:site_name']);
     $og_desc = $this->escape($article_attribs['og:description']);
}

$doc = JFactory::getDocument();
$doc->setMetaData( 'og:title', $og_title );
$doc->setMetaData( 'og:type', $og_type );
$doc->setMetaData( 'og:url', $og_url );
$doc->setMetaData( 'og:image', $og_image );
$doc->setMetaData( 'og:site_name', $og_site_name );
$doc->setMetaData( 'og:description', $og_desc );


?>

<?php if ($this->params->get('show_page_heading', 1)) : ?>
	<div class="page-header">
		<h1> <?php echo $this->escape($this->params->get('page_heading')); ?> </h1>
	</div>
	<?php endif; ?>
	<?php
if (!empty($this->item->pagination) AND $this->item->pagination && !$this->item->paginationposition && $this->item->paginationrelative)
{
 echo $this->item->pagination;
}
 ?>

<div class="article-blog single" data-scrollReveal="enter from the top after 0.3s ease-out">
<?php if ($params->get('show_publish_date')) : ?>	
	<aside>
		<time datetime="<?php echo JHtml::_('date', $this->item->publish_up, 'Y-m-d'); ?>">
			<div class="day"><?php echo JHtml::_('date', $this->item->publish_up, JText::_('d M Y')); ?></div>
		</time>
	</aside>
	
<?php endif; ?>

    <h2 class="article-header-blog">
		<?php if ($params->get('link_titles') && $params->get('access-view')) : ?>
			<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid)); ?>"> <?php echo $this->escape($this->item->title); ?></a>
				<?php else : ?>
				<?php echo $this->escape($this->item->title); ?>
				<?php endif; ?>
	</h2>
	
	<?php if ($canEdit ||  $params->get('show_print_icon') || $params->get('show_email_icon')) : ?>
	<ul class="actions">
		<?php if ($params->get('show_print_icon')) : ?>
		<li class="print-icon">

			<?php echo JHtml::_('icon.print_popup', $this->item, $params); ?>
		</li>
		<?php endif; ?>
		<?php if ($params->get('show_email_icon')) : ?>
		<li class="email-icon">
			<?php echo JHtml::_('icon.email', $this->item, $params); ?>
		</li>
		<?php endif; ?>
		<?php if ($canEdit) : ?>
		<li class="edit-icon">
			<?php echo JHtml::_('icon.edit', $this->item, $params); ?>
		</li>
		<?php endif; ?>
	</ul>
<?php endif; ?>
	
	
			
			
<?php if (($params->get('show_author')) or ($params->get('show_category')) or ($params->get('show_create_date')) or ($params->get('show_modify_date'))  or ($params->get('show_parent_category')) or ($params->get('show_hits'))) : ?>
<div class="block-info">
	
	<span class="article-info">
	
        <dt class="article-info-term"><?php echo JText::_('COM_CONTENT_ARTICLE_INFO'); ?></dt>
<?php endif; ?>




               <?php if ($params->get('show_parent_category') && $this->item->parent_slug != '1:root') : ?>
					<?php $title = $this->escape($this->item->parent_title);
					$url = '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->parent_slug)).'">'.$title.'</a>';?>
					<?php if ($params->get('link_parent_category') and $this->item->parent_slug) : ?>
						<dt class="parent-category-name"><?php echo JText::sprintf('COM_CONTENT_PARENT', '</dt><dd class="parent-category-name" >' . $url . '</dd>'); ?>
					<?php else : ?>
						<dt class="parent-category-name"><?php echo JText::sprintf('COM_CONTENT_PARENT', '</dt><dd class="parent-category-name">' . $title . '</dd>'); ?>
					<?php endif; ?>
				<?php endif; ?>


                <?php if ($params->get('show_category')) : ?>
					<?php $title = $this->escape($this->item->category_title);
					$url = '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->catslug)).'">'.$title.'</a>';?>
					<?php if ($params->get('link_category') and $this->item->catslug) : ?>
					<dt class="category-name"><?php echo JText::sprintf('COM_CONTENT_CATEGORY', '</dt><dd class="category-name">' . $url . '</dd>'); ?>
					<?php else : ?>
					<dt class="category-name"><?php echo JText::sprintf('COM_CONTENT_CATEGORY', '</dt><dd class="category-name">' . $title . '</dd>'); ?>
					<?php endif; ?>
				<?php endif; ?>
				
				
				<?php if ($params->get('show_create_date')) : ?>
				     <dt class="create"><?php echo JText::sprintf('COM_CONTENT_CREATED_DATE_ON', '</dt><dd class="create">' . JHtml::_('date', $this->item->created, JText::_('DATE_FORMAT_LC3')) . '</dd>'); ?>
				<?php endif; ?>


                <?php if ($params->get('show_modify_date')) : ?>
				    <dt class="modified"><?php echo JText::sprintf('COM_CONTENT_LAST_UPDATED', '</dt><dd class="modified">' . JHtml::_('date', $this->item->modified, JText::sprintf('DATE_FORMAT_LC3')) . '</dd>'); ?>
				<?php endif; ?>

    
	        
	            <?php if ($params->get('show_author') && !empty($this->item->author )) : ?>
				<?php $author = $this->item->created_by_alias ? $this->item->created_by_alias : $this->item->author; ?>
				<?php if (!empty($this->item->contactid) && $params->get('link_author') == true): ?>
					<?php
						$needle = 'index.php?option=com_contact&view=contact&id=' . $this->item->contactid;
						$menu = JFactory::getApplication()->getMenu();
						$item = $menu->getItems('link', $needle, true);
						$cntlink = !empty($item) ? $needle . '&Itemid=' . $item->id : $needle;
					?>
					<dt class="createdby"><?php echo JText::sprintf('COM_CONTENT_WRITTEN_BY', '</dt><dd class="createdby">' . JHtml::_('link', JRoute::_($cntlink), $author) . '</dd>'); ?>
				<?php else: ?>
					<dt class="createdby"><?php echo JText::sprintf('COM_CONTENT_WRITTEN_BY', '</dt><dd class="createdby">' . $author . '</dd>'); ?>
				<?php endif; ?>
				
			
				<?php endif; ?>
	
	
	
	
	<?php if ($params->get('show_hits')) : ?>
				<dt class="hits"><?php echo JText::sprintf('COM_CONTENT_ARTICLE_HITS', '</dt><dd class="hits">' . $this->item->hits . '</dd>'); ?>
				<?php endif; ?>
	

    <?php if (($params->get('show_author')) or ($params->get('show_category')) or ($params->get('show_create_date')) or ($params->get('show_modify_date')) or ($params->get('show_parent_category')) or ($params->get('show_hits')))
	:?>
	

		</span>
	</div>	
	
		
	
<?php if ($this->item->state == 0 || strtotime($this->item->publish_up) > strtotime(JFactory::getDate())
	|| ((strtotime($this->item->publish_down) < strtotime(JFactory::getDate())) && $this->item->publish_down != JFactory::getDbo()->getNullDate())) : ?>

<?php endif; ?>
<?php endif; ?>
	
	
	
	
   
 
   
   
   <?php if ($params->get('show_title')) : ?>
			<?php  if (isset($images->image_intro) and !empty($images->image_intro)) : ?>
			<?php $imgfloat = (empty($images->float_intro)) ? $params->get('float_intro') : $images->float_intro; ?>
			
			<div class="pull-item-image">
              <a data-rel="prettyPhoto" href="<?php echo htmlspecialchars($images->image_intro); ?>" class="portfolio-blog-featured">		
				<img 
				
				
				src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" />
				
			
                               <span class="overlays">
                            <span class="content">
                                <i class="fa fa-search"></i>
								<div class="image-caption">
								<?php 
								if ($images->image_intro_caption): echo htmlspecialchars($images->image_intro_caption) ;
                                   
								endif; ?>
								</div>
                            </span>
                        </span>
                                       
				</a>  
			</div>
		<div class="item-separator"></div>	
	<?php endif; ?>
		<?php endif; ?>
   
		
 

	



	<?php 
		if (isset ($this->item->toc)) :
			echo $this->item->toc;
		endif; 
	?>

	<?php  if (!$params->get('show_intro')) : echo $this->item->event->afterDisplayTitle; endif; ?>
	<?php echo $this->item->event->beforeDisplayContent; ?>
	
	<?php if ($params->get('access-view')):?>
	
	<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND !$this->item->paginationposition AND !$this->item->paginationrelative):
	echo $this->item->pagination;
 endif;
?>


<div class="separator"></div>	
 

	


	
	<div class="content-text">

	<?php echo $this->item->text; ?>
	</div>
	
	<?php 
	//ToDo: move it to the proper place when config save will be available.
	if (isset($urls) AND ((!empty($urls->urls_position) AND ($urls->urls_position=='0')) OR  ($params->get('urls_position')=='0' AND empty($urls->urls_position) ))
		OR (empty($urls->urls_position) AND (!$params->get('urls_position')))): ?>
	<?php echo $this->loadTemplate('links'); ?>
	<?php endif; ?>
	
	<?php if (isset($urls) AND ((!empty($urls->urls_position)  AND ($urls->urls_position=='1')) OR ( $params->get('urls_position')=='1') )): ?>
	<?php echo $this->loadTemplate('links'); ?>
	<?php endif; ?>
	
	
	
	<?php //optional teaser intro text for guests ?>
	<?php elseif ($params->get('show_noauth') == true and  $user->get('guest') ) : ?>
	<?php echo $this->item->introtext; ?>
	<?php //Optional link to let them register to see the whole article. ?>
	<?php if ($params->get('show_readmore') && $this->item->fulltext != null) :
		$link1 = JRoute::_('index.php?option=com_users&view=login');
		$link = new JURI($link1);?>
	<p class="readmore"> <a href="<?php echo $link; ?>">
		<?php $attribs = json_decode($this->item->attribs);  ?>
		<?php
		if ($attribs->alternative_readmore == null) :
			echo JText::_('COM_CONTENT_REGISTER_TO_READ_MORE');
		elseif ($readmore = $this->item->alternative_readmore) :
			echo $readmore;
			if ($params->get('show_readmore_title', 0) != 0) :
			    echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
			endif;
		elseif ($params->get('show_readmore_title', 0) == 0) :
			echo JText::sprintf('COM_CONTENT_READ_MORE_TITLE');
		else :
			echo JText::_('COM_CONTENT_READ_MORE');
			echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
		endif; ?>
		</a> </p>
	<?php endif; ?>
	<?php endif; ?>
	
	<?php if ($params->get('show_tags', 1) && !empty($this->item->tags->itemTags)) : ?>
	<div class="tag-article"><span>tags:</span>
		<?php echo JLayoutHelper::render('joomla.content.tags', $this->item->tags->itemTags); ?>
	</div>
	<?php endif; ?>
	
	
	
	<div class="separateur"></div>
	<?php if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND!$this->item->paginationrelative): ?>
		<?php echo $this->item->pagination; ?>
	<?php endif; ?>
	
	
	
	
	
	<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND $this->item->paginationrelative):
	echo $this->item->pagination;
?>
	<?php endif; ?>
	</div>
	
	
	
	<?php echo $this->item->event->afterDisplayContent; ?> 

