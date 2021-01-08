<?php

    require('conexion.php');
    $query = "SELECT id_estado, nombre_estado FROM estado ORDER BY nombre_estado ASC";
    $resultado = $mysqli->query($query);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/estilos.css">
    <title>Repostería Adriana</title>
  </head>
  <body>
    <header class="contacto" style="background: url('img/contacto.jpg') #281a0c; background-size: cover">
      <div class="contenedor" style="height: 580px;">
        <nav class="menu">
          <a href="index.html" id="btn">Principal</a>
          <!-- <a href="#" id="btn-menu">Menú</a> -->
          <!-- <a href="#" id="btn-galeria">Galería</a>
          <a href="#" id="btn-ubicacion">Ubicación</a>
          <a href="contacto.html" id="btn-contactanos">Contáctanos</a> -->
        </nav>

        <div class="textos">
          <h1 class="nombre"><span>Contáctanos</span></h1>
          <h3>Suscribete a nuestro Newsletter</h3>
        </div>
      </div>
    </header>

    <section class="main">
        <div class="contenedor">
          <form class="formulario"  method="post" id="formulario" action="resultado.php">
            <div class="contenedorcontacto">
              <div class="titulo" style="text-align: center;">
                <h3>Manténte al día con nuestras noticias</h3>
              </div>
              <div class="inputs">
                <input type="text" name="nombre" placeholder="Nombre">
        				<input type="email" name="email" placeholder="Correo">

        				<div class="sexo">
        					<input type="radio" name="sexo" id="hombre" value="hombre">
        					<label for="hombre" class="label-radio hombre">Hombre</label>

        					<input type="radio" name="sexo" id="mujer" value="mujer">
        					<label for="mujer" class="label-radio mujer">Mujer</label>
        				</div>

                <div class="direccion">
                  <div class="lugares">
                    <select class="lugar" id="s_estado" name="s_estado" >
                      <option value="0">Seleccionar Estado</option>
                      <?php WHILE($row = $resultado->fetch_assoc()) { ?>
                        <option value="<?php echo $row['id_estado']; ?>"><?php echo $row['nombre_estado']; ?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="lugares">
                    <select class="lugar" name="s_ciudad"  id="s_ciudad">
                        <option value="0">Ciudad</option>
                    </select>
                  </div>
                  <div class="lugares">
                    <select class="lugar" name="s_municipio" id="s_municipio">
                      <option value="0">Municipio</option>
                    </select>
                  </div>
                </div>

        				<div class="terminos">
        					<input type="checkbox" name="terminos" id="terminos">
        					<label for="terminos">Acepto Términos y Condiciones</label>
        				</div>
        				<ul class="error" id="error"></ul>
        			</div>


        			<input type="submit" class="btn" value="Registrarse">
              </div>
            </form>
          </div>
      </section>

      <section class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.9665899304446!2d-71.1557376!3d8.599206100000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e64871873fa3825%3A0x9bbf156036e9140a!2sCentro%20Comercial%20Alto%20Prado!5e0!3m2!1ses!2sve!4v1603979173520!5m2!1ses!2sve" width="1600" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </section>


    <footer>
      <div class="contenedor">
        <div class="copyright">
          <p>Copyright Adriana Sánchez 2020</p>
        </div>
      </div>
    </footer>

    <script src="js/jquery-3.5.1.js" charset="utf-8"></script>
    <script src="JS/formulario.js"></script>
    <script src="JS/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="JS/contacto.js" charset="utf-8"></script>

  </body>


</html>
