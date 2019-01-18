<?php

if(isset($_GET["login"])){

  setcookie("mi_sesion_admin","sesion",time()+ 3600, "/dwes/html/");
}

 ?>

<html>
  <head>
    <title>Info Cuenta</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/info_cuenta_admin.css">
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
          <a href="../index_admin.php?logout=true"><figcaption>Cerrar Sesión</figcaption>
          </figure></a>
        </div>
      </header>
      <div class="fila">
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
            <div class="col-3"><input type="text" name="DNI"></div>
            <div class="col-4"></div>
        </div>
        <div class="fila">
            <div class="col-2"></div>
            <div class="col-2"><label for="nombre">Nombre: </label></div>
            <div class="col-3"><input type="text" name="nombre"></div>
            <div class="col-4"></div>
        </div>
        <div class="fila">
            <div class="col-2"></div>
            <div class="col-2"><label for="apellidos">Apellidos: </label></div>
            <div class="col-3"><input type="text" name="apellido"></div>
            <div class="col-4"></div>
        </div>
        <div class="fila">
            <div class="col-2"></div>
            <div class="col-2"><label for="correo">Correo: </label></div>
            <div class="col-3"><input type="text" name="correo"></div>
            <div class="col-4"></div>
        </div>
        <div class="fila">
            <div class="col-2"></div>
            <div class="col-2"><label for="telefono">Teléfono: </label></div>
            <div class="col-3"><input type="text" name="telefono"></div>
            <div class="col-4"></div>
        </div>
        <div class="fila">
            <div class="col-2"></div>
            <div class="col-2"><label for="dir">Dirección: </label></div>
            <div class="col-3"><input type="text" name="dir"></div>
            <div class="col-1"></div>
            <div class="col-2"><input type="button" name="mod" value="Modificar"></div>
            <div class="col-1"></div>
        </div>
        <div class="fila">
            <div class="col-1"></div>
            <div class="col-11"><h3>Administración</h3></div>
        </div>
        <div class="fila">
          <div class="col-2"></div>
          <div class="col-3"><a href="usuarios_admin.php"><input type="button" name="mod" value="Registro Usuarios"></a></div>
          <div class="col-7"></div>
        </div>
        <div class="fila">
          <div class="col-2"></div>
          <div class="col-3"><a href="productos_admin.php"><input type="button" name="mod" value="Registro Productos"></a></div>
          <div class="col-7"></div>
        </div>
        <div class="fila">
          <div class="col-2"></div>
          <div class="col-3"><a href="proveedores_admin.php"><input type="button" name="mod" value="Registro Proveedores"></a></div>
          <div class="col-7"></div>
        </div>
        <div class="fila">
          <div class="col-2"></div>
          <div class="col-3"><input type="button" name="mod" value="Eliminar cuenta"></div>
          <div class="col-7"></div>
        </div>
      </article>
    </div>
  </body>
</html>
