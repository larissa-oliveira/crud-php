<?php
	switch($_REQUEST["acao"]){
		case "autor":			
			
			$sql = "DELETE FROM autor WHERE id_autor=".$_REQUEST["id_autor"];
			
			$result = $conn->query($sql);
			
			if($result){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='index.php?page=editar-autor';</script>";
			}else{
				print "<div class='alert alert-danger'>Houve um problema.</div>";
			}
		break;
		case "categoria":
						
			$sql = "DELETE FROM categoria WHERE id_categoria=".$_REQUEST["id_categoria"];
			
			$result = $conn->query($sql);
			
			if($result){
				print "<script>alert('Exluiu com sucesso!');</script>";
				print "<script>location.href='index.php?page=editar-categoria';</script>";
			}else{
				print "<div class='alert alert-danger'>Houve um problema.</div>";
			}
		break;
		case "livro":
			
			$sql = "DELETE FROM livros WHERE id_livros=".$_REQUEST["id_livros"];
			
			$result = $conn->query($sql);
			
			if($result){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='index.php?page=editar-livros';</script>";
			}else{
				print "<div class='alert alert-danger'>Houve um problema.</div>";
			}
		break;
	}
?>




