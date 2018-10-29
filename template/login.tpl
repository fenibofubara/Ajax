<!DOCTYPE html>
<html>
<head>
	<title>{$head}</title>
	<link rel="shortcut icon" href="logosmall.png">
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body class="container">
<script type="text/javascript">

		 	var ajax = new XMLHttpRequest();
	function verify(){
		 	ajax.onreadystatechange = response
		 	var url = 'logindatabase.php?checkname='+document.loginform.name.value;
		 	/**var url = 'logindatabase.php?checkusername='+document.loginform.username.value;
		 	var url = 'logindatabase.php?checkpw='+document.loginform.pw.value;
		 	var url = 'logindatabase.php?checkmail='+document.loginform.mail.value;**/
		 //	ajax.open('GET','searchajax.php?searchtext='+document.search.searchtext.value,true);
		 	ajax.open('GET',url,true);
		 	ajax.send();

	}
	function response(){
		if(ajax.readyState===4 && ajax.status===200){
				
							//console.log(JSON.parse(ajax.responseText));
			var result=JSON.parse(ajax.responseText);
			document.getElementById('namestatus').innerHTML = "<span style='color:red'>" +result+ "</span>"; 
			/**document.getElementById('usernamestatus').innerHTML = JSON.parse(ajax.responseText);
			document.getElementById('emailstatus').innerHTML =  JSON.parse(ajax.responseText);
			document.getElementById('passwordstatus').innerHTML = JSON.parse(ajax.responseText);
			**/
			
				
		}

	}
</script>
	<h3 align="center">Create your account</h3>
	<div class="col-md-offset-3 col-md-6" align="center">
		<div class="panel panel-default" >
	<div class="panel-heading">New to myrewin?<br>Signup for free</div>
	<div class="panel-body">
		<div>
			<form method="" action="" id="loginform" name="loginform">
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="fullname" onkeyup="verify()"> 
				</div>
				<span id="namestatus"></span>
				&nbsp;
				<div class="form-group">
					<input type="text" name="username" class="form-control" placeholder="username" onkeyup="verify()">
				</div>
				<span id="usernamestatus"></span>
					&nbsp;
				<div class="form-group">
					<input type="email" name="mail" class="form-control" placeholder="email" onkeyup="verify()">
				</div>
				<span id="emailstatus"></span>
					&nbsp;
				<div class="form-group">
					<input type="password" name="pw" class="form-control" placeholder="password" onkeyup="verify()">
				</div>
				<span id="passwordstatus"></span>
				&nbsp;
			</form>
		</div>
	</div>
</div>
	</div>
</body>
</html>