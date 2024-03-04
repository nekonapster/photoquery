<?php
// capa de conexion a mongodb


include '../vendor/autoload.php';

$conn = (new MongoDB\Client)->pq->usu;

$cursor = $conn->find(['rol'=>'admin']);

foreach ($cursor as $show) {
  echo $show['nombre'];
}

