<?php
/* Smarty version 3.1.30, created on 2018-10-08 22:52:37
  from "C:\xamppp\htdocs\Ajax\template\interfacePOST.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbbc39572db07_04817737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da64c3b52ab8b3c506bacfa7e373698b1d045150' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\Ajax\\template\\interfacePOST.tpl',
      1 => 1538926152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbbc39572db07_04817737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '6535533785bbbc394236c02_92507350';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>

<button onclick="request()">Click Send Request</button>

<?php echo '<script'; ?>
 type="text/javascript">
	
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
	
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
