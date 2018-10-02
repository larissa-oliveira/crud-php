<body style="background: #F5F5DC;">
<h1 style="font-family: Candara, Calibri, Segoe; text-align: center";>Detalhes do Pedido</h1>
<form action="?page=salvar-cadastrar&acao=livro" method="POST">
	<div class="form-group">
		<label style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;";;>Nome do Cliente </label>
		<select name="autor_id_autor" class="form-control">
		<?php
			$sql = "SELECT * FROM autor";
			
			$result = $conn->query($sql);
			
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					print "<option value='".$row["id_autor"]."'>".$row["nome_autor"]."</option>";
				}
			}else{
				print "Não encontrou resultados";
			}
		?>
		</select>
	</div>
	<style>
		label {style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;";}
	
	</style>
	<div class="form-group">
		<label style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;";>Tipo de Produto</label>
		<select name="categoria_id_categoria" class="form-control">
		<?php
			$sql = "SELECT * FROM categoria";
			
			$result = $conn->query($sql);
			
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					print "<option value='".$row["id_categoria"]."'>".$row["categoria"]."</option>";
				}
			}else{
				print "Não encontrou resultados";
			}
		?>
		</select>
	</div>
	<div class="form-group">
		<label style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;";>Quantidade</label>
		<input type="number" name="quantidade" class="form-control" />
	</div>
	<div class="form-group">
		<label style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;";>Especificações</label>
		<input type="text" name="especificacao" class="form-control" />
	</div>
	<div class="form-group">
		<label style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;";>Local de Entrega</label>
		<input type="text" name="local_entrega" class="form-control" />
	</div>
	<div class="form-group">
		<label style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;";>Data de Entrega</label>
		<input type="text" maxlength="10" placeholder="dd/mm/aa" name="data_entrega" class="form-control" />
	</div>
	<br>
	<button class="btn btn-info" type="submit" style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;">Cadastrar</button>
</form>
<br>
<style>
	th {font-family: Candara, Calibri, Segoe";}
	td {font-family: Candara, Calibri, Segoe";}

</style>

<h1 style="font-family: Candara, Calibri, Segoe; text-align: center";>Pedidos Cadastrados</h1>
<table class="table table-bordered table-striped table-hover" style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;">
	
	<tr>
		<th style="font-family: Candara, Calibri, Segoe";>#</th>
		<th style="font-family: Candara, Calibri, Segoe";>Cliente</th>
		<th style="font-family: Candara, Calibri, Segoe";>Tipo de Produto</th>
		<th style="font-family: Candara, Calibri, Segoe";>Quantidade</th>
		<th style="font-family: Candara, Calibri, Segoe";>Especificações</th>
		<th style="font-family: Candara, Calibri, Segoe";>Local de Entrega</th>
		<th style="font-family: Candara, Calibri, Segoe";>Data de Entrega</th>
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
				print "</tr>";
			}
		}else{
			print "Não encontrou resultados";
		}
	?>
</table>

</body>









