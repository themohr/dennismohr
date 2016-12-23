<h1>Javascript</h1>
<p>Browser scripting handles behavior in the Website</p>

<canvas id="canvas" height="100" width="200"></canvas>

<script type="text/javascript">

document.onclick = function(){
    var a_canvas = document.getElementById("canvas");
	var a_context = a_canvas.getContext("2d");
	a_context.fillRect(50,25,150,100);
	
	
}
</script>