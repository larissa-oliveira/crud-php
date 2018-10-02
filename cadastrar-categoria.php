<body style="background: #F5F5DC;">
<h1 style="font-family: Candara, Calibri, Segoe; text-align: center;";>Cadastrar Produto</h1>
<form action="?page=salvar-cadastrar&acao=categoria" method="POST">
	<div class="form-group">
		<label style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;";>Tipo de Produto</label>
		<input type="text" name="categoria" class="form-control" />
	</div>
	<br>
	<button class="btn btn-info" type="submit" style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;">Cadastrar</button>
</form>
<br>
<h1 style="font-family: Candara, Calibri, Segoe; text-align: center";>Produtos Cadastrados</h1>
<table class="table table-bordered table-striped table-hover" style="font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;">
	<tr>
		<th style="font-family: Candara, Calibri, Segoe";>#</th>
		<th style="font-family: Candara, Calibri, Segoe";>Produto</th>
	
		
	</tr>
	<?php
		$sql = "SELECT * FROM categoria";
		
		$result = $conn->query($sql);
		
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				print "<tr>";
				print "<td>".$row["id_categoria"]."</td>";
				print "<td>".$row["categoria"]."</td>";
				print "</tr>";
			}
		}else{
			print "Não encontrou resultados";
		}
	?>
</table>
</body>