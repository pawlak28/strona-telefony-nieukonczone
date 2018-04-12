<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<meta name="description" content="Strona z telefonami 'All you need is Phone!'">
	<meta name="author" content="Paweł Kowalski">
	
	<title>All you need is Phone!</title>
			
	<!--My Styles-->
	
	<link type="text/css" rel="stylesheet" href="styles/style.css">
	
	<!--Bootstrap,JQuery-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
</head>

<body>
	
	<nav id="navigation" style="margin-bottom: 0px;box-shadow: 5px 5px 20px 0px rgba(0,0,0,0.5);" class="navbar navbar-fixed-top nav-test">
		<div>
			<a href="index.php"><img id="logo" src="img/logo.png"></a>
		</div>
		<div>
			<form style="width: 650px;margin: 25px 0 0 20px;">
				<input id="search-input" type="text" placeholder="Wpisz nazwę, model, cechy szczególne ..." class="form-control search-box" style="color: #f0ad4e;float: left;width: 300px;height: 33px;">
				<div style="float: left;" id="asd" class="form-group">
					<select style="width: 150px;height: 33px;" class="form-control search-box">
						<option>Samsung</option>
						<option>Iphone</option>
					</select>
				</div>
				<button style="font-size: 14px;" class="btn btn-warning" type="submit">
					<i class="glyphicon glyphicon-search"></i>
				</button>
				
				
				
				<div style="color:red;clear:both;margin:-40px 0 0 520px;">
					<?php
							if(!isset($_SESSION['login_error']))
							{
								
							}
							else
							{
								echo $_SESSION['login_error'];
								unset($_SESSION['login_error']);
							}
					?>
				</div>
				
			</form>
			
			<div style="margin-bottom: 50px;">
			
				<button style="margin: 25px 10px 0 0; font-size: 13px;" class="btn btn-warning"><i class="glyphicon glyphicon-shopping-cart"></i> Koszyk</button>
				<button style="margin: 25px 10px 0 0; font-size: 13px;" class="btn btn-warning"><i class="glyphicon glyphicon-user"></i> Użytkownik</button>
				<button style="margin: 25px 10px 0 0; font-size: 13px;" class="btn btn-warning"><i class="glyphicon glyphicon-star"></i> Ulubione</button>
				
				
				
				
			</div>
			
			
			
			
			
			
			<div style="margin: 25px 0 0 0;" class="dropdown">
				<button style="font-size: 13px;" class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown">Moje konto<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a id="login-anim" style="width: 100px;">Zaloguj sie</a></li>
					<li><a>Zarejestruj</a></li>
				</ul>
			</div>
			
			<div style="clear: both;"></div>
			
			<div id="login-form">
				
				
				
			</div>
			
		</div>
	</nav>
	
	<div style="margin: 0 2% 72px 2%; " id="container">
	
		<div style="margin: 120px 0 0 0;background-color: #f2f2f2;height: 400px;box-shadow: 2px 2px 40px 0px rgba(0,0,0,0.5);">

			<div>
				
				<h3 style="text-align: center;font-size: 36px;margin-bottom: 20px;padding-top:20px;margin-left:-20px;"><strong style="color: #f0ad4e;">Rejestracja</strong></h3>
				
				<div style="margin:30px 20% 0 20%;">
				
					<form method="post" action="rejestracja_skrypt.php">
						
						<div style="padding-top:10px;">
					
						<a style="float:left;margin-left:100px;font-size:22px;color: #282d31;">Login:</a><input name="login" style="margin-left:120px;float:left;width:300px;" type="text" class="form-control">
							
						<div style="color:red;clear:both;margin:40px 0 0 223px;">
							<?php
									if(!isset($_SESSION['login_error_r']))
									{

									}
									else
									{
										echo $_SESSION['login_error_r'];
										unset($_SESSION['login_error_r']);
									}
							?>
						</div>
							
						
							
						</div>
						
						<div style="clear:both;"></div>
						
						<div style="margin-top:10px;">
						
							<a style="float:left;margin-left:100px;font-size:22px;color: #282d31;">Haslo:</a><input name="password1" style="margin-left:117px;float:left;width:300px;" type="password" class="form-control">
							
						</div>
						
						<div style="clear:both;"></div>
						
						<div style="margin-top:10px;">
						
							<a style="float:left;margin-left:100px;font-size:22px;color: #282d31;">Powtorz haslo:</a><input name="password2" style="margin-left:36px;float:left;width:300px;" type="password" class="form-control">
							
							<div style="color:red;clear:both;margin:40px 0 0 400px;">
							<?php
									if(!isset($_SESSION['password_error_r']))
									{

									}
									else
									{
										echo $_SESSION['password_error_r'];
										unset($_SESSION['password_error_r']);
									}
							?>
							</div>
							
						</div>
						
						<div style="clear:both;"></div>
						
						<div style="margin-top:10px;">
						
							<a style="float:left;margin-left:100px;font-size:22px;color: #282d31;">Email:</a><input name="email" style="margin-left:119px;float:left;width:300px;" type="text" class="form-control">
							
							<div style="color:red;clear:both;margin:40px 0 0 500px;">
							<?php
									if(!isset($_SESSION['email_error_r']))
									{

									}
									else
									{
										echo $_SESSION['email_error_r'];
										unset($_SESSION['email_error_r']);
									}
							?>
							</div>
							
						</div>
						
						<div style="clear:both;"></div>
						
						<button type="submit" name="register" style="margin-left:100px;margin:10px 0 10px 380px;" class="btn btn-warning">Zarejestruj</button>
							
					</form>
				
				</div>
				
			</div>
		
		
		

		</div>
		
	</div>
	
	<footer style="background-color:#282d31;color: white;text-align: center; height: 45px;padding-top: 15px; " id="footer">
		<p>MyPhone <i class="glyphicon glyphicon-copyright-mark"></i> Paweł Kowalski 2017</p>
	</footer>
	
	<script src="js/script.js"></script>
	
	
</body>






</html>