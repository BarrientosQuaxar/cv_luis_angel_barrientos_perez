<html>
<head>
  <title>Mensaje Guardado</title>
  <link rel="stylesheet" href="Estilo.css">
</head>

<body>
  <div class="mens">
  <div class="mensaje">
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base3") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into contacto (nombre,email,asunto,mensaje) values 
  ('$_REQUEST[nombre]','$_REQUEST[email]','$_REQUEST[asunto]','$_REQUEST[mensaje]')")
or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El mensaje fue enviado con exito.";
  ?>
<div class="butto">

<button onclick="location.href='inde2.php'">Regresar pagina principal</button>
</div>
</body>
</div>
</html>