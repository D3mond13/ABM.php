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
    <table class="table table-dark">
    <form action="actualizar.php" method="POST">
  <thead>
  <tr>
  <th scope="col">#</th>
      <th scope="col">Correo</th>
      <th scope="col">Usuario</th>
      <th scope="col">Operación</th>
      <th scope="col"></th>
    </tr>
    
    <?php
    $query = "SELECT * FROM usuario";
    $resultado = $conexion->query($query);
    
    
    
    while($mostrar=mysqli_fetch_array($resultado)){
    ?>

   
  </thead>
  <tbody>
    <tr>
        <td scope="row"><input name="id" value="<?php echo $mostrar['id']?>" ></td>
        <td><input type="mail" name="correo" value="<?php echo $mostrar['mail']?>"></td>
        <td><input type="text" name="usuario" value="<?php echo $mostrar['usuario']?>"></td>
        <td><input type="password" name="pwd" value="<?php echo $mostrar['pwd']?>"></td>
        <td><input type="text" name="nombre" value="<?php echo $mostrar['nombre']?>"></td>
        <td><input type="text" name="apellido" value="<?php echo $mostrar['apellido']?>"></td>

        <td><button type="submit" value="Actualizar"  class="btn btn-outline-success">ACTUALIZAR</button></td>

       </tr>
    <?php 
    }
    ?>
  </tbody>
  </form>
</table>
    </center >
</body>
</html>