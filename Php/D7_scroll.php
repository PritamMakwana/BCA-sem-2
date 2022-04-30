<html>
<head>
<script src="./jquery/jqp.js"></script>
<script>
var x=0;

$(document).ready(function (){
	
	$("div").scroll(function(){
		$("span").text(x+=1);
	});
});
</script>
</head>
<body>

<p>Try the scrollbar in the div </p>

<div style ="border:1px solid black; width:200px ; height:100px;overflow:scroll;"> 
In my younger and more valnerable years  my father gave me some advice that
 I've been turning over inmy mind ever since.
 <br><br>
 'whenever you feel like criticizing anyone,'he told me,just remember that all pepole in
 this wolrd haven 't had the advantages that you 've had.'
 'whenever you feel like criticizing anyone,'he told me,just remember that all pepole in
 this wolrd haven 't had the advantages that you 've had.'
 'whenever you feel like criticizing anyone,'he told me,just remember that all pepole in
 this wolrd haven 't had the advantages that you 've had.'
 </div>
 <p>Scrolled<span>0</span>thimes.</p>
 </body>
 </html>

 