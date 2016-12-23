<?php // htmlfunctions.inc.php - html display components
/* print_form
 * Display the form
 * if it has not been submitted
 * or it is not valid
 */
function print_form( $valid=true){
	if(!$valid){
	    echo "<p>Please correct the following errors:</p>";	
	}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <?php
	    // Email error
	    $nameError = (isset( $GLOBALS['form']['name']['error']) && !empty( $GLOBALS['form']['name']['error']) ) ? '<span class="error">Error: ' . htmlentities($GLOBALS['form']['name']['error']) . '</span>' : '';
		
		// Email Value
		$nameValue = (isset($GLOBALS['form']['name']['response']) && !empty($GLOBALS['form']['name']['response'])) ? 'value="' . htmlentities($GLOBALS['form']['name']['response']) . '"' : '';
	?>
    <ul class="form-group">
        <li><label for="name">Name: <?php echo $nameError; ?></label><input type="text" placeholder="Full Name" id="name" name="form[name]" <?php echo $nameValue ?> /></li>
    <?php
	    // Email error
	    $emailError = (isset( $GLOBALS['form']['email']['error']) && !empty( $GLOBALS['form']['email']['error']) ) ? '<span class="error">Error: ' . htmlentities($GLOBALS['form']['email']['error']) . '</span>' : '';
		
		// Email Value
		$emailValue = (isset($GLOBALS['form']['email']['response']) && !empty($GLOBALS['form']['email']['response'])) ? 'value="' . htmlentities($GLOBALS['form']['email']['response']) . '"' : '';
	?>
        <li><label for="email">Email: <?php echo $emailError; ?></label><input type="text" id="email" name="form[email]" <?php echo $nameValue; ?> /></li>
    <?php
	    /* Phone error
		$phoneError = (isset( $GLOBALS['form']['phone']['error']) && !is_numeric( $GLOBALS['form']['phone']['error'])) ? '<span class="error">Error: ' .htmlentities($GLOBALS['form']['phone']['error']) : '';
		
		// Phone Value
		$phoneValue = (isset($GLOBALS['form']['phone']['response']) && is_numeric( $GLOBALS['form']['phone']['response'] )) ? 'value="' . htmlentities($GLOBALS['form']['phone']['response']) . '"' : '';
		*/
	?>
        <li><label for="phone">Phone:</label><input type="text" placeholder="###-###-####" id="phone" name="form[phone]"></li>
        <li><label for="message">Message:</label><textarea name="form[message]"></textarea></li>
        <li><div id="btn_form"><input type="submit" name="send" id="send" value="Send" /></div></li>
    </ul>
</form>
<?php
}
?>