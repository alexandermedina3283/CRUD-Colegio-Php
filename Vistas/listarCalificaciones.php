
<div class="d-flex justify-content-center flex-column align-items-center">

    <div class="bg-white border rounded p-2 m-2 mt-3 w-50">

    <p class="fs-5 fw-normal text-center">Listado Calificaciones primer semestre</p>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Estudiante</th>
      <th scope="col">Correo</th>
      <th scope="col">Nota 1</th>
      <th scope="col">Nota 2</th>
      <th scope="col">Nota 3</th>
      <th></th>
      <th></th>      
    </tr>
  </thead>
  <tbody>
  <?php

  foreach($listaEstudiantes as $estudiante){
 
  ?>
    <tr>
      <td><?php echo $estudiante['Codigo'] ?></td>
      <td><?php echo $estudiante['Nombre'] ?></td>
      <td><?php echo $estudiante['Correo'] ?></td>
      <td><?php echo $estudiante['Nota1'] ?></td>
      <td><?php echo $estudiante['Nota2'] ?></td>
      <td><?php echo $estudiante['Nota3'] ?></td>      
      <td><a href="../Controlador/estudianteDatosEditarControlador.php?idEstudiante=<?php echo $estudiante['Codigo'] ?>">Editar </a></td>
      <td><a href="../Controlador/estudianteDatosEliminarControlador.php?idEstudiante=<?php echo $estudiante['Codigo'] ?>">Eliminar </a></td>
    </tr>

     <?php
     }  
  ?>    
  </tbody>
</table>

</div>

</div>

