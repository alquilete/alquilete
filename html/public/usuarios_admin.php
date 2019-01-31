<?php


if(!isset($_COOKIE["mi_sesion_admin"])){

  header('Location: ../index_admin.php');
}

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Usuarios</title>
    <link rel="stylesheet" href="../css/usuarios_admin.css">
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
          <div class="col-11"><h2>Usuarios</h2></div>
      </div>
      <div class="fila">
        <div class="col-2"></div>
        <table class="col-10">
        <tr class="fila">
          <th class="col-1">Código</th>
          <th class="col-1">DNI</th>
          <th class="col-1">Nombre</th>
          <th class="col-2">Apellidos</th>
          <th class="col-1">Teléfono</th>
          <th class="col-1">Dirección</th>
          <th class="col-2">Num_Tarjeta</th>
          <th class="col-1">Fecha</th>
          <th class="col-1">CVV</th>
        </tr>
        <tr class="fila">
          <td class="col-1">001</td>
          <td class="col-1">4863245T</td>
          <td class="col-1">Alfonso</td>
          <td class="col-2">De la Cruz Luis</td>
          <td class="col-1">68426547</td>
          <td class="col-1">C/ Primera 1</td>
          <td class="col-2">546564899115681651</td>
          <td class="col-1">05/23</td>
          <td class="col-1">657</td>
        </tr>
        <tr class="fila">
          <td class="col-1">002</td>
          <td class="col-1">4863445T</td>
          <td class="col-1">Africa</td>
          <td class="col-2">Grande Maria</td>
          <td class="col-1">68426547</td>
          <td class="col-1">C/ Segunda 2</td>
          <td class="col-2">546564899115681651</td>
          <td class="col-1">05/23</td>
          <td class="col-1">657</td>
        </tr>
        <tr class="fila">
          <td class="col-1">003</td>
          <td class="col-1">4863245T</td>
          <td class="col-1">Joan</td>
          <td class="col-2">Garrido Amor</td>
          <td class="col-1">68426547</td>
          <td class="col-1">C/ Primera 1</td>
          <td class="col-2">546564899115681651</td>
          <td class="col-1">05/23</td>
          <td class="col-1">657</td>
        </tr>
        <tr class="fila">
          <td class="col-1">004</td>
          <td class="col-1">4863245T</td>
          <td class="col-1">Dave</td>
          <td class="col-2">Plata Cuarto</td>
          <td class="col-1">68426547</td>
          <td class="col-1">C/ Primera 1</td>
          <td class="col-2">546564899115681651</td>
          <td class="col-1">05/23</td>
          <td class="col-1">657</td>
        </tr>
        <tr class="fila">
          <td class="col-1">005</td>
          <td class="col-1">4863245T</td>
          <td class="col-1">Damion</td>
          <td class="col-2">Rojo Cuerda</td>
          <td class="col-1">68426547</td>
          <td class="col-1">C/ Primera 1</td>
          <td class="col-2">546564899115681651</td>
          <td class="col-1">05/23</td>
          <td class="col-1">657</td>
        </tr>
        <tr class="fila">
          <td class="col-1">006</td>
          <td class="col-1">4863245T</td>
          <td class="col-1">Noelia</td>
          <td class="col-2">Soler Lobato</td>
          <td class="col-1">68426547</td>
          <td class="col-1">C/ Primera 1</td>
          <td class="col-2">546564899115681651</td>
          <td class="col-1">05/23</td>
          <td class="col-1">657</td>
        </tr>
        <tr class="fila">
          <td class="col-1">007</td>
          <td class="col-1">4863245T</td>
          <td class="col-1">Carlos</td>
          <td class="col-2">Right Miguel</td>
          <td class="col-1">68426547</td>
          <td class="col-1">C/ Primera 1</td>
          <td class="col-2">546564899115681651</td>
          <td class="col-1">05/23</td>
          <td class="col-1">657</td>
        </tr>
      </table>
    </div>
    <div class="fila">
        <div class="col-1"></div>
        <div class="col-11"><h2>Pagos</h2></div>
    </div>
    <div class="fila">
      <div class="col-2"></div>
      <table class="col-6">
        <tr class="fila">
          <th class="col-4">Cod_Usu</th>
          <th class="col-4">Cod_Producto</th>
          <th class="col-4">Cod_Factura</th>
        </tr>
        <tr class="fila">
          <td class="col-4">001</td>
          <td class="col-4">P265</td>
          <td class="col-4">F100</td>
        </tr>
        <tr class="fila">
          <td class="col-4">001</td>
          <td class="col-4">P544</td>
          <td class="col-4">F101</td>
        </tr>
        <tr class="fila">
          <td class="col-4">003</td>
          <td class="col-4">P277</td>
          <td class="col-4">F102</td>
        </tr>
        <tr class="fila">
          <td class="col-4">005</td>
          <td class="col-4">P785</td>
          <td class="col-4">F103</td>
        </tr>
        <tr class="fila">
          <td class="col-4">002</td>
          <td class="col-4">P265</td>
          <td class="col-4">F104</td>
        </tr>
      </table>
      <div class="col-2"></div>
    </div>
    </article>
    </div>
  </body>
</html>
