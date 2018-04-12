<?php

	session_start();
	//ustawienie ciasteczek//
	setcookie("user",$_SESSION['user'],time()+3600);

?>

<!DOCTYPE html>
<html>
	
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
			<?php
				if($_SESSION['login_ok']==true)
				{
					echo '<a href="zalogowany.php"><img id="logo" src="img/logo.png"></a>';
				}
				else
				{
					echo '<a href="index.php"><img id="logo" src="img/logo.png"></a>';
				}
			?>
			
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
				<button id="admin_panel" style="margin: 25px 10px 0 0; font-size: 13px;" class="btn btn-warning"><i class="glyphicon glyphicon-user"></i> Administrator</button>
				<button style="margin: 25px 10px 0 0; font-size: 13px;" class="btn btn-warning"><i class="glyphicon glyphicon-star"></i> Ulubione</button>
				
				
				
				
			</div>
			
			
			
			
			
			
			<div style="margin: 25px 0 0 0;">
				<button id="logout" style="font-size: 13px;width:98px;" class="btn btn-warning" type="button">Wyloguj</button>
			</div>
			
			<div style="clear: both;"></div>
			
			
		</div>
	</nav>
	
	<div style="margin-bottom: 250px;margin: 0 2% 50px; 2%; " id="container">
	
		<div style="margin: 120px 0 30px 0;background-color: #f2f2f2;height: 400px;box-shadow: 2px 2px 40px 0px rgba(0,0,0,0.5);">

			<div style="background-color: aliceblue;">
				<div class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">

						<div class="item active">
							<img class="d-block img-fluid" src="img/ad1.jpg">
						</div>

						<div class="item">
							<img  class="d-block img-fluid" src="img/ad2.jpg">
						</div>

						<div class="item">
							<img class="d-block img-fluid" src="img/ad3.jpg">
						</div>

					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
		
		<h3 style="text-align: center;font-size: 36px;margin-bottom: 20px;"><strong style="color: #f0ad4e;">Nowe </strong>Produkty</h3>
		
			<div class="col-lg-2 col-md-4 col-sm-6">

				<div class="card new-items-card">
						<img style="max-height: 180px;" class="card-img-top" src="img/nowyprodukt1.png" alt="Samsung Galaxy S8">
						<div class="card-body">
							<h4 class="card-title">Samsung Galaxy S8</h4>
						</div>
						<div style="float: left;" class="card-footer">
							<button class="btn btn-warning new-items-btn">Opis</button>
							<button class="btn btn-warning new-items-btn"><icon class="glyphicon glyphicon-shopping-cart"></icon> 2000 zł</button>
						</div>
					</div>

				</div>
			
			<div class="col-lg-2 col-md-4 col-sm-6">

				<div class="card new-items-card">
					<img style="margin-left: -30px;max-height: 180px;" class="card-img-top" src="img/nowyprodukt2.png" alt="Samsung Galaxy S8">
					<div class="card-body">
						<h4 class="card-title">Iphone 7</h4>
					</div>
					<div style="float: left;" class="card-footer">
						<button class="btn btn-warning new-items-btn">Opis</button>
						<button class="btn btn-warning new-items-btn"><icon class="glyphicon glyphicon-shopping-cart"></icon> 3000 zł</button>
					</div>
				</div>

			</div>
			
			<div class="col-lg-2 col-md-4 col-sm-6">

				<div class="card new-items-card">
					<img style="max-height: 180px;margin-left: -30px;" class="card-img-top" src="img/nowyprodukt3.png" alt="Samsung Galaxy S8">
					<div class="card-body">
						<h4 class="card-title">Huawei</h4>
					</div>
					<div style="float: left;" class="card-footer">
						<button class="btn btn-warning new-items-btn">Opis</button>
						<button class="btn btn-warning new-items-btn"><icon class="glyphicon glyphicon-shopping-cart"></icon> 2000 zł</button>
					</div>
				</div>

			</div>
			
			<div class="col-lg-2 col-md-4 col-sm-6">

				<div class="card new-items-card">
					<img style="max-height: 180px;" class="card-img-top" src="img/nowyprodukt1.png" alt="Samsung Galaxy S8">
					<div class="card-body">
						<h4 class="card-title">Samsung Galaxy S8</h4>
					</div>
					<div style="float: left;" class="card-footer">
						<button class="btn btn-warning new-items-btn">Opis</button>
						<button class="btn btn-warning new-items-btn"><icon class="glyphicon glyphicon-shopping-cart"></icon> 2000 zł</button>
					</div>
				</div>

			</div>
			
			<div class="col-lg-2 col-md-4 col-sm-6">

				<div class="card new-items-card">
					<img style="max-height: 180px;" class="card-img-top" src="img/nowyprodukt1.png" alt="Samsung Galaxy S8">
					<div class="card-body">
						<h4 class="card-title">Samsung Galaxy S8</h4>
					</div>
					<div style="float: left;" class="card-footer">
						<button class="btn btn-warning new-items-btn">Opis</button>
						<button class="btn btn-warning new-items-btn"><icon class="glyphicon glyphicon-shopping-cart"></icon> 2000 zł</button>
					</div>
				</div>

			</div>
			
			<div class="col-lg-2 col-md-4 col-sm-6">

				<div class="card new-items-card">
					<img style="max-height: 180px;" class="card-img-top" src="img/nowyprodukt1.png" alt="Samsung Galaxy S8">
					<div class="card-body">
						<h4 class="card-title">Samsung Galaxy S8</h4>
					</div>
					<div style="float: left;" class="card-footer">
						<button class="btn btn-warning new-items-btn">Opis</button>
						<button class="btn btn-warning new-items-btn"><icon class="glyphicon glyphicon-shopping-cart"></icon> 2000 zł</button>
					</div>
				</div>

			</div>

		</div>
		
	</div>
	
	<footer style="background-color:#282d31;color: white;text-align: center; height: 45px;padding-top: 15px; " id="footer">
		<p>MyPhone <i class="glyphicon glyphicon-copyright-mark"></i> Paweł Kowalski 2017</p>
	</footer>
	
	<script src="js/script_zalogowany.js"></script>
	
	
</body>



</html>