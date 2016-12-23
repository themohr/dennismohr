<?php
if( $_SERVER['SERVER_NAME'] == 'localhost' ){
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
}
else
{
	ini_set('display_errors', 0);
	error_reporting(0);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form Validation</title>
</head>

<body>

<h1>Local Contact Form - Bypass Browser Validation</h1>
<?php
    @require_once('./_lib/config.inc.php');
	@require_once('./_lib/htmlfunctions.inc.php');
	@require_once('./_lib/functions.inc.php');
	/*
	echo "<pre>";
	print_r( $_SERVER);
	echo "</pre>";
	*/
	
	if(!isset($_POST['send']))
	{
        print_form();
	}
	else
	{
	    echo "Process the form input<br>";
		/*
		echo "<pre>";
		print_r($GLOBALS);
		echo "</pre>";
		*/
		$form = clean_form($_POST['form']);
		
		$valid = validate_form($errorMsgs);
	
	    if(!$valid){
			print_form($valid);
		    echo "Please fill out the form correctly";	
		}
		else
		{
			echo "Thank You for your request!"  . htmlentities($form['email']['response']);
		}
	}
?>
</body>
</html>