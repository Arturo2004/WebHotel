<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=room_service" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet"/>
    <link rel="icon" href="/WebHotel/imgs/logo1.png" type="image/icon">   
    <link rel="stylesheet" href="/WebHotel/css/styles.css?v=<?php echo time(); ?>">
    <title>Web Hotel</title>
</head>
<body>
    <header class="header">
        <nav>
            <div class="nav_bar">
                <div class="logo">
                    <a href="#"><img src="/WebHotel/imgs/logo1.png" alt=""></a>
                </div>
                <div class="nav_menu_btn" id="menu-btn">
                    <i class="ri-menu-fill"></i>
                </div>
            </div>
            <ul class="nav_links" id="nav-links">
                <li><a href="/WebHotel/php/index.php">Inicio</a></li>
                <li><a href="/WebHotel/php/room.php">Habitaciones</a></li>
                <li><a href="/WebHotel/php/#service">Servicios</a></li>
                <li><a href="/WebHotel/php/events.php">Eventos</a></li>
                <li><a href="/WebHotel/php/#about">Sobre Nosotros</a></li>
                <li><a href="/WebHotel/php/intranet.php">Intranet</a></li>
            </ul>
            <button class="btn nav_reserv">Hacer Reserva</button>
        </nav>
        <div class="section_container header_container" id="home">
            <h1><span>Habitaciones</span> diseñadas para tu comodidad y relajación</h1>
            <p>Reserva hoy y vive una experiencia inolvidable.</p>
        </div>
    </header>
    <section class="service" id="service">
      <div class="section_container service_container">
        <div class="service_content">
          <p class="section_subheader">NUESTROS SERVICIOS</p>
          <h2 class="section_header">Elige siempre lo mejor</h2>
          <ul class="service_list">
            <li>
              <span><i class="ri-wifi-fill"></i></span>
              Wi-Fi gratuido
            </li>
            <li>
              <span><i class="ri-tv-2-line"></i></span>
              Televisión
            </li>
            <li>
            <span class="material-symbols-outlined">room_service</span>
            Servicio a la Habitación
            </li>
            <li>
              <span><i class="ri-goblet-fill"></i></span>
              Mini Bar
            </li>
            <li>
              <span><i class="ri-safe-2-fill"></i></span>
              Caja fuerte
            </li>
          </ul>
        </div>
      </div>
    </section>



      <section class="section_container room_container">
        <p class="section_subheader">NUESTRAS HABITACIONES</p>
          <h2 class="section_header">Desconéctate, relájate y vive lo extraordinario</h2>
          <div class="room_grid">
            <div class="room_card">
              <div class="room_card_image">
                <div class="list_room_image">
                  <div class="item">  
                    <img src="/WebHotel/imgs/room_premiun1.jpg" alt="" />
                  </div>
                  <div class="item">
                    <img src="/WebHotel/imgs/room_premiun2.jpg" alt="" />
                  </div>
                  <div class="item">
                    <img src="/WebHotel/imgs/room_premiun3.jpg" alt="" />
                  </div>
                  <div class="item">
                    <img src="/WebHotel/imgs/room_premiun4.jpg" alt="" />
                  </div>
                  <div class="item">
                    <img src="/WebHotel/imgs/room_premiun3.jpg" alt="" />
                  </div>
                </div>
                <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
              </div>
            <div class="room_card_details">
              <h4>Habitación Premium</h4>
              <p>
              Para aquellos que buscan la máxima comodidad y elegancia, esta habitación de lujo incluye muebles de alta gama, un baño privado con jacuzzi y una decoración sofisticada. Ideal para una escapada especial.
              </p>
              <h5>A partir de  <span>$299 * Noche</span></h5>
              <div class="see_more_details">
                <div class="room_card_icons">
                  <input type="radio" id="radio1" name="carousel" checked>
                  <input type="radio" id="radio2" name="carousel">
                  <div class="grupo" id="grupo1">
                    <div class="service_icon">
                      <span><i class="ri-wifi-fill"></i></span>
                      <p>Wifi</p>
                    </div>
                    <div class="service_icon">
                      <span><i class="ri-tv-2-line"></i></span>
                      <p>Televisión</p>
                    </div>
                    <div class="service_icon">
                      <span class="material-symbols-outlined">room_service</span>
                      <p>Servicio</p>
                    </div>
                  </div>
                  <div class="grupo" id="grupo2">
                    <div class="service_icon">
                      <span><i class="ri-goblet-fill"></i></span>
                      <p>Mini bar</p>
                    </div>
                    <div class="service_icon">
                      <span><i class="ri-safe-2-fill"></i></span>
                      <p>Caja fuerte</p>
                    </div>
                    <div class="service_icon">
                      <span><i class="ri-windy-line"></i></span>
                      <p>Aire acondicionado</p>
                    </div>
                  </div>
                  <div class="indicadores">
                    <label for="radio1"></label>
                    <label for="radio2"></label>
                  </div>
                </div>
                <div class="room_card_details_text">
                  <h6>Incluye:</h6>
                    <p>Conexion a red inalambrica<br>
                    Televisión de pantalla plana<br>
                    Minibar premiun<br>
                    Baño privador con jacuzii<br>
                    Aire acondicionado<br>
                    Caja fuerte<br>
                    Servicio a la habitacion (24 horas)
                  </p>
                </div>
                <div class="room_card_details_text">
                  <h6>Capacidad maxima:</h6>
                  <p>2-4 personas</p>
              </div>
            </div>
              <div class="see_more" >
                <p class="see_more_text">Ver máx</p>
                <div class="nav_link" id="nav-link">
                <i class="ri-arrow-down-double-fill"></i>
                </div>
              </div>
              <button class="btn">Reservar</button>
            </div>
          </div>

          <div class="room_card">
              <div class="room_card_image">
                <div class="list_room_image">
                  <div class="item">  
                    <img src="/WebHotel/imgs/room_premiun1.jpg" alt="" />
                  </div>
                  <div class="item">
                    <img src="/WebHotel/imgs/room_premiun2.jpg" alt="" />
                  </div>
                  <div class="item">
                    <img src="/WebHotel/imgs/room_premiun3.jpg" alt="" />
                  </div>
                  <div class="item">
                    <img src="/WebHotel/imgs/room_premiun4.jpg" alt="" />
                  </div>
                  <div class="item">
                    <img src="/WebHotel/imgs/room_premiun3.jpg" alt="" />
                  </div>
                </div>
                <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
              </div>
            <div class="room_card_details">
              <h4>Habitación Premium</h4>
              <p>
              Para aquellos que buscan la máxima comodidad y elegancia, esta habitación de lujo incluye muebles de alta gama, un baño privado con jacuzzi y una decoración sofisticada. Ideal para una escapada especial.
              </p>
              <h5>A partir de  <span>$299 * Noche</span></h5>
              <div class="see_more_details">
                <div class="room_card_icons">
                  <input type="radio" id="radio1" name="carousel" checked>
                  <input type="radio" id="radio2" name="carousel">
                  <div class="grupo" id="grupo1">
                    <div class="service_icon">
                      <span><i class="ri-wifi-fill"></i></span>
                      <p>Wifi</p>
                    </div>
                    <div class="service_icon">
                      <span><i class="ri-tv-2-line"></i></span>
                      <p>Televisión</p>
                    </div>
                    <div class="service_icon">
                      <span class="material-symbols-outlined">room_service</span>
                      <p>Servicio</p>
                    </div>
                  </div>
                  <div class="grupo" id="grupo2">
                    <div class="service_icon">
                      <span><i class="ri-goblet-fill"></i></span>
                      <p>Mini bar</p>
                    </div>
                    <div class="service_icon">
                      <span><i class="ri-safe-2-fill"></i></span>
                      <p>Caja fuerte</p>
                    </div>
                    <div class="service_icon">
                      <span><i class="ri-windy-line"></i></span>
                      <p>Aire acondicionado</p>
                    </div>
                  </div>
                  <div class="indicadores">
                    <label for="radio1"></label>
                    <label for="radio2"></label>
                  </div>
                </div>
                <div class="room_card_details_text">
                  <h6>Incluye:</h6>
                    <p>Conexion a red inalambrica<br>
                    Televisión de pantalla plana<br>
                    Minibar premiun<br>
                    Baño privador con jacuzii<br>
                    Aire acondicionado<br>
                    Caja fuerte<br>
                    Servicio a la habitacion (24 horas)
                  </p>
                </div>
                <div class="room_card_details_text">
                  <h6>Capacidad maxima:</h6>
                  <p>2-4 personas</p>
              </div>
            </div>
              <div class="see_more" >
                <p class="see_more_text">Ver máx</p>
                <div class="nav_link" id="nav-link">
                <i class="ri-arrow-down-double-fill"></i>
                </div>
              </div>
              <button class="btn">Reservar</button>
            </div>
          </div>
          </div>
      </section>

      <?php include 'footer.php'; ?> 
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="/WebHotel/scripts/scripts.js"></script>
</body>
</html>