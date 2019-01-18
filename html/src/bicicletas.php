<?php

$loged = false;

if(isset($_COOKIE["mi_sesion"])){

  $loged = true;
}

?>

<html>
  <head>
    <title>Bicicletas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bicicletas.css">
    <link rel="stylesheet" href="../css/general.css">
    <style type="text/css">
      <?php

        if($loged){ ?>

          #login{

            display: none;
          }

        <?php
        } else { ?>

          #user{

            display: none;
          }

        <?php
        } ?>
    </style>
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
        <div class="col-1"></div>
        <div class="col-3" id="login">
          <label for="usu"> Usuario </label> </br>
          <input type="text" name="usu" value=""/>
          </br>
          <label for="cont"> Contraseña </label> </br>
          <input type="text" name="cont" value=""/>
          </br>
          <input type="submit" value="Entrar"/></br>
          <p> <a href="registro.php">¿No estás registrado?</a></p>
        </div>
        <div class="col-4" id="user">
          <a href="info_cuenta.php"><figure>
          <img src="../img/usuario.png" alt=""></a>
          <a href="../index.php?logout=true"><figcaption>Cerrar Sesión</figcaption>
          </figure></a>
        </div>
    </header>
    <div class="fila" id="arriba">
        <div class="col-12"></div>
      </div>
    <article>
      <div class="fila">
            <div class="col-1"></div>
            <div class="col-11"><h2>Bicicletas</h2></div>
      </div>
      <div class="fila">
            <div class="col-2"></div>
            <div class="col-11"><img src="../img/ubicacion.png" alt=""></div>
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
