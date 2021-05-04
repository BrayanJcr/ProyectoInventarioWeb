<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/login.css">
  <script src="../js/scrollreveal.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
  

  <div class="row align-items-center justify-content-around">
    
    <div class="col-md-6">

      <img src="../imagenes/mi-tienda-segura-1.png" class="img-responsive img-tienda" width="100%">

    </div>

    <div class="col-md-3 columna-form">

        <form class="" method="post">
            <img src="../svg/person-circle-outline.svg" alt="">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Usuario</label>
              <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
              
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Contraseña</label>
              <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Acceder</button>
            
            <button type="submit" class="btn btn btn-success margin-left-auto">Registrarse</button>
            
          </form>

          <?php
            include "../Controlador/usuarios.controlador.php";
            include "../Modelos/usuarios.modelo.php";
            $login = new ControladorUsuarios();
            $login -> ctrIngresoUsuario();
          ?>
      
    </div>

  </div>

  <!--script scroll reveal-->
  <script src="../js/scroll/loginscroll.js"></script>
</body>
</html>



