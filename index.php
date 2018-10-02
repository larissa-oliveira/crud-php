<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>######</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		a {font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, AppleGothic, sans-serif;}
	</style>
	</head>
	<body>
		<nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="display: block;">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<center>
			<a class="navbar-brand" href="?page=home"><img src="images/icones.png"></a>
			</center>
			
			<div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 500px;">
				<ul class="navbar-nav justify-content-center">
					<li class="nav-item active">
						<center>
						<a class="nav-link" href="index.php">Home</a>
						</center>
					</li>
					<li class="nav-item dropdown">
						
						<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Cadastrar Pedido
						</a>
						
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="?page=cadastrar-autor">Cliente</a>
							<a class="dropdown-item" href="?page=cadastrar-categoria">Tipo de Produto</a>
							<a class="dropdown-item" href="?page=cadastrar-livros">Detalhes do Pedido</a>
						</div>
						
					</li>
					<li class="nav-item dropdown">
						
						<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Editar
						</a>
						
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<!--<a class="dropdown-item" href="?page=editar-autor"> Editar Cliente</a>
							<a class="dropdown-item" href="?page=editar-categoria">Editar </a>-->
							<a class="dropdown-item" href="?page=editar-livros">Editar Pedido</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		
		<div class="container">
			<div class="row">
				<div class="col">
					<?php
						//conexão com banco de dados
						include("config.php");
						//inclusões das páginas
						switch(@$_REQUEST["page"]){
							case "cadastrar-autor":
								include("cadastrar-autor.php");
							break;
							case "cadastrar-categoria":
								include("cadastrar-categoria.php");
							break;
							case "cadastrar-livros":
								include("cadastrar-livros.php");
							break;
							case "salvar-cadastrar":
								include("salvar-cadastrar.php");
							break;							
							case "editar-autor":
								include("editar-autor.php");
							break;
							case "editar-autor-item":
								include("editar-autor-item.php");
							break;
							case "editar-categoria":
								include("editar-categoria.php");
							break;
							case "editar-categoria-item":
								include("editar-categoria-item.php");
							break;
							case "editar-livros":
								include("editar-livros.php");
							break;
							case "editar-livros-item":
								include("editar-livros-item.php");
							break;
							case "salvar-editar":
								include("salvar-editar.php");
							break;
							case "salvar-excluir":
								include("salvar-excluir.php");
							break;
							default:
								include("home.php");
						}
					?>
				</div>
			</div>
		</div>

		<script src="js/jquery-3.1.1.slim.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>



