<?php

class ContactForm {
	public $name;
	public $email;
	public $purpose;
	public $comments;
	
	function print_form(){
		
		// Include a processing section to prevent form hacking, etc.
		
		?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<fieldset>
    	<legend>Conact</legend>
        	<label>Name: <input type="text" name="name" value="" /></label>
            
            <br /><label>Email: <input type="text" name="email" value="" /></label>
            
            <br /><label>Purpose:<br />
            	Work: <input type="checkbox" name="purpose" value="work"  />
                General: <input type="checkbox" name="purpose" value="general" checked="checked" />
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
}

?>