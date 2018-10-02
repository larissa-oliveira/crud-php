<?php
	switch($_REQUEST["acao"]){
		case "autor":
			$nome_autor = $_REQUEST["nome_autor"];	
			
			$sql = "UPDATE autor  SET nome_autor='$nome_autor' WHERE id_autor=".$_REQUEST["id_autor"];
			
			$result = $conn->query($sql);
			
			if($result){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='index.php?page=editar-autor';</script>";
			}else{
				print "<div class='alert alert-danger'>Houve um problema.</div>";
			}
		break;
		case "categoria":
			$categoria = $_REQUEST["categoria"];
			
			$sql = "UPDATE categoria SET categoria='$categoria' WHERE id_categoria=".$_REQUEST["id_categoria"];
			
			$result = $conn->query($sql);
			
			if($result){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='index.php?page=editar-categoria';</script>";
			}else{
				print "<div class='alert alert-danger'>Houve um problema.</div>";
			}
		break;
		case "livro":
			$autor = $_REQUEST["autor_id_autor"];
			$categoria = $_REQUEST["categoria_id_categoria"];
			$quantidade = $_REQUEST["quantidade"];
			$especificacao= $_REQUEST["especificacao"];
			$local_entrega = $_REQUEST["local_entrega"];
			$data_entrega = $_REQUEST["data_entrega"];
			
			$sql = "UPDATE livros SET autor_id_autor=$autor, categoria_id_categoria=$categoria, quantidade='$quantidade', especificacao='$especificacao', local_entrega='$local_entrega', data_entrega='$data_entrega' WHERE id_livros=".$_REQUEST["id_livros"];
			
			$result = $conn->query($sql);
			
			if($result){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='index.php?page=editar-livros';</script>";
			}else{
				print "<div class='alert alert-danger'>Houve um problema.</div>";
			}
		break;
	}
?>




