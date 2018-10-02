<body style="background: #F5F5DC;">
<h1 style="font-family: Candara, Calibri, Segoe; text-align: center;">Cadastrar Cliente</h1>
<form action="?page=salvar-cadastrar&acao=autor" method="POST">
	<div class="form-group">
		<style>label {font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, AppleGothic, sans-serif;}</style>
		<label>Nome </label>
		<input type="text" name="nome_autor" class="form-control" />
	</div>
	<div class="form-group">
		<label>Telefone para contato </label>
		<input type="text" name="telefone" class="form-control" />
	</div>
	<div class="form-group">
		<label>Email para contato </label>
		<input type="text" name="email" class="form-control" />
	</div>
	<br>
	<button class="btn btn-info" type="submit" style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;">Cadastrar</button>
</form>
<br>
<h1 style="font-family: Candara, Calibri, Segoe; text-align: center";>Clientes Cadastrados</h1>
<table class="table table-bordered table-striped table-hover" style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;">
	
	<tr>
		<th>#</th>
		<th>Nome</th>
		<th>Telefone</th>
		<th>Email</th>
		
	</tr>
	<?php
		$sql = "SELECT * FROM autor";
		
		$result = $conn->query($sql);
		
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				print "<tr>";
				print "<td>".$row["id_autor"]."</td>";
				print "<td>".$row["nome_autor"]."</td>";
				print "<td>".$row["telefone"]."</td>";
				print "<td>".$row["email"]."</td>";
				print "</tr>";
			}
		}else{
			print "Não encontrou resultados";
		}
	?>
</table>

</body>












