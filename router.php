<?php
include_once './smarty/libs/Smarty.class.php';
$smarty=new smarty();
@$smart->caching = Smarty::CACHING_OFF;
$smarty->cache_lifetime = 0;
$smarty->template_dir='./template';
$smarty->compile_dir = './template_c';
$smarty->caching='./cache';

?>