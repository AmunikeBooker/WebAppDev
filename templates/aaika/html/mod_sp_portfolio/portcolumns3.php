<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$count = count($items);
?>

<div class="clearfix marb8"></div>
<?php if($count>0){ ?>
<?php if($show_filter){ ?>
<div id="filters-container5" class="cbp-l-filters-button">
  <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"><?php echo JText::_('All'); ?></div>
  <?php foreach (modSPPortfolioJHelper::getCategories($catid) as $key => $value) { ?>
  <div data-filter=".<?php echo modSPPortfolioJHelper::slug($value) ?>" class="cbp-filter-item"> <?php echo ucfirst(trim($value)) ?> </div>
  <?php } ?>
</div>
<?php } ?>
<?php } ?>
<div class="clearfix"></div>
<div id="grid-container5" class="cbp-l-grid-projects">
  <?php if($count>0) { ?>
  <ul>
    <?php foreach($items as $index=>$item){ ?>
    <li class="cbp-item <?php echo modSPPortfolioJHelper::slug($item->tag); ?>">
      <div class="cbp-caption">
        <div class="cbp-caption-defaultWrap"> <img src="<?php echo $item->image; ?>" alt="<?php echo $item->title; ?>"> </div>
        <div class="cbp-caption-activeWrap">
          <div class="cbp-l-caption-alignCenter">
            <div class="cbp-l-caption-body"> <a href="<?php echo $item->urls->urla; ?>" class="cbp-l-caption-buttonLeft"><?php echo JText::_('MORE_DETAILS'); ?></a> <a href="<?php echo $item->image_full; ?>" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by <?php echo $item->author; ?>"><?php echo JText::_('PREVIEW'); ?></a> </div>
          </div>
        </div>
      </div>
    </li>
    <?php } ?>
  </ul>
  <!--/.sp-portfolio-items-->
  
  <?php } else { ?>
  <p class="alert">No item found!</p>
  <?php } ?>
</div>
