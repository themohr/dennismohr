// Entire function relates to element changer
	$(document).ready(function(){
		
		var photoArea = $('#photo_area');
		photoArea.append('<div id="prev">&laquo;</div><div id="next">&raquo;</div>');
		
		// Store elements for rotator in an array | object
		// Set vars for items, work on way to pass in variable
		var elemItem = $('#photo_area ul li');
		var elemsPos = new Array();
		var incrementIndex = '';
		
			// Determine the left position of each element
			$(elemItem).each(function(index){

				// Set a variable for the left coordinate of each (index)
				elemsPos.push( $(this).position().left );
				
				$('#photoCount ul').append('<li></li>');
				
			});
		
		incrementIndexSelected = incrementIndex + 1;
			// WiP - make the selected or current index highlighted
			
				if( incrementIndex == incrementIndexSelected-1 ){
					
					$('#photoCount ul li').css('background-color','rgb(0,169,157)');
					$('#photoCount ul li:nth-child(' + incrementIndexSelected + ')').css('background-color','rgb(116,207,200)');
					
				}
		
		// Select a specific photo in the photo series
		$('#photoCount ul li').click( function(){
			photoSelector = $('#photoCount ul li');
			// Position of selected element
			thisElement = elemsPos[photoSelector.index(this)];
			elemItem.animate({right: thisElement + 'px'},"slow");
			
			// Index of selected element
			incrementIndex = photoSelector.index(this);
			incrementIndexSelected = incrementIndex + 1;
			// WiP - make the selected or current index highlighted
			
				if( incrementIndex == incrementIndexSelected-1 ){
					
					$('#photoCount ul li').css('background-color','rgb(0,169,157)');
					$('#photoCount ul li:nth-child(' + incrementIndexSelected + ')').css('background-color','rgb(116,207,200)');
					
				}
		});
		
		$('#next').click( function(){
			
			// Get the position of each and subtract the (W) dimension from each
			
			// Increment the index of elemsPos
			incrementIndex++;
						
			// If the index is greater than the number of elements, do not run
			if( incrementIndex >= elemsPos.length ){
				incrementIndex = elemsPos.length - 1;
			} else { // Run animate until no more photos to display
				elemItem.animate({right: '+=552px'}, "slow" ); // Determine dimensions from page
			}
			
			incrementIndexSelected = incrementIndex + 1;
			// WiP - make the selected or current index highlighted
			
				if( incrementIndex == incrementIndexSelected-1 ){
					
					$('#photoCount ul li').css('background-color','rgb(0,169,157)');
					$('#photoCount ul li:nth-child(' + incrementIndexSelected + ')').css('background-color','rgb(116,207,200)');
					
				}
						
		});
		
		$('#prev').click(function(){
			incrementIndex--;	
			
			// Set var for items
			var elemItem = $('#photo_area ul li');

			// If the index is less than (0) do not run animate			
			if( incrementIndex < 0 ){
				incrementIndex = 0;
			}else{ // Run animate until no more photos to display
				elemItem.animate({right: '-=552px'}, "slow" );
			}
			
			incrementIndexSelected = incrementIndex + 1;
			// WiP - make the selected or current index highlighted
			
				if( incrementIndex == incrementIndexSelected-1 ){
					
					$('#photoCount ul li').css('background-color','rgb(0,169,157)');
					$('#photoCount ul li:nth-child(' + incrementIndexSelected + ')').css('background-color','rgb(116,207,200)');
					
				}
			
		});
		
	});