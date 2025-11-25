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
       slidesPerView: 4,
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
