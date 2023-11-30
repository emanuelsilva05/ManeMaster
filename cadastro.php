<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/cadastro.css">
	<title>ManeMaster</title>
</head>

<body>
	<section class="area-cadastro">  <!-- A seção completa de login -->
		 <div class="cadastro">    <!-- Uma div só com os elementos do login -->
		 	<div>     <!-- Uma div para a imagem -->
		 	    <img src="img/Mmlogo.png">
		    </div>

		    <form action="cadastro.php" method="get">  <!-- O formulario de login -->
		    	<input for="nome" type="text" name="nome" placeholder="Digite seu nome" autofocus>
		    	<input for="nome_usuario" type="text" name="nome_usuario" placeholder="Crie um nome de usuario" autofocus>
		    	<input for="senha" type="password" name="senha" placeholder="Crie sua senha">
		    	<input type="submit" value="Cadastrar">
			</form>
			<p>Já tem um usuário? <a href="index.php">Logar</a></p> <!-- link para página de cadastro -->
		 </div>
	</section>
</body>


</html>