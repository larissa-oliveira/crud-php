<body style="background: #F5F5DC;">
<h1 style="font-family: Candara, Calibri, Segoe; text-align: center";>Editar Pedido</h1>
<?php 
	$sql = "SELECT * FROM livros l 
			INNER JOIN autor a
			ON a.id_autor = l.autor_id_autor
			INNER JOIN categoria c
			ON c.id_categoria = l.categoria_id_categoria			
			WHERE id_livros=".$_REQUEST["id_livros"];
	
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
?>
<style>
	label {font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, AppleGothic, sans-serif;}
	
</style>
<form action="?page=salvar-editar&acao=livro&id_livros=<?php print $row["id_livros"]; ?>" method="POST">
	<div class="form-group">
		<label>Nome do Cliente</label>
		<select name="autor_id_autor" class="form-control">
		<?php
			print "<option value='".$row["id_autor"]."'>".$row["nome_autor"]."</option>";
			print "<option></option>";
		
			$sql1 = "SELECT * FROM autor";
			
			$result1 = $conn->query($sql1);
			
			if($result1->num_rows > 0){
				while($row1 = $result1->fetch_assoc()){
					print "<option value='".$row1["id_autor"]."'>".$row1["nome_autor"]."</option>";
				}
			}else{
				print "Não encontrou resultados";
			}
		?>
		</select>
	</div>
	<div class="form-group">
		<label>Produto</label>
		<select name="categoria_id_categoria" class="form-control">
		<?php
			print "<option value='".$row["id_categoria"]."'>".$row["categoria"]."</option>";
			print "<option></option>";
			
			$sql2 = "SELECT * FROM categoria";
			
			$result2 = $conn->query($sql2);
			
			if($result2->num_rows > 0){
				while($row2 = $result2->fetch_assoc()){
					print "<option value='".$row2["id_categoria"]."'>".$row2["categoria"]."</option>";
				}
			}else{
				print "Não encontrou resultados";
			}
		?>
		</select>
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input type="text" name="quantidade" value="<?php print $row["quantidade"]; ?>" class="form-control" />
	</div>
	<div class="form-group">
		<label>Especificações</label>
		<input type="text" name="especificacao" value="<?php print $row["especificacao"]; ?>"  class="form-control" />
	</div>
	<div class="form-group">
		<label>Local de Entrega</label>
		<input type="text" value="<?php print $row["local_entrega"]; ?>"  name="local_entrega" class="form-control" />
	</div>
	<div class="form-group">
		<label>Data Entrega</label>
		<input type="text" name="data_entrega" value="<?php print $row["data_entrega"]; ?>"  class="form-control" />
	</div>
	<br>
	<button class="btn btn-info" type="submit" style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;">Editar</button>
</form>
<br><br>
<?php
		}//fim do while
	}else{
		print "Não encontrou nenhum resultado";
	}

?>
</body>