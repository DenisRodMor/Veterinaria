<?php 

include_once 'conexion.php';

//llamar a todos los articulos

$sql = 'SELECT * FROM articulos';
$sentencia = $conexion->prepare($sql);
$sentencia->execute();

$resultado = $sentencia->fetchAll();

//var_dump($resultado);

$articulos_x_pagina = 5;

//contar articulos de nuestra base de datos
$total_articulos_db = $sentencia->rowCount();
//echo $total_articulos_db;
$paginas = $total_articulos_db/5;
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
    <br>
    <br>
  
    <br>
    <br>
   <div class="container my-5">
   	
   	<h1 class="mb-5">Articulos</h1>


   		<?php 
   			if (!$_GET) {
   				header('Location:Articulos.php?pagina=1');
   			}
   			if ($_GET['pagina']>$paginas || $_GET['pagina']<= 0 ) {
   				header('Location:Articulos.php?pagina=1');
   			}

   			$iniciar = ($_GET['pagina']-1)*$articulos_x_pagina;
   			//echo $iniciar;

   			$sql_articulos = 'SELECT * FROM articulos LIMIT :inicar,:narticulos';
   			$sentencia_articulos = $conexion->prepare($sql_articulos);
   			$sentencia_articulos->bindParam(':inicar', $iniciar, PDO::PARAM_INT);
   			$sentencia_articulos->bindParam(':narticulos', $articulos_x_pagina, PDO::PARAM_INT);
   			$sentencia_articulos->execute();

   			$resultado_articulos = $sentencia_articulos->fetchAll();
   		 ?>

   		<?php foreach ($resultado_articulos as $articulo): ?>

   		<div class="alert alert-primary" role="alert">
   			<?php echo $articulo['ID']; ?>
   			-
  			<?php echo $articulo['Nombre']; ?>
  			
		</div>

		<?php endforeach ?>

		<nav aria-label="Page navigation example">
		  <ul class="pagination">
		    <li class="page-item">
		    	
		    <a class="page-link" 
		    href="Articulos.php?pagina=<?php echo $_GET['pagina']-1 ?>">
		    Anterior

			</a>


			</li>


		    <?php for ($i=0; $i < $paginas ; $i++): ?>
		    <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
		    	<a class="page-link" 
		    	href="Articulos.php?pagina=<?php echo $i+1 ?>">
		    		<?php echo $i+1 ?>

		    </a>
		    </li>


		    <?php endfor ?>


			    <li class="page-item
			    <?php echo $_GET['pagina']>=$paginas? 'disabled':''  ?>
			    "><a class="page-link" href="Articulos.php?
			    pagina=<?php echo  $_GET['pagina']+1 ?>">Siguiente</a></li>
			  	</ul>
		</nav>

   </div>

        <div class="menu">
          

            <a href="index.php"><input type="button" value="INICIO"></a>
            <a href="Servicios.php"><input type="button" value="SERVICIOS"></a>
            <a href="consultaArticulos.php"><input type="button" value="Buscar Articulos"></a>
            <a href="consultaServicios.php"><input type="button" value="Buscar Servicios"></a>
            <a href="index1.php"><input type="button" value="Comprar"></a>



        </div>
   
   <br>
  <br>

  </body>
</html>


