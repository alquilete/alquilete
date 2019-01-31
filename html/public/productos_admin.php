<?php


if(!isset($_COOKIE["mi_sesion_admin"])){

  header('Location: ../index_admin.php');
}

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Productos</title>
    <link rel="stylesheet" href="../css/productos_admin.css">
    <link rel="stylesheet" href="../css/general_admin.css">
  </head>
  <body>
    <div class="contenedor">
      <header class="fila">
          <div class="col-4">
            <img src="../img/logo.png" alt="LOGO"/>
          </div>
          <div class="col-4"></div>
          <div class="col-4">
            <a href="info_cuenta_admin.php"><figure>
            <img src="../img/usuario.png" alt=""></a>
            <a href="index_admin.php?logout=true"><figcaption>Cerrar Sesión</figcaption>
            </figure></a>
          </div>
        </header>
        <div class="fila">
          <div class="col-12"></div>
        </div>
    <article>
      <div class="fila">
          <div class="col-1"></div>
          <div class="col-11"><h2>Productos</h2></div>
      </div>
      <div class="fila">
        <div class="col-2"></div>
        <table class="col-7">
        <tr class="fila">
          <th class="col-4">Código</th>
          <th class="col-4">Ubicación</th>
          <th class="col-4">Incidencias</th>
        </tr>
        <tr class="fila">
          <td class="col-4">B001</td>
          <td class="col-4">12554N 18166W</td>
          <td class="col-4">Ninguna</td>
        </tr>
        <tr class="fila">
          <td class="col-4">B002</td>
          <td class="col-4">12554N 18166W</td>
          <td class="col-4">Ninguna</td>
        </tr>
        <tr class="fila">
          <td class="col-4">B003</td>
          <td class="col-4">12554N 18166W</td>
          <td class="col-4">Ninguna</td>
        </tr>
        <tr class="fila">
          <td class="col-4">B004</td>
          <td class="col-4">12554N 18166W</td>
          <td class="col-4">Ninguna</td>
        </tr>
        <tr class="fila">
          <td class="col-4">B005</td>
          <td class="col-4">12554N 18166W</td>
          <td class="col-4">Ninguna</td>
        </tr>
        <tr class="fila">
          <td class="col-4">P001</td>
          <td class="col-4">12554N 18166W</td>
          <td class="col-4">Ninguna</td>
        </tr>
        <tr class="fila">
          <td class="col-4">P002</td>
          <td class="col-4">12554N 18166W</td>
          <td class="col-4">B001</td>
        </tr>
        <tr class="fila">
          <td class="col-4">P003</td>
          <td class="col-4">12554N 18166W</td>
          <td class="col-4">Ninguna</td>
        </tr>
        <tr class="fila">
          <td class="col-4">P004</td>
          <td class="col-4">12554N 18166W</td>
          <td class="col-4">Ninguna</td>
        </tr>
        <tr class="fila">
          <td class="col-4">P005</td>
          <td class="col-4">12554N 18166W</td>
          <td class="col-4">Ninguna</td>
        </tr>
      </table>
      <div class="col-3"></div>
    </div>
    </article>
  </body>
</html>
