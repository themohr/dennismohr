// RSS Feed for use on local files via JavaScript
// Load scritp(s)
addOnload(initFeed);
xhr = false;
var dataArray = new Array();
// live version: var url = "http://dmmohr.wordpress.com/feed/";
var url = "site-scripts/ajax/blog.xml";
function initFeed(){
	// Test for XMLHttpRequest
	if(window.XMLHttpRequest){
		xhr = new XMLHttpRequest();	
	} else { // Test fro ActiveXObject (Microsoft.XMLHTTP)
		if(window.ActiveXObject){
			try{
				xhr = new ActiveXObject("Microsoft.XMLHTTP");	
			}
			catch(e){}
		}
	}
	
	// If xhr is true...
	if(xhr){
		xhr.onreadystatechange = setDataArray;
		xhr.open("GET", url, true);
		xhr.send(null);
	} else { // could not open feed
		alert("Sorry, but I Couldn't create an XMLHttpRequest");
	}
	
	
	
}
	
function setDataArray(){
	if(xhr.readyState == 4){
		if(xhr.status == 200){
			//outMsg = xhr.responseText;
			//alert(outMsg);
			if(xhr.responseXML){
				//alert('Don\'t Be Dumb');
				//alert(xhr.responseXML.getElementsByTagName('item'));
				feedDoc = xhr.responseXML;
				var feedDisplay = xhr.responseXML.getElementsByTagName('item');
					
					//alert(feedDisplay);
					var displayFeed = document.getElementById('feed');
					
					// Verify that display feed has a value
					if(displayFeed !== null){
					for(var i = 0; i < 1; i++){
						//alert(feedDisplay[i].childNodes[0].nodeValue);
						
						// Display the title, description and link to full article
						// Title...
						displayFeed.innerHTML += '<strong>' + feedDisplay[i].getElementsByTagName('title')[0].firstChild.data + "</strong><br />";
						// Description and link
						displayFeed.innerHTML += feedDisplay[i].getElementsByTagName('description')[0].firstChild.data.substr(0, 120) + " - <a href=" + feedDisplay[i].getElementsByTagName('link')[0].firstChild.data +">Read More...</a><br /><br />";
						
					}
				}
				
			} else {
				alert('Please check that your browser supports browser scripting.');	
			}
			
		}else{
			alert("There was a problem completing the request " + xhr.status);
		}
		
	}
	
}