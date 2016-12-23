<?php // functions.inc.php

// Clean text field values
function clean_text_field( $field_value ) {
	
	// Magic Quotes on
	if( ini_get( 'magic_quotes_gpc' ) ) {
	
		// Strip slashes
		$field_value = trim( strip_tags( stripslashes( $field_value ) ) );
		
	} else { // No magic quotes
		
		$field_value = trim( strip_tags( $field_value ) );
		
	}
	
	return $field_value;
	
}

// Clean input array with possible secondary arrays
// Store cleaned values in config form array
// and return it
function clean_form( $input ){

	// Initialize return array
	$form = array();
	
	foreach( $input as $name => $value ){
	
		// Identify arrays
		if( is_array( $value ) ) {
			
			// Initialize response array
			$form[$name]['response'] = array();
			
			foreach( $value as $key => $element_value ){
			
				$form[$name]['response'][$key] = clean_text_field( $element_value );
				
			}
			
		} else { // Clean scalars
		
			$form[$name]['response'] = clean_text_field( $value );
		
		}
		
	}
	
	return $form;
	
}

// Selected items
function validate_response_options( $responses, $valid_options ){
	
	foreach( $resposnes as $response ) {
	
		if( !in_array( $response, $valid_options ) ) {
			return false;
		}
		
	}
	return true;	
}

// Validate Form
function validate_form( $purposes, $error_messages){
	
	$valid = true;
	
	if( !isset( $GLOBALS['form']['email']['response'] ) || empty( $GLOBALS['form']['email']['response'] ) ){
		
		$GLOBALS['form']['email']['error'] = $error_messages['empty'];
		
		// invalid
		return false;
		
	}
	
	if( !isset( $GLOBALS['form']['purpose']['response'] ) || !is_array( $GLOBALS['form']['purpose']['response']) ){
	
		$GLOBALS['form']['purpose']['error'] = $error_messages['empty'];
	
		return false;
		
	} else {
	
		if( count( $GLOBALS['form']['purpose']['response'] ) > count( $purposes ) ){
		
		$GLOBALS['form']['purpose']['error'] = $error_messages['max'];
	
		return false;
			
		} else {
		
			if( !validate_response_options( $GLOBALS['form']['purpose']['response'], $purposes ) ) {
			
			$GLOBALS['form']['purpose']['error'] = $error_messages['invalid'];
	
		return false;
				
			}
			
		}
		
	}
	
	return $valid;
}

?>