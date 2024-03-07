<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css basico -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- css bootstrap 513 -->
  <link rel="stylesheet" href="./lib/bootstrap513/css/bootstrap-reboot.rtl.min.css">
  <title>Login page</title>
</head>

<body>
  <h1>Pagina para el login</h1>
  
  <form action="./controller/login.php" method="POST">
    <label>
      <input type="text" name="user" placeholder="user">
      <br>
      <br>
      <input type="text" name="pass" placeholder="pass">
      <br>
      <br>
      <input type="submit" name="enviar" value="Entrar">
    </label>
    
  </form>

  
  
  
  <!-- js bootstrap 513 -->
  <script src="./lib/bootstrap513/js/bootstrap.bundle.min.js"></script>

</body>

</html>