<?php
/**
 * @package     Joomla.Site
 * @subpackage  Riversen Template
 */


defined('_JEXEC') or die;

//section modules columns
$before_content_a = $this->countModules('beforecontent1');
$before_content_b = $this->countModules('beforecontent2');
$before_content_c = $this->countModules('beforecontent3');
$before_content_d = $this->countModules('beforecontent4');

//columns layout
$before_content_four_columns_layout = $this->params->get('before_content_four_columns_layout');
$before_content_three_columns_layout = $this->params->get('before_content_three_columns_layout');
$before_content_two_columns_layout = $this->params->get('before_content_two_columns_layout');
$before_content_one_column_layout = $this->params->get('before_content_one_column_layout'); 

//four columns grid
if ($before_content_four_columns_layout=='2,2,2,6') {
	$grid_4col_1 = 'grid_2';
	$grid_4col_2 = 'grid_2';
	$grid_4col_3 = 'grid_2';
	$grid_4col_4 = 'grid_6';
}
elseif ($before_content_four_columns_layout=='2,2,3,5') {
	$grid_4col_1 = 'grid_2';
	$grid_4col_2 = 'grid_2';
	$grid_4col_3 = 'grid_3';
	$grid_4col_4 = 'grid_5';
}
elseif ($before_content_four_columns_layout=='2,2,4,4') {
	$grid_4col_1 = 'grid_2';
	$grid_4col_2 = 'grid_2';
	$grid_4col_3 = 'grid_4';
	$grid_4col_4 = 'grid_4';
}
elseif ($before_content_four_columns_layout=='2,2,5,3') {
	$grid_4col_1 = 'grid_2';
	$grid_4col_2 = 'grid_2';
	$grid_4col_3 = 'grid_5';
	$grid_4col_4 = 'grid_3';
}
elseif ($before_content_four_columns_layout=='2,2,6,2') {
	$grid_4col_1 = 'grid_2';
	$grid_4col_2 = 'grid_2';
	$grid_4col_3 = 'grid_6';
	$grid_4col_4 = 'grid_2';
}

elseif ($before_content_four_columns_layout=='2,3,2,5') {
	$grid_4col_1 = 'grid_2';
	$grid_4col_2 = 'grid_3';
	$grid_4col_3 = 'grid_2';
	$grid_4col_4 = 'grid_5';
}

elseif ($before_content_four_columns_layout=='2,3,3,4') {
	$grid_4col_1 = 'grid_2';
	$grid_4col_2 = 'grid_3';
	$grid_4col_3 = 'grid_3';
	$grid_4col_4 = 'grid_4';
}

elseif ($before_content_four_columns_layout=='2,3,4,3') {
	$grid_4col_1 = 'grid_2';
	$grid_4col_2 = 'grid_3';
	$grid_4col_3 = 'grid_4';
	$grid_4col_4 = 'grid_3';
}

elseif ($before_content_four_columns_layout=='2,3,5,2') {
	$grid_4col_1 = 'grid_2';
	$grid_4col_2 = 'grid_3';
	$grid_4col_3 = 'grid_5';
	$grid_4col_4 = 'grid_2';
}

elseif ($before_content_four_columns_layout=='2,4,2,4') {
	$grid_4col_1 = 'grid_2';
	$grid_4col_2 = 'grid_4';
	$grid_4col_3 = 'grid_2';
	$grid_4col_4 = 'grid_4';
}

elseif ($before_content_four_columns_layout=='2,4,3,3') {
	$grid_4col_1 = 'grid_2';
	$grid_4col_2 = 'grid_4';
	$grid_4col_3 = 'grid_3';
	$grid_4col_4 = 'grid_3';
}

elseif ($before_content_four_columns_layout=='2,4,4,2') {
	$grid_4col_1 = 'grid_2';
	$grid_4col_2 = 'grid_4';
	$grid_4col_3 = 'grid_4';
	$grid_4col_4 = 'grid_2';
}

elseif ($before_content_four_columns_layout=='2,5,2,3') {
	$grid_4col_1 = 'grid_2';
	$grid_4col_2 = 'grid_5';
	$grid_4col_3 = 'grid_2';
	$grid_4col_4 = 'grid_3';
}

