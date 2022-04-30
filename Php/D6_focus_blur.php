<html>
<head>
<script src="./jquery/jqp.js"></script>
<script>
$(document).ready(function (){
	
	$("input").focus(function(){
		$("span").css("display","inline");
	});
	$("input").blur(function(){
		$("span").css("display","inline").fadeOut(2000); //2 second
	});
});
</script>
<style>
span{
	disply:none;
}
</style>
</head>
<body>
<input>
<span>Enter your Password</span>
<p>click  in the input filed to get focus.</p>
</body>
</html>