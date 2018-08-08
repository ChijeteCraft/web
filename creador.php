<?php
try {
    $conexion = new PDO("mysql:host="db4free.net:3306";dbname="chijetecraft", "chijetecraft", "chijete456");
    return $conexion;
  } catch (PDOException $e) {
    return false;
  }
?>
