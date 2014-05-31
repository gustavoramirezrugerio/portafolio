<?php
$valoresPost = new stdClass();
$valoresPost->username = $_POST['username'];
$valoresPost->password = $_POST['password'];

if ($valoresPost->username == "admin" && $valoresPost->password == "admin") {
	$logeado = 1;
} else {
	header('Location: http://132.248.238.11/index/index.php?error=1');
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
<?php
?>
<a href="/" data-reveal-id="firstModal" class="radius button">Terminar sesion</a>
          </li>
        </ul>
      </section>
    </nav>

<body >


      <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Nombre del proyecto</th>
            <th>Producción</th>
            <th>Desarrollo</th>
            <th>SVN</th>
<?php if ($logeado == 1) {
  echo '<th>Credenciales de acceso</th>';
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
<?php if ($logeado == 1) {
  echo '<th>Credenciales de acceso</th>';
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
          </tr>


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
<?php if ($logeado == 1) {
  echo '<td>admin / Admin_1234</td>';
}
?>
</tr>


            <tr>
            <td>Plataforma de educacion en linea</td>
            <td>
              <a href="http://132.248.238.11" target="_blank" class="botonConfiguracion">Direccion</a>
<?php if ($logeado == 1) {
  echo '| <a href="http://132.248.238.11" target="_blank" class="">Configuracion</a>';
}?>
</td>
            <td>
              <a href="http://132.248.238.11/desarrollo/plataforma" target="_blank" class="botonConfiguracion">Direccion</a>
<?php if ($logeado == 1) {
  echo '| <a href="http://132.248.238.11/desarrollo/plataforma/configuracionCated" target="_blank" class="">Configuracion</a>';
}?>
</td>
            <td>
              <a href="http://132.248.238.12/svn/" target="_blank" class="enlace" > ver </a>
              </td>
<?php if ($logeado == 1) {
  echo '<td>admin / admin</td>';
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
