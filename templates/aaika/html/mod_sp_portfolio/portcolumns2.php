<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$count = count($items);
?>

<div class="clearfix marb8"></div>
<?php if($count>0){ ?>
<?php if($show_filter){ ?>
<div id="filters-container6" class="cbp-l-filters-dropdown">
  <div class="cbp-l-filters-dropdownWrap">
    <div class="cbp-l-filters-dropdownHeader">Sort Gallery</div>
    <div class="cbp-l-filters-dropdownList">
      <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> <?php echo JText::_('All'); ?> (
        <div class="cbp-filter-counter"></div>
        items) </div>
      <?php foreach (modSPPortfolioJHelper::getCategories($catid) as $key => $value) { ?>
      <div data-filter=".<?php echo modSPPortfolioJHelper::slug($value) ?>" class="cbp-filter-item"> <?php echo modSPPortfolioJHelper::slug($value) ?> (
        <div class="cbp-filter-counter"></div>
        items) </div>
      <?php } ?>
    </div>
  </div>
</div>
<?php } ?>
<?php } ?>
<div id="grid-container6" class="cbp-l-grid-gallery">
  <?php if($count>0) { ?>
  <ul>
    <?php foreach($items as $index=>$item){ ?>
    <li class="cbp-item <?php echo $column . ' ' . modSPPortfolioJHelper::slug($item->tag); ?>"> <a href="<?php echo $item->urls->urla; ?>" class="cbp-caption"
                       data-title="<?php echo $item->title; ?><br><?php echo $item->tag; ?>">
      <div class="cbp-caption-defaultWrap"> <img src="<?php echo $item->image; ?>" alt="<?php echo $item->title; ?>"> </div>
      <div class="cbp-caption-activeWrap">
        <div class="cbp-l-caption-alignLeft">
          <div class="cbp-l-caption-body">
            <div class="cbp-l-caption-title"><?php echo $item->title; ?></div>
            <div class="cbp-l-caption-desc">by <?php echo $item->tag; ?></div>
          </div>
        </div>
      </div>
      </a> </li>
    <?php } ?>
  </ul>
  <!--/.sp-portfolio-items-->
  
  <?php } else { ?>
  <p class="alert">No item found!</p>
  <?php } ?>
</div>
