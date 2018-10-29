<?php
//var_dump($_POST);
//Always test with if statement before echo of data from a database.This will prevent sql error messages unplanned for.

/**if(!empty($_POST['database'])){

	if($_POST['database']=='all'){
			$array = array('name' =>'alibabaja','sex' =>'male','age' =>'28' );
			echo json_encode($array);
	}
	else{
		echo("empty table field");
	}
}
else{
	echo "No database.";
}**/

/**if (!empty($_POST['db'])){
	//die("feniiiiiiiiiiiii");
	$con = mysqli_connect('localhost','root','','ajax');
	if($con->connect_error){
      echo "not connected";
	}
	else{
	

		$sql = $con->prepare('SELECT * FROM directory');
		      $query= $sql->execute();//dont assign to any variable
		   // print_r($sql);
		    //die('sss')
		       if($sql){
		       if($sql->num_rows == 0){
		       		echo "Empty database".$con->error;
		       }
		       else{
		       	//since fetch_assoc() is a one request at a time,we use the while loop to contain it
		       	while($row =$sql->fetch_assoc()){
		       		$row[] = $row;
		       	}
		       	echo json_encode($row);
		       }
		     // $query->free();
		       }
		       else{
		       		echo "database query error";
		       }
		       $con->close();
		     //  	free()   and close()
	}
}
**/
if(!empty($_POST['range'])){
	if($_POST['range']=='all'){
		$db = @ mysqli_connect('localhost','root','','ajax');
		if($db->connect_error){
			exit(json_encode([false,$db->connect_error]));
		}
		$sql = "SELECT * FROM directory";
		//$sql = "SELECT name FROM directory WHERE name='kaio'";
		$result = $db->query($sql);
		
		if($result){
			if($result->num_rows == 0){
				echo json_encode([false,'Sorry there where no rows found']);//just an index array to show true and  false scenarios.
			}
			else{
				while($each_row = $result->fetch_assoc()){
					$all_rows[] = $each_row;
				}
				echo json_encode([true,$all_rows]);
			}
			$result->free();//remember to always free the result object wen not in use again.
		}
		else{
			echo json_encode([false,'Sql error']);
		}
		$db->close();
	}
}

?>