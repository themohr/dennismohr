var dragDrop = (function(){
	var objectTarget = "";
	var objectX = "";
	var objectY = "";
	var tableName = document.getElementById('momApp');
	var trCount = tableName.getElementsByTagName('tr').length;
	var tdCount = tableName.getElementsByTagName('td').length;
	var move = (function(){
		console.log('action',document);
		if("ontouchstart" in window){
			move = "movestart";	
		} else {
			move = "drag";	
		}
	});
		
	function moveStart(e) {
		
		// First loop sets all table cells to blank
		for(var n = 1; n <= trCount - 1; n++) {
			for(var x = 1; x <= trCount - 1; x++) {
				tableName.getElementsByTagName('tr')[n].getElementsByTagName('td')[x].innerHTML = "";
			}
		}
		
		objectTarget = e.target.src;
		//objectTarget = e.target.innerText;
		
		e.dataTransfer.effectAllowed = "copy";
		e.dataTransfer.setData("text/html",objectTarget);
	}
	
	function moveDragOver(e) {
		//console.log("Object",objectTarget);
		if(e.preventDefault){
			e.preventDefault();	
		}
		
		e.dataTransfer.dropEffect = "copy";
		
		return false;
	}
	
	function moveDragEnter(e) {
		e.preventDefault();
		console.log("Enter");
	}
	
	function moveDragLeave(e) {
		e.preventDefault();
		console.log("Leave");
	}
	
	function moveDrop(e) {
		if(e.stopPropogation){
			e.stopPropogation();	
		}
		console.log("Drop");
		
		var elem = document.getElementById("momApp")
		var data = e.dataTransfer.getData("text/html");
		var imgEl = document.createElement("img");
		imgEl.setAttribute('src',objectTarget);
		// Set the desired object the cell in the second row of the second column
		elem.getElementsByTagName('td')[12].appendChild(imgEl);
		
		return false;
	}
	
	function moveDragEnd(e) {
		e.preventDefault();
		console.log("End");
	}
	
	function multiplyValues(e) {
		
		var rows = 1;
		var columns = 1;
		var outputArea = document.getElementById("computation");
		
		if(factorials.rows.value !== ""){
			rows = factorials.rows.value;
		}
		if(factorials.columns.value !== "") {
			columns = factorials.columns.value;
		}
	
		// First loop sets all table cells to blank
		for(var n = 1; n <= trCount - 1; n++) {
			for(var x = 1; x <= trCount - 1; x++) {
				tableName.getElementsByTagName('tr')[n].getElementsByTagName('td')[x].innerHTML = "";
			}
		}
		// Second loop sets number of cells and rows with content
		if((rows * columns) <= 100){
			// Display the product in standard notation		
			outputArea.innerHTML = rows + " x " + columns + " = " + (rows * columns);
			for(var i = 1; i <= rows; i++) {
				for(var j = 1; j <= columns; j++) {
					var imgEl = document.createElement("img");
					imgEl.setAttribute('src',objectTarget);
					tableName.getElementsByTagName('tr')[i].getElementsByTagName('td')[j].appendChild(imgEl);
				}
			}
		} else {
			// Display the product in standard notation
			outputArea.innerHTML = rows + " x " + columns + " = " + (rows * columns);
		}
	}
	
	
	document.querySelector("#dropItems").addEventListener("drag",moveStart,false);
	document.querySelector("#dropZone").addEventListener("dragover",moveDragOver,false);
	document.querySelector("#dropZone").addEventListener("dragenter",moveDragEnter,false);
	document.querySelector("#dropZone").addEventListener("dragleave",moveDragLeave,false);
	document.querySelector("#dropZone").addEventListener("drop",moveDrop,false);
	document.querySelector("#dropItems").addEventListener("dragend",moveDragEnd,false);
	document.querySelector("#displayValues").addEventListener("keyup",multiplyValues,false);
})();