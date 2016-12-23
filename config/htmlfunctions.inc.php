<?php // htmlfunctions.inc.php - HTML file for form processing
// Print sticky form

function print_form( $valid=true ){
	
?>

	<h1>Contact DM Studio</h1>
    
<?php
	// If errors exist print notice
	if( !$valid ) {
?>
		<p class="error">Errors detected. Please review messages below:</p>
<?php
	}
?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <fieldset>
                <legend>Conact</legend>

                    <label>Name (handle): <input type="text" name="name" value="" /></label>
<?php
				// Email error field
				$email_error = ( isset( $GLOBALS['form']['email']['error'] ) && !empty( $GLOBALS['form']['email']['error']  ) ) ? ' <span class="error">' . htmlentities( $GLOBALS['form']['email']['error'] ) . '</span>' : '' ;
				
				// Response field
				$email_value = ( isset( $GLOBALS['form']['email']['response'] ) && !empty( $GLOBALS['form']['email']['response'] ) ) ? htmlentities($GLOBALS['form']['email']['response']) : '';

?>
                    <br /><label>Email: <span class"required">*</span> <?php $email_error; ?><input type="text" name="form[email]" value="<?php $email_value; ?>" /></label>

<?php
				// Purpose select error
				$purpose_error = ( isset( $GLOBALS['form']['error'] ) && !empty( $GLOBALS['form']['error'] ) ) ? ' <span class="error">Error: ' . htmlentities($GLOBALS['form']['error']) . '</span>' :'';
				
?>                    
                    <br /><label>Select any reason(s) for your request: <?php $purpose_error; ?><br />
                        <select name="form[purpose][]" multiple="multiple" size="9">
<?php
						while( list( , $purpose_option ) = each( $GLOBALS['purpose'] ) ) {
							$selected = ( isset( $GLOBALS['form']['flavors']['response'] ) && in_array( $purpose_option, $GLOBALS['form']['flavors']['response'] ) ) ? ' selected="selected"' : '' ;
?>							
							<option<?php $selected ?>><?php $purpose_option ?></option>
<?php							
						}
						reset( $GLOBALS['purpose'] );
?>                        
                        </select>
                    </label>
                    <br />
                    <label>Comments:
                    <br /><textarea name="comments"></textarea>
                    </label>
                </fieldset>
            <input type="submit" name="process" value="Submit" /><input type="reset" value="Reset" />
        </form>
<?php	
}
?>