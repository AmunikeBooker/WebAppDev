<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$count = count($items);
?>

<div class="clearfix marb7"></div>
<?php if($count>0){ ?>
<?php if($show_filter){ ?>
<div id="filters-container3" class="cbp-l-filters-alignCenter">
  <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"><?php echo JText::_('All'); ?></div>
  <?php foreach (modSPPortfolioJHelper::getCategories($catid) as $key => $value) { ?>
  <div data-filter=".<?php echo modSPPortfolioJHelper::slug($value) ?>" class="cbp-filter-item"> <?php echo ucfirst(trim($value)) ?> </div>
  <?php } ?>
</div>
<?php } ?>
<?php } ?>
<div class="clearfix"></div>
<div id="grid-container3" class="cbp-l-grid-masonry">
  <?php if($count>0) { ?>
  <ul>
    <?php foreach($items as $index=>$item){ 
			
			if($item->urls->urla)
			{
			?>
    <li class="cbp-item <?php echo modSPPortfolioJHelper::slug($item->tag); ?> cbp-l-grid-masonry-<?php echo $item->urls->urlatext; ?>"> <a class="cbp-caption cbp-lightbox" data-title="Easy Note<br>by joomlastars" href="<?php echo $item->urls->urla; ?>">
      <div class="cbp-caption-defaultWrap"> <img src="<?php echo $item->image; ?>" alt="<?php echo $item->title; ?>"> </div>
      <div class="cbp-caption-activeWrap">
        <div class="cbp-l-caption-alignCenter">
          <div class="cbp-l-caption-body">
            <div class="cbp-l-caption-title"><?php echo $item->title; ?></div>
            <div class="cbp-l-caption-desc"><?php echo $item->tag; ?></div>
          </div>
        </div>
      </div>
      </a> </li>
    <?php } else { ?>
    <li class="cbp-item <?php echo modSPPortfolioJHelper::slug($item->tag); ?> cbp-l-grid-masonry-<?php echo $item->urls->urlatext; ?>"> <a class="cbp-caption cbp-lightbox" data-title="Easy Note<br>by joomlastars" href="<?php echo $item->image_full; ?>">
      <div class="cbp-caption-defaultWrap"> <img src="<?php echo $item->image; ?>" alt="<?php echo $item->title; ?>"> </div>
      <div class="cbp-caption-activeWrap">
        <div class="cbp-l-caption-alignCenter">
          <div class="cbp-l-caption-body">
            <div class="cbp-l-caption-title"><?php echo $item->title; ?></div>
            <div class="cbp-l-caption-desc"><?php echo $item->tag; ?></div>
          </div>
        </div>
      </div>
      </a> </li>
    <?php } } ?>
  </ul>
  <?php } else { ?>
  <p class="alert">No item found!</p>
  <?php } ?>
</div>
