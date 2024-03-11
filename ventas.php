<!DOCTYPE html>
<html lang="en">

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
</head>

<body onload="optionHeight()">
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
    <section id="ventas">
      <h2>Venta</h2>
    </section>

    <section id="properties">
      <div class="filter-menu-button">
        <p>Filtrar</p>
        <i class="fa fa-sliders-h"></i>
      </div>
      <div class="left filter-menu">
        <span class="close">X</span>
        <h2>Filtros</h2>
        <hr />
        <div class="filter-option">
          <p>Ubicación</p>
          <ul>
            <li>Queretaro <span>(1)</span></li>
            <li>Celaya <span>(1)</span></li>
            <li>San Miguel de Allende <span>(1)</span></li>
          </ul>
        </div>
        <div class="filter-option">
          <p>Propiedad</p>
          <ul>
            <li>Bodega <span>(1)</span></li>
            <li>Casa <span>(1)</span></li>
            <li>Departamento <span>(1)</span></li>
          </ul>
        </div>
        <div class="filter-option">
          <p>Precio</p>
          <form action="">
            <input type="number" name="min" id="min" placeholder="Mínimo" />
            <input type="number" name="max" id="max" placeholder="Máximo" />
            <select name="divisa" id="divisa">
              <option value="">Pesos mexicanos</option>
              <option value="">Dólares estadounidenses</option>
              <option value="">Euros</option>
            </select>
            <button type="submit">Aplicar »</button>
          </form>
        </div>

        <div class="filter-option">
          <p>Recámaras</p>
          <ul>
            <li>1+ <span>(1)</span></li>
            <li>2+ <span>(1)</span></li>
            <li>3+ <span>(1)</span></li>
          </ul>
        </div>

        <div class="filter-option">
          <p>Baños</p>
          <ul>
            <li>1+ <span>(1)</span></li>
            <li>2+ <span>(1)</span></li>
            <li>3+ <span>(1)</span></li>
          </ul>
        </div>

        <div class="filter-option">
          <p>Construcción</p>

          <form action="">
            <input type="number" name="min-mts" id="min-mts" placeholder="Desde (m²)" />
            <input type="number" name="max-mts" id="max-mts" placeholder="Hasta (m²)" />
            <button type="submit">Aplicar »</button>
          </form>
        </div>

        <div class="filter-option">
          <p>Terreno</p>
          <form action="">
            <input type="number" name="min-mts" id="min-mts" placeholder="Desde (m²)" />
            <input type="number" name="max-mts" id="max-mts" placeholder="Hasta (m²)" />
            <button type="submit">Aplicar »</button>
          </form>
        </div>
      </div>
      <div class="right">
        <div class="property fadeInUp wow">
          <figure><img src="img/p1.png" alt="" /></figure>
          <div class="top">
            <p class="price">$ 0,000,000</p>
            <span>En venta</span>
          </div>
          <p class="location">Ubicación</p>
          <div class="footer">
            <div class="bedrooms">
              <img src="img/beds.png" alt="" />
              <p class="rooms">3 recámaras</p>
            </div>
            <div class="bathrooms">
              <img src="img/shower.png" alt="" />
              <p class="baths">2 baños</p>
            </div>
            <div class="area">
              <img src="img/expand.png" alt="" />
              <p class="extension">152 m2</p>
            </div>
          </div>
        </div>
        <div class="property fadeInUp wow">
          <figure><img src="img/p2.png" alt="" /></figure>
          <div class="top">
            <p class="price">$ 0,000,000</p>
            <span>En venta</span>
          </div>
          <p class="location">Ubicación</p>
          <div class="footer">
            <div class="bedrooms">
              <img src="img/beds.png" alt="" />
              <p class="rooms">3 recámaras</p>
            </div>
            <div class="bathrooms">
              <img src="img/shower.png" alt="" />
              <p class="baths">2 baños</p>
            </div>
            <div class="area">
              <img src="img/expand.png" alt="" />
              <p class="extension">152 m2</p>
            </div>
          </div>
        </div>
        <div class="property fadeInUp wow">
          <figure><img src="img/p3.png" alt="" /></figure>
          <div class="top">
            <p class="price">$ 0,000,000</p>
            <span>En venta</span>
          </div>
          <p class="location">Ubicación</p>
          <div class="footer">
            <div class="bedrooms">
              <img src="img/beds.png" alt="" />
              <p class="rooms">3 recámaras</p>
            </div>
            <div class="bathrooms">
              <img src="img/shower.png" alt="" />
              <p class="baths">2 baños</p>
            </div>
            <div class="area">
              <img src="img/expand.png" alt="" />
              <p class="extension">152 m2</p>
            </div>
          </div>
        </div>
        <div class="property fadeInUp wow">
          <figure><img src="img/p1.png" alt="" /></figure>
          <div class="top">
            <p class="price">$ 0,000,000</p>
            <span>En venta</span>
          </div>
          <p class="location">Ubicación</p>
          <div class="footer">
            <div class="bedrooms">
              <img src="img/beds.png" alt="" />
              <p class="rooms">3 recámaras</p>
            </div>
            <div class="bathrooms">
              <img src="img/shower.png" alt="" />
              <p class="baths">2 baños</p>
            </div>
            <div class="area">
              <img src="img/expand.png" alt="" />
              <p class="extension">152 m2</p>
            </div>
          </div>
        </div>
        <div class="property fadeInUp wow">
          <figure><img src="img/p2.png" alt="" /></figure>
          <div class="top">
            <p class="price">$ 0,000,000</p>
            <span>En venta</span>
          </div>
          <p class="location">Ubicación</p>
          <div class="footer">
            <div class="bedrooms">
              <img src="img/beds.png" alt="" />
              <p class="rooms">3 recámaras</p>
            </div>
            <div class="bathrooms">
              <img src="img/shower.png" alt="" />
              <p class="baths">2 baños</p>
            </div>
            <div class="area">
              <img src="img/expand.png" alt="" />
              <p class="extension">152 m2</p>
            </div>
          </div>
        </div>
        <div class="property fadeInUp wow">
          <figure><img src="img/p3.png" alt="" /></figure>
          <div class="top">
            <p class="price">$ 0,000,000</p>
            <span>En venta</span>
          </div>
          <p class="location">Ubicación</p>
          <div class="footer">
            <div class="bedrooms">
              <img src="img/beds.png" alt="" />
              <p class="rooms">3 recámaras</p>
            </div>
            <div class="bathrooms">
              <img src="img/shower.png" alt="" />
              <p class="baths">2 baños</p>
            </div>
            <div class="area">
              <img src="img/expand.png" alt="" />
              <p class="extension">152 m2</p>
            </div>
          </div>
        </div>
        <div class="property fadeInUp wow">
          <figure><img src="img/p1.png" alt="" /></figure>
          <div class="top">
            <p class="price">$ 0,000,000</p>
            <span>En venta</span>
          </div>
          <p class="location">Ubicación</p>
          <div class="footer">
            <div class="bedrooms">
              <img src="img/beds.png" alt="" />
              <p class="rooms">3 recámaras</p>
            </div>
            <div class="bathrooms">
              <img src="img/shower.png" alt="" />
              <p class="baths">2 baños</p>
            </div>
            <div class="area">
              <img src="img/expand.png" alt="" />
              <p class="extension">152 m2</p>
            </div>
          </div>
        </div>
        <div class="property fadeInUp wow">
          <figure><img src="img/p2.png" alt="" /></figure>
          <div class="top">
            <p class="price">$ 0,000,000</p>
            <span>En venta</span>
          </div>
          <p class="location">Ubicación</p>
          <div class="footer">
            <div class="bedrooms">
              <img src="img/beds.png" alt="" />
              <p class="rooms">3 recámaras</p>
            </div>
            <div class="bathrooms">
              <img src="img/shower.png" alt="" />
              <p class="baths">2 baños</p>
            </div>
            <div class="area">
              <img src="img/expand.png" alt="" />
              <p class="extension">152 m2</p>
            </div>
          </div>
        </div>
        <div class="property fadeInUp wow">
          <figure><img src="img/p3.png" alt="" /></figure>
          <div class="top">
            <p class="price">$ 0,000,000</p>
            <span>En venta</span>
          </div>
          <p class="location">Ubicación</p>
          <div class="footer">
            <div class="bedrooms">
              <img src="img/beds.png" alt="" />
              <p class="rooms">3 recámaras</p>
            </div>
            <div class="bathrooms">
              <img src="img/shower.png" alt="" />
              <p class="baths">2 baños</p>
            </div>
            <div class="area">
              <img src="img/expand.png" alt="" />
              <p class="extension">152 m2</p>
            </div>
          </div>
        </div>
      </div>
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
  <script>
    const filterOptions = document.querySelectorAll(".filter-option");

    function optionHeight() {
      filterOptions.forEach((filterOption) => {

        let titleHeight = filterOption.firstElementChild.clientHeight;
        // console.log(`Title: ${titleHeight}`);
        let contentHeight = filterOption.lastElementChild.clientHeight;
        // console.log(`Content: ${contentHeight}`);
        let totalHeight = titleHeight + contentHeight;
        // console.log(`Total: ${totalHeight}`);
        filterOption.style.height = `${titleHeight}px`;

        filterOption.firstElementChild.addEventListener("click", () => {
          if (filterOption.classList.contains("active")) {
            filterOption.style.height = `${titleHeight}px`;
            filterOption.classList.remove("active");
          } else {
            filterOption.style.height = `${totalHeight}px`;
            filterOption.classList.add("active");
          }
        });



      });
    }
  </script>
  <script>
    const filterMenu = document.querySelector(".filter-menu");
    const filterMenuButton = document.querySelector(".filter-menu-button");
    const close = document.querySelector(".close");
    filterMenuButton.addEventListener("click", () => {
      filterMenu.style.zIndex = "10000";
      document.documentElement.style.overflowY = "hidden";
    });

    close.addEventListener("click", () => {
      filterMenu.style.zIndex = "-10000";
      document.documentElement.style.overflowY = "scroll";
    });
  </script>
</body>

</html>