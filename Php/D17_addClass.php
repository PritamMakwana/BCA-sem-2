<html>
<head>
<script src="./jquery/jqp.js"></script>
<script>
$(document).ready(function (){
	
	$("button").click(function(){
		$("p:first").addClass("intro");
	});
});
</script>
<style>
.intro{
	font-size:150%;
	color:red;
}
</style>
</head>
<h1>This is a heading</h1>
<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
<button>Add a class name to the first p element</button>
</body>
</html>
