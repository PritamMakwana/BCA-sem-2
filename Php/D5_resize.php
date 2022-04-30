<html>
<head>
<script src="./jquery/jqp.js"></script>
<script>
var x=0;

$(document).ready(function (){
	
	$(window).resize(function(){
		$("span").text(x+=1);
	});
});
</script>
</head>
<body>
<p>Window resize <span>0</span>times.</p>
<p>try resizing your browser window.</p>
</body>
</html>
