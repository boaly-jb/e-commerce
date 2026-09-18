const swiper = new Swiper(".heroSwiper", {

    // Infinite loop
    loop: true,

    // Speed
    speed: 1000,

    // Autoplay
    autoplay: {
        delay: 5000,

        disableOnInteraction: false,
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // Pagination dots
    pagination: {
        el: ".swiper-pagination",

        clickable: true,
    },

});