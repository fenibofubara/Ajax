<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include_once'router.php';

$header = 'login';
$smarty->assign('head',$header);
$smarty->display('./template/login.tpl');

?>
</body>
</html>
