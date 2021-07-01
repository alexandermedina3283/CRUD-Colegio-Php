<?php error_reporting (0);?>

<div class="d-flex justify-content-center flex-column align-items-center">

    <div class="bg-white border rounded p-2 m-2 mt-3 w-50">

    <form action="../Controlador/editarEstudianteControlador.php" method="post">
        
        <fieldset>

            <legend>Formulario de actualización calificaciones estudiante</legend>

            <div class="form-group">            
            <input class="form-control" name="codigoEstudiante" id="codigoEstudiante" type="hidden" value="<?php echo $codigo?>" required/> <br/>
            </div>            
            
            <div class="form-group">
            <label for="nombreEstudiante">Nombre</label>
            <input class="form-control" name="nombreEstudiante" id="nombreEstudiante" type="text" placeholder="Digite nombre" value="<?php echo $nombre?>" required/> <br/>
            </div>

            <div class="form-group">
            <label for="correoEstudiante">Correo</label>
            <input class="form-control" name="correoEstudiante" id="correoEstudiante" type="text" placeholder="Digite correo electronico" value="<?php echo $correo?>" required /> <br/>
            </div>

            <div class="form-group">
            <label for="notaUno">Nota 1</label>
            <input class="form-control" name="notaUno" id="notaUno" type="number" step="0.01" min="0" max="5" placeholder="Ingrese Calificación" value="<?php echo $nota1?>" required /> <br/>
            </div>

            <div class="form-group">
            <label for="notaDos">Nota 2</label>
            <input class="form-control" name="notaDos" id="notaDos" type="number" step="0.01" min="0" max="5" placeholder="Ingrese Calificación" value="<?php echo $nota2?>" required /> <br/>
            </div>

            <div class="form-group">
            <label for="notaTres">Nota 3</label>
            <input class="form-control" name="notaTres" id="notaTres" type="number" step="0.01" min="0" max="5" placeholder="Ingrese Calificación" value="<?php echo $nota3?>" required /> <br/>
            </div>


            <button type="submit" type="button" class="btn btn-outline-secondary float-end mb-2">Actualizar</button>

        </fieldset>
    </form>

    </div>

</div>