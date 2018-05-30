<?php
    // no direct access
    defined( '_JEXEC' ) or die( 'Restricted access' );
?>

<ul class="twitter_feeds_three">
  <?php foreach($data as $i=>$value) { ?>
  <li class="bhline"><i class="fa fa-twitter fa-lg"></i> <a target="<?php echo $target ?>" href="http://twitter.com/<?php echo $value['user']['screen_name'] ?>"><?php echo $value['user']['name'] ?></a>: <?php echo $helper->prepareTweet($value['text'])?>
    <?php if($tweet_time) { ?>
    <br />
    <em><a target="<?php echo $target ?>" href="http://twitter.com/<?php echo $value['user']['screen_name'] ?>/status/<?php 
						echo  $value['id_str'] ?>"><?php echo  JText::_('ABOUT') . '&nbsp;' . $helper->timeago( $value['created_at'] ) . '&nbsp;' . JText::_('AGO');    ?></a></em>
    <?php } ?>
  </li>
  <?php } ?>
</ul>
