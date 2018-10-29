<!DOCTYPE html>
<html>
<head>
	<title>{$head}</title>
	
		<script type="text/javascript">
		
		function request(){
			if(window.XMLHttpRequest){
		ajax = new XMLHttpRequest();
		}
		else{
		ajax = new ActiveXObject('Microsoft.XMLHTTP');
		}
			ajax.onreadystatechange =function(){
			if(ajax.readyState==4 && ajax.status==200){
				
			//document.getElementById('displaysearch').innerHTML =JSON.parse(ajax.responseText);
			document.getElementById('results').innerHTML = ajax.responseText;
			
			}

		}
			ajax.open('GET','searchajax.php?searchresult='+document.formm.searchtextt.value,true);
			//+document.'form name'.'inputfield name' . value
			//ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded') DONT USE FOR GET METHOD
			ajax.send();


		}

	

	</script>
</head>
<body>
	

<form id ="form" name="formm" method= "" action="">
		<div align="center">
			<h4>Google</h4><br><input type="text" name="searchtextt" placeholder="Search here"onkeyup="request();"></div>
	</form>
				<div id="results" align="center"></div>
		</body>
</html>

