<?php
try {
    $conexion = new PDO('mysql:host=localhost;dbname=veterinariadejeromo', 'root', '');
   //echo "conectado";


} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
