<?php
include_once 'router.php';
$header = 'AutoRefresh';
$smarty->assign('autorefresh',$header);
$smarty->display('./template/autorefreshinterface.tpl');

?>