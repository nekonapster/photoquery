<?php
include '../model/conn.php';
session_start();

$userLog = $_POST["user"];
$passLog = $_POST["pass"];

$auth = buscarUsuario($userLog, $passLog);



if ($auth) {
  $rol = $auth["rol"];
  $_SESSION["nombre"] = $auth["nombre"];

  switch ($rol) {
    case "admin":
      header("location: ../views/admin.php");
      break;
    case "user":
      header("location: ../views/user.php");
      break;
    default:
      header("location: ../index.php");
      break;
  }
} else {
  header("location: ../index.php");
}
