<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/registro_admin.css">
    <link rel="stylesheet" href="../css/general_admin.css">
  </head>
  <body>
    <div class="contenedor">
      <header class="fila">
          <div class="col-5">
            <img src="../img/logo.png" alt="LOGO"/>
          </div>
          <div class="col-2"></div>
          <div class="col-2">
            <label for="usu"> Usuario </label> </br>
            <input type="text" name="usu" value=""/>
            </br>
            <label for="cont"> Contraseña </label> </br>
            <input type="text" name="cont" value=""/>
            </br>
            <a href="info_cuenta_admin.php"><input type="submit" value="Entrar"/></a></br>
          </div>
          <div class="col-3"></div>
        </header>
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
                <div class="col-1"><label for="dni">DNI: </label></div>
                <div class="col-2"><input type="text" name="DNI"></div>
                <div class="col-7"></div>
            </div>
            <div class="fila">
                <div class="col-2"></div>
                <div class="col-1"><label for="nombre">Nombre: </label></div>
                <div class="col-2"><input type="text" name="nombre"></div>
                <div class="col-7"></div>
            </div>
            <div class="fila">
                <div class="col-2"></div>
                <div class="col-1"><label for="apellidos">Apellidos: </label></div>
                <div class="col-2"><input type="text" name="apellido"></div>
                <div class="col-7"></div>
            </div>
            <div class="fila">
                <div class="col-2"></div>
                <div class="col-1"><label for="correo">Correo: </label></div>
                <div class="col-2"><input type="text" name="correo"></div>
                <div class="col-7"></div>
            </div>
            <div class="fila">
                <div class="col-2"></div>
                <div class="col-1"><label for="telefono">Teléfono: </label></div>
                <div class="col-2"><input type="text" name="telefono"></div>
                <div class="col-7"></div>
            </div>
            <div class="fila">
                <div class="col-2"></div>
                <div class="col-1"><label for="dir">Dirección: </label></div>
                <div class="col-2"><input type="text" name="dir"></div>
                <div class="col-7"></div>
            </div>
            <div class="fila">
                <div class="col-2"></div>
                <div class="col-10"><h3>Datos Bancarios</h3></div>
            </div>
            <div class="fila">
                <div class="col-2"></div>
                <div class="col-1"><label for="ntar">Nº Tarjeta: </label></div>
                <div class="col-2"><input type="text" name="ntar"></div>
                <div class="col-7"></div>
            </div>
            <div class="fila">
                <div class="col-2"></div>
                <div class="col-1"><label for="fcad">Fecha Cad.: </label></div>
                <div class="col-2"><input type="text" name="fcad"></div>
                <div class="col-7"></div>
            </div>
            <div class="fila">
                <div class="col-2"></div>
                <div class="col-1"><label for="cvv">CVV: </label></div>
                <div class="col-2"><input type="text" name="cvv"></div>
                <div class="col-7"></div>
            </div>
            <div class="fila">
              <div class="col-2"></div>
              <div class="col-1"><a href="info_cuenta_admin.php"><input type="submit" name="enviar" value="Enviar"></a></div>
              <div class="col-9"></div>
            </div>
        </article>
    </div>
  </body>
</html>
