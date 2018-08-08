<?php
try {
    $conexion = new PDO("mysql:host="db4free.net:3306";dbname="chijetecraft", "chijetecraft", "chijete456");
    return $conexion;
  } catch (PDOException $e) {
    echo "error de conexion";
  }
?>
<html>
    <head>
        <title>Hola</title>
    </head>
    <body>
        <h1>Hola</h1>
    </body>
</html>
