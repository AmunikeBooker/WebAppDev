
<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
 
?>



<?php
//get language and direction
$doc = JFactory::getDocument();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<title><?php echo $this->error->getCode(); ?> - <?php echo $this->title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/style.css" />
	
	

</head>
<body class="error">
<center>
    <div class="errorbox">

    <div class="block">
        <h1>404</h1>
	<h3>Page not found</h3>
    </div>
	<p>
	    Sorry! The page you are looking for cannot be found. Please use 
	    the provided search box to find what you are looking for, 
	    click on our top navigational menu, or 
	    <a onclick="window.history.back()">go back.</a>
	</p>

    </div>
</center>
</body>
</html>