<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Iconos-->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="administrador.css">
    <title>Sistema de Califiacion</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title">Administrador</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <!-- Barra lateral-->
                <!--Main Navigation-->
                <header>
                    <!-- Sidebar -->
                    <!--class="collapse d-lg-block sidebar collapse bg-white"-->
                    <nav id="sidebarMenu">
                        <div class="position-sticky">
                            <div class="list-group list-group-flush">
                                <a href="./index.php" class="list-group-item list-group-item-action py-2 ripple">
                                    <i class="icon ion-md-school"></i><span> Asignaturas </span>
                                </a>
                                <a href="./administrador-profesores.php"
                                    class="list-group-item list-group-item-action py-2 ripple">
                                    <i class="icon ion-md-contact"></i><span> Profesores </span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action py-2 ripple active"
                                    aria-current="true"><i class="icon ion-logo-buffer"></i><span> Cursos </span></a>
                            </div>
                        </div>
                    </nav>
                </header>
            </div>

            <div class="col">
                <!--Obligatorias-->
                <div class="col-12">
                    <!-- Agregar-->
                    <?php
                        session_start();
                        if(!isset($_SESSION['aObligatorias'])){
                            $_SESSION['aObligatorias'] = array();

                        }
                        if(isset($_POST['agregar'])){
                            $nObligatoria = $_POST['nObligatoria'];
                            $obligatoria = $_POST['obligatoria'];

                            if(empty($nObligatoria)||empty($obligatoria)){
                                echo "Rellena todos los valores";
                            }else{

                                //Meto mis datos en el array
                                $aObligatoria = array(
                                    "nObligatoria" => $nObligatoria,
                                    "obligatoria" => $obligatoria
                                );

                                // Si exite no lo adanhes
                                if(isset($_SESSION['aObligatorias'][$nObligatoria])){
                                    echo "Se ha modificado la asignatura numero: ". $nObligatoria;
                                }else{
                                    echo "Se ha insertado la nueva asignatura";
                                }

                                $_SESSION['aObligatorias'][$nObligatoria] = $aObligatoria;
                                print_r($_SESSION['aObligatorias']);
                            }
                            // Eliminar los que seleccione
                        }else if(isset($_POST['eliminar'])){
                            if(!isset($_POST['chO'])){
                                echo "No hay Asignaturas seleccionadas";
                            }else{
                                $nObligatoria = $_POST['chO'];
                                print_r($nObligatoria);

                                foreach($_SESSION['aObligatorias'] as $key => $value){
                                    if(in_array($key, $nObligatoria)){
                                        unset($_SESSION['aObligatorias'][$key]);
                                    }
                                }
                                echo "Asigunaturas Obligatorias borradas";
                            }
                        }
                    ?>

                    <form method="post">
                        <!-- Mostrador -->
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="col-10">
                                        <h4>Mis Cursos</h4>
                                    </div>
                                    <!-- Mostrar dentro del Formulario -->
                                    <?php
                                        if(isset($_POST['mostrarObligatorias'])){

                                            if(count($_SESSION['aObligatorias']) === 0){
                                                echo "<p>No hay Asignaturas</p>";
                                            }else{  
                                                echo "<table class='table'>";
                                                echo "<thead>";
                                                echo "<tr>";
                                                echo "<th scope='col'></th>";
                                                echo "<th scope='col'>N ASIG.</th>";
                                                echo "<th scope='col'>ASIGNATURA</th>";
                                                echo "</tr>";
                                                echo "<thead>";

                                                foreach ($_SESSION['aObligatorias'] as $key => $value){
                                                    /*echo "<tr>";
                                                    echo "<td>". $value['nObligatoria'] ."</td>";
                                                    echo "<td>". $value['obligatoria'] ."</td>";
                                                    echo "</tr>";*/
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" name="chO[]" value="<?php echo $key;?>"></td>
                                        <th scope="row"><?php echo $value['nObligatoria']; ?></th>
                                        <td><?php echo $value['obligatoria']; ?></td>
                                    </tr>
                                    <?php
                                                    }
                                                    echo "</table>";
                                                }
                                                
                                            }
                                    ?>

                                </div>

                                <div class="modal fade" id="ventana1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!--Header-->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Ingreso de Asignatura Obligatoria</h4>
                                                <button tyle="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;</button>
                                            </div>
                                            <!--Contenido-->
                                            <div class="modal-body">
                                                <div class="input-group">
                                                    <span class="input-group-text">Codigo y Nombre</span>
                                                    <input class="form-control" type="text" id="nObligatoria"
                                                        name="nObligatoria"
                                                        placeholder="Ingrese CODIGO de la Asignatura" requiered /">
                                                    <input class="form-control" type="text" id="obligatoria"
                                                        name="obligatoria" placeholder="Ingrese NOMBRE de la Asignatura"
                                                        requiered /">
                                                </div>
                                            </div>
                                            <!--Footer-->
                                            <div class="modal-footer">
                                                <button type="submit" name="agregar"
                                                    class="btn btn-success">Agregar</button>
                                                <button type="button" class="btn btn-primary"
                                                    data-dismiss="modal">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                </form>
            </div>

        </div>
        <div style="text-align:center; align-items:center;">
            <button type="submit" href="#ventana1" class="btn btn-success btn-xs" data-toggle="modal">Agregar</button>
            <button type="submit" name="eliminar" class="btn btn-danger btn-xs">Eliminar</button>
        </div>
    </div>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</body>

</html>