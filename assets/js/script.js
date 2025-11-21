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

const serviciosLink = document.querySelector('.servicios-link');
const serviciosDropdown = document.querySelector('.dropdown-custom');

serviciosLink.addEventListener('click', (e) => {
    if (window.innerWidth < 992) {
        e.preventDefault();
        serviciosDropdown.classList.toggle('open');
    }
});
