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
            <h1>Aprovecha nuestros <span> únicos</span> y vive experiencias inolvidables</h1>
            <p>Reserva hoy y vive una experiencia inolvidable.</p>
        </div>
    </header>
    <?php include 'footer.php'; ?> 
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="/WebHotel/scripts/scripts.js"></script>
</body>
</html>