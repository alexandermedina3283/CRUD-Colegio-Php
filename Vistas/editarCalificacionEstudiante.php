<?php error_reporting (0);?>

<div class="d-flex justify-content-center flex-column align-items-center">

    <div class="bg-white border rounded p-2 m-2 mt-3 w-50">

    <form action="../Controlador/editarCalificacionControlador.php" method="post">
        
        <fieldset>

            <legend>Formulario de actualización calificaciones estudiante</legend>

            <div class="bg-light border rounded p-2 mb-3 d-flex flex-row justify-content-between">

            <div class="form-group">
            <label for="codigoEstudiante">Código: <strong><?php echo $codigo ?></strong></label>            
            <input class="form-control" name="codigoEstudiante" id="codigoEstudiante" type="hidden" value="<?php echo $codigo?>" required/> <br/>
            </div>            
            
            <div class="form-group">
            <label for="nombreEstudiante">Nombre: <strong><?php echo $nombre ?></strong></label>
            <input class="form-control" name="nombreEstudiante" id="nombreEstudiante" type="hidden" placeholder="Digite nombre" value="<?php echo $nombre?>" required/> <br/>
            </div>

            <div class="form-group">
            <label for="correoEstudiante">Correo electronico: <strong><?php echo $correo ?></strong></label>
            <input class="form-control" name="correoEstudiante" id="correoEstudiante" type="hidden" placeholder="Digite correo electronico" value="<?php echo $correo?>" required /> <br/>
            </div>

            </div>

            <div class="form-group">
            <label for="notaUno">Nota 1</label>
            <input class="form-control" name="notaUno" id="notaUno" type="text" placeholder="Ingrese Calificación" value="<?php echo $nota1?>" required /> <br/>
            </div>

            <div class="form-group">
            <label for="notaDos">Nota 2</label>
            <input class="form-control" name="notaDos" id="notaDos" type="text" placeholder="Ingrese Calificación" value="<?php echo $nota2?>" required /> <br/>
            </div>

            <div class="form-group">
            <label for="notaTres">Nota 3</label>
            <input class="form-control" name="notaTres" id="notaTres" type="text" placeholder="Ingrese Calificación" value="<?php echo $nota3?>" required /> <br/>
            </div>


            <button type="submit" type="button" class="btn btn-outline-secondary float-end mb-2">Actualizar</button>

        </fieldset>
    </form>

    </div>

</div>