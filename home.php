<!DOCTYPE html>
<head>

</head>

<body style="background: #F5F5DC;">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 100%;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active" style="margin-left:83px; width: 100%;">
      <img class="d-block img-fluid" src="images/brigadeiros2.jpg" alt="IMG1">
    </div>
    <div class="carousel-item" style="margin-left:83px; width: 100%;">
      <img  class="d-block img-fluid" src="images/beijinho3.jpg" alt="IMG2">
    </div>
    <div class="carousel-item" style="margin-left:83px; width: 100%;">
      <img class="d-block img-fluid" src="images/cupcake2.jpg" alt="IMG3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</br>
</br>


<!--<div class="card" style="width: 30rem;">
	<img class="card-img-top" src="images/ead.jpg" alt="Card image cap">
	<div class="card-block">
		/*<?php
			/*$sql = "SELECT * FROM livros l
					INNER JOIN autor a ON l.autor_id_autor = a.id_autor
					INNER JOIN categoria c ON l.categoria_id_categoria = c.id_categoria";
			
			$result = $conn->query($sql);
			
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					print "<ul>";
					print "<b>PEDIDO: </b>".$row["id_autor"];
					print "<li><b>Nome do Cliente: </b>".$row["nome_autor"]."</li>";
					print "<li><b>Produtos: </b>".$row["categoria"]."</li>";
					print "<li><b>Especificações: </b>".$row["especificacao"]."</li>";
					print "<li><b>Local de Entrega: </b>".$row["local_entrega"]."</li>";
					print "<li><b>Data de Entrega: </b>".$row["data_entrega"]."</li>";
					print "</ul>";
				}
			}else{
				print "Não encontrou resultados";
			}*/
		?>*/
	
		
	</div>
</div>-->

<div class="card">
  <div class="card-header" style="background: #F5DEB3; font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif; text-align: center;">
    <strong>Pedidos Recentes</strong> 
  </div>
  <div id="card" class="card-block" style="background: #FAEBD7; font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;">
    <blockquote class="card-blockquote">
      <?php
			$sql = "SELECT * FROM livros l
					INNER JOIN autor a ON l.autor_id_autor = a.id_autor
					INNER JOIN categoria c ON l.categoria_id_categoria = c.id_categoria";
			
			$result = $conn->query($sql);
			
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					print "<ul>";
					print "<b>PEDIDO: </b>".$row["id_autor"];
					print "<li><b>Nome do Cliente: </b>".$row["nome_autor"]."</li>";
					print "<li><b>Produtos: </b>".$row["categoria"]."</li>";
					print "<li><b>Especificações: </b>".$row["especificacao"]."</li>";
					print "<li><b>Local de Entrega: </b>".$row["local_entrega"]."</li>";
					print "<li><b>Data de Entrega: </b>".$row["data_entrega"]."</li>";
					print "</ul>";
				}
			}else{
				print "Não encontrou resultados";
			}
		?>
    </blockquote>
  </div>
</div>
</body>
</html>

