//Links Activos
console.log("script funcionando");
document.addEventListener("DOMContentLoaded", function () {
  // Obtiene el nombre de la página actual
  let paginaActual = window.location.pathname.split("/").pop();

  // Selecciona todos los enlaces con la clase .nav-link
  let links = document.querySelectorAll(".navbar-nav");

  // Recorre cada enlace
  links.forEach(function (link) {
    if (link.getAttribute("href") === paginaActual) {
      link.classList.add("link-activo");
    }
  });
});

const searchContainers = document.querySelectorAll('.search-container');

searchContainers.forEach((searchContainer) => {
    const searchBtn = searchContainer.querySelector('.search-btn');
    const searchInput = searchContainer.querySelector('.search-input');

    if (!searchBtn || !searchInput) return;

    searchBtn.addEventListener('click', () => {
        searchContainer.classList.toggle('active');

        if (searchContainer.classList.contains('active')) {
            setTimeout(() => searchInput.focus(), 250);
        }
    });
});

 var swiper = new Swiper(".mySwiper", {
    loop: true,
      spaceBetween: 20,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
       breakpoints: {
        480: {
          slidesPerView: 1,
          spaceBetween: 15,
        },
        700: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
         900: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
      },
      
    });

// ACORDEÓN FOOTER (solo mobile)
const accordionHeaders = document.querySelectorAll('.accordion-header');

accordionHeaders.forEach(header => {
    header.addEventListener('click', function () {
        const accordionItem = this.parentElement;
        accordionItem.classList.toggle('active');
    });
});


//Reseteo de Input Search
document.addEventListener('DOMContentLoaded', function() {
    const campo = document.querySelector('input[name="s"]');
    if (campo) campo.value = '';
});


//QUIENES SOMOS 
document.addEventListener("DOMContentLoaded", () => {
  const track = document.getElementById("workflow-track");
  const wrap = track.parentElement;
  const cards = Array.from(track.children);
  const prev = document.getElementById("workflow-prev");
  const next = document.getElementById("workflow-next");


  const isMobile = () => matchMedia("(max-width:767px)").matches;



  let current = 0;

  function center(i) {
    if (isMobile()) return; // en móvil no centramos nada
    const card = cards[i];
    const start = card.offsetLeft;
    wrap.scrollTo({
      left: start - (wrap.clientWidth / 2 - card.clientWidth / 2),
      behavior: "smooth"
    });
  }

  function toggleUI(i) {
  cards.forEach((c, k) => c.toggleAttribute("active", k === i));

  if (prev) prev.disabled = i === 0;
  if (next) next.disabled = i === cards.length - 1;
}

  function activate(i, scroll) {
    if (i === current) return;
    current = i;
    toggleUI(i);
    if (scroll) center(i);
  }

  function go(step) {
    activate(Math.min(Math.max(current + step, 0), cards.length - 1), true);
  }

  // Navegación con teclado (solo escritorio)
  if (!isMobile()) {
    addEventListener("keydown", (e) => {
      if (["ArrowRight"].includes(e.key)) go(1);
      if (["ArrowLeft"].includes(e.key)) go(-1);
    }, { passive: true });
  }

  // Activar tarjeta con hover/click
  cards.forEach((card, i) => {
    card.addEventListener("mouseenter", () => {
      if (!isMobile() && matchMedia("(hover:hover)").matches) activate(i, true);
    });
    card.addEventListener("click", () => activate(i, true));
  });

  // Swipe (solo escritorio horizontal)
  if (!isMobile()) {
    let sx = 0;
    track.addEventListener("touchstart", (e) => {
      sx = e.touches[0].clientX;
    }, { passive: true });

    track.addEventListener("touchend", (e) => {
      const dx = e.changedTouches[0].clientX - sx;
      if (Math.abs(dx) > 60) {
        go(dx > 0 ? -1 : 1);
      }
    }, { passive: true });
  }


  addEventListener("resize", () => center(current), { passive: true });

  // Inicializar
  toggleUI(0);
  center(0);
});



// Funcionalidad de los tabs
const selectors = document.querySelectorAll('.selector');
const tabPanels = document.querySelectorAll('.tab-panel');

selectors.forEach(selector => {
    selector.addEventListener('click', function() {
        selectors.forEach(s => s.classList.remove('active'));
        
        tabPanels.forEach(panel => panel.classList.remove('active'));
        
        this.classList.add('active');

        const tabId = this.getAttribute('data-tab');
        document.getElementById(tabId).classList.add('active');
    });
});

var certificados= new Swiper(".certificados-quienesSomos", {
  slidesPerView: 1,
  spaceBetween: 0, 
  centeredSlides: false, 
  loop:true, 
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
  breakpoints: {
    320: { slidesPerView: 1, spaceBetween: 10 },
    480: { slidesPerView: 1, spaceBetween: 15 },
    640: { slidesPerView: 1, spaceBetween: 20 },
    768: { slidesPerView: 1, spaceBetween: 30 },
    1024: { slidesPerView: 1, spaceBetween: 40 },
    1280: { slidesPerView: 1, spaceBetween: 50 }
  }
});

//swiper premios
var premios = new Swiper('.slider-premios', {
    loop: true,
    spaceBetween: 50,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      640: {
         slidesPerView: 2,
         spaceBetween: 20,
      },
      768: {
          slidesPerView: 3,
          spaceBetween: 30,
      },
      1024: {
          slidesPerView: 4,
          spaceBetween: 30,
      },
    },
           
});


document.addEventListener('DOMContentLoaded', function() {
  const tabsSelectors = document.querySelector('.tabs-selectors');
  const selectors = document.querySelectorAll('.selector');
  
  // Función para cambiar de tab
  selectors.forEach(selector => {
      selector.addEventListener('click', function() {
          const isMobile = window.innerWidth <= 768;
          
          if (isMobile && this.classList.contains('active')) {
              // Toggle dropdown en móvil
              tabsSelectors.classList.toggle('open');
          } else {
              // Cambiar tab
              selectors.forEach(s => s.classList.remove('active'));
              this.classList.add('active');
              
              const tabId = this.getAttribute('data-tab');
              document.querySelectorAll('.tab-panel').forEach(panel => {
                  panel.classList.remove('active');
              });
              document.getElementById(tabId).classList.add('active');
              
              // Cerrar dropdown en móvil después de seleccionar
              if (isMobile) {
                  tabsSelectors.classList.remove('open');
              }
          }
      });
  });
  
  // Cerrar dropdown al hacer click fuera
  document.addEventListener('click', function(e) {
      if (window.innerWidth <= 768 && !tabsSelectors.contains(e.target)) {
          tabsSelectors.classList.remove('open');
      }
  });
});

///swiper empresas gestion de resuidos
var swiperEmpresas = new Swiper(".swiper-empresas", {
            loop: true,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
             breakpoints: {
                640: {
                slidesPerView: 1,
                spaceBetween: 10,
                },
                768: {
                slidesPerView: 2,
                spaceBetween: 20,
                },
                1024: {
                slidesPerView: 3,
                spaceBetween: 30,
                },
            },
            });
 

//circulos contenedor 
document.querySelectorAll('.icono-circulo').forEach(icono => {
  icono.addEventListener('click', () => {
    icono.classList.toggle('activo');
  });
});