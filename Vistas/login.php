<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/login.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
  <div id="container"></div>

  <div class="row">
    
    <div class="col-md-9">

      <img src="../imagenes/mi-tienda-segura-1.png" class="img-responsive">

    </div>

    <div class="col-md-3">


      <form class="columna-form" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Usuario</label>
            <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <?php
          include "../Controlador/usuarios.controlador.php";
          include "../Modelos/usuarios.modelo.php";
          $login = new ControladorUsuarios();
          $login -> ctrIngresoUsuario();
        ?>
    </div>

    

  </div>
</body>
</html>


