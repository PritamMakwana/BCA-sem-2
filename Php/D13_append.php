<html>
<head>
<script src="./jquery/jqp.js"></script>
<script>
$(document).ready(function (){
	
	$("#btn1").click(function(){
		$("p").append("<b>Appended text</b>.");
	});
	
	$("#btn2").click(function(){
		$("ol").append("<li>Appended item</li>");
	});
});
</script>
</head>
<body>

<p>Tis is a paragraph.</p>
<p>This is another paragraph.</p>

<ol>
   <li>List itam 1</li> 
   <li>List itam 2</li> 
   <li>List itam 3</li> 
 </ol>
 <button id="btn1">Appended text</button>
  <button id="btn2">Appended List itam</button>
  </body>
  </html>