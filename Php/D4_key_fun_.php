<html>
<head>
<script src="./jquery/jqp.js"></script>
<script>
$(document).ready(function (){
	
	$("input").keydown(function(){
		$("p").css("background-color","red");
	});
	$("input").keyup(function(){
		$("p").css("background-color","violet");
	});
});

 i=0;
$(document).ready(function (){
	
	$("input").keypress(function(){
		$("span").text(i+=1);
	});
});
</script>
</head>

<body>
Enter your name:<input type="text">
<p>Enter your name in the input field above.It will change background color on keydown and keyup.</p>
<p>keypressess:<span>0</span></p>
</body>
</html>

