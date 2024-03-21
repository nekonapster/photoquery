<?php
session_start();
?>
<?php require('../partials/header.php')?>
<?php require('../partials/nav.php')?>

<div class="container">
  <h1 class="text-center mt-5">Pagina para administradores</h1>
  <h3>nombre de usuario: <?php echo $_SESSION["nombre"];  ?></h3>
</div>




<?php require('../partials/footer.php')?>