elseif ($before_content_four_columns_layout=='2,5,3,2') {
	$grid_4col_1 = 'grid_2';
	$grid_4col_2 = 'grid_5';
	$grid_4col_3 = 'grid_3';
	$grid_4col_4 = 'grid_2';
}

elseif ($before_content_four_columns_layout=='2,6,2,2') {
	$grid_4col_1 = 'grid_2';
	$grid_4col_2 = 'grid_6';
	$grid_4col_3 = 'grid_2';
	$grid_4col_4 = 'grid_2';
}

elseif ($before_content_four_columns_layout=='3,2,2,5') {
	$grid_4col_1 = 'grid_3';
	$grid_4col_2 = 'grid_2';
	$grid_4col_3 = 'grid_2';
	$grid_4col_4 = 'grid_5';
}

elseif ($before_content_four_columns_layout=='3,2,3,4') {
	$grid_4col_1 = 'grid_3';
	$grid_4col_2 = 'grid_2';
	$grid_4col_3 = 'grid_3';
	$grid_4col_4 = 'grid_4';
}

elseif ($before_content_four_columns_layout=='3,2,5,2') {
	$grid_4col_1 = 'grid_3';
	$grid_4col_2 = 'grid_2';
	$grid_4col_3 = 'grid_5';
	$grid_4col_4 = 'grid_2';
}

elseif ($before_content_four_columns_layout=='3,3,2,4') {
	$grid_4col_1 = 'grid_3';
	$grid_4col_2 = 'grid_3';
	$grid_4col_3 = 'grid_2';
	$grid_4col_4 = 'grid_4';
}

elseif ($before_content_four_columns_layout=='3,3,3,3') {
	$grid_4col_1 = 'grid_3';
	$grid_4col_2 = 'grid_3';
	$grid_4col_3 = 'grid_3';
	$grid_4col_4 = 'grid_3';
}

elseif ($before_content_four_columns_layout=='3,3,4,2') {
	$grid_4col_1 = 'grid_3';
	$grid_4col_2 = 'grid_3';
	$grid_4col_3 = 'grid_4';
	$grid_4col_4 = 'grid_2';
}

elseif ($before_content_four_columns_layout=='3,4,2,3') {
	$grid_4col_1 = 'grid_3';
	$grid_4col_2 = 'grid_4';
	$grid_4col_3 = 'grid_2';
	$grid_4col_4 = 'grid_3';
}

elseif ($before_content_four_columns_layout=='3,4,3,2') {
	$grid_4col_1 = 'grid_3';
	$grid_4col_2 = 'grid_4';
	$grid_4col_3 = 'grid_3';
	$grid_4col_4 = 'grid_2';
}

elseif ($before_content_four_columns_layout=='3,5,2,2') {
	$grid_4col_1 = 'grid_3';
	$grid_4col_2 = 'grid_5';
	$grid_4col_3 = 'grid_2';
	$grid_4col_4 = 'grid_2';
}

elseif ($before_content_four_columns_layout=='4,2,2,4') {
	$grid_4col_1 = 'grid_4';
	$grid_4col_2 = 'grid_2';
	$grid_4col_3 = 'grid_2';
	$grid_4col_4 = 'grid_4';
}

elseif ($before_content_four_columns_layout=='4,2,3,3') {
	$grid_4col_1 = 'grid_4';
	$grid_4col_2 = 'grid_2';
	$grid_4col_3 = 'grid_3';
	$grid_4col_4 = 'grid_3';
}

elseif ($before_content_four_columns_layout=='4,2,4,2') {
	$grid_4col_1 = 'grid_4';
	$grid_4col_2 = 'grid_2';
	$grid_4col_3 = 'grid_4';
	$grid_4col_4 = 'grid_2';
}

elseif ($before_content_four_columns_layout=='4,3,2,3') {
	$grid_4col_1 = 'grid_4';
	$grid_4col_2 = 'grid_3';
	$grid_4col_3 = 'grid_2';
	$grid_4col_4 = 'grid_3';
}

elseif ($before_content_four_columns_layout=='4,3,3,2') {
	$grid_4col_1 = 'grid_4';
	$grid_4col_2 = 'grid_3';
	$grid_4col_3 = 'grid_3';
	$grid_4col_4 = 'grid_2';
}

