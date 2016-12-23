function updateDuration(){
		'use strict';
		
		var now = new Date();
		
		var message = 'It has been ' + now.getTime();
		
		message += ' seconds since the epoch. (mouseover to update)';
		
		util.setText('output', message);
			
	}
	
	window.onload = function(){
		'use strict';
		util.addEvent(util.$('output'),'mouseover',updateDuration);
		updateDuration();
	};