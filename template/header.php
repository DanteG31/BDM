<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/estilos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
</head>

<body>
    <?php
        session_start();
    ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand">Noticias24</a>
                <button class="navbar-toggler navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto text-center">
                        <li class="nav-item">
                            <a href="./index.php" class="nav-link active">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Nacional</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Entretenimiento</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Ciencia</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Deportes</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Economía</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">Todas las secciones</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Nacional</a>
                                <a class="dropdown-item" href="#">Entretenimiento</a>
                                <a class="dropdown-item" href="#">Ciencia</a>
                                <a class="dropdown-item" href="#">Deportes</a>
                                <a class="dropdown-item" href="#">Economía</a>
                                <a class="dropdown-item" href="#">Cultura</a>
                                <a class="dropdown-item" href="#">Internacional</a>
                                <a class="dropdown-item" href="#">Salud</a>
                            </div>
                        </li>
                    </ul>
                    <a href="./createNoticie.php" style="text-decoration: none"><button id="CreateNotice"
                            class="btn btn-secondary my-2 my-sm-0">Crear
                            Noticia</button></a>
                    <a href="./adminNotice.php" style="text-decoration: none"><button id="ReporterView"
                            class="btn btn-secondary my-2 my-sm-0">Reportero</button></a>
                    <a href="./editorNotice.php" style="text-decoration: none"><button id="EditorView"
                            class="btn btn-secondary my-2 my-sm-0">Editor</button></a>
                    <a href="./createReporter.php" style="text-decoration: none"><button id="createReporter"
                            class="btn btn-secondary my-2 my-sm-0">Registrar</button></a>
                    <a href="./seccion.php" style="text-decoration: none"><button id="seccion"
                            class="btn btn-secondary my-2 my-sm-0">Secciones</button></a>
                    <a href="./sectionReport.php" style="text-decoration: none"><button id="seccionReport"
                            class="btn btn-secondary my-2 my-sm-0">Reporte de Secciones</button></a>
                    <a href="./noticeReport.php" style="text-decoration: none"><button id="noticeReport"
                            class="btn btn-secondary my-2 my-sm-0">Reporte</button></a>
                    <a href="./profile.php" style="text-decoration: none"><button id="profile"
                            class="btn btn-secondary my-2 my-sm-0">Perfil</button></a>
                    
                    <?php
                        if(isset($_SESSION["email"])){
                    ?>
                        <a href=<?php echo '"./profile.php?email='.$_SESSION["email"].'"'?> style="text-decoration: none"><button id="alias"
                            class="btn btn-secondary my-2 my-sm-0"><?php echo $_SESSION["alias"]?></button></a>
                        <a href="./closeSession.php" style="text-decoration: none"><button id="alias"
                            class="btn btn-secondary my-2 my-sm-0">Cerrar sesión</button></a>
                    <?php
                        }
                    ?>

                    <a href="./login.php" style="text-decoration: none"><button id="Btnregistro"
                            class="btn btn-secondary my-2 my-sm-0">Iniciar
                            Sesión</button></a>
                    <form class="d-flex">
                        <input class="form-control me-sm-2" type="text" placeholder="Busqueda">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <?php
        if(isset($_SESSION["email"])){
    ?>
        <script type="text/javascript">
            $(document).ready(function(){
                document.getElementById('Btnregistro').style.display = 'none';
            }
            );
        </script>

    <?php
            if($_SESSION["type"]==2 and password_verify("CHANGEIT",$_SESSION["pwd"])){
    ?>  
        <script type="text/javascript">
            $(document).ready(function(){
                swal.fire({icon:"info",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Recuerda cambiar tu contraseña"});
            }
            );
        </script>
    <?php
            }
        }
    ?>