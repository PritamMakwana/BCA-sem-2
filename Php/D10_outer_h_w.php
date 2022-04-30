<html>
<head>
<script src="./jquery/jqp.js"></script>
<script>
$(document).ready(function (){
	
	$("#btn1").click(function(){
		alert("inner Height of div : "+$("div").outerHeight()+
		"and inner width  of div :"+$("div").outerWidth());
	});
	
});
</script>
</head>
<body>

<div style="height:100px ;width:300px ;padding:10px ;margin:3px;
border:5px solid blue ;background-color:lightblue;">
</div><br>

<button id ="btn1">Display the Outer width and  height of div</button>


</body>
</html>