elseif ($before_content_four_columns_layout=='4,4,2,2') {
	$grid_4col_1 = 'grid_4';
	$grid_4col_2 = 'grid_4';
	$grid_4col_3 = 'grid_2';
	$grid_4col_4 = 'grid_2';
}

elseif ($before_content_four_columns_layout=='5,2,2,3') {
	$grid_4col_1 = 'grid_5';
	$grid_4col_2 = 'grid_2';
	$grid_4col_3 = 'grid_2';
	$grid_4col_4 = 'grid_3';
}

elseif ($before_content_four_columns_layout=='5,2,3,2') {
	$grid_4col_1 = 'grid_5';
	$grid_4col_2 = 'grid_2';
	$grid_4col_3 = 'grid_3';
	$grid_4col_4 = 'grid_2';
}

elseif ($before_content_four_columns_layout=='5,3,2,2') {
	$grid_4col_1 = 'grid_5';
	$grid_4col_2 = 'grid_3';
	$grid_4col_3 = 'grid_2';
	$grid_4col_4 = 'grid_2';
}

elseif ($before_content_four_columns_layout=='6,2,2,2') {
	$grid_4col_1 = 'grid_6';
	$grid_4col_2 = 'grid_2';
	$grid_4col_3 = 'grid_2';
	$grid_4col_4 = 'grid_2';
}

//three columns grid
if ($before_content_three_columns_layout=='2,2,8') {
	$grid_3col_1 = 'grid_2';
	$grid_3col_2 = 'grid_2';
	$grid_3col_3 = 'grid_8';
}
elseif ($before_content_three_columns_layout=='2,3,7'){
	$grid_3col_1 = 'grid_2';
	$grid_3col_2 = 'grid_3';
	$grid_3col_3 = 'grid_7';
}
elseif ($before_content_three_columns_layout=='2,4,6'){
	$grid_3col_1 = 'grid_2';
	$grid_3col_2 = 'grid_4';
	$grid_3col_3 = 'grid_6';
}
elseif ($before_content_three_columns_layout=='2,5,5'){
	$grid_3col_1 = 'grid_2';
	$grid_3col_2 = 'grid_5';
	$grid_3col_3 = 'grid_5';
}
elseif ($before_content_three_columns_layout=='2,6,4'){
	$grid_3col_1 = 'grid_2';
	$grid_3col_2 = 'grid_6';
	$grid_3col_3 = 'grid_4';
}
elseif ($before_content_three_columns_layout=='2,7,3'){
	$grid_3col_1 = 'grid_2';
	$grid_3col_2 = 'grid_7';
	$grid_3col_3 = 'grid_3';
}

elseif ($before_content_three_columns_layout=='2,8,2'){
	$grid_3col_1 = 'grid_2';
	$grid_3col_2 = 'grid_8';
	$grid_3col_3 = 'grid_2';
}

elseif ($before_content_three_columns_layout=='3,2,7'){
	$grid_3col_1 = 'grid_3';
	$grid_3col_2 = 'grid_2';
	$grid_3col_3 = 'grid_7';
}

elseif ($before_content_three_columns_layout=='3,3,6'){
	$grid_3col_1 = 'grid_3';
	$grid_3col_2 = 'grid_3';
	$grid_3col_3 = 'grid_6';
}

elseif ($before_content_three_columns_layout=='3,4,5'){
	$grid_3col_1 = 'grid_3';
	$grid_3col_2 = 'grid_4';
	$grid_3col_3 = 'grid_5';
}

elseif ($before_content_three_columns_layout=='3,5,4'){
	$grid_3col_1 = 'grid_3';
	$grid_3col_2 = 'grid_5';
	$grid_3col_3 = 'grid_4';
}

elseif ($before_content_three_columns_layout=='3,6,3'){
	$grid_3col_1 = 'grid_3';
	$grid_3col_2 = 'grid_6';
	$grid_3col_3 = 'grid_3';
}

elseif ($before_content_three_columns_layout=='3,7,2'){
	$grid_3col_1 = 'grid_3';
	$grid_3col_2 = 'grid_7';
	$grid_3col_3 = 'grid_2';
}

