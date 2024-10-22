const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");


// Para dar mensaje cuando se sale de la pagina
let originalTitle = document.title;
document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
        document.title = "¡No te vayas! 💔😢";
    } else {
        document.title = originalTitle;
    }
});
// ..............


menuBtn.addEventListener("click", () => {
    navLinks.classList.toggle("open");

    const isOpen = navLinks.classList.contains("open");
    menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

navLinks.addEventListener("click", () => {
    navLinks.classList.remove("open");
    menuBtnIcon.setAttribute("class", "ri-menu-line");
});


// FOOTER INICIO
const footerNavLinks = document.querySelectorAll(".footer_col .nav_link");

// Itera sobre cada enlace de navegación
footerNavLinks.forEach((navlink) => {
    const footerlinks = navlink.closest(".footer_col").querySelector(".footer_links"); // Selecciona la lista de enlaces correspondiente
    const navlinkIcon = navlink.querySelector("i");

    // Agrega un evento de clic a cada nav_link
    navlink.addEventListener("click", () => {
        footerlinks.classList.toggle("show");

        const isOpen = footerlinks.classList.contains("show");
        navlinkIcon.setAttribute("class", isOpen ? "ri-arrow-up-double-line" : "ri-arrow-down-double-fill");
    });
});

// FOOTER FINAL


// VER MÁS HABITACION CARD
document.querySelectorAll('.room_card').forEach((card) => {
    let seeMoreIcon = card.querySelector('.nav_link i');  // Selecciona el icono de "Ver más" dentro de la tarjeta actual
    let seeMoreText = card.querySelector('.see_more_text');  // Selecciona el texto de "Ver más" dentro de la tarjeta actual
    let seeMoreDetails = card.querySelector('.see_more_details');  // Selecciona los detalles de "Ver más" dentro de la tarjeta actual

    // Inicializa los detalles ocultos
    seeMoreDetails.style.display = 'none';  // Asegura que los detalles están ocultos al inicio

    seeMoreIcon.addEventListener('click', (e) => {
        e.stopPropagation();  // Evita que el evento se propague a otras tarjetas

        if (seeMoreDetails.style.display === 'block') {
            seeMoreDetails.style.display = 'none';  // Oculta los detalles
            seeMoreIcon.classList.replace('ri-close-fill', 'ri-arrow-down-double-fill');  // Cambia el icono de nuevo a flecha
            seeMoreText.textContent = 'Ver más';  // Cambia el texto a "Ver más"
        } else {
            // Cierra cualquier otro detalle abierto antes de abrir este
            document.querySelectorAll('.see_more_details').forEach((details) => {
                details.style.display = 'none';  // Oculta todos los detalles
            });
            document.querySelectorAll('.nav_link i').forEach((icon) => {
                icon.classList.replace('ri-close-fill', 'ri-arrow-down-double-fill');  // Cambia todos los iconos a flecha
            });
            document.querySelectorAll('.see_more_text').forEach((text) => {
                text.textContent = 'Ver más';  // Cambia todos los textos a "Ver más"
            });

            // Muestra los detalles de la tarjeta actual
            seeMoreDetails.style.display = 'block';  // Muestra los detalles
            seeMoreIcon.classList.replace('ri-arrow-down-double-fill', 'ri-close-fill');  // Cambia el icono a "X"
            seeMoreText.textContent = 'Ver menos';  // Cambia el texto a "Ver menos"
        }
    });
});



// Seleccionamos todas las tarjetas de habitación
let roomCards = document.querySelectorAll('.room_card');

roomCards.forEach((card) => {
    let roomCardImage = card.querySelector('.room_card_image .list_room_image');
    let items = card.querySelectorAll('.room_card_image .list_room_image .item');
    let next = card.querySelector('#next');
    let prev = card.querySelector('#prev');
    let dots = card.querySelectorAll('.room_card_image .dots li');

    let active = 0;
    let lengthItems = items.length;

    next.onclick = function() {
        active = (active + 1) % lengthItems;  // Cicla a través de las imágenes
        reloadSlider();
    };

    prev.onclick = function() {
        active = (active - 1 + lengthItems) % lengthItems;  // Para retroceder y ciclar al inicio
        reloadSlider();
    };

    let refreshInterval = setInterval(() => next.click(), 3000);  // Desliza automáticamente cada 3 segundos

    function reloadSlider() {
        roomCardImage.style.transform = `translateX(-${100 * active}%)`;  // Usa translateX para mover las imágenes
        updateDots();  // Actualiza los puntos de navegación
        resetAutoSlide();  // Reinicia el intervalo de autodeslizamiento
    }

    function updateDots() {
        card.querySelector('.room_card_image .dots li.active').classList.remove('active');
        dots[active].classList.add('active');
    }

    function resetAutoSlide() {
        clearInterval(refreshInterval);
        refreshInterval = setInterval(() => next.click(), 3000);  // Reinicia el deslizamiento automático
    }

    // Mover a la imagen correspondiente al hacer clic en un punto
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            active = index;
            reloadSlider();
        });
    });

    // Asegúrate de reajustar el slider cuando se cambie el tamaño de la ventana
    window.onresize = reloadSlider;
});





// VER MÁS HABITACION CARD FINAL