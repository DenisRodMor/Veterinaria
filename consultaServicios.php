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
  <title>Consultas de Servicios</title>
</head>
<body>
  <h1>Servicios de la veterinaria</h1>
  <br>
  <br>
  <link rel="stylesheet" type="text/css" href="estilos.css">
    <form action="consultaServicios.php" method="post"> 
      <div class="contenedor">
        <h1>Consulta por Nombre</h1>
        <label for="buscar">Buscar:</label>
        <input type="text" name="buscar" class="busqueda">
        <input type="submit" value="  Consultar" class="boton">

      </div>
  </form>
</body>
</html>

<div class="buscador">

 
  <br>
  <h1>Resultados Encontrados: </h1>
  <br>
 
  <section class="Servicios">
      <ul type="none">
        <?php 

          try {

            if ($_POST) {
              $buscar = $_POST['buscar'];

              if(!empty($buscar)){

                $conexion = new PDO('mysql:host=localhost;dbname=veterinariadejeromo','root','');

                $consulta = $conexion -> prepare ("SELECT * FROM Servicios WHERE Nombre LIKE :Nombre");
                $consulta -> execute( array(':Nombre' => '%' . "$buscar" . '%' ));

                $resultado = $consulta -> fetchAll();

                foreach ($resultado as $fila){
                  echo  $fila['ID'] . '-' . $fila['Nombre'] . '-' . $fila['Precio'].'<br/>';


                }


              }

            }else{
              echo 'Por favor agrega un Nombre';
              
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
