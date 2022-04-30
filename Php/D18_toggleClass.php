<html>
<head>
<script src="./jquery/jqp.js"></script>
<script>
$(document).ready(function (){
	
	$("button").click(function(){
		$("p:first").toggleClass("main");
	});
});
</script>
<style>
.main{
	font-size:120%;
	color:red;
}
</style>
</head>
<button>Toggle Class"main" for p element</button>
<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
<p><b>Note:</b>CLick the button then once to see the toggle effect.</p>
</body>
</html>
