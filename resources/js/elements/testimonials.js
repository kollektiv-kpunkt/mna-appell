import Splide from '@splidejs/splide';
import '@splidejs/splide/css/skyblue';

if (document.querySelector(".mna-testimonials-container")) {
    new Splide('.mna-testimonials-container.splide', {
        type: 'loop',
        perPage: 2,
        perMove: 1,
        gap: '2rem',
        autoplay: true,
        interval: 10000,
        pauseOnHover: true,

        breakpoints: {
            1024: {
                perPage: 2,
            },
            768: {
                perPage: 1,
            }
        },
    }).mount();
}
