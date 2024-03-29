<?php
include '../database/intranet/conexionBDD.php'
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/img/intranet.png">
    <title>Vista de administrador</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>

    <!-- Custom styles for this template -->
    <link href="./css/home.css" rel="stylesheet">
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
            </path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
            <path
                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
            <path
                d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
            <path fill-rule="evenodd"
                d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
            <path
                d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
            <path
                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
        </symbol>
    </svg>
    <header class="p-3 bg-success text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <div class="text-end"> 
                    
                    <button type="button"  class="btn btn-warning" onClick="location.href='../index.php'">Volver atrás</button> 
                    <button type="button"  class="btn btn-warning" onClick="location.href='../logout.php'">Cerrar la sesión</button>
                    
                    
                    <!-- <a href="></a> -->
                </div>
            </div>
        </div>
    </header>
    <main>
        
        <div class="row">
            <div class="col-8">
                <h1>Base de datos de administradores</h1>
            </div>
            <div class="col-3">
                <!-- Botón para ELIMINAR un admin-->

                <button type="button" class="btn btn-success position-relative" data-bs-toggle="modal"
                    data-bs-target="#eliminarAdmin">
                    Eliminar administrador <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-minus" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="9" cy="7" r="4" />
  <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
  <line x1="16" y1="11" x2="22" y2="11" />
</svg>
                </button>
                <br>
                <br>
    <button type="button"  class="btn btn-success" onClick="location.href='../signup.php'">Registrar cuenta de administrador <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="12" cy="7" r="4" />
  <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
</svg></button>

<br>
<br>
                <button type="button" class="btn btn-success position-relative" data-bs-toggle="modal"
                    data-bs-target="#editarAdmin">
                    Editar admin <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-search" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="12" cy="7" r="4" />
  <path d="M6 21v-2a4 4 0 0 1 4 -4h1" />
  <circle cx="16.5" cy="17.5" r="2.5" />
  <path d="M18.5 19.5l2.5 2.5" />
</svg>
                </button>
                <br>

<br>


                    <!-- FIN ELIMINAR MASCOTA -->
                  <!-- Botón para agregar una nueva mascota-->
                <button type="button" class="btn btn-success position-relative" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Agregar Administrador <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="9" cy="7" r="4" />
  <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
  <path d="M16 11h6m-3 -3v6" />
</svg>
                </button>
                <br>
                <!-- Modal -->
                  <!-- Tabla para ingresar lo datos de una nueva mascota--> 
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar administrador</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                    
                            </div>
                            <div class="modal-body">
                                <!-- Formulario accion="funcion.php" para realizar las tareas, methodo="get, post" importar en la hoja arriba y abajo en action llamo a la funcion-->
                                <form method="POST" action="logicaAdmin/guardarAdmin.php">
                                    <div class="mb-3">
                                        <label for="rut" class="form-label">RUT</label>
                                        <input name="rut" type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="edad" class="form-label">EDAD</label>
                                        <input name="edad" type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">NOMBRE</label>
                                        <input name="nombre" type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido_p" class="form-label">APELLIDO PATERNO</label>
                                        <input name="apellido_p" type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido_m" class="form-label">APELLIDO MATERNO</label>
                                        <input name="apellido_m" type="text" class="form-control">
                                    </div>
                                    

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" value="Submit" class="btn btn-primary">Confirmar</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="eliminarAdmin" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Formulario accion="funcion.php" para realizar las tareas, methodo="get, post" importar en la hoja arriba y abajo en action llamo a la funcion-->
                                <form method="DELETE" action="logicaAdmin/eliminarAdmin.php">
                                    <div class="mb-3">
                                        <label for="rut" class="form-label">RUT DEL ADMINISTRADOR</label>
                                        <input name="rut" type="text" class="form-control">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" value="Submit" class="btn btn-primary">Eliminar</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="editarAdmin" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar admin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                    
                            </div>
                            
                            <div class="modal-body">
                                <!-- Formulario accion="funcion.php" para realizar las tareas, methodo="get, post" importar en la hoja arriba y abajo en action llamo a la funcion-->
                                <form method="POST" action="logicaAdmin/editarAdmin.php">
                                <div class="mb-3">
                                        <label for="rut" class="form-label">RUT</label>
                                        <input name="rut" type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="edad" class="form-label">EDAD</label>
                                        <input name="edad" type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">NOMBRE</label>
                                        <input name="nombre" type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido_p" class="form-label">APELLIDO PATERNO</label>
                                        <input name="apellido_p" type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido_m" class="form-label">APELLIDO MATERNO</label>
                                        <input name="apellido_m" type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contrasena" class="form-label">CONTRASEÑA</label>
                                        <input name="contrasena" type="text" class="form-control">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" value="Submit" class="btn btn-primary">Editar</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
          <!-- Fin de tabla para agregar mascotas -->
          <!-- A partir de acá se accede a la base de datos, primero modificar una estructura de tabla-->
        <!-- Tabla de Base de Datos -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">RUT</th>
                    <th scope="col">EDAD</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO P</th>
                    <th scope="col">APELLIDO M</th>
                </tr>
            </thead>
            <tbody>
                <?php
				$query = $bdd->query("SELECT * FROM admin");
				if($query->num_rows > 0){
					while($row = $query->fetch_assoc()){
			?>
                <tr>
                    <th scope="row"><?php echo $row['rut'];?></th>
                    <td><?php echo $row['edad'];?></td>
                    <td><?php echo $row['nombre'];?></td>
                    <td><?php echo $row['apellido_p'];?></td>
                    <td><?php echo $row['apellido_m'];?></td>
                </tr>
            </tbody>
            <?php
					}
				} else { ?>
            <p>No hay administradores registrados en la base de datos</p>
            <?php
				} ?>
        </table>
    </main>

    <div class="b-example-divider"></div>

    <!-- <div class="b-example-divider"></div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>