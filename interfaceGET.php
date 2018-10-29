<?php
include_once('router.php');
$tit = 'Ajax';
$smarty->assign('title',$tit);
$ajaxpage ='ajaxGET.php';

$smarty->assign('ajax',$ajaxpage);
$smarty->display('./template/interfaceGET.tpl');
?>