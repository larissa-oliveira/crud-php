<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Referências</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<style>
			h1{
				font-family: 'Lobster', cursive;
			}
		</style>
	</head>
	<body>
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



