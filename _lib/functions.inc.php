<?php // functions.inc.php - processing functions
/* clean_text_field
 * @return $fieldValue
 */

function clean_text_field( $fieldValue ){
	if( ini_get( 'magic_quotes_gpc' )){
	    $fieldValue = trim( strip_tags( stripslashes($fieldValue)));	
	} else {
	    $fieldValue = trim( strip_tags( $fieldValue ));	
	}
	return $fieldValue;
}

function clean_form( $input ){
	$form = array();
	
    foreach($input as $inputName => $inputValue){
	    $form[$inputName]['response'] = clean_text_field ( $inputValue );
	}
	
	return $form;
}

function validate_form( $errorMsgs ){
	
	$valid = true;
	
    if(!isset($GLOBALS['form']['name']['response']) || empty($GLOBALS['form']['name']['response'])){
		$GLOBALS['form']['name']['error'] = $errorMsgs['empty'];
		
		$valid = false;
	}
	
	if(!isset($GLOBALS['form']['email']['response']) || empty($GLOBALS['form']['email']['response'])){
		$GLOBALS['form']['email']['error'] = $errorMsgs['empty'];
		
		$valid = false;
	}
	
	return $valid;
}

?>