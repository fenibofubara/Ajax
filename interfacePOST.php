<?php
include_once('router.php');
$tit = 'Ajax';
$smarty->assign('title',$tit);
$ajaxpage ='ajaxPOST.php';

$smarty->assign('ajax',$ajaxpage);
$smarty->display('./template/interfacePOST.tpl');
?>