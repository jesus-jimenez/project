<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CMS | Coding</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/form.css">
</head>
<body class="login">
<div id="login">
	<h1><a href="https://wordpress.com/" title="WordPress.com" tabindex="-1">WordPress.com</a></h1>
	
	<form name="loginform" id="loginform" action="https://es.wordpress.com/wp-login.php" method="post">
		<p>
			<label for="user_login">Nombre de usuario o correo electrónico
				<br>
				<input type="text" name="log" id="user_login" class="input" value="" size="20">
			</label>
		</p>
		<p>
			<label for="user_pass">Contraseña
				<br>
				<input type="password" name="pwd" id="user_pass" class="input" value="" size="20">
			</label>
		</p>
		<p class="forgetmenot">
			<label for="rememberme">
				<input name="rememberme" type="checkbox" id="rememberme" value="forever" checked="checked"> Mantener la sesión iniciada
			</label>
		</p>
		<p class="submit">
			<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Acceder">
			<input type="hidden" name="redirect_to" value="https://es.wordpress.com/">
			<input type="hidden" name="testcookie" value="1">
		</p>
	</form>
	<p id="nav">
		<a class="click-register" href="https://wordpress.com/start/es?ref=wplogin">Registrarse
		</a> |
		<a href="https://es.wordpress.com/wp-login.php?action=lostpassword">¿Has perdido tu contraseña?
		</a>
	</p>
	<p id="backtoblog">
		<a href="https://es.wordpress.com/" title="Are you lost?">Volver a WordPress.com
		</a>
	</p>
</div>

</body>
</html>