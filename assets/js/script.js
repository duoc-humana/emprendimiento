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

//Script de activación del Swiper
const swiper = new Swiper(".mySwiper", {
    loop: true,
    slidesPerView: 1,
    slidesPerGroup: 3,
    spaceBetween: 0,
    speed: 10000,
    freeMode: false,
    freeModeMomentum: false,
    autoplay: {
        delay: 0,
        disableOnInteraction: false,
    },
    
});