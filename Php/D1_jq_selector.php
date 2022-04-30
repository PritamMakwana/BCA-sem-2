<html>
<head>
<script src="./jquery/jqp.js"></script>

<script>

$(document).ready(function(){
	
	$("p").click(function(){   //element selector
	$(this).hide();
	});
	
	$("#myid").click(function(){   //id selector
	$(this).hide();
	});
	
	$(".myclass").click(function(){   //class selector
	$(this).hide();
	});
	
});
</script>
</head>

<h1 id="myid">If you click on me,I will disapper.</h1>

<p>Click me away!</p>

<h2 class="myclass">click me too!</h1>
</body>
</html>


  