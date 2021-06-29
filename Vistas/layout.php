<?php error_reporting (0);?>

<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/misEstilos.css">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Mi Colegio</title>
</head>
<body class="bg-white">

  <header>

    <div class="d-flex flex-row justify-content-between responsive">   

    <div>
        <img class="logo" src="../assets/pic/logo.png" alt="">            
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-white responsive">
        <div class="container-fluid">
          
          <a class="navbar-brand" href="../Controlador/vistasControlador.php?rutaOpc=1">Mi Colegio</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
             </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../Controlador/vistasControlador.php?rutaOpc=1">Inicio</a>
             </li>

             <?php  if(isset($_SESSION["RolUsuario"])) {?>
            <li class="nav-item">
              <a class="nav-link" href="../Controlador/vistasControlador.php?rutaOpc=2">Nosotros</a>
            </li>
            <?php } ?>

            <?php if(isset($_SESSION["RolUsuario"]) && $_SESSION["RolUsuario"] == "Coordinador") {?>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Coordinador</a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../Controlador/vistasControlador.php?rutaOpc=3">Registrar calificación</a></li>
                      <li><a class="dropdown-item" href="../Controlador/listarEstudianteControlador.php">Consultar Estudiante</a></li>                      
                  </ul>
            </li>
            <?php  } 
            if(isset($_SESSION["RolUsuario"]) && $_SESSION["RolUsuario"] == "Profesor") {?>
            <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Profesor</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../Controlador/listarEditarCalificacionControlador.php">Editar notas</a></li>                                         
                    </ul>
            </li>
            <?php  } 
          if(isset($_SESSION["RolUsuario"]) && $_SESSION["RolUsuario"] == "Estudiante") {?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Estudiante</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../Controlador/vistasControlador.php?rutaOpc=5">Consultar notas</a></li>                                         
                  </ul>
            </li> 
            <?php  } 
             if(!isset($_SESSION["RolUsuario"])) {?>
            <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="../Controlador/vistasControlador.php?rutaOpc=4">Login</a>
            </li>

            <?php }else{ ?>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Controlador/usuarioLogoutControlador.php">Logout</a>
          </li>
           
          <?php } ?>                      
                </ul>              
              </div>
            </div>
          </nav>

        </div>
          <div class="p-2 bg-info text-dark">           
            <p class="fs-3 fw-bold text-center">Mi Colegio " Un Lugar Para Aprender En Familia"</p>
        </div>
    </header>


    <main class="bg-light">
    <?php

   if (!isset($vista))
        $vista="home.php";

        require $vista;
   ?> 

    </main>

    <footer class="bg-secondary">
        
        <div class="d-flex flex-row justify-content-evenly">        
        <div>
            <p class="h5">Fundación Educativa</p>
            <ul>
                <li>Prensa</li>
                <li>Empleo</li>
                <li>Plan pedagogico</li>                
            </ul>
        </div>

        <div>
            <p class="h5">Recursos</p>
            <ul>
                <li>Aula virtual</li>
                <li>Biblioteca</li>
                <li>Learning</li>                
            </ul>
        </div>

        <div>
            <p class="h5">Comunidad</p>
            <ul>
                <li>Foro</li>
                <li>Chat</li>
                <li>Asamblea</li>                
            </ul>
        </div>   
        </div>      
   
      </footer>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/d51e0c6239.js" crossorigin="anonymous"></script>

</body>
</html>