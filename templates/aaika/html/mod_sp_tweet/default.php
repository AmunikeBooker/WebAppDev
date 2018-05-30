<?php
    // no direct access
    defined( '_JEXEC' ) or die( 'Restricted access' );
?>

<div class="right">
  <?php foreach($data as $i=>$value) { ?>
  <?php echo $helper->prepareTweet($value['text'])?>
  <?php if($tweet_time) { ?>
  <em><a target="<?php echo $target ?>" href="http://twitter.com/<?php echo $value['user']['screen_name'] ?>/status/<?php 
						echo  $value['id_str'] ?>"><?php echo  JText::_('ABOUT') . '&nbsp;' . $helper->timeago( $value['created_at'] ) . '&nbsp;' . JText::_('AGO');    ?></a></em>
  <?php } ?>
  <?php } ?>
</div>
