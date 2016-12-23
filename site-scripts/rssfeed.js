// RSS Feed parse from PHP
// Dynamic feed to display posts on an ongoing basis
// 06.30.2013

// Load script before window
addOnload(initRSS);

function initRSS(str){

	// Evaluate string for 0
	if( str.length == 0){
		document.getElementById('feed').innerHTML = "Nothing";
		return;	
	}
	
	// Determine browser client
	if(window.XMLHttpRequest){ // IE7+, FF, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else { // Do not display feed
		xmlhttp = '';
	}

	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById('feed').innerHTML = xmlhttp.responseText;	
		}else{
			document.getElementById('feed').innerHTML = "Ready State: " + xmlhttp.readyState + " | Status: " + xmlhttp.status;
		}
	}
	console.log(xmlhttp);
	xmlhttp.open("GET","http://localhost:8080/dennismohr/config/rssfeed.php",true);
	xmlhttp.send();
	
}