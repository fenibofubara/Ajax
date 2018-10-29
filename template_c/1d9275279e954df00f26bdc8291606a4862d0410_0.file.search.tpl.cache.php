<?php
/* Smarty version 3.1.30, created on 2018-10-26 22:34:32
  from "C:\xamppp\htdocs\Ajax\template\search.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd37a58786bd1_55645710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d9275279e954df00f26bdc8291606a4862d0410' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\Ajax\\template\\search.tpl',
      1 => 1540586035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd37a58786bd1_55645710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18824891265bd37a5858dfa9_96978003';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['head']->value;?>
</title>
	
		<?php echo '<script'; ?>
 type="text/javascript">
		
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

	

	<?php echo '</script'; ?>
>
</head>
<body>
	

<form id ="form" name="formm" method= "" action="">
		<div align="center">
			<h4>Google</h4><br><input type="text" name="searchtextt" placeholder="Search here"onkeyup="request();"></div>
	</form>
				<div id="results" align="center"></div>
		</body>
</html>

<?php }
}
