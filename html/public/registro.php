<html>
  <head>
    <title>Registro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../css/general.css">
  </head>
  <body>
    <div class="contenedor">
    <header class="fila">
      <div class="col-4"><a href="index.php"/><img src="../img/logo.png" alt="LOGO"/></a></div>
      <div class="col-4">
        <h1> Alquilete </h1>
        <h3> Alquila tu patinete </h3>
      </div>
      <div class="col-3">
        <label for="usu"> Usuario </label> </br>
        <input type="text" name="usu" value=""/>
        </br>
        <label for="cont"> Contraseña </label> </br>
        <input type="text" name="cont" value=""/>
        </br>
        <input type="submit" value="Entrar"/></br>
      </div>
      <div class="col-1"></div>
    </header>
    <div class="fila" id="arriba">
      <div class="col-12"></div>
    </div>
    <article>
      <div class="fila">
            <div class="col-1"></div>
            <div class="col-11"><h2>Registro</h2></div>
      </div>
      <div class="fila">
            <div class="col-2"></div>
            <div class="col-10"><h3>Datos Personales</h3></div>
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
            <div class="col-2"><label for="contrasena">Contraseña: </label></div>
            <div class="col-4"><input type="password" name="contrasena"></div>
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
            <div class="col-3"></div>
        </div>
        <div class="fila">
            <div class="col-2"></div>
            <div class="col-10"><h3>Datos Bancarios</h3></div>
        </div>
        <div class="fila">
            <div class="col-2"></div>
            <div class="col-2"><label for="ntar">Nº Tarjeta: </label></div>
            <div class="col-4"><input type="text" name="ntar"></div>
            <div class="col-3"></div>
        </div>
        <div class="fila">
            <div class="col-2"></div>
            <div class="col-2"><label for="fcad">Fecha Cad.: </label></div>
            <div class="col-4"><input type="text" name="fcad"></div>
            <div class="col-3"></div>
        </div>
        <div class="fila">
            <div class="col-2"></div>
            <div class="col-2"><label for="cvv">CVV: </label></div>
            <div class="col-4"><input type="text" name="cvv"></div>
            <div class="col-3"></div>
        </div>
        <div class="fila">
          <div class="col-2"></div>
          <div class="col-2"><a href="info_cuenta.php?login=true"><input type="submit" name="enviar" value="Enviar"></a></div>
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
