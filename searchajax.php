<?php
/**if(isset($_GET['searchtext'])){
	 $searchtext = $_GET['searchtext'];
}
if(!empty($searchtext)){
$con = mysqli_connect('localhost','root','');
	if(mysqli_select_db($con,'ajax')){
		$query = "SELECT * FROM directory WHERE name LIKE'".mysqli_real_escape_string($con,$searchtext)."%'";
		/* $query = "SELECT fullname FROM feedback WHERE fullname LIKE'".mysql_real_escape_string($search_text)."%' ORDER BY times_searched"; 
		to be used when keeping track of the number of times a query is  searched
		
		$query_run = mysqli_query($con,$query);
		while($query_row = mysqli_fetch_assoc($query_run)){
			//echo $name = $query_row['fullname'].'<br>';
			echo $name = '<a href = "profile_page.php?searchtext='.$query_row['name'].'">'.$query_row['name'].'</a><br>';
			//echo"".$query_row['name']."<br>";
		}
	}  

}

**/
/** ===============================================  **/
if(isset($_GET['searchresult'])){
	 $searchtext = $_GET['searchresult'];
	 if(!empty($searchtext)){

	 		$con=mysqli_connect('localhost','root','','ajax');
	if(mysqli_connect_errno()){
		echo'Database connection error:'.mysqli_connect_error();
	}
	else{
			$query = "SELECT * FROM directory WHERE name LIKE'".mysqli_real_escape_string($con,$searchtext)."%'";

		//$query = "SELECT name FROM directory WHERE name ='peter'";
			$sql = $con->query($query);
			if($sql->num_rows===0){
				echo"Empty Database";
			}
			else{
				while($row =$sql->fetch_assoc()){
					$result = $row['name'];
					//echo $result.'<br>';
			echo $display = "<a href='profile_page.php?searchtext=$result'>$result</a>"."<br>";

				}
			}

	}
	 }

}

?>