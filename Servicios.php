<?php 

include_once 'conexion.php';

//llamar a todos los servicios

$sql = 'SELECT * FROM servicios';
$sentencia = $conexion->prepare($sql);
$sentencia->execute();

$resultado = $sentencia->fetchAll();

//var_dump($resultado);

$servicios_x_pagina = 3;

//contar articulos de nuestra base de datos
$total_servicios_db = $sentencia->rowCount();
//echo $total_articulos_db;
$paginas = $total_servicios_db/3;
 //echo $paginas;

 ?>


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Veterinaria Dejeromo!</title>
  </head>
  <body>

  <link rel="stylesheet" type="text/css" href="estilos.css">
  <br><br>
  

    <br>
    <br>
   <div class="container my-5">
   	
   	<h1 class="mb-5">Servicios</h1>


   		<?php 
   			if (!$_GET) {
   				header('Location:Servicios.php?pagina=1');
   			}
   			if ($_GET['pagina']>$paginas || $_GET['pagina']<= 0 ) {
   				header('Location:Servicios.php?pagina=1');
   			}

   			$iniciar = ($_GET['pagina']-1)*$servicios_x_pagina;
   			//echo $iniciar;

   			$sql_servicios = 'SELECT * FROM servicios LIMIT :inicar,:nservicios';
   			$sentencia_servicios = $conexion->prepare($sql_servicios);
   			$sentencia_servicios->bindParam(':inicar', $iniciar, PDO::PARAM_INT);
   			$sentencia_servicios->bindParam(':nservicios', $servicios_x_pagina, PDO::PARAM_INT);
   			$sentencia_servicios->execute();

   			$resultado_servicio = $sentencia_servicios->fetchAll();
   		 ?>

   		<?php foreach ($resultado_servicio as $servicio): ?>

   		<div class="alert alert-primary" role="alert">
   			<?php echo $servicio['ID']; ?>
   			-
  			<?php echo $servicio['Nombre']; ?>

		</div>

		<?php endforeach ?>

		<nav aria-label="Page navigation example">
		  <ul class="pagination">
		    <li class="page-item">
		    	
		    <a class="page-link" 
		    href="Servicios.php?pagina=<?php echo $_GET['pagina']-1 ?>">
		    Anterior

			</a>


			</li>


		    <?php for ($i=0; $i < $paginas ; $i++): ?>
		    <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
		    	<a class="page-link" 
		    	href="Servicios.php?pagina=<?php echo $i+1 ?>">
		    		<?php echo $i+1 ?>

		    </a>
		    </li>


		    <?php endfor ?>


			    <li class="page-item
			    <?php echo $_GET['pagina']>=$paginas? 'disabled':''  ?>
			    "><a class="page-link" href="Servicios.php?
			    pagina=<?php echo  $_GET['pagina']+1 ?>">Siguiente</a></li>
			  	</ul>
		</nav>

   </div>

   <div class="menu">
     
    <a href="index.php"><input type="button" value="INICIO"></a>
    <a href="Articulos.php"><input type="button" value="ARTICULOS"></a>
    <a href="consultaArticulos.php"><input type="button" value="Buscar Articulos"></a>
    <a href="consultaServicios.php"><input type="button" value="Buscar Servicios"></a>

   </div>
    
   
   <br>
  <br>
  <br>
  <br>
 <br>
 

  
  </body>
</html>

