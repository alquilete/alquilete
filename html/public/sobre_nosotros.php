<?php

session_start();
$loged = false;

if(isset($_SESSION["valido"])){
  $loged = true;
}

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sobre nosotros</title>
    <link rel="stylesheet" href="../css/sobre_nosotros.css">
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
          <a href="index.php"/><img src="../img/logo.png" alt="LOGO"/></a>
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
        <div class="col-1" id="login"></div>
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
          <a href="index.php?logout=true"><figcaption>Cerrar Sesión</figcaption>
          </figure></a>
        </div>
      </header>
      <div class="fila" id="arriba">
        <div class="col-12"></div>
      </div>
      <div class="fila">
        <div class="col-1"></div>
        <article class="col-10">
        <h2>Sobre nosotros</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
           Facilis dolorum, corrupti. Officiis nesciunt omnis ipsam
           reprehenderit, dignissimos qui doloremque, ipsa assumenda
           ratione. Magni, voluptatum nostrum tempore praesentium quas
           natus sint. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Facilis dolorum, corrupti. Officiis nesciunt omnis ipsam
              reprehenderit, dignissimos qui doloremque, ipsa assumenda
              ratione. Magni, voluptatum nostrum tempore praesentium quas
              natus sint.</p>
           <h3>Nuestras oficinas</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Facilis dolorum, corrupti. Officiis nesciunt omnis ipsam
              reprehenderit, dignissimos qui doloremque, ipsa assumenda
              ratione. Magni, voluptatum nostrum tempore praesentium quas
              natus sint.</p>
              <div class="fila" id="imgs">
                <div class="col-4"><img src="../img/ofi.jpg" alt=""></div>
                <div class="col-2"></div>
                <div class="col-4"><img src="../img/ofi2.jpg" alt=""></div>
                <div class="col-2"></div>
              </div>
      </article>
        <div class="col-1"></div>
      </div>
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
