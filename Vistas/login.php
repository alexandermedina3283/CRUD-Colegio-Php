<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="../assets/css/estiloLogin.css">

<div class="container">    
        
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
        
        <div class="row">                
            <div >
                    <img class="imalogin" src="../assets/pic/dibujo.jpeg" alt="imagen">
                                
            </div>
        </div>
        
        <div class="panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title text-center">Ingrese sus credenciales</div>
            </div>     

            <div class="panel-body" >

                <form name="form" id="form" class="form-horizontal" action="../Controlador/usuarioLoginControlador.php" method="post">
                   
                <?php 
                if (isset($ErrorCodigo))
                echo "<div class='alert alert-danger' role='alert'> $ErrorCodigo </div>"
                ?>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="user" type="email" class="form-control" name="correo" value="" placeholder="ejemplo@gmail.com">                                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    </div>                                                                  

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 botonIni">
                            <button type="submit" href="#" class="btn btn-primary "><i class="glyphicon glyphicon-log-in"></i>Iniciar Sesión</button>                          
                        </div>
                    </div>

                </form>     

            </div>                     
        </div>  
    </div>
</div>


