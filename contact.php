<?php
// Set up error reporting logic
ini_set( 'display_errors', 1);
error_reporting( E_ALL );

// Require necessary files
@require_once('config/config.inc.php');
@require_once('config/htmlfunctions.inc.php');
@require_once('config/functions.inc.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form</title>
</head>

<body>

<?php // Contact form page

if( !isset( $_POST['process'] ) ){
	// If the form is not posted, print the blank form

	print_form();
	
} else {
	// Process the form
	// If errors exist post the form w/values
	// in no errors, display pleasant message
	
	$form = clean_form( $_POST['form']);
	
	$valid = validate_form( $purposes, $error_msg );
	
	if( !$valid ){
		
		print_form( $valid );
		
	} else {
	
?>
	<h2>Thank you for contacting DM Studio!</h2>
    <p>The following request has been sent:
    	<ul>
<?php

		foreach( $form['purpose']['response'] as $purpose ){
			echo '<li>' . $purpose . '</li>';
		}
		
		echo '<li>' . $form['comments']['response'] . '</li>';
?>
		</ul>
        Please allow 24 hours for a response.
	</p>
<?php
	}
}

?>

</body>
</html>