<?php // Old Contact form page using procedural/functional code
if( !$_POST ){
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<fieldset>
    	<legend>Conact</legend>
        	<label>Name: <input type="text" name="name" value="" /></label>
            <br /><label>Email: <input type="text" name="email" value="" /></label>
            <br /><label>Purpose:<br />
            	Work: <input type="checkbox" name="purpose[]" value="work"  />
                General: <input type="checkbox" name="purpose[]" value="general" />
            </label>
            <br />
            <label>Comments:
            <br /><textarea name="comments"></textarea>
            </label>
        </fieldset>
    <input type="submit" name="process" value="Submit" /><input type="reset" value="Reset" />
</form>

<?php
}else{
/**
	* Procedural method for collecting form data
	* Delete after object oriented method is complete
	*/
	
	// Initialize Variables
	$form = $_POST;
	$errors = array();
	
	///////////////////////
	// TEST: display all form elements
	echo "<pre>";
	print_r($form);
	echo "</pre>";
	///////////////////////
	
	// Step 1: Clean the data
	foreach( $form as $name => $value ){
	
		// Clean scalars (non-array)
		if( is_scalar( $value ) ) {
			
			// Magic Quotes on...			
			if( ini_get( 'magic_quotes_gpc' ) ){
				
				// Strip the slashes
				$form[$name] = trim( strip_tags( stripslashes( $value ) ) );
		
			} else { // No Magic quotes.
				
				$form[$name] = trim( strip_tags( $value ) );
				
			}
		}
	}
	
	// Step 2: Validate fields
	if( empty( $form['email'] ) ) {
	
		$errors['email'] = 'Please provide an email address.';
		
	}
	
	// Step 2b: Check for purpose
	if( !isset( $form['purpose'] ) ) {
		
		$errors['purpose'] = 'Please indicate the reason for your message.';
			
	}
	// Step 3: Process (collect email)
	// Requires detailed reg expression for validation
	
	// Step 4: Print Error(s) or results
	if( $errors ) {
		
		echo '<h2>Error: Please review messages below</h2>';
		echo '<ul>';
		foreach( $errors as $error ) {
		
			echo '<li>' . $error . '</li>';
			
		}
		echo '</ul>';
		
	} else {
	
	// Thank you message
		echo '<h2>Thank you for your request!</h2>';
		echo '<ul><li>Please allow 24 hours for a response.</li></ul>';
	}
}	
?>