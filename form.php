<html>
  <head>
    <title>PHP Test</title>
       <link rel="stylesheet" href="style.css">
  </head>
  <body>
    DATOS CAPTURADOS <br>
    Nombre:<?php echo htmlspecialchars($_POST['nombre']); ?>.<br>
    Apellido Paterno:<?php echo htmlspecialchars($_POST['paterno']); ?>.<br>
    Apellido Materno:<?php echo htmlspecialchars($_POST['materno']); ?>.<br>
    Edad:<?php echo (int)$_POST['edad']; ?><br> 
Tu correo es: <?php echo $_POST["email"]; ?><br>
    Tu numero de telefono es: <?php echo $_POST["number"]; ?><br>
 <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>