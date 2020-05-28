<?php 
require 'conexao.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Próximas viagens</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

	<?php require 'menu.php';?>

<div class="container"> 
	<h1 class="text-center mt-5">Próximas viagens</h1><hr class="w-50">
	<div class="row justify-content-center">
		<?php 

	$comando = "select *from viagens;";
	$execute = mysqli_query($con,$comando);
	
	while($row =mysqli_fetch_assoc($execute)){ 
	$id = $row['id_viagem'];
	$lugar = $row['lugar'];
	$data = $row['data_viagem'];
	$preco = $row['preco'];

	 ?>
		<div class="col-sm-3  m-3">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="imagens/sli2.jpg" alt="Card image cap">
			  <div class="card-header">
			  	VIAGEM PARA: <?php echo $lugar; ?>
			  </div>
			  <div class="card-body">
			    <p class="card-text"> DATA: <?php echo $data; ?> <br> preço:$ <?php echo $preco; ?></p>
			    <a href="reserva.php" class="btn-block btn-primary p-2 text-center rounded">reservar</a>
			  </div>
			</div>
		</div>
	<?php } ?>
	</div>
</div>
</body>
</html>