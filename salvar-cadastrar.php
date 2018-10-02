<?php
	switch($_REQUEST["acao"]){
		case "autor":
			$nome_autor = $_REQUEST["nome_autor"];	
			$telefone = $_REQUEST["telefone"];
			$email = $_REQUEST["email"];
			
			$sql = "INSERT INTO autor (nome_autor, telefone, email) VALUES ('$nome_autor','$telefone', '$email')";
			
			$result = $conn->query($sql);
			
			if($result){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='index.php?page=cadastrar-autor';</script>";
			}else{
				print "<div class='alert alert-danger'>Houve um problema.</div>";
			}
		break;
		case "categoria":
			$categoria = $_REQUEST["categoria"];
			
			$sql = "INSERT INTO categoria (categoria) VALUES ('$categoria')";
			
			$result = $conn->query($sql);
			
			if($result){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='index.php?page=cadastrar-categoria';</script>";
			}else{
				print "<div class='alert alert-danger'>Houve um problema.</div>";
			}
		break;
		case "livro":
			$autor = $_REQUEST["autor_id_autor"];
			$categoria = $_REQUEST["categoria_id_categoria"];
			$quantidade = $_REQUEST["quantidade"];
			$local_entrega = $_REQUEST["local_entrega"];
			$data_entrega = $_REQUEST["data_entrega"];
			$especificacao = $_REQUEST["especificacao"];
			
			$sql = "INSERT INTO livros (autor_id_autor, categoria_id_categoria, quantidade, local_entrega, data_entrega, especificacao) VALUES ($autor, $categoria, '$quantidade', '$local_entrega', '$data_entrega', '$especificacao')";
			
			$result = $conn->query($sql);
			
			if($result){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='index.php?page=cadastrar-livros';</script>";
			}else{
				print "<div class='alert alert-danger'>Houve um problema.</div>";
			}
		break;
	}
?>




