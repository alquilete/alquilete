<?php

$loged = false;

if(isset($_COOKIE["mi_sesion"])){

  $loged = true;
}

if(isset($_GET["logout"])){

  setcookie("mi_sesion", "sesion", time()-1000, "/dwes/html/");
  $loged = false;
}

?>

<html>
  <head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/index.css">
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
      <div class="col-4"><img src="img/logo.png" alt="LOGO"/></div>
      <div class="col-3">
        <h1> Alquilete </h1>
        <h3> Alquila tu patinete </h3>
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
        <p> <a href="src/registro.php">¿No estás registrado?</a></p>
      </div>
      <div class="col-1" id="login"></div>
      <div class="col-4" id="user">
          <a href="src/info_cuenta.php"><figure>
          <img src="img/usuario.png" alt=""></a>
          <a href="index.php?logout=true"><figcaption>Cerrar Sesión</figcaption>
          </figure></a>
      </div>
    </header>
    <div class="fila" id="arriba">
      <div class="col-12"></div>
    </div>
    <section class="fila">
      <ul class="col-6">
        <li> <a href="src/como_funciona.php">¿Como Funciona?</a></li>
      </ul>
      <div class="col-6"><img src="img/patinetes01.jpg" alt=""></div>
    </section>
    <section class="fila">
      <ul>
        <li class="col-4"><a href="src/patinetes.php"><img src="img/patinete.png" alt=""></br>
        <label>Patinetes</label></a></li>
        <li class="col-4"><a href="src/bicicletas.php"><img src="img/bici.png" alt=""></br>
        <label>Bicicletas</label></a></li>
        <li class="col-4"><a href="src/ambos.php"><img src="img/bicipati.png" alt=""></br>
        <label>Ambos</label></a></li>
      </ul>
    </section>
    <section class="fila">
      <div class="col-5"><img src="img/bicis01.jpg" alt=""></div>
      <div class="col-1"></div>
      <ul class="col-5">
        <li cl> <a href="src/sobre_nosotros.php">¿Quienes Somos?</a></li>
        <li><div>
          <label for="sus"> Suscríbete </label> </br>
          <input type="text" name="sus" value=""/></br>
          <input type="submit" value="Enviar"/>
        </div></li>
      </ul>
      <div class="col-1"></div>
    </section>
  </div>
  </body>
</html>
