<?php
/* Smarty version 3.1.30, created on 2018-10-27 01:02:46
  from "C:\xamppp\htdocs\Ajax\template\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd39d169fd9a8_19023714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cafe91df37769a462b405843bab2aad49e3c5eeb' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\Ajax\\template\\login.tpl',
      1 => 1540594960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd39d169fd9a8_19023714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '5837162895bd39d168cd4a8_45915766';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['head']->value;?>
</title>
	<link rel="shortcut icon" href="logosmall.png">
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body class="container">
<?php echo '<script'; ?>
 type="text/javascript">

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
			var result=ajax.responseText;
			document.getElementById('namestatus').innerHTML = "<span style='color:red'>" +result+ "</span>"; 
			/**document.getElementById('usernamestatus').innerHTML = JSON.parse(ajax.responseText);
			document.getElementById('emailstatus').innerHTML =  JSON.parse(ajax.responseText);
			document.getElementById('passwordstatus').innerHTML = JSON.parse(ajax.responseText);
			**/
			
				
		}

	}
<?php echo '</script'; ?>
>
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
</html><?php }
}
