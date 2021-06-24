<div class="d-flex justify-content-center flex-column align-items-center">

    <div class="bg-white border rounded p-2 m-2 mt-3 w-50">


    <div class='alert alert-danger' role='alert'>Desea eliminar los datos del siguiente Estudiante ?</div>



<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Estudiante</th>
      <th scope="col">Correo</th>
      <th scope="col">Nota 1</th>
      <th scope="col">Nota 2</th>
      <th scope="col">Nota 3</th>       
    </tr>
  </thead>
  <tbody>
  <?php

  foreach($estudiante as $e){
 
  ?>
    <tr>
      <td><?php echo $e['Codigo'] ?></td>
      <td><?php echo $e['Nombre'] ?></td>
      <td><?php echo $e['Correo'] ?></td>
      <td><?php echo $e['Nota1'] ?></td>
      <td><?php echo $e['Nota2'] ?></td>
      <td><?php echo $e['Nota3'] ?></td>     
      <td>
      <form class="row g-3" action="../Controlador/borrarEstudianteControlador.php" method="post">
      <input type="hidden" name="codigoEstudiante" value="<?php echo $e['Codigo'] ?>" >
      <div class="col-12">
      <button type="submit" class="btn btn-danger float-end">Eliminar datos</button>
      </div>
      </form>
      </td>  
    </tr>

     <?php
     }  
  ?>    
  </tbody>
</table>

</div>

</div>