<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form method="post" class="login100-form validate-form" action="/autenticacao.php">
					<span class="login100-form-title">
						Login
					</span>

					<?php if(isset($_GET['login_erro']) && $_GET['login_erro'] == 'true'): ?>
                        <div class="alert alert-danger" role="alert">
                            Email ou senha incorretos. Por favor, tente novamente.
                        </div>
						<br>
                    <?php endif; ?>

					<?php if(isset($_GET['new_account']) && $_GET['new_account'] == 'true'): ?>
                        <div class="alert alert-danger" role="alert">
							Cadastro realizado com sucesso!
                        </div>
						<br>
                    <?php endif; ?>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="/Cadastro/">
							Crie sua Conta
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>