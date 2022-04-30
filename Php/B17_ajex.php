<html>
<head>
<script>
function showHint(str){
   if(str.lenght == 0)
  {
	  document.getElementById("txtHint").innerHTML="";
	  return;
  }
  
  else
  {
	  var xmlhttp = new XMLHttpRequest ();
	  xmlhttp.onreadystatechange =function() 
	  {
		  document.getElementById("txtHint").innerHTML =this.responseText;
      };
    xmlhttp.open("GET","B18_gethint.php?q=" + str ,true);
	xmlhttp.send();
  }
                     }
	</script>
	</head>
	<body>
	
	<b>Start typing a name in the input fined below:</b>
	<form action="">
	<input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
	</form>
	<p>Suggestions:<span id="txtHint"></span></p>
	</body>
	</html>
	
	  