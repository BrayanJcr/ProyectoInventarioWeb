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

      <img src="../imagenes/mi-tienda-segura-1.png" class="img-responsive img-tienda d-none d-lg-block" width="100%">

    </div>

    <div class="col-md-6 columna-form">


        <form class="" method="post">
            <img class ="img-fluid" src="../svg/person-circle-outline.svg " alt="" >
            <div class="mb-3">
              <label for="user" class="form-label">Usuario</label>
              <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Contraseña</label>
              <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Acceder</button>
            
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#registro"">Registrar</button>
            
          </form>

          <?php
            include "../Controlador/usuarios.controlador.php";
            include "../Modelos/usuarios.modelo.php";
            $login = new ControladorUsuarios();
            $login -> ctrIngresoUsuario();
          ?>
      
    </div>

      <!-- Modal -->
      <div class="modal fade" id="registro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <!--Cabeza del modal-->
                  <div class="modal-header bg-primary">
                      <h5 class="modal-title text-light" id="staticBackdropLabel">Registrarse</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <!--Cuerpo del modal registro-->
                  <div class="modal-body">
                      <form class="" method="post">
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
                              <input name="nuevoUsuario" type="text" class="form-control" id="exampleInputEmail1" required>
                          </div>
                          <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                              <input name="nuevoNombre" type="password" class="form-control" id="exampleInputPassword1" required>
                          </div>

                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Tipo de usuario</label>
                              <input name="nuevoPerfil" type="text" class="form-control" id="exampleInputEmail1" required>
                          </div>

                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Nombre real</label>
                              <input name="nuevoPassword" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

                          </div>

                          <div class="mb-3">
                              <label for="formFile" class="form-label">Seleccionar foto</label>
                              <input name="nuevaFoto" class="form-control" type="file" id="formFile">
                          </div>




                      </form>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary">Registrar</button>

                      <?php

                      $registro = new ControladorUsuarios();
                      $registro -> ctrCrearUsuario();
                      ?>
                  </div>
              </div>
          </div>
      </div>

  </div>

  <!--script scroll reveal-->
  <script src="../js/scroll/loginscroll.js"></script>
</body>
</html>



