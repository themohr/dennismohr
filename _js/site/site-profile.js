/**
*  Author: Dennis Mohr
*  Date: 10.11.2014
*  File name: site-profile.js
*/
var positionSet = {
			
			screenH : $(window).height(),
			bodyH   : $('body').height(),
		 	headerH : $('#header').innerHeight(),
			contentH: $('#content').innerHeight(),
			footerH : $('#footer').innerHeight(),
			
			/*
			 * Set the height of content to push the footer to bottom of screen
			 * 
			*/ 
			contentSet : function(){
					var combinedHeight = positionSet.headerH + positionSet.contentH + positionSet.footerH;
					var diffHeight = '';
					var newContentH = '';
						
					if(positionSet.bodyH < positionSet.screenH){
						diffHeight = positionSet.screenH - combinedHeight;
						newContentH = positionSet.contentH + diffHeight;
						$('#content').height(newContentH);	
					}
					console.log(combinedHeight);
				},
				
			affix : function(){
				
				if(document.getElementById('affix-element') !== null){
					var containerAffix = $('#affix-element');
					var containerXPos = containerAffix.position().top;
					console.log(containerAffix.parent().position().top);
					console.log(positionSet.headerH);
					
					$(document).scroll(function(event){
						//console.log($(this).scrollTop() + '|' + containerXPos.position().top);
						
						if($(this).scrollTop() + $('.header').innerHeight() > containerAffix.parent().position().top){
							containerAffix.addClass('fixed').css('top',$('.header').innerHeight());
						} else {
							containerAffix.removeClass('fixed');
						}
					});
				}
			}
		};
$(positionSet.contentSet);
$(positionSet.affix);
