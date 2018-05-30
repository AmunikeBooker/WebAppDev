<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$count = count($items);
?>

<div class="clearfix marb8"></div>
<?php if($count>0){ ?>
<?php if($show_filter){ ?>
<div id="filters-container4" class="cbp-l-filters-list">
  <div data-filter="*" class="cbp-filter-item-active cbp-filter-item cbp-l-filters-list-first"><?php echo JText::_('All'); ?></div>
  <?php foreach (modSPPortfolioJHelper::getCategories($catid) as $key => $value) { ?>
  <div data-filter=".<?php echo modSPPortfolioJHelper::slug($value) ?>" class="cbp-filter-item"> <?php echo ucfirst(trim($value)) ?> </div>
  <?php } ?>
</div>
<?php } ?>
<?php } ?>
<div class="clearfix"></div>
<div id="grid-container4" class="cbp-l-grid-blog">
  <?php if($count>0) { ?>
  <ul>
    <?php foreach($items as $index=>$item){ ?>
    <li class="cbp-item <?php echo modSPPortfolioJHelper::slug($item->tag); ?>"> <a href="<?php echo $item->image_full; ?>" class="cbp-caption cbp-lightbox">
      <div class="cbp-caption-defaultWrap"> <img src="<?php echo $item->image; ?>" alt="<?php echo $item->title; ?>"> </div>
      <div class="cbp-caption-activeWrap">
        <div class="cbp-l-caption-alignCenter">
          <div class="cbp-l-caption-body">
            <div class="cbp-l-caption-text">VIEW LARGER</div>
          </div>
        </div>
      </div>
      </a> <a href="portfolio-1.html" class="polinks"><?php echo $item->title; ?> </a>
      <div class="cbp-l-grid-blog-desc"><?php echo $item->tag; ?></div>
    </li>
    <?php } ?>
  </ul>
  <?php } else { ?>
  <p class="alert">No item found!</p>
  <?php } ?>
</div>
