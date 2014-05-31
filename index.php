<?php
$logeado = 0;
$error   = $_GET['error'];
if ($error == 1) {
	echo '
  <script  type="text/javascript" charset="utf-8" async defer>
  alert("Credenciales de acceso incorrectas");
  </script>
  ';
}
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Desarrollo Cated</title>
  <link rel="stylesheet" type="text/css" href="css/DataTables-1.10.0/jquery.dataTables.css">
  <style>
        .title {
            font-size: larger;
            font-weight: bold;
        }

        .table th.centered-cell, .table td.centered-cell {
            text-align: center;
        }
    </style>

  <script type="text/javascript" language="javascript" src="js/DataTables-1.10.0/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="js/DataTables-1.10.0/jquery.dataTables.js"></script>
  <script type="text/javascript" language="javascript" class="init">
$(document).ready(function() {
  $('#example').dataTable();
  $( "#example_length" ).remove();
} );
  </script>
  <link rel="stylesheet" href="css/foundation.css" />
  <script src="js/vendor/modernizr.js"></script>
</head>

<nav class       ="top-bar" data-topbar>
      <ul class  ="title-area">
        <li class="name">
        </li>
        <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
      </ul>

      <section class ="top-bar-section">
        <ul class    ="right">
          <li>
        	<a href="#" data-reveal-id="firstModal" class="radius button">Iniciar sesion</a>
        </li>
        </ul>
      </section>
    </nav>

<body >

<!-- Reveal Modals begin -->
<div id="firstModal" class="reveal-modal" data-reveal>
  <h2>Iniciar Sesion</h2>

      <form method="post" action="sesion.php" >
        <div class="name-field">
          <label>Usuario <small>required</small>
            <input type="text" name="username" required pattern="[a-zA-Z]+">
          </label>
          <small class="error">El usuairo es requerido</small>
        </div>
        <div class="name-field">
          <label>Contraseña <small>required</small>
            <input type="text" name="password" required>
          </label>
          <small class="error">La contraseña es requerida.</small>
        </div>
        <button type="submit">Ingresar</button>
      </form>

<a class="close-reveal-modal">&#215;</a>
</div>

<div id="secondModal" class="reveal-modal" data-reveal>
  <h2>This is a second modal.</h2>
  <p>See? It just slides into place after the other first modal. Very handy when you need subsequent dialogs, or when a modal option impacts or requires another decision.</p>
  <a class="close-reveal-modal">&#215;</a>
</div>
      <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Nombre del proyecto</th>
            <th>Producción</th>
            <th>Desarrollo</th>
            <th>SVN</th>
            <th>Descripcion</th>
<?php if ($logeado == 1) {
	echo '<th>Credenciales</th>';
}
?>
</tr>
        </thead>

        <tfoot>
          <tr>
            <th>Nombre del proyecto</th>
            <th>Producción</th>
            <th>Desarrollo</th>
            <th>SVN</th>
            <th>Descripcion</th>
<?php if ($logeado == 1) {
	echo '<th>Credenciales</th>';
}
?>
</tr>
        </tfoot>

        <tbody>
          <tr>
            <td>Diplomado Enlace</td>
            <td>
              <a href="http://diplomadoenlace.cuaed.unam.mx/" target="_blank" class="botonConfiguracion">Direccion</a>
<?php if ($logeado == 1) {
	echo '| <a href="http://diplomadoenlace.cuaed.unam.mx/configuracionCated/" target="_blank" class="">Configuracion</a>';
}?>
</td>
            <td>
              <a href="http://132.248.238.11/proyectos/moodle/diplomado-enlace/" target="_blank" class="botonConfiguracion">Direccion</a>
<?php if ($logeado == 1) {
	echo '| <a href="http://132.248.238.11/proyectos/moodle/diplomado-enlace/configuracionCated" target="_blank" class="">Configuracion</a>';
}?>
</td>
            

            <td>
              <a href="http://132.248.238.12/svn/enlace/" target="_blank" class="enlace" > ver </a>
              </td>
<?php if ($logeado == 1) {
	echo '<td>adminges / rj45g3s</td>';
}
?>
<td>
                <a href="#" data-reveal-id="secondModal" class="secondary button">Descripción</a>
              </td>
              
</tr>       

          <tr>
            <td>Gueri2-CATED</td>
            <td>
              <a href="http://sigec.cuaed.unam.mx/gueri" target="_blank" class="botonConfiguracion">Direccion</a>
<?php if ($logeado == 1) {
	echo '| <a href="http://sigec.cuaed.unam.mx/gueri/varios/phpconfig.php" target="_blank" class="">Configuracion</a>';
}?>
</td>
            <td>
              <a href="http://132.248.238.11/cated/gueri2/" target="_blank" class="botonConfiguracion">Direccion</a>
<?php if ($logeado == 1) {
	echo '| <a href="http://132.248.238.11/cated/gueri2/varios/phpconfig.php" target="_blank" class="">Configuracion</a>';
}?>
</td>
            <td>
              <a href="http://132.248.238.11/" target="_blank" class="enlace" > ver </a>
              </td>
              

<?php if ($logeado == 1) {
	echo '<td>admin / Rj45@guer1</td>';
}
?>

              <td>
                <a href="#" data-reveal-id="secondModal" class="secondary button">Descripción</a>
              </td>


          </tr>

            <div id="secondModal" class="reveal-modal" data-reveal>
              <h2>Descripción de Gueri2-CATED.</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, dignissimos, dolorum, officia incidunt maxime animi vero tenetur veniam illo consectetur tempora impedit ab dicta sapiente nesciunt debitis voluptas. Dignissimos, incidunt.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, minus, eaque qui ratione accusantium possimus temporibus natus! Tenetur, non, consectetur delectus possimus magni harum iure veniam dolorem nisi blanditiis placeat?
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, labore, in mollitia excepturi iure cupiditate laudantium provident nesciunt veniam illo dignissimos velit vel. Quisquam fuga odit harum explicabo accusamus provident.</p>
              <a class="close-reveal-modal">&#215;</a>
            </div>

            <tr>
            <td>Gueri2-Esisen</td>
            <td>
              <a href="http://132.248.238.12/desarrollo/gueri2" target="_blank" class="botonConfiguracion">Direccion</a>
<?php if ($logeado == 1) {
  echo '| <a href="http://132.248.238.12/desarrollo/gueri2/varios/phpconfig.php" target="_blank" class="">Configuracion</a>';
}?>
</td>
            <td>
              <a href="http://132.248.238.12/desarrollo/gueri2" target="_blank" class="botonConfiguracion">Direccion</a>
<?php if ($logeado == 1) {
  echo '| <a href="http://132.248.238.12/desarrollo/gueri2/varios/phpconfig.php" target="_blank" class="">Configuracion</a>';
}?>
</td>


            <td>
              <a href="http://132.248.238.11/" target="_blank" class="enlace" > ver </a>
              </td>
              <td>
                <a href="#" data-reveal-id="secondModal" class="secondary button">Descripción</a>
              </td>


<?php if ($logeado == 1) {
  echo '<td>adminges / rj45g3s</td>';
}
?>
</tr>


        </tbody>
      </table>

    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

</body>
</html>
