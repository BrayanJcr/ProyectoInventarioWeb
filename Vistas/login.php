<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--scripts-->
    <script src="js/scrollreveal.js"></script>
    <!--Bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>  
    
    <!--conteiner de formulario-->
    
    <div class="row align-items-center justify-content-around ">
        <!--imagen de tienda-->
        <div class="col-md-6">
            <img src="images/mi-tienda-segura-1.png" alt="imagen-tienda" class="img-fluid img-tienda">
        </div>
        <div class="col-md-3 columna-form">
            <img class="img-fluid" src="svg/person-circle-outline.svg" alt="">
                
            <form action="validar.php" name="formlogin"   method="POST">
                <div class="mb-3">
                    <label for="exampleInputUser1" class="form-label">Nombre de Usuario</label>
                    <input maxlength="30" type="text" class="form-control" name="user" id="user" aria-describedby="emailHelp" required>
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input maxlength="30" type="password" class="form-control" name="pass" id="pass" required>
                </div>
                    
                <button type="submit" class="btn btn-primary">Acceder</button>

                <?php

                $login = new ControladorUsuarios();
                $login -> ctrIngresoUsuario();

                ?>
                
            </form>
        </div>
    </div>
    

    <!--Script bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <!--script scroll reveal-->
    <script src="js/scroll/loginscroll.js"></script>
    
</body>
</html>