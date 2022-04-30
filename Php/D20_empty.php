<html>
<head>
<script src="./jquery/jqp.js"></script>
<script>
$(document).ready(function (){
	
	$("button").click(function(){
		$("div").empty();
	});
});
</script>
</head>
<body>

<div style ="height:100px ;background-color:yellow">
This is some text
<p>This is a paregraph inside this div.</p>
</div>
<p>This is a paregraph outside this div.</p>

<button>Remove content of the div element</button>

</body>
</html> 

