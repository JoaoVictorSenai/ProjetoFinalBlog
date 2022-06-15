<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="css/style-index.css">
	<!-- BootStrap -->
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
		<!-- CSS -->
	<link rel="stylesheet" href="../css/style-index.css">
	<title>Login - Adm</title>
</head>
<body class="text-center">
	<main class="form-login">
		<form method="POST" action="logar.php">
			<div class="container">
				<img class="mb-4" src="../images/logo.png" alt="logo pokemon tcg dragon type" width="100">
				<h3 class="h3">Painel Administrativo</h3>
				<div class="mb-3">
				  <label for="exampleInputEmail1" class="form-label">Login</label>
				  <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="mb-3">
				    <label for="exampleInputPassword1" class="form-label">Senha</label>
				    <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
				</div>
				<button type="submit" class="btn btn-primary">Entrar</button>
			</div>
		</form>
	</main>
</body>
</html>