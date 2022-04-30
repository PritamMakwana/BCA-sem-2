<html>
<head>
<script src="./jquery/jqp.js"></script>
<script>
$(document).ready(function (){
	
	$("#btn1").click(function(){
		alert("inner Height of div : "+$("div").innerHeight()+
		"and inner width  of div :"+$("div").innerWidth());
	});
	
});
</script>
</head>
<body>

<div style="height:100px ;width:300px ;padding:10px ;margin:3px;
border:5px solid blue ;background-color:lightblue;">
</div><br>

<button id ="btn1">Display the Inner width and  height of div</button>


</body>
</html>