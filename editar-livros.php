<body style="background: #F5F5DC;">
<h1 style="font-family: Candara, Calibri, Segoe; text-align: center;">Pedidos Cadastrados</h1>

<style>
	th {font-family: Candara, Calibri, Segoe, "Segoe UI", Optima, Arial, sans-serif;}
	
</style>

<table class="table table-bordered table-striped table-hover" style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;">
	<tr>
		<th>#</th>
		<th>Cliente</th>
		<th>Produto</th>
		<th>Quantidade</th>
		<th>Especificações</th>
		<th>Local de Entrega</th>
		<th>Data de Entrega</th>
		<th>Ações</th>
	</tr>
	<?php
		$sql = "SELECT * FROM livros l
				INNER JOIN autor a ON l.autor_id_autor = a.id_autor
				INNER JOIN categoria c ON l.categoria_id_categoria = c.id_categoria";
		
		$result = $conn->query($sql);
		
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				print "<tr>";
				print "<td>".$row["id_livros"]."</td>";
				print "<td>".$row["nome_autor"]."</td>";
				print "<td>".$row["categoria"]."</td>";
				print "<td>".$row["quantidade"]."</td>";
				print "<td>".$row["especificacao"]."</td>";
				print "<td>".$row["local_entrega"]."</td>";
				print "<td>".$row["data_entrega"]."</td>";
				print "<td>
				
				<a href='?page=editar-livros-item&id_livros=".$row["id_livros"]."' class='btn btn-primary' >Editar</a>
				</br>
				<a href='?page=salvar-excluir&acao=livro&id_livros=".$row["id_livros"]."' class='btn btn-danger'>Excluir</a>
				
				</td>";
				print "</tr>";
			}
		}else{
			print "Não encontrou resultados";
		}
	?>
</table>
</body>