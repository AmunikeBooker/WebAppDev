<!-- Template Override -->
<php?
defined('_JEXEC') or die;
?>
	<ul class="latestnews<?php echo $moduleclass_sfx; ?> clearfix">
		<?php foreach ($list as $item) : ?>
			<li itemscope itemtype="https://schema.org/Article">
	  		<a href="<?php echo $item->link; ?>" itemprop="url">
	  			<span itemprop="name">
					<?php echo $item->title; ?>			
				</span>
	  		</a>
			<span class="pull-right" >
		    	<?php echo "【" ?>
				<?php echo $item->created; ?> 
				<?php echo "】" ?>
			</span>
			</li>
		<?php endforeach; ?>
    </ul>





<!-- Format time  -->
		<span class="pull-right" >
		    	<?php echo "【" ?>
				<?php echo date("Y-m-d",strtotime($item->created)); ?> 
				<?php echo "】" ?>
		</span>




<jdoc:include type="component" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/layout.css" type="text/css" media="screen " />

<jdoc:include type="head" />

<jdoc:include type="modules" name="position-7" style="xhtml" />