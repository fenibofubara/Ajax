<!DOCTYPE html>
<html>
<head>
	<title>{$title}</title>
</head>
<body>

<button onclick="request()">Click Send Request</button>

<script type="text/javascript">
	{literal}
	var ajax = new XMLHttpRequest();
	// two functions must be created;
	function request(){
		// where request goes to
	 var url = 'ajaxPOST.php';
		//enables authomatic collection of data from server
		ajax.onreadystatechange = response // *** no parenthesis
		ajax.open('POST',url,true) // method,backend url,control a sync request
		ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded') //necessary if you are sending data through POST method
		
		ajax.send('name=fenibo');// just a means of authenticating the database.


	}

	function response(){
	//console.log('Request function has just been triggered');
	//console.log(ajax.readyState);
	if(ajax.readyState === 4){
		//4 means that document load is complete
		if(ajax.status===200){
			console.log(JSON.parse(ajax.responseText).author);
			// 200 means that the request was successfull,the php file(db) was intact,404 displays on the other hand.
			//console.log(ajax.responseText);
			//This 'responseText' gives us plenty html rendering that you dont want your clients to see,so we need to device means to pick out the exact data we need for clients view.
			
			
		}
		
	}

	}
	//setInterval(function(){request()},3000) Use this method when you want to achieve have live request and responses.
	{/literal}
</script>

</body>
</html>