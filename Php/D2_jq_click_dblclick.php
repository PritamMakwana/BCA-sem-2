<html>
<head>
<script src="./jquery/jqp.js"></script>

<script>

$(document).ready(function(){
	
	$(".click").click(function(){   //one click
	alert("The paragraph was clicked.");
	});
});

$(document).ready(function(){
	
	$(".dbclick").dblclick(function(){   //double-clicked 
	alert("The paragraph was double clicked.");
	});
});

</script>
</head>

<body>
<p class ="click">click on this paragraph.</p>
<p class="dbclick">Double - click on this paragraph</p>

</body>
</html>

	