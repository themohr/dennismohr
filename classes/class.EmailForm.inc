<?php
	class EmailForm {
		// Name field from form
		public $senderName;
		
		// Email address from form
		public $senderEmail;
		
		// Purpose of correspondence
		public $senderPurpose;
		
		// Comments from form
		public $senderComments;
		
	function process_form(){
		$input = '';
		
		$input .= $this->senderName;
			
		$input .= '<br>';
		
		if( !empty( $_POST['email'] ) ) {
			
			$input .= $this->senderEmail;
			
		}
		
		$input .= '<br>';
		$input .= $this->senderPurpose;
		$input .= '<br>';
		$input .= $this->senderComments;
		
		return $input;
	}
	}
 ?>