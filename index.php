<html>
  <head>
    <title>PHP Test</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
   <center> <?php echo '<p><h1>EL RINCON NINTENDERO</h1></p>'; ?> </center><hr>
    <center> <?php echo '<p><h1>INICIAR SESION</h1></p>'; ?> </center>
       <center> <form action="form.php" method="post">
         <p>Nombre: <input type="text" name="nombre"required/></p>
        <p>Apellido paterno: <input type="text" name="paterno"required /></p>
        <p>Apellido materno: <input type="text" name="materno" required /></p>
         <p>Su edad: <input type="text" name="edad" required /></p>
     <p>Correo: <input type="text" name="email" required /></p> 
        <p>Numero de telefono: <input type="text" name="number" required /></p> 
         <p><input type="submit" value="Guardar"/>
          <input type="reset" value="Reset"/></p>
        </form>
          <!--
          This script places a badge on your repl's full-browser view back to your repl's cover
          page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
          teal, blue, blurple, magenta, pink!
          -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>