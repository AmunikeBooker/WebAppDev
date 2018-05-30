<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$count = count($items);
?>

<div id="grid-container" class="cbp-l-grid-fullScreen animate" data-anim-type="fadeInUp" data-anim-delay="100">
  <?php if($count>0) { ?>
  <ul>
    <?php foreach($items as $index=>$item){ ?>
    <li class="cbp-item"> <a href="<?php echo $item->image_full; ?>" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by <?php echo $item->author; ?>">
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
