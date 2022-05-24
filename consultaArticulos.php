<!DOCTYPE html>
<html>
<head>
	<br>
	<br>
	<br><br>
	<br>
	<br><br>
	<br>
	<br>
	<title>Consultas de Articulos</title>
</head>
<body>
	<h1>Articulos a la venta de la veterinaria</h1>
	<br>
	<br>
	<link rel="stylesheet" type="text/css" href="estilos.css">
    <form action="consultaArticulos.php" method="post"> 
      <div class="contenedor">
        <h1>Consulta por Nombre o Marca</h1>
        <label for="buscar">Buscar:</label>
        <input type="text" name="buscar" class="busqueda">
        <input type="submit" value="  Consultar" class="boton">
<br><br>


      </div>
  </form>
</body>
</html>

<div class="buscador">

	
	<h1>Resultados Encontrados: </h1>
	<br>
	
	<section class="Articulos">
			<ul type="none">
				<?php 

					try {

						if ($_POST) {
							$buscar = $_POST['buscar'];

							if(!empty($buscar)){

								$conexion = new PDO('mysql:host=localhost;dbname=veterinariadejeromo','root','');

								$consulta = $conexion -> prepare ("SELECT * FROM articulos WHERE Nombre LIKE :Nombre or Marca LIKE :Marca");
								$consulta -> execute( array(':Nombre' => '%' . "$buscar" . '%', ':Marca' => '%'."$buscar".'%'));

								$resultado = $consulta -> fetchAll();

								foreach ($resultado as $fila){
									echo  $fila['ID'] . '-' . $fila['Nombre'] . '-' . $fila['Marca'] . '-' . $fila['Precio'] . '-' . $fila['Color'] . '-' . $fila['Garantia'].'<br/>';


								}


							}

						}else{
							echo 'Por favor agrega un Nombre o Marca';
						}
		

					} catch (PDOException $e) {

						echo "Error" . $e;
					}


				 ?>				
			</ul>
	</section>
	<br>
	<br>
	<br>
</div>
<br>


<div class="menu">
	
 <a href="index.php"><input type="button" value="INICIO"></a>

</div>
