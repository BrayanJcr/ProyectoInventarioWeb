<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <script src="../js/scrollreveal.js"></script>
    <!--Bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/menu.css">
</head>

<body>
    <!--BARRA DE NAVEGACIÓN-->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
          <img src="../imagenes/mi-tienda-segura-1.png" alt="logo tienda" style="width: 5%">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav clase-ul">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="menu.php">Inicio</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="productos.php">Productos</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="ventas.php">Ventas</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Mas acciones
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Mi Perfil</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="login.php">Cerrar Sesión</a></li>
                </ul>
              </li>
              <li class="nav-item ">
                <p class="nav-link" >Bienvenido </p>
              </li>
            </ul>
          </div>
        
      </nav>
      <!--FIN DE BARRA DE NAVEGACIÓN-->

      <div class="container margin20 bg-light py-3">

        <div class="row">
            <!--COLUMNA FORMULARIO-->
            <div class="col-md-4">
            <h2>Formulario de Ventas</h2>

            <form action="">
            
            <label for="inputPassword5" class="form-label">Nombre de Cliente</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">

            <label for="inputPassword5" class="form-label">Apellidos de Cliente</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">

            <label for="inputPassword5" class="form-label">Dirección</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">

            <label for="inputPassword5" class="form-label">Telefono</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
            
            </form>
            </div>
            <!--COLUMNA DE PRODUCTOS-->
            <div class="col-md-8">

                

                <table class="table table-hover">

                <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Precio Total</th>
                    <th>Herramientas</th>
                    
                </tr>
                </thead>
                
                </table>

                <div class="text-end ">
                    <!--DISPLAY TOTAL-->
                    <h3>Total: S/.<?php echo "300" ?></h3>

                    
                    
                </div>
                <!--BOTONES DE VENTA-->
                <div class="d-inline">
                <a class="btn btn-primary mt-2" href="#" role="button">Agregar productos</a>
                <a class="btn btn-primary mt-2" href="#" role="button">Confirmar pedido</a>
                </div>
            </div>

            
        </div>

      </div>



      <!--Script bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <!--script scroll reveal-->
    <script src="../js/scroll/loginscroll.js"></script>
</body>
</html>