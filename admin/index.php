<!DOCTYPE html>
<html lang="en">
<head>
  <title>Comunidade Biorganica</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- jQuery lib -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--website css-->
  <link rel="stylesheet" href="../style/website.css" />
</head>
<body>

<?php include "../comum/menu-admin.php"; ?>

<div class="container text-center">
  <div class="main-div">
    <div class="panel">
     <h2>Área Restrita</h2>
    </div>
    <form id="Login">
      <div class="form-group">
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="inputPassword" placeholder="Senha">
      </div>
      <div class="forgot" style="display: none;">
        <a href="#">Esqueceu sua senha</a>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>
</div>
<br>

<?php include "../comum/footer-main.php"; ?>

</body>
</html>
