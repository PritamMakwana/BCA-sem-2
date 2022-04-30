<html>
<head>
<script src="./jquery/jqp.js"></script>
<script>
$(document).ready(function (){
	
	$("button").click(function(){
		$("p").after("<p>Hello world!</p>");
	});
});
</script>
</head>
<body>

<button> Insert content after each p element </button>

<p>This is a paragraph</p>

</body>
</html>