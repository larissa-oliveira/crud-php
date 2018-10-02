<h1>Editar Categoria</h1>
<?php
	$sql = "SELECT * FROM categoria WHERE id_categoria = ".$_REQUEST["id_categoria"];
	
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
?>
<form action="?page=salvar-editar&acao=categoria&id_categoria=<?php print $row["id_categoria"]; ?>" method="POST">
	<div class="form-group">
		<label>Nome da Categoria</label>
		<input type="text" name="categoria" class="form-control" required value="<?php print $row["categoria"]; ?>" />
	</div>
	<br>
	<button class="btn btn-primary" type="submit">Editar</button>
</form>
<?php
		}//fim do while
	}else{
		print "Nenhum resultado";
	}
?>