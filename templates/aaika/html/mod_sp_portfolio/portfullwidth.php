<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$count = count($items);
?>

<div class="clearfix marb8"></div>
<div class="recent_works3">
  <?php if($count>0){ ?>
  <?php if($show_filter){ ?>
  <div id="filters-container1" class="cbp-l-filters-alignCenter">
    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> <?php echo JText::_('All'); ?> </div>
    <?php foreach (modSPPortfolioJHelper::getCategories($catid) as $key => $value) { ?>
    /
    <div data-filter=".<?php echo modSPPortfolioJHelper::slug($value) ?>" class="cbp-filter-item"> <?php echo ucfirst(trim($value)) ?> </div>
    <?php } ?>
  </div>
  <?php } ?>
  <?php } ?>
  <div id="grid-container" class="cbp-l-grid-fullScreen">
    <?php if($count>0) { ?>
    <ul>
      <?php foreach($items as $index=>$item){ ?>
      <li class="cbp-item <?php echo modSPPortfolioJHelper::slug($item->tag); ?>"> <a href="<?php echo $item->image_full; ?>" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by <?php echo $item->author; ?>">
        <div class="cbp-caption-defaultWrap"> <img src="<?php echo $item->image; ?>" alt="<?php echo $item->title; ?>"> </div>
        <div class="cbp-caption-activeWrap">
          <div class="cbp-l-caption-alignLeft">
            <div class="cbp-l-caption-body">
              <div class="cbp-l-caption-title"><?php echo $item->title; ?></div>
              <div class="cbp-l-caption-desc"><?php echo $item->tag; ?></div>
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
</div>
