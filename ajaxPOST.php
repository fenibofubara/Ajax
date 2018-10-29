<?php
// Serves as the database end and so data must be structured as an array for JSON to be able to relate with it as an appropriate string 
include_once 'router.php';
//var_dump($_GET);// Used to test if result can reach the back end file
//
if($_POST['name']){
$array = array('msg'=>'my message...','author'=>'benjamin franklin');
echo json_encode($array);	
}




?>