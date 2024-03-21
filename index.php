<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css basico -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- css bootstrap 513 -->
  <link rel="stylesheet" href="./lib/bootstrap533/css/bootstrap.min.css">
  <title>Login page</title>
</head>

<body>
  <div class="container text-center">
    <h1 class="mt-5">LOGIN</h1>

    <form action="./controller/functions.php" method="POST">
      <label>
        <input type="text" name="user" placeholder="user" class="mt-5">
      </label>
      <br>
      <br>
      <label>
        <input type="text" name="pass" placeholder="pass">
      </label>
      <br>
      <br>
      <label>
        <input type="submit" name="enviar" value="Entrar" class="btn btn-outline-secondary">
      </label>
    </form>
  </div>




  <!-- js bootstrap 513 -->
  <script src="./lib/bootstrap533/js/bootstrap.bundle.min.js"></script>

</body>

</html>