<html>
<head>
<script src="./jquery/jqp.js"></script>
<script>
$(document).ready(function (){
	
	$("button").click(function(){
		$("p").before("<p>Hello world!</p>");
	});
});
</script>
</head>
<body>

<button> Insert content before each p element </button>

<p>This is a paragraph</p>

</body>
</html>