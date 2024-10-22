<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h1>En Imperio, cada huésped es tratado como <span>realeza.</span></h1>
            <p>Reserva hoy y vive una experiencia inolvidable.</p>
        </div>
    </header>
    
    <section class="section_container booking_container">
        <form action="/" class="booking_form">
            <div class="input_group">
                <span><i class="ri-calendar-2-fill"></i></span>
                <div>
                    <label for="check-in">INGRESO</label>
                    <input type="date" id="check-in" placeholder="Día de Ingreso" />
                </div>
            </div>
            <div class="input_group">
                <span><i class="ri-calendar-2-fill"></i></span>
                <div>
                    <label for="check-out">SALIDA</label>
                    <input type="date" id="check-out" placeholder="Día de Salida" />
                </div>
            </div>
            <div class="input_group">
                <span><i class="ri-user-fill"></i></span>
                <div>
                    <label for="guest">CLIENTE</label>
                    <input type="text" id="guest" placeholder="Cliente" />
                </div>
            </div>
            <div class="input_group input_btn">
                <button type="submit" class="btn">BUSCAR RESERVA</button>
            </div>
        </form>
    </section>
    
    <section class="section_container about_container" id="about">
        <div class="/WebHotel/about_image">
            <img src="/WebHotel/imgs/about.png" alt="about" />
        </div>
        <div class="about_content">
            <p class="section_subheader">¡Nuestra promesa!</p>
            <h2 class="section_header">¡Descubre la Magia de Imperio!</h2>
            <p class="section_description">
                En el Hotel Imperio, cada estancia es una experiencia de lujo 
                y sofisticación sin igual. Nuestro compromiso con la excelencia 
                se refleja en cada detalle, desde la atención personalizada que
                te hará sentir especial, hasta las reservas sin complicaciones 
                que garantizan una llegada sin estrés. Nos enorgullece ofrecer 
                un refugio de confort y elegancia, donde cada visita se 
                convierte en un viaje a un mundo de exclusividad y relajación.
                En Imperio, no solo te alojas, sino que te sumerges en un
                ambiente de realeza, donde tu bienestar y satisfacción son
                nuestra mayor prioridad.
            </p>
            <div class="about_btn">
                <button class="btn">Leer más</button>
            </div>
        </div>
    </section>

    <section class="section_container room_container">
        <p class="section_subheader">NUESTRAS HABITACIONES</p>
        <h2 class="section_header">Desconéctate, relájate y vive lo extraordinario</h2>
        <div class="room_grid">
            <div class="room_card">
                <div class="room_card_image">
                    <img src="/WebHotel/imgs/room1.jpg" alt="room" />
                    <div class="room_card_icons">
                        <span><i class="ri-heart-fill"></i></span>
                        <span><i class="ri-paint-fill"></i></span>
                        <span><i class="ri-shield-star-line"></i></span>
                    </div>
                </div>
                <div class="room_card_details">
                    <h4>Suite Presidencial</h4>
                    <p>
                        La habitación más lujosa, generalmente con varias áreas y comodidades premium.
                    </p>
                    <h5>A partir de <span>$299/noche</span></h5>
                    <button class="btn">Book Now</button>
                </div>
            </div>
            <div class="room_card">
                <div class="room_card_image">
                    <img src="/WebHotel/imgs/room2.jpg" alt="room" />
                    <div class="room_card_icons">
                        <span><i class="ri-heart-fill"></i></span>
                        <span><i class="ri-paint-fill"></i></span>
                        <span><i class="ri-shield-star-line"></i></span>
                    </div>
                </div>
                <div class="room_card_details">
                    <h4>Habitación Familiar</h4>
                    <p>
                        Con espacio adicional para alojar a familias.
                    </p>
                    <h5>A partir de <span>$199/noche</span></h5>
                    <button class="btn">Book Now</button>
                </div>
            </div>
            <div class="room_card">
                <div class="room_card_image">
                    <img src="/WebHotel/imgs/room3.jpg" alt="room" />
                    <div class="room_card_icons">
                        <span><i class="ri-heart-fill"></i></span>
                        <span><i class="ri-paint-fill"></i></span>
                        <span><i class="ri-shield-star-line"></i></span>
                    </div>
                </div>
                <div class="room_card_details">
                    <h4>Suite Ejecutiva</h4>
                    <p>
                        Ideal para viajeros de negocios con áreas de trabajo adicionales.
                    </p>
                    <h5>A partir de <span>$249/noche</span></h5>
                    <button class="btn">Book Now</button>
                </div>
            </div>
        </div>
        
    </section>

    <?php include 'footer.php'; ?> 

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="/WebHotel/scripts/scripts.js"defer></script>
</body>
</html>
