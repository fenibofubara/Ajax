<?php
if(isset($_GET['checkname'])){
	//echo json_encode('name already exists');
	$checkname =$_GET['checkname'];
if(!empty($checkname)){
//echo json_encode('Available');

	$con = mysqli_connect('localhost','root','','ajax');
	if(mysqli_connect_errno()){
		echo'Database conection error'.mysqli_connect_error();
	}
	else{
		$sql = "SELECT * FROM directory"

	}

}
}

?>
