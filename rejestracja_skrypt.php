<?php

session_start();

require_once "dbconnect.php";

$flag=true;

$db=new mysqli($host,$db_user,$db_password,$db_name);


if(isset($_POST['register']))
{
	
	$login=mysql_real_escape_string($_POST['login']);
	$password1=mysql_real_escape_string($_POST['password1']);
	$password2=mysql_real_escape_string($_POST['password2']);
	$email=mysql_real_escape_string($_POST['email']);
	$encrypted_password=md5($password1);
	
	$sql="SELECT login FROM uzytkownicy WHERE login = '$login';";
	$sql2="SELECT email FROM uzytkownicy WHERE email='$email';";
	$success="INSERT INTO uzytkownicy(login,haslo,email,zalogowany,admin) VALUES ('$login','$encrypted_password','$email','0','0')";
	$result=mysqli_query($db,$sql);
	$result2=mysqli_query($db,$sql2);
	
	if(strlen($login)<3||strlen($login)>20)
	{
		$flag=false;
		$_SESSION['login_error_r']="Nazwa użytkownika powinna zawierać od 3 do 20 znaków";
	}
	
	if(mysqli_num_rows($result)>0)
	{
		$flag=false;
		$_SESSION['login_error_r']="Podana nazwa już istnieje";
	}
	
	if(strlen($password1)<8)
	{
		$flag=false;
		$_SESSION['password_error_r']="Podane hasło jest za krótkie";
	}
	
	if($password1!==$password2)
	{
		$flag=false;
		$_SESSION['password_error_r']="Podane hasła nie są identyczne";
	}
	
	if($email==null)
	{
		$flag=false;
		$_SESSION['email_error_r']="Podaj email";
	}
	
	if(mysqli_num_rows($result2)>0)
	{
		$flag=false;
		$_SESSION['email_error_r']="Podany email jest juz zarejestorwany";
	}
	
	if($flag==false)
	{
		header("Location: rejestracja.php");
	}
	else
	{
		
		mysqli_query($db,$success);
		echo "Zarejestrowano pomyślnie!";
		echo '<a href="index.php">Wroc do strony logowania</a>';
		
	}
	
	
}

?>