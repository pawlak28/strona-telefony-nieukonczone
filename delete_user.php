<?php

require_once "dbconnect.php";

$connect=mysqli_connect("localhost","root","","myphone");

$data=json_decode(file_get_contents("php://input"));

	
	
		
		$user_id=mysqli_real_escape_string($connect,$data->id);
		
		$sql="SELECT * FROM uzytkownicy where id = '$user_id' ;";

		$result=mysqli_query($connect,$sql);

		if(mysqli_num_rows($result)==1)
			{
				$sql_update="DELETE FROM uzytkownicy WHERE id='$user_id' ;";

				if(mysqli_query($connect,$sql_update))
				{
					echo "Data updated!";
				}
			}





?>