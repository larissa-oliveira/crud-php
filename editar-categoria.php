<h1>Categorias Cadastradas</h1>
<table class="table table-bordered table-striped table-hover">
	<tr>
		<th>#</th>
		<th>Nome</th>
		<th>Editar</th>
	</tr>
	<?php
		$sql = "SELECT * FROM categoria";
		
		$result = $conn->query($sql);
		
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				print "<tr>";
				print "<td>".$row["id_categoria"]."</td>";
				print "<td>".$row["categoria"]."</td>";
				print "<td>
				
				<a href='?page=editar-categoria-item&id_categoria=".$row["id_categoria"]."' class='btn btn-success'>Editar</a>
				
				<a href='?page=salvar-excluir&acao=categoria&id_categoria=".$row["id_categoria"]."' class='btn btn-danger'>Excluir</a>
				
				</td>";
				
				print "</tr>";
			}
		}else{
			print "Não encontrou resultados";
		}
	?>
</table>