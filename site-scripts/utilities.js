// JavaScript Utilities - utilities.js
// util: global object to prevent namespace pollution
var util = {
	/** $() function retrieve an element by id
	* @param id passes the id element from the DOM
	*/
	$: function(id){
		'use strict';
		
		// logic for string type
		if(typeof id == 'string'){
			return document.getElementById(id);	
		}
	}, // End: $() function

	/** setText() function 
	* @param id passes the id element from the DOM
	* @param message passes text content from the id element
	* @return true: textContent is a string, is not undefined
	*/
	setText: function(id, message) {
		'use strict';
		
		if( (typeof id == 'string' ) && (typeof message == 'string'	) ){
			
			var output = this.$(id);
			if(!output) return false;
			
			if(output.textContent !== undefined) {
			
				output.textContent = message;
				
			}else{
				output.innerText = message;	
			}
			return true;
		} // end: main IF
	}, // End: setText() function
	
	/** addEvent() function
	* @param obj requires an object
	* @param type requires the type
	* @param fn requires the function name
	*/
	addEvent: function(obj, type, fn){
		'use strict';
		
		if(obj && obj.addEventListener){
			obj.addEventListener(type,fn,false);	
		} else if(obj && attachEvent) {
			obj.attachEvent('on' + type, fn);
		}
	}, // End: addEvent() function
	
	/** removeEvent() function
	* @param obj requires an object
	* @param type requires the type
	* @param fn requires the function name
	*/
	removeEvent: function(obj, type, fn){
		'use strict';
		
		if(obj && obj.addEventListener){
			obj.removeEventListener(obj, type, fn);	
		} else if(obj && obj.detachEvent){
			obj.detachEvent('on' + type, fn);
		}
	} // End: removeEvent() function
}; // End of util declaration

