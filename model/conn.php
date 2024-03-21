<?php
include '../vendor/autoload.php';

function conectarUsuMongoDB() {
    return (new MongoDB\Client)->pq->usu;
}
function conectarImgMongoDB() {
    return (new MongoDB\Client)->pq->usu;
}

function buscarUsuario($usuario, $contraseña) {
    $conn = conectarUsuMongoDB();
    return $conn->findOne(["nombre" => $usuario, "password" => $contraseña]);
}


function cargarImagen(){
  $conn = conectarImgMongoDB(); 
  return $conn->insertOne([]);
}
 
 
 
 
 
 
 
 ?>