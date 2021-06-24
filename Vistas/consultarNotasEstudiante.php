
<div class="container">
<div class="form-group">
    <label for="nombreEstudiante">Nombre Estudiante</label>
    <input class="form-control" name="nombreEstudiante" id="nombreEstudiante"
     type="text" disabled required/><?php echo $estudiante['Codigo'] ?> <br/>
    </div>
</div>

<div class="container">
<div class="form-group">
    <label for="nombreEstudiante">Correo Estudiante</label>
    <input class="form-control" name="correoEstudiante" id="correoEstudiante"
     type="text" disabled required/> <br/>
    </div>
</div>

<div class="container">
<div class=" card border-success mb-5  col-xs-12">
  <div class="card-header bg-transparent border-success ">Nota 1</div>
  <div class="card-body text-success">
    <h5 class="card-title">El valor obtenido es:</h5>
    <input class="card-text"disabled><?php echo $estudiante['Nota1'] ?></input>
  </div>
</div>
</div>

<div class="container">
<div class="card border-success mb-5  col-xs-12">
  <div class="card-header bg-transparent border-success">Nota 2</div>
  <div class="card-body text-success">
    <h5 class="card-title">El valor obtenido es:</h5>
    <input class="card-text" disabled><?php echo $estudiante['Nota2'] ?></input>
  </div>
</div>
</div>

<div class="container">
<div class="card border-success mb-5 col-xs-12">
  <div class="card-header bg-transparent border-success">Nota 3</div>
  <div class="card-body text-success">
    <h5 class="card-title">El valor obtenido es:</h5>
    <input class="card-text" disabled><?php echo $estudiante['Nota3'] ?></input>
  </div>
</div>
</div>

