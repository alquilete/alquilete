<?php

session_start();
$loged = false;

if(isset($_SESSION["valido"])){
  header('Location: index.php');
  die();
}

 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Incidencias</title>
    <link rel="stylesheet" href="../css/incidencias.css">
    <link rel="stylesheet" href="../css/general.css">
  </head>
  <body>
    <div class="contenedor">
      <header class="fila">
        <div class="col-4">
          <a href="../index.php"/><img src="../img/logo.png" alt="LOGO"/></a>
        </div>
        <div class="col-4">
          <table>
            <tr>
              <td><a href="patinetes.php"><img src="../img/patinete.png" alt="Patinetes"/></a></td>
              <td><a href="bicicletas.php"><img src="../img/bici.png" alt="Bicicletas"/></a></td>
              <td><a href="ambos.php"><img src="../img/bicipati.png" alt="Ambos"/></a></td>
            </tr>
          </table>
        </div>
        <div class="col-4">
          <a href="info_cuenta.php"><figure>
          <img src="../img/usuario.png" alt=""></a>
          <a href="index.php?logout=true"><figcaption>Cerrar Sesión</figcaption>
          </figure></a>
        </div>
      </header>
      <div class="fila" id="arriba">
        <div class="col-12"></div>
      </div>
      <article>
          <div class="fila">
            <div class="col-1"></div>
            <div class="col-11"><h2>Incidencias</h2></div>
          </div>
          <div class="fila">
            <div class="col-2"></div>
            <div class="col-4"><label for="cprod">Cod. Producto: </label></div>
            <div class="col-4"><input type="text" name="cprod"></div>
            <div class="col-2"></div>
          </div>
          <div class="fila">
            <div class="col-2"></div>
            <div class="col-4"><label for="motivo">Motivo: </label></div>
            <div class="col-4"><select name="motivo" id="motivo">
              <option value="Seleccione uno" name="seleccione" disabled selected>Seleccione uno</option>
              <option value="Rotura" name="rotura">Rotura</option>
              <option value="Perdida" name="perdida">Pérdida</option>
              <option value="Bateria" name="bateria">Sin batería</option>
              <option value="Otros" name="otros">Otros</option>
              </select></div>
              <div class="col-2"></div>
          </div>
          <div class="fila">
            <div class="col-2"></div>
            <div class="col-4"><label for="detalles">Detalles: </label></div>
            <div class="col-4"><textarea></textarea></div>
            <div class="col-3"></div>
          </div>
          <div class="fila">
            <div class="col-2"></div>
            <div class="col-2"><input type="submit" name="enviar" value="Enviar"></div>
            <div class="col-8"></div>
          </div>
      </article>
      <div class="fila">
        <div class="col-12" id="abajo"></div>
      </div>
      <footer class="fila">
        <div class="col-1"></div>
        <div class="col-4">
          <ul>
            <li><a href="como_funciona.php">Cómo Funciona</a></li>
            <li><a href="sobre_nosotros.php">Sobre Nosotros</a></li>
          </ul>
        </div>
        <div class="col-3"></div>
        <div class="col-3">
          <label for="sus"> Suscríbete </label> </br>
          <input type="text" name="sus" /></br>
          <input type="submit" name="enviar" value="Enviar"/>
        </div>
        <div class="col-1"></div>
      </footer>
    </div>
  </body>
</html>
