<?php


	require_once "dbconnect.php";
	$db=new mysqli($host,$db_user,$db_password,$db_name);
	$sql="SELECT * FROM uzytkownicy;";
	$result=mysqli_query($db,$sql);
	$data=array();
	while($row=mysqli_fetch_row($result))
	{
		$data[]=array("id"=>$row[0],"login"=>$row[1],"haslo"=>$row[2],"email"=>$row[3],"admin"=>$row[5]);		
	}

	echo json_encode($data);

?>