elseif ($before_content_three_columns_layout=='4,2,6'){
	$grid_3col_1 = 'grid_4';
	$grid_3col_2 = 'grid_2';
	$grid_3col_3 = 'grid_6';
}

elseif ($before_content_three_columns_layout=='4,3,5'){
	$grid_3col_1 = 'grid_4';
	$grid_3col_2 = 'grid_3';
	$grid_3col_3 = 'grid_5';
}

elseif ($before_content_three_columns_layout=='4,4,4'){
	$grid_3col_1 = 'grid_4';
	$grid_3col_2 = 'grid_4';
	$grid_3col_3 = 'grid_4';
}

elseif ($before_content_three_columns_layout=='4,5,3'){
	$grid_3col_1 = 'grid_4';
	$grid_3col_2 = 'grid_5';
	$grid_3col_3 = 'grid_3';
}

elseif ($before_content_three_columns_layout=='4,6,2'){
	$grid_3col_1 = 'grid_4';
	$grid_3col_2 = 'grid_6';
	$grid_3col_3 = 'grid_2';
}

elseif ($before_content_three_columns_layout=='5,2,5'){
	$grid_3col_1 = 'grid_5';
	$grid_3col_2 = 'grid_2';
	$grid_3col_3 = 'grid_5';
}

elseif ($before_content_three_columns_layout=='5,3,4'){
	$grid_3col_1 = 'grid_5';
	$grid_3col_2 = 'grid_3';
	$grid_3col_3 = 'grid_4';
}

elseif ($before_content_three_columns_layout=='5,4,3'){
	$grid_3col_1 = 'grid_5';
	$grid_3col_2 = 'grid_4';
	$grid_3col_3 = 'grid_3';
}

elseif ($before_content_three_columns_layout=='5,5,2'){
	$grid_3col_1 = 'grid_5';
	$grid_3col_2 = 'grid_5';
	$grid_3col_3 = 'grid_2';
}

elseif ($before_content_three_columns_layout=='6,2,4'){
	$grid_3col_1 = 'grid_6';
	$grid_3col_2 = 'grid_2';
	$grid_3col_3 = 'grid_4';
}

elseif ($before_content_three_columns_layout=='6,3,3'){
	$grid_3col_1 = 'grid_6';
	$grid_3col_2 = 'grid_3';
	$grid_3col_3 = 'grid_3';
}

elseif ($before_content_three_columns_layout=='6,4,2'){
	$grid_3col_1 = 'grid_6';
	$grid_3col_2 = 'grid_4';
	$grid_3col_3 = 'grid_2';
}

elseif ($before_content_three_columns_layout=='7,2,3'){
	$grid_3col_1 = 'grid_7';
	$grid_3col_2 = 'grid_2';
	$grid_3col_3 = 'grid_3';
}

elseif ($before_content_three_columns_layout=='7,3,2'){
	$grid_3col_1 = 'grid_7';
	$grid_3col_2 = 'grid_3';
	$grid_3col_3 = 'grid_2';
}

elseif ($before_content_three_columns_layout=='8,2,2'){
	$grid_3col_1 = 'grid_8';
	$grid_3col_2 = 'grid_2';
	$grid_3col_3 = 'grid_2';
}



//two columns grid
if ($before_content_two_columns_layout=='2,10') {
	$grid_2col_1 = 'grid_2';
	$grid_2col_2 = 'grid_10';
}

elseif ($before_content_two_columns_layout=='3,9') {
	$grid_2col_1 = 'grid_3';
	$grid_2col_2 = 'grid_9';
}

elseif ($before_content_two_columns_layout=='4,8') {
	$grid_2col_1 = 'grid_4';
	$grid_2col_2 = 'grid_8';
}

elseif ($before_content_two_columns_layout=='5,7') {
	$grid_2col_1 = 'grid_5';
	$grid_2col_2 = 'grid_7';
}

elseif ($before_content_two_columns_layout=='6,6') {
	$grid_2col_1 = 'grid_6';
	$grid_2col_2 = 'grid_6';
}

elseif ($before_content_two_columns_layout=='7,5') {
	$grid_2col_1 = 'grid_7';
	$grid_2col_2 = 'grid_5';
}

elseif ($before_content_two_columns_layout=='8,4') {
	$grid_2col_1 = 'grid_8';
	$grid_2col_2 = 'grid_4';
}

