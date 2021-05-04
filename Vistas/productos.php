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
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
          <img src="../imagenes/mi-tienda-segura-1.png" alt="logo tienda" style="width: 5%">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav clase-ul">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Inicio</a>
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
                  <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Bienvenido</a>
              </li>
            </ul>
          </div>
        
      </nav>

      <div class="container bg-light rounded ">

              <div class="content-wrapper">

              <section class="content-header">
                
                <h1>
                  
                  Productos
                
                </h1>

                <ol class="breadcrumb">
                  
                  <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
                  
                  <li class="active">Administrar productos</li>
                
                </ol>

              </section>
=======
<section class="content">
    <h1>
      
      Administrar productos
    
    </h1>

    <div class="box">

              <section class="content">

                <div class="box">

                  <div class="box-header with-border">

                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
                      
                      Agregar producto

                    </button>

                  </div>

                  <div class="box-body">
                    
                  <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
                    
                    <thead>
                    
                    <tr>
                      
                      <th style="width:10px">#</th>
                      <th>Imagen</th>
                      <th>Código</th>
                      <th>Descripción</th>
                      <th>Categoría</th>
                      <th>Stock</th>
                      <th>Fecha De Vencimiento</th>
                      <th>Precio de compra</th>
                      <th>Precio de venta</th>
                      <th>Agregado</th>
                      <th>Acciones</th>
                      
                    </tr> 

                    </thead>      

                  </table>

                  <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">

                  </div>

                </div>

              </section>

              </div>

              <!--=====================================
              MODAL AGREGAR PRODUCTO
              ======================================-->

              <div id="modalAgregarProducto" class="modal fade" role="dialog">

              <div class="modal-dialog">

                <div class="modal-content">

                  <form role="form" method="post" enctype="multipart/form-data">

                    <!--=====================================
                    CABEZA DEL MODAL
                    ======================================-->

                    <div class="modal-header" style="background:#3c8dbc; color:white">

                      <button type="button" class="close" data-dismiss="modal">&times;</button>

                      <h4 class="modal-title">Agregar producto</h4>

                    </div>

                    <!--=====================================
                    CUERPO DEL MODAL
                    ======================================-->

                    <div class="modal-body">

                      <div class="box-body">


                        <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

                        include "../Controlador/categorias.controlador.php";
                        $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
                        <div class="form-group">
                          
                          <div class="input-group">
                          
                            <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                            <select class="form-control input-lg" id="nuevaCategoria" name="nuevaCategoria" required>
                              
                              <option value="">Selecionar categoría</option>

                              <?php

                              $item = null;
                              $valor = null;

                              $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                              foreach ($categorias as $key => $value) {
                                
                                echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
                              }

                              ?>

                            </select>

                          </div>

                        </div>

                        <!-- ENTRADA PARA EL CÓDIGO -->
                        
                        <div class="form-group">
                          
                          <div class="input-group">
                          
                            <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                            <input type="text" class="form-control input-lg" id="nuevoCodigo" name="nuevoCodigo" placeholder="Ingresar código" required>

                          </div>

                        </div>

                        <!-- ENTRADA PARA LA DESCRIPCIÓN -->

                        <div class="form-group">
                          
                          <div class="input-group">
                          
                            <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                            <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar descripción" required>

                          </div>

                        </div>

                        <!-- ENTRADA PARA STOCK -->

                        <div class="form-group">
                          
                          <div class="input-group">
                          
                            <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                            <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Stock" required>

                          </div>

                        </div>

                        <!-- ENTRADA PARA PRECIO COMPRA -->

                        <div class="form-group row">

                            <div class="col-xs-6">
                            
                              <div class="input-group">
                              
                                <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                                <input type="number" class="form-control input-lg" id="nuevoPrecioCompra" name="nuevoPrecioCompra" step="any" min="0" placeholder="Precio de compra" required>

                              </div>

                            </div>

                            <!-- ENTRADA PARA PRECIO VENTA -->

                            <div class="col-xs-6">
                            
                              <div class="input-group">
                              
                                <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                <input type="number" class="form-control input-lg" id="nuevoPrecioVenta" name="nuevoPrecioVenta" step="any" min="0" placeholder="Precio de venta" required>

                              </div>
                            
                              <br>

                              <!-- CHECKBOX PARA PORCENTAJE -->

                              <div class="col-xs-6">
                                
                                <div class="form-group">
                                  
                                  <label>
                                    
                                    <input type="checkbox" class="minimal porcentaje" checked>
                                    Utilizar procentaje
                                  </label>

                                </div>

                              </div>

                              <!-- ENTRADA PARA PORCENTAJE -->

                              <div class="col-xs-6" style="padding:0">
                                
                                <div class="input-group">
                                  
                                  <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>

                                  <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                                </div>

                              </div>

                            </div>

                        </div>

                        <!-- ENTRADA PARA SUBIR FOTO -->

                        <div class="form-group">
                          
                          <div class="panel">SUBIR IMAGEN</div>

                          <input type="file" class="nuevaImagen" name="nuevaImagen">

                          <p class="help-block">Peso máximo de la imagen 2MB</p>

                          <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

                        </div>

                      </div>

                    </div>

                    <!--=====================================
                    PIE DEL MODAL
                    ======================================-->

                    <div class="modal-footer">

                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                      include "../Controlador/productos.controlador.php";
                      $crearProducto = new ControladorProductos();
                      $crearProducto -> ctrCrearProducto();

                      <button type="submit" class="btn btn-primary">Guardar producto</button>

                    </div>

                  </form>

                    <?php

                      $crearProducto = new ControladorProductos();
                      $crearProducto -> ctrCrearProducto();

                    ?>  

                </div>

              </div>

              </div>

              <!--=====================================
              MODAL EDITAR PRODUCTO
              ======================================-->

              <div id="modalEditarProducto" class="modal fade" role="dialog">

              <div class="modal-dialog">

                <div class="modal-content">

                  <form role="form" method="post" enctype="multipart/form-data">

                    <!--=====================================
                    CABEZA DEL MODAL
                    ======================================-->

                    <div class="modal-header" style="background:#3c8dbc; color:white">

                      <button type="button" class="close" data-dismiss="modal">&times;</button>

                      <h4 class="modal-title">Editar producto</h4>

                    </div>

                    <!--=====================================
                    CUERPO DEL MODAL
                    ======================================-->

                    <div class="modal-body">

                      <div class="box-body">


                        <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

                        <div class="form-group">
                          
                          <div class="input-group">
                          
                            <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                            <select class="form-control input-lg"  name="editarCategoria" readonly required>
                              
                              <option id="editarCategoria"></option>

                            </select>

                          </div>

                        </div>

                        <!-- ENTRADA PARA EL CÓDIGO -->
                        
                        <div class="form-group">
                          
                          <div class="input-group">
                          
                            <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                            <input type="text" class="form-control input-lg" id="editarCodigo" name="editarCodigo" readonly required>

                          </div>

                        </div>

                        <!-- ENTRADA PARA LA DESCRIPCIÓN -->

                        <div class="form-group">
                          
                          <div class="input-group">
                          
                            <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                            <input type="text" class="form-control input-lg" id="editarDescripcion" name="editarDescripcion" required>

                          </div>

                        </div>

                        <!-- ENTRADA PARA STOCK -->

                        <div class="form-group">
                          
                          <div class="input-group">
                          
                            <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                            <input type="number" class="form-control input-lg" id="editarStock" name="editarStock" min="0" required>

                          </div>

                        </div>

                        <!-- ENTRADA PARA PRECIO COMPRA -->

                        <div class="form-group row">

                            <div class="col-xs-6">
                            
                              <div class="input-group">
                              
                                <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                                <input type="number" class="form-control input-lg" id="editarPrecioCompra" name="editarPrecioCompra" step="any" min="0" required>

                              </div>

                            </div>

                            <!-- ENTRADA PARA PRECIO VENTA -->

                            <div class="col-xs-6">
                            
                              <div class="input-group">
                              
                                <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                                <input type="number" class="form-control input-lg" id="editarPrecioVenta" name="editarPrecioVenta" step="any" min="0" readonly required>

                              </div>
                            
                              <br>

                              <!-- CHECKBOX PARA PORCENTAJE -->

                              <div class="col-xs-6">
                                
                                <div class="form-group">
                                  
                                  <label>
                                    
                                    <input type="checkbox" class="minimal porcentaje" checked>
                                    Utilizar procentaje
                                  </label>

                                </div>

                              </div>

                              <!-- ENTRADA PARA PORCENTAJE -->

                              <div class="col-xs-6" style="padding:0">
                                
                                <div class="input-group">
                                  
                                  <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>

                                  <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                                </div>

                              </div>

                            </div>

                        </div>

                        <!-- ENTRADA PARA SUBIR FOTO -->

                        <div class="form-group">
                          
                          <div class="panel">SUBIR IMAGEN</div>

                          <input type="file" class="nuevaImagen" name="editarImagen">

                          <p class="help-block">Peso máximo de la imagen 2MB</p>

                          <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

                          <input type="hidden" name="imagenActual" id="imagenActual">

                        </div>

                      </div>

                    </div>

                    <!--=====================================
                    PIE DEL MODAL
                    ======================================-->

                    <div class="modal-footer">

                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                      <button type="submit" class="btn btn-primary">Guardar cambios</button>

                    </div>

                    include "../Controlador/productos.controlador.php";
                    $editarProducto = new ControladorProductos();
                    $editarProducto -> ctrEditarProducto();
                  </form>

                    <?php

                      $editarProducto = new ControladorProductos();
                      $editarProducto -> ctrEditarProducto();

                    ?>      

                </div>

              </div>

              <?php
              include "../Controlador/productos.controlador.php";
              $eliminarProducto = new ControladorProductos();
              $eliminarProducto -> ctrEliminarProducto();

              </div>

              <?php

              $eliminarProducto = new ControladorProductos();
              $eliminarProducto -> ctrEliminarProducto();

              ?>      
            
    </div>
    <!--Script bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <!--script scroll reveal-->
    <script src="../js/scroll/loginscroll.js"></script>
</body>
</html>