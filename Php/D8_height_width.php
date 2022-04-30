<html>
<head>
<script src="./jquery/jqp.js"></script>
<script>
$(document).ready(function (){
	
	$("#btn1").click(function(){
		alert("Height of div : "+$("div").height()+
		"and width  of div :"+$("div").width());
	});
	$("#btn2").click(function(){
		$("div").height(300);
	});
	$("#btn3").click(function(){
		$("div").width(200);
	});	
	
});
</script>
</head>
<body>

<div style="height:100px ;width:300px ;padding:10px ;margin:3px;
border:1px solid blue ;background-color:lightblue;">
</div><br>

<button id ="btn1">Display the height of div</button>
<button id ="btn2">Set height of div to 300px</button>
<button id="btn3">Set width of div to 200px </button>
</body>
</html>


