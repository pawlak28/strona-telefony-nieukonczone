<?php

	require_once "dbconnect.php";
	$db=new mysqli($host,$db_user,$db_password,$db_name);
	$connect = mysqli_connect("localhost", "root", "", "myphone");

	$data=json_decode(file_get_contents("php://input"));

	
	
		
		$user_id=mysqli_real_escape_string($connect,$data->id);
		$user_login=mysqli_real_escape_string($connect,$data->login);
		$user_password=mysqli_real_escape_string($connect,$data->haslo);
		$user_email=mysqli_real_escape_string($connect,$data->email);
		$user_admin=mysqli_real_escape_string($connect,$data->admin);
		
		$user_password_encrypted=$user_password;
		
		$sql="SELECT * FROM uzytkownicy where id = '$user_id' ;";

		$result=mysqli_query($connect,$sql);

		if(mysqli_num_rows($result)==1)
			{
				$sql_update="UPDATE uzytkownicy SET login='$user_login' , haslo='$user_password_encrypted' , email='$user_email' , admin='$user_admin' WHERE id='$user_id';";

				if(mysqli_query($connect,$sql_update))
				{
					echo "Data updated!";
				}
			}

		
	
	

	

?>