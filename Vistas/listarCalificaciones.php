
<div class="d-flex justify-content-center flex-column align-items-center">

    <div class="bg-white border rounded p-2 m-2 mt-3 w-50">

    <p class="fs-6 fw-normal text-light bg-dark text-center">LISTADO CALIFICACIONES PRIMER TRIMESTRE 2021</p>


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
      <td><a href="../Controlador/estudianteDatosEditarControlador.php?idEstudiante=<?php echo $estudiante['Codigo'] ?>"><i class="fas fa-edit" style="color: black;"></i></a></td>
      <td><a href="../Controlador/estudianteDatosEliminarControlador.php?idEstudiante=<?php echo $estudiante['Codigo'] ?>"><i class="far fa-trash-alt" style="color: red;"></i></a></td>
    </tr>

     <?php
     }  
  ?>    
  </tbody>
</table>

</div>

</div>

