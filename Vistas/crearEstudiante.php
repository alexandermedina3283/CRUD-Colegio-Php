<?php error_reporting (0);?>

<div class="d-flex justify-content-center flex-column align-items-center">

    <div class="bg-white border rounded p-2 m-2 mt-3 w-50">

    <form action="../Controlador/crearEstudianteControlador.php" method="post">
        
        <fieldset>

            <legend>Formulario unico registro de calificaciones</legend>

            <div class="form-group">
            <label for="nombreEstudiante">Nombre</label>
            <input class="form-control" name="nombreEstudiante" id="nombreEstudiante" type="text" placeholder="Digite nombre" required/> <br/>
            </div>

            <div class="form-group">
            <label for="correoEstudiante">Correo</label>
            <input class="form-control" name="correoEstudiante" id="correoEstudiante" type="text" placeholder="Digite correo electronico" required /> <br/>
            </div>

            <div class="form-group">
            <label for="notaUno">Nota 1</label>
            <input class="form-control" name="notaUno" id="notaUno" type="number" step="0.01" min="0" max="5" placeholder="Ingrese Calificación" required /> <br/>
            </div>

            <div class="form-group">
            <label for="notaDos">Nota 2</label>
            <input class="form-control" name="notaDos" id="notaDos" type="number" step="0.01" min="0" max="5" placeholder="Ingrese Calificación" required /> <br/>
            </div>

            <div class="form-group">
            <label for="notaTres">Nota 3</label>
            <input class="form-control" name="notaTres" id="notaTres" type="number" step="0.01" min="0" max="5" placeholder="Ingrese Calificación" required /> <br/>
            </div>


            <button type="submit" type="button" class="btn btn-outline-secondary float-end mb-2">Guardar</button>

        </fieldset>
    </form>

    </div>

</div>