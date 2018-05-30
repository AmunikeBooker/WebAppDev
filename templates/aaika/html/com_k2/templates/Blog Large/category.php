<?php
// no direct access
defined('_JEXEC') or die;

?>

<!-- Start K2 Category Layout -->

<div class="content_fullwidth">
  <?php if((isset($this->leading) || isset($this->primary) || isset($this->secondary) || isset($this->links)) && (count($this->leading) || count($this->primary) || count($this->secondary) || count($this->links))): ?>
  <!-- Item list -->
  <?php if(isset($this->leading) && count($this->leading)): ?>
  <!-- Leading items -->
  <?php foreach($this->leading as $key=>$item): ?>
  <?php
			// Define a CSS class for the last container on each row
			if( (($key+1)%($this->params->get('num_leading_columns'))==0) || count($this->leading)<$this->params->get('num_leading_columns') )
				$lastContainer= ' itemContainerLast';
			else
				$lastContainer='';
			?>
  <?php
					// Load category_item.php by default
					$this->item=$item;
					echo $this->loadTemplate('item');
				?>
  <?php if(($key+1)%($this->params->get('num_leading_columns'))==0): ?>
  <?php endif; ?>
  <?php endforeach; ?>
  <?php endif; ?>
  <!-- Pagination -->
  <?php if($this->pagination->getPagesLinks()): ?>
  <div class="pagination center"> <b>
    <?php if($this->params->get('catPaginationResults')) echo $this->pagination->getPagesCounter(); ?>
    </b>
    <?php if($this->params->get('catPagination')) echo $this->pagination->getPagesLinks(); ?>
  </div>
  <?php endif; ?>
  <?php endif; ?>
</div>
<div class="clearfix marb12"></div>
<!-- End K2 Category Layout --> 
