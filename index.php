<!DOCTYPE html>
<html>
<head>
	<title>Pagina Principal</title>
</head>
<body>
<?php
	include "encabezado.php";
?>
<center>
<div class="carrusel">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 300px; height: 250px">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/laptop2.jpg" class="d-block w-100" alt="..." width="300px" height="250px">
    </div>
    <div class="carousel-item">
      <img src="img/laptop3.jpg" class="d-block w-100" alt="..." width="300px" height="250px">
    </div>
    <div class="carousel-item">
      <img src="img/laptop4.jpg" class="d-block w-100" alt="..." width="300px" height="250px">
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
</div>

<table>
	<tr>
		<td>
			<div class="card" style="width: 18rem;">
  				<img src="img/laptop2.jpg" class="card-img-top" alt="..." width="300px" height="250px">
  				<div class="card-body">
    				<h5 class="card-title">Laptop HP</h5>
    				<p class="card-text">Descripción de la laptop</p>
    				<a href="#" class="btn btn-primary">Comprar</a>
  				</div>
			</div>
			
		</td>
		<td>
			<div class="card" style="width: 18rem;">
  				<img src="img/laptop3.jpg" class="card-img-top" alt="..." width="300px" height="250px">
  				<div class="card-body">
    				<h5 class="card-title">Laptop HP-1</h5>
    				<p class="card-text">Descripción de la laptop</p>
    				<a href="#" class="btn btn-primary">Comprar</a>
  				</div>
			</div>
		</td>
		<td>
			<div class="card" style="width: 18rem;">
  				<img src="img/laptop4.jpg" class="card-img-top" alt="..." width="300px" height="250px">
  				<div class="card-body">
    				<h5 class="card-title">Laptop HP-2</h5>
    				<p class="card-text">Descripción de la laptop</p>
    				<a href="#" class="btn btn-primary">Comprar</a>
  				</div>
			</div>
		</td>
	</tr>
</table>


</center>
</body>
</html>