<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="img/logo_mini.png" type="image/x-icon" />
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" /> -->
  <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js" type="text/javascript"></script>
<!--MAPS-->
	<!-- AIzaSyDkuh_V3NRZAMllUac9-mLmSbUQi8LbNgc -->
	<!-- AIzaSyARCaMQLSnHxhMIqqBXWSEnjQnT70xt1TQ -->
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyARCaMQLSnHxhMIqqBXWSEnjQnT70xt1TQ&&sensor=false"></script>
	<script type="text/javascript">
			function initialize() {
				if($(window).width() > 600) {
					var latlng = new google.maps.LatLng(20.973573, -101.280503);
                } else {
					var latlng = new google.maps.LatLng(20.973330, -101.279725);
			    };
				var settings = {
					zoom: 18,
					center: latlng,
					mapTypeControl: true,
					mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
					navigationControl: true,
					navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					styles: []
					};
					
				var map = new google.maps.Map(document.getElementById("map-canvas"), settings);
				
				var contentString = '<div class="content-map">'+
					'<h2>Estacionamiento</h2>'+
					'<p>Entrada por Juventino Rosas</p>'+
					'</div>';
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});
				
				var companyImage = new google.maps.MarkerImage('img/estacionamiento_point.png',
					new google.maps.Size(42,60),
					new google.maps.Point(0,0)
				);
				var companyPos = new google.maps.LatLng(20.973149, -101.280360);

				var companyMarker = new google.maps.Marker({
					position: companyPos,
					map: map,
					icon: companyImage,
					title:'Estacionamiento',
					zIndex: 3});
				
				google.maps.event.addListener(companyMarker, 'click', function() {
					infowindow.open(map,companyMarker);
				});
				
				/* */
				var contentString1 = '<div class="content-map">'+
					'<h2>Amezcua</h2>'+
					'<p>Asesoría Jurídica e Inmobiliaria</p>'+
					'</div>';
				var infowindow1 = new google.maps.InfoWindow({
					content: contentString1
				});
				
				var companyImage1 = new google.maps.MarkerImage('img/amezcua_point.png',
					new google.maps.Size(42,60),
					new google.maps.Point(0,0)
				);

				var companyPos1 = new google.maps.LatLng(20.973295, -101.280035);

				var companyMarker1 = new google.maps.Marker({
					position: companyPos1,
					map: map,
					icon: companyImage1,
					title:'Amezcua',
					zIndex: 6});
				
				google.maps.event.addListener(companyMarker1, 'click', function() {
					infowindow1.open(map,companyMarker1);
				});
				
				/* */
				var contentString3 = '<div class="content-map">'+
					'<h2>Alaïa Centro Comercial</h2>'+
					'<p>Carr. Guanajuato - Juventino Rosas 139, Sin Nombre, 36000 Guanajuato, Gto., México</p>'+
					'</div>';
				var infowindow3 = new google.maps.InfoWindow({
					content: contentString3
				});
				
				var companyImage3 = new google.maps.MarkerImage('img/plaza_point.png',
					new google.maps.Size(42,60),
					new google.maps.Point(0,0)
				);

				var companyPos3 = new google.maps.LatLng(20.9737038,-101.2792175);

				var companyMarker3 = new google.maps.Marker({
					position: companyPos3,
					map: map,
					icon: companyImage3,
					title:'Alaïa Centro Comercial',
					zIndex: 3});
				
				google.maps.event.addListener(companyMarker3, 'click', function() {
					infowindow3.open(map,companyMarker3);
				});
		 				
				//lines
				var lineSymbol = {
					path: 'M 0,-1 0,1',
                    strokeOpacity: 1,
                    scale: 2,
					strokeColor: 'rgb(28,58,77)',
                };
				
				const line = new google.maps.Polyline({
					path: [
						{ lat: 20.973162, lng: -101.280300 },
						{ lat: 20.973058, lng: -101.280271 },
						{ lat: 20.973138, lng: -101.279812 },
					],
					map: map,
				});

				
 			}
		</script>
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
        <li><a href="#contact">Contacto</a></li>
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
    <section id="hero">
      <div class="hero">
        <figure class="fadeIn wow" style="animation-duration: 1.5s !important;">
          <img class="pulse wow" src="img/logo_white.png" alt="" />
        </figure>

        <a href="#us">
          <p>Conoce más</p>
          <i class="fa-solid fa-chevron-down"></i>
        </a>
      </div>

      <!-- <div id="us" class="us">
        <div class="left">
          <h2>Nosotros</h2>
          <a href="">Ver más <i class="fa-solid fa-arrow-right"></i></a>
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
      </div> -->
    </section>
    <section id="services">
      <div class="top">
        <div class="left fadeInLeft wow">
          <h2>Servicios</h2>
          <hr />
        </div>
        <figure>
          <img src="img/golden_frame.png" alt="" />
        </figure>
      </div>
      <div class="bottom">
        <div class="service fadeInLeft delay1 wow">
          <div class="top">
            <figure>
              <img src="img/juridicos.png" alt="" />
            </figure>

          </div>
          <h3>Servicios jurídicos</h3>
          <a href="juridicos.php">Ver más <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="service fadeInRight delay1 wow">
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
    <div class="banner fadeInUp wow">
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
        <a href="https://wa.link/84gxug"><i class="fa-brands fa-whatsapp"></i>&nbsp; 473 108 7546</a>
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