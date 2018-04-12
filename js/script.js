$('.carousel').carousel({
	interval: 5000
})

$('#login-anim').click(function(){
	$('#navigation').removeClass('nav-test');
	$('#navigation').addClass('login-window');
	$('#login-form').append(
	'<div class="form-group login-animation" style="margin: -40px 0 0 600px;"><form method="POST" action="logowanie_skrypt.php"><div style="margin-top: 4px;"><a style="color:#f0ad4e;">Login</a> <input style="" type="text" name="login"> <a style="color:#f0ad4e;">Haslo</a> <input style="margin-right: 6px;" type="password" name="password"></div><button name="loguj" style="font-size: 13px;padding-top: -30px;width: 98px;" class="btn btn-warning" type="submit">Zaloguj sie</button></form></div>'
	);
	
});

$('#register-window').click(function(){
	window.location.href="rejestracja.php";
});
