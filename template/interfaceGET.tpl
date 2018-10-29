<!DOCTYPE html>
<html>
<head>
	<title>{$title}</title>
</head>
<body>

<button onclick="request()">Click Send Request[GET]</button>

<script type="text/javascript">
	{literal}
	var ajax = new XMLHttpRequest();
	// two functions must be created;
	function request(){
		// where request goes to
	 var url = 'ajaxGET.php?name=fenibo&msg=Be proactive&time=2018';
		//enables authomatic collection of data from server
		ajax.onreadystatechange = response // *** no parenthesis
		ajax.open('GET',url,true); // method,backend url,control a sync request
		//ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded') //necessary if you are sending data through POST method
		//ajax.send('name=fenibo&msg=Be proactive&time=2018');
		ajax.send()


	}

	function response(){
		
	if(ajax.readyState === 4){
		//4 means that document load is complete
		if(ajax.status===200){
			console.log(ajax.responseText);
			// 200 means that the request was successfull,the php file(db) was intact,404 displays on the other hand.
			//console.log(ajax.responseText);
			//This 'responseText' gives us plenty html rendering that you dont want your clients to see,so we need to device means to pick out the exact data we need for clients view.
			
			
		}
		
	}
	}
	{/literal}
</script>

</body>
</html>