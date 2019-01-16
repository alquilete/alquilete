<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Información de Usuario</title>
    <link rel="stylesheet" href="../css/info_cuenta.css">
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
          <a href="../index.php"><figcaption>Cerrar Sesión</figcaption>
          </figure></a>
        </div>
      </header>
      <div class="fila" id="arriba">
        <div class="col-12"></div>
      </div>
      <article>
        <div class="fila">
            <div class="col-1"></div>
            <div class="col-11"><h2>Información de cuenta</h2></div>
        </div>
        <div class="fila">
            <div class="col-1"></div>
            <div class="col-11"><h3>Mis datos</h3></div>
        </div>
        <div class="fila">
            <div class="col-2"></div>
            <div class="col-2"><label for="dni">DNI: </label></div>
            <div class="col-4"><input type="text" name="DNI"></div>
            <div class="col-3"></div>
        </div>
        <div class="fila">
            <div class="col-2"></div>
            <div class="col-2"><label for="nombre">Nombre: </label></div>
            <div class="col-4"><input type="text" name="nombre"></div>
            <div class="col-3"></div>
        </div>
        <div class="fila">
            <div class="col-2"></div>
            <div class="col-2"><label for="apellidos">Apellidos: </label></div>
            <div class="col-4"><input type="text" name="apellido"></div>
            <div class="col-3"></div>
        </div>
        <div class="fila">
            <div class="col-2"></div>
            <div class="col-2"><label for="correo">Correo: </label></div>
            <div class="col-4"><input type="text" name="correo"></div>
            <div class="col-3"></div>
        </div>
        <div class="fila">
            <div class="col-2"></div>
            <div class="col-2"><label for="telefono">Teléfono: </label></div>
            <div class="col-4"><input type="text" name="telefono"></div>
            <div class="col-3"></div>
        </div>
        <div class="fila">
            <div class="col-2"></div>
            <div class="col-2"><label for="dir">Dirección: </label></div>
            <div class="col-4"><input type="text" name="dir"></div>
            <div class="col-1"></div>
            <div class="col-2"><input type="button" name="mod" value="Modificar"></div>
        </div>
        <div class="fila">
          <div class="col-2"></div>
          <div class="col-4"><input type="button" name="prem" value="Hazte premium"></div>
          <div class="col-6"></div>
        </div>
        <div class="fila">
            <div class="col-1"></div>
            <div class="col-11"><h3>Registro de productos</h3></div>
        </div>
        <div class="fila">
          <div class="col-2"></div>
          <table class="col-5">
            <tr>
              <td>12/02/2016</td>
              <td>B046</td>
              <td>Devuelto</td>
            </tr>
            <tr>
              <td>14/03/2016</td>
              <td>B024</td>
              <td>Devuelto</td>
            </tr>
            <tr>
              <td>15/03/2016</td>
              <td>B011</td>
              <td>Prestado</td>
            </tr>
          </table>
          <div class="col-5"></div>
        </div>
        <div class="fila" id="rep">
          <div class="col-2"></div>
          <div class="col-4"> <a href="incidencias.php"><input type="button" name="inicid" value="Reportar incidencia"></a></div>
          <div class="col-2"></div>
          <div class="col-3"><input type="button" name="baja" value="Darme de baja"></div>
          <div class="col-1"></div>
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
