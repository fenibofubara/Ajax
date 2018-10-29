<?php
include'router.php';
$header = 'Ajax Search';
$smarty->assign('head',$header);
$smarty->display('search.tpl');

?>