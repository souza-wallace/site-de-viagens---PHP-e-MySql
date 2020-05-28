<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body class="bg-dark">
<!--MENU-->
<?php 
	require "menu.php";
 ?>
<!--SLIDER-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagens/sli3.jpg" alt="First slide">
    	 <div class="carousel-caption">
      	<h5 class="display-1 font-weight-bold">Conheça  Campos do Jordão</h5>
      	<a href="#" class="btn btn-light btn-lg text-dark p-3">Saiba mais</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/sli1.jpg" alt="Second slide">
    	 <div class="carousel-caption">
      	<h5 class="display-1 font-weight-bold">Conheça Arraial do Cabo</h5>
      	<a href="#" class="btn btn-light btn-lg text-dark p-3">Saiba mais</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/sli2.jpg" alt="Third slide">
      <div class="carousel-caption">
      	<h5 class="display-1 font-weight-bold">Conheça o Rio de Janeiro</h5>
      	<a href="#" class="btn btn-light btn-lg text-dark p-3">Saiba mais</a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		<!--SOBRE NOS-->
		<div class="container-fluid mt-1 text-light">
			<div class="row" id="sobrenos">
				<div class="col-sm-5 m-3 p-3">
					<h5>BelaTur Agência de turismo</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-sm-5 text-right">
					<img src="imagens/logo1.png" width="75%">
				</div>
			</div>			
		</div>


	<!--container dos cards-->
	<div class="container-fluid bg-light mt-1">
		<h1 class="text-center text-dark" id="rotas">Veja para onde ja fomos</h1><hr class="w-50 text-dark">
			<div class="row justify-content-center">
				<!--CARTAO-->
				<div class="card m-5" style="width: 18rem;">
				  	<img class="card-img-top" src="imagens/rot1.jpg" alt="Card image cap">
					  <div class="card-body">
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					  </div>
				</div>
				<!--CARTAO-->
				<div class="card m-5" style="width: 18rem;">
				  	<img class="card-img-top" src="imagens/rot2.jpg" alt="Card image cap">
					  <div class="card-body">
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					  </div>
				</div>
				<!--CARTAO-->
				<div class="card m-5" style="width: 18rem;">
				  	<img class="card-img-top" src="imagens/rot3.jpg" alt="Card image cap">
					  <div class="card-body">
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					  </div>
				</div>
			</div>
		</div>

	<!--news-->
	<div class="container" id="news">
		<h1 class="text-center text-light">Assine Nossa News</h1><hr class="w-50 text-light">
			<div class="form-group mt-5">
				<form>
					<input class="form-control text-dark" type="text" name="femail" placeholder="exemplo@gmail.com">
					<!--alinhar botao-->
					<div class="container">
						<div class="row">
							<div class="col text-center">
					<button class="btn btn-success mt-3">cadastrar</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		
		<!--footer-->
		<div class="container-fluid">
			
		</div>
	
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>