elseif ($before_content_two_columns_layout=='9,3') {
	$grid_2col_1 = 'grid_9';
	$grid_2col_2 = 'grid_3';
}

elseif ($before_content_two_columns_layout=='10,2') {
	$grid_2col_1 = 'grid_10';
	$grid_2col_2 = 'grid_2';
}

if ($before_content_a || $before_content_b || $before_content_c || $before_content_d ){
}

?>


<div id="beforecontent">
<!-- start feature -->
	<?php /*four columns modules*/ 
		if ($before_content_a && $before_content_b && $before_content_c && $before_content_d) { ?>		
            <div class="container_12">
			<div class="<?php echo $grid_4col_1; ?>" data-scrollReveal="enter from the top after 0.2s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent1" style="xhtml" /></div></div>
			<div class="<?php echo $grid_4col_2; ?>" data-scrollReveal="enter from the top after 0.4s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent2" style="xhtml" /></div></div>
			<div class="<?php echo $grid_4col_3; ?>" data-scrollReveal="enter from the top after 0.6s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent3" style="xhtml" /></div></div>
			<div class="<?php echo $grid_4col_4; ?>" data-scrollReveal="enter from the top after 0.8s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent4" style="xhtml" /></div></div>
               		
			</div>
			
		<?php
		}
		elseif (!$before_content_a && $before_content_b && $before_content_c && $before_content_d) { ?>
		    <div class="container_12">
			<div class="<?php echo $grid_3col_1; ?>" data-scrollReveal="enter from the top after 0.3s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent2" style="xhtml" /></div></div>
			<div class="<?php echo $grid_3col_2; ?>" data-scrollReveal="enter from the top after 0.6s ease-out" ><div class="block"><jdoc:include type="modules" name="beforecontent3" style="xhtml" /></div></div>
			<div class="<?php echo $grid_3col_3; ?>" data-scrollReveal="enter from the top after 0.9s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent4" style="xhtml" /></div></div>
			    
            </div>			
		<?php 
		
		}
		elseif ($before_content_a && !$before_content_b && $before_content_c && $before_content_d) { ?>
		    <div class="container_12">
			<div class="<?php echo $grid_3col_1; ?>" data-scrollReveal="enter from the top after 0.3s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent1" style="xhtml" /></div></div>
			<div class="<?php echo $grid_3col_2; ?>" data-scrollReveal="enter from the top after 0.6s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent3" style="xhtml" /></div></div>
			<div class="<?php echo $grid_3col_3; ?>" data-scrollReveal="enter from the top after 0.9s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent4" style="xhtml" /></div></div>
			     
            </div>			
		<?php 
		}
		elseif ($before_content_a && $before_content_b && !$before_content_c && $before_content_d) { ?>
		    <div class="container_12">
			<div class="<?php echo $grid_3col_1; ?>" data-scrollReveal="enter from the top after 0.3s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent1" style="xhtml" /></div></div>
			<div class="<?php echo $grid_3col_2; ?>" data-scrollReveal="enter from the top after 0.6s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent2" style="xhtml" /></div></div>
			<div class="<?php echo $grid_3col_3; ?>" data-scrollReveal="enter from the top after 0.9s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent4" style="xhtml" /></div></div>
			      
            </div>	
			
		<?php
		}
		elseif ($before_content_a && $before_content_b && $before_content_c && !$before_content_d) { ?>
		   <div class="container_12">
			<div class="<?php echo $grid_3col_1; ?>" data-scrollReveal="enter from the top after 0.3s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent1" style="xhtml" /></div></div>
			<div class="<?php echo $grid_3col_2; ?>" data-scrollReveal="enter from the top after 0.6s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent2" style="xhtml" /></div></div>
			<div class="<?php echo $grid_3col_3; ?>" data-scrollReveal="enter from the top after 0.9s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent3" style="xhtml" /></div></div>
             		
		    </div>
			
			
			<?php /*two columns modules*/
		 }
		elseif (!$before_content_a && !$before_content_b && $before_content_c && $before_content_d) { ?>
		    <div class="container_12">
			<div class="<?php echo $grid_2col_1; ?>" data-scrollReveal="enter from the top after 0.3s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent3" style="xhtml" /></div></div>
			<div class="<?php echo $grid_2col_2; ?>" data-scrollReveal="enter from the top after 0.6s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent4" style="xhtml" /></div></div>
			     
            </div>			
		<?php
		}
		elseif (!$before_content_a && $before_content_b && !$before_content_c && $before_content_d) { ?>
		    <div class="container_12">
			<div class="<?php echo $grid_2col_1; ?>" data-scrollReveal="enter from the top after 0.3s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent2" style="xhtml" /></div></div>
			<div class="<?php echo $grid_2col_2; ?>" data-scrollReveal="enter from the top after 0.6s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent4" style="xhtml" /></div></div>
                		
            </div>			
		<?php 
		}
		elseif (!$before_content_a && $before_content_b && $before_content_c && !$before_content_d) { ?>
		    <div class="container_12">
			<div class="<?php echo $grid_2col_1; ?>" data-scrollReveal="enter from the top after 0.3s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent2" style="xhtml" /></div></div>
			<div class="<?php echo $grid_2col_2; ?>" data-scrollReveal="enter from the top after 0.6s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent3" style="xhtml" /></div></div>
               			
            </div>			
		<?php 
		}
		elseif ($before_content_a && !$before_content_b && $before_content_c && !$before_content_d) { ?>
		    <div class="container_12">
			<div class="<?php echo $grid_2col_1; ?>" data-scrollReveal="enter from the top after 0.3s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent1" style="xhtml" /></div></div>
			<div class="<?php echo $grid_2col_2; ?>" data-scrollReveal="enter from the top after 0.6s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent3" style="xhtml" /></div></div>
			     
            </div>			
		<?php 
		}
		elseif ($before_content_a && $before_content_b && !$before_content_c && !$before_content_d) { ?>
		    <div class="container_12">
			<div class="<?php echo $grid_2col_1; ?>" data-scrollReveal="enter from the top after 0.3s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent1" style="xhtml" /></div></div>
			<div class="<?php echo $grid_2col_2; ?>" data-scrollReveal="enter from the top after 0.6s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent2" style="xhtml" /></div></div>
			   
            </div>			
		<?php 
		} 
		elseif ($before_content_a && !$before_content_b && !$before_content_c && $before_content_d) { ?>
		   <div class="container_12">
			<div class="<?php echo $grid_2col_1; ?>" data-scrollReveal="enter from the top after 0.3s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent1" style="xhtml" /></div></div>
			<div class="<?php echo $grid_2col_2; ?>" data-scrollReveal="enter from the top after 0.6s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent4" style="xhtml" /></div></div>
			    
			</div>
			
			<?php /*one column modules*/
			
		} 
		elseif ($before_content_a && !$before_content_b && !$before_content_c && !$before_content_d) { ?>
		<div class="container_12">
			<div class="grid_12" data-scrollReveal="enter from the top after 0.3s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent1" style="xhtml" /></div></div>
			
        </div>	
            	 	
		<?php 
		}
		elseif (!$before_content_a && $before_content_b && !$before_content_c && !$before_content_d) { ?>
		<div class="container_12">
			<div class="grid_12" data-scrollReveal="enter from the top after 0.3s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent2" style="xhtml" /></div></div>
			
        </div>	
              	
		<?php 
		}
		elseif (!$before_content_a && !$before_content_b && $before_content_c && !$before_content_d) { ?>
		<div class="container_12">
			<div class="grid_12" data-scrollReveal="enter from the top after 0.3s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent3" style="xhtml" /></div></div>
			
        </div>	
               	
		<?php 
		}
		elseif (!$before_content_a && !$before_content_b && !$before_content_c && $before_content_d) { ?>
		<div class="container_12">
			<div class="grid_12" data-scrollReveal="enter from the top after 0.3s ease-out"><div class="block"><jdoc:include type="modules" name="beforecontent4" style="xhtml" /></div></div>
			
		</div>
			
		<?php } ?>
		</div>
		<style type="text/css">
             #beforecontent .container_12 {
	         text-align:<?php echo $this->params->get('before_content_text_align','left') ?>;
	     }

        </style>


			