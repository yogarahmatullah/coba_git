<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="login-form-container" id="login-form">
	<div class="login-form-content">
		<div class="login-form-header">
			<div class="logo">
				<img src="img/logo.png"/>
			</div>
			<h3>Login ke akun Anda</h3>
		</div>
		<form method="post" action="" class="login-form">
			<div class="input-container">
				<i class="fa fa-envelope"></i>
				<input type="email" class="input" name="email" placeholder="Email"/>
			</div>
			<div class="input-container">
				<i class="fa fa-lock"></i>
				<input type="password"  id="login-password" class="input" name="password" placeholder="Password"/>
				<i id="show-password" class="fa fa-eye"></i>
			</div>
			<div class="rememberme-container">
				<input type="checkbox" name="rememberme" id="rememberme"/>
				<label for="rememberme" class="rememberme"><span>Biarkan tetap masuk</span></label>
				<a class="forgot-password" href="#">Lupa Password?</a>
			</div>
			<input type="submit" name="login" value="Login" class="button"/>
			<a href="#" class="register">Register</a>
		</form>
		<div class="separator">
				<span class="separator-text">atau</span>
		</div>
		<div class="socmed-login">
			<a href="#facebook" class="socmed-btn facebook-btn">
				<i class="fa fa-facebook"></i>
				<span>Login dengan Facebook</span>
			<a>
			<a href="#g-plus" class="socmed-btn google-btn">
				<i class="fa fa-google"></i>
				<span>Login dengan Google</span>
			<a>
			<a href="#g-plus" class="socmed-btn yahoo-btn">
				<i class="fa fa-yahoo"></i>
				<span>Login dengan Yahoo</span>
			<a>
		</div>
	</div>
</div>
</body>
</html>