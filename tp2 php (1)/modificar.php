<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>ABM</title>
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
    $id = $_GET["id"];
    $sql="SELECT * FROM login WHERE id = '$id'";
    $resultado = $conexion->query($query);
    
    
    while($mostrar=mysqli_fetch_array($result)){
    ?>

   
  </thead>
  <tbody>
  <tr>
        <td scope="row"><input name="id" value="<?php echo $mostrar['id']?>" ></td>
        <td><input type="text" name="correo" value="<?php echo $mostrar['mail']?>"></td>
        <td><input type="text" name="usuario" value="<?php echo $mostrar['usuario']?>"></td>
        <td><input type="text" name="pwd" value="<?php echo $mostrar['pwd']?>"></td>
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

</center>

    
</body>
</html>
