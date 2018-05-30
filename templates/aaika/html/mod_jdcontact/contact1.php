<?php

defined('_JEXEC') or die('Restricted access');

    $showdepartment  	     =        $params->get( 'showdepartment', '1' );
    $showsendcopy            =        $params->get( 'showsendcopy', '1' );
    $humantestpram           =        $params->get( 'humantestpram', '1' );
    $sales_address           =        $params->get( 'sales_address', 'sales@yourdomain.com' );
    $support_address         =        $params->get( 'support_address', 'support@yourdomain.com' );
    $billing_address         =        $params->get( 'billing_address', 'billing@yourdomain.com' );
    $backgroundcolor         =        $params->get( 'backgroundcolor', '#FFEFD5' );
    $wrp_width               =        $params->get( 'wrp_width', '320px' );
    $inputfield_width        =        $params->get( 'inputfield_width', '300px' );
    $inputfield_border       =        $params->get( 'inputfield_border', '#CCCCCC' );
    $result                  =        '';
    $name                    =        '';
    $email                   =        '';
    $phno                    =        '';
    $subject                 =        '';
    $msg                     =        '';
    $selfcopy                =        '';
    $sucs                    =        '';
    $varone                  =        rand(5, 15);
    $vartwo                  =        rand(5, 15);
    $sum_rand                =        $varone+$vartwo;

?>
<script src="<?php echo JURI::root(); ?>modules/mod_jdcontact/tmpl/lib/jquery-1.4.4.js"></script>

<div id="contactform">
  <form name="contactform" class="sky-form" id="sky-form" method="post" action="<?php $_SERVER['PHP_SELF']?>">
    <fieldset>
      <div class="row">
        <div class="col">
          <label class="input">
            <input class="text" name="name" type="text" value="<?php echo $name; ?>" placeholder="Your Name" onFocus="if (this.value == 'Your Name') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Your Name';}" />
          </label>
        </div>
        <div class="col">
          <label class="input">
            <input class="text" name="email" type="text" placeholder="Your E-mail" onFocus="if (this.value == 'Your E-mail') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Your E-mail';}" />
          </label>
        </div>
        <div class="col">
          <label class="input">
            <input class="text" type="text" name="subject" <?php echo $subject; ?> placeholder="Subject" onFocus="if (this.value == 'Subject') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Subject';}">
          </label>
        </div>
      </div>
      <div>
        <label class="textarea">
          <textarea class="text" name="msg" placeholder="Message" onFocus="if (this.value == 'Message') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Message';}"></textarea>
        </label>
      </div>
    </fieldset>
    <?php if($showsendcopy=='1') : ?>
    <input type="checkbox" name="selfcopy" <?php if($selfcopy == "yes") echo "checked='checked'"; ?> value="yes" />
    <label><?php echo JText::_('MOD_JDCONTACT_SELFCOPY'); ?></label>
    <?php endif; ?>
    <input type="hidden" name="browser_check" value="false" />
    <div class="state-error" id="result">
      <?php if($result) echo "<em>".$result."</em>"; ?>
    </div>
    <input type="submit" class="subbutton" name="submit" value="<?php echo JText::_('MOD_JDCONTACT_SUBMIT'); ?>" id="submit" />
  </form>
  <script type="text/javascript">
	    document.contactform.browser_check.value = "true";
	    jQuery("#submit").click(function(){
		jQuery('#result').html('<img src="<?php echo JURI::root(); ?>modules/mod_jdcontact/tmpl/images/loader.gif" class="loading-img" alt="loader image">').fadeIn();
		var input_data = jQuery('#sky-form').serialize();
				jQuery.ajax({
				   type: "POST",
				   url:  "<?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
				   data: input_data,
				   success: function(msg){
					   jQuery('.loading-img').remove(); //Removing the loader image because the validation is finished
					   jQuery('<em>').html(msg).appendTo('div#result').hide().fadeIn('slow'); //Appending the output of the php validation in the html div

                        if(msg=='<?php echo JText::_("MOD_JDCONTACT_SUCCESSMSG"); ?>'){
                          jQuery('#sky-form').each (function(){
                            this.reset();
                          });
                       }
				   }
				});
			return false;
	    });
	    </script> 
</div>
