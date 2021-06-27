<?php error_reporting (0);?>

<div class="d-flex justify-content-center flex-column align-items-center">

    <div class="bg-white border rounded p-2 m-2 mt-3 w-25">

    <form action="../Controlador/usuarioLoginControlador.php" method="post">

    <?php
if (isset($ErrorCodigo))
    
     echo "<div class='alert alert-danger' role='alert'> $ErrorCodigo </div>"

?>
        
        <fieldset>

            <legend class="text-center">Bienvenido</legend>

            <div class="form-group">
            <label for="correoUsuario">Usuario</label>
            <input class="form-control" name="correoUsuario" id="correoUsuario" type="text" placeholder="Digite su correo" required /> <br/>
            </div>

            <div class="form-group">
            <label for="contrasena">Contraseña</label>
            <input class="form-control" name="contrasena" id="contrasena" type="password" placeholder="Digite contraseña" required/> <br/>
            </div>

            
            <button type="submit" type="button" class="btn btn-outline-secondary float-end mb-2">Iniciar sesión</button>

        </fieldset>
    </form>

    </div>

</div>