<!DOCTYPE html>
<html lang="es" xml:lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="img/logo_mini.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <title>Amezcua</title>
	<?php
	include_once"mapa/index.php";
	?>
</head>

<body onload="initialize()">
  <header>
    <nav>
      <a href="index.php">
        <figure>
          <img src="img/logo_mini.png" alt="" />
        </figure>
      </a>
      <ul class="menu">
        <li><a href="us.php">Nosotros</a></li>
        <li><a href="services.php">Servicios</a></li>
        <li><a href="juridicos.php">Asesoría Jurídica</a></li>
        <li><a href="ventas.php">Venta</a></li>
        <li><a href="rentas.php">Renta</a></li>
        <li><a href="contact.php">Contacto</a></li>
      </ul>
      <div class="socials">
        <a href="https://www.facebook.com/profile.php?id=61553279586836" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/amezcuamx_asesores/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://wa.link/84gxug" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
      </div>
      <i class="fa-solid fa-bars burguer-menu"></i>
    </nav>
  </header>
  <main>
    <section id="hero" class="services">
      <!-- <div class="hero">
          <figure>
            <img src="img/logo_white.png" alt="" />
          </figure>

          <a href=".us">
            <p>Conoce más</p>
            <i class="fa-solid fa-chevron-down"></i>
          </a>
        </div> -->

      <div class="us fadeInLeft wow">
        <div class="left">
          <h2>Servicios</h2>

        </div>
        <div class="right">
          <hr />
          <p>
            Nuestra empresa surge con la intención de brindar a las personas
            un asesoramiento integral al momento de comercializar sus
            propiedades, ofreciéndoles seguridad jurídica y transparencia en
            sus transacciones.
          </p>
        </div>
      </div>
    </section>
    <section id="services">
      <div class="top">
        <div class="left">
          <h2>Servicios</h2>
          <hr />
        </div>
        <figure>
          <img src="img/golden_frame.png" alt="" />
        </figure>
      </div>
      <div class="bottom">
        <div class="service fadeInLeft wow">
          <div class="top">
            <figure>
              <img src="img/juridicos.png" alt="" />
            </figure>
            
          </div>
          <h3>Servicios jurídicos</h3>
          <a href="juridicos.php">Ver más <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="service fadeInRight wow">
          <div class="top">
            <figure>
              <img src="img/inmobiliarios.png" alt="" />
            </figure>
            
          </div>
          <h3>Servicios inmobiliarios</h3>
          <a href="inmobiliarios.php">Ver más <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </section>
    <div class="banner">
      <hr />
      <p>Ofrecemos seguridad jurídica y transparencia.</p>
      <hr />
    </div>
    <section id="contact">
      <div class="left fadeInLeft wow">
        <div class="top">
          <h2>Contacto</h2>
          <hr />
        </div>
        <a href="mailto:contacto@amezcuamx.com"><i class="fa-solid fa-envelope"></i>&nbsp;
          contacto@amezcuamx.com</a>
        <a href="tel:+52 473 108 7546"><i class="fa-solid fa-phone"></i>&nbsp; 473 108 7546</a>
        <div class="rrss">
          <a href="https://www.facebook.com/profile.php?id=61553279586836" target="_blank"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://www.instagram.com/amezcuamx_asesores/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        </div>
      </div>

      <div class="right fadeInRight wow">
        <h3>
          ¿Necesitas información? <br />
          ¡Escríbenos, estamos para ayudarte!
        </h3>
        <form action="">
          <input type="text" name="name" id="name" placeholder="Nombre" />
          <input type="text" name="lastname" id="lastname" placeholder="Apellido" />
          <input type="email" name="email" id="email" placeholder="Correo" />
          <input type="tel" name="phone" id="phone" placeholder="Teléfono" />
          <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
          <button type="submit">Enviar</button>
        </form>
        <figure>
          <img src="img/black_frame.png" alt="" />
        </figure>
      </div>
    </section>
    <section id="location" class="bounceInUp wow">
      <div>
        <div id="map-canvas"></div>
        <!--iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Carr.%20Guanajuato%20-%20Juventino%20Rosas%20200,%2036256%20Yerbabuena,%20Gto.+(My%20Business%20Name)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe-->

        <div class="address">
          <div class="top">
            <h2>Ubicación</h2>
            <hr />
          </div>
          <p>
            Boulevard Euquerio Guerrero #200, Colonia Yerbabuena. Guanajuato.,
            Guanajuato. 36257 (Frente a plaza Alaia)
          </p>
          <a href="">Cómo llegar <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <p>“Contamos con estacionamiento, acceso por gasolinera Mobil”</p>
    </section>
  </main>
  <footer>
    <hr />
    <figure>
      <img src="img/logo_black.png" alt="" />
    </figure>
    <a href="tel:+52 473 108 7546" target="_blank"><i class="fa-solid fa-phone"></i> &nbsp; 473 108 7546</a>
    <div class="socials">
      <a href="https://www.facebook.com/profile.php?id=61553279586836" target="_blank"><i class="fa-brands fa-facebook"></i></a>
      <a href="https://www.instagram.com/amezcuamx_asesores/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
      <a href="https://wa.link/84gxug" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
    <div class="bottom">
      <div class="left">
        <p>2023&copy;</p>
        <p>
          Todos los derechos reservados
          <img src="img/Icono_molcajete.png" alt="" />
        </p>
      </div>
      <div class="right">
        <a href="" target="_blank">Privacidad</a>
        <a href="" target="_blank">Términos y condiciones</a>
      </div>
    </div>
  </footer>
  <script src="js/index.js"></script>
</body>

</html>