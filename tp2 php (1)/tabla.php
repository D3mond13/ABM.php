<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>


    <?php include("conexion.php");?>

</head>
<body>
    <center>
    <table class="table table-dark  ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">apellido</th>
      <th scope="col">usuario</th>
      <th scope="col">contraseña</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
     
    </tr>
  </thead>
  <tbody>
    <?php foreach($conexion ->query('SELECT * FROM usuario')as $row )?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['nombre'];?></td>
        <td><?php echo $row['apellido'];?></td>
        <td><?php echo $row['usuario'];?></td>
        <td><?php echo $row['pwd'];?></td>
        <td><?php echo $row['mail'];?></td>
        <td><a type="button" class="btn btn-outline-danger" href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar.</a></td>
        <td><a type="button" class="btn btn-outline-danger" href="modificar.php?id=<?php echo $row['id'];?>">Modificar.</a></td>
    </tr>       
  </tbody>
</table>
    </center >
</body>
</html>