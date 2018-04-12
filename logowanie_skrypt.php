<?php

session_start();

require_once "dbconnect.php";

$db=new mysqli($host,$db_user,$db_password,$db_name);

if(isset($_POST['loguj']))
{
	$login=mysql_real_escape_string($_POST['login']);
	$haslo=mysql_real_escape_string($_POST['password']);
	$encrypted_password=md5($haslo);
	
	$sql="SELECT login, haslo FROM uzytkownicy WHERE login = '$login' AND haslo = '$encrypted_password';";
	
	$result=mysqli_query($db,$sql);
	
	
	if(mysqli_num_rows($result)==1&&$login=='admin')
	{
		header("Location: zalogowany_admin.php");
		$_SESSION['login_ok']=true;
		$_SESSION['user']=$login;
	}
	else if(mysqli_num_rows($result)==1)
	{
		header("Location: zalogowany.php");
		$_SESSION['login_ok']=true;
		$_SESSION['user']=$login;
	}
	else
	{
		header("Location: index.php");
		$_SESSION['login_error']="Błąd logowania!";
		$_SESSION['login_ok']=false;
	}
}



?>