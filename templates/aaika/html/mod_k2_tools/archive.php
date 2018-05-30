<?php 
// no direct access
defined('_JEXEC') or die;

?>

<div id="k2ModuleBox<?php echo $module->id; ?>" class="k2ArchivesBlock<?php if($params->get('moduleclass_sfx')) echo ' '.$params->get('moduleclass_sfx'); ?>">
  <ul class="list2">
    <?php foreach ($months as $month): ?>
    <li> <a href="<?php echo $month->link; ?>"><i class="fa fa-long-arrow-right"></i> <?php echo $month->name.' '.$month->y; ?>
      <?php if ($params->get('archiveItemsCounter')) echo '('.$month->numOfItems.')'; ?>
      </a> </li>
    <?php endforeach; ?>
  </ul>
</div>
