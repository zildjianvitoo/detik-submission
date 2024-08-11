const swiper = new Swiper(".swiper", {
    loop: false,
    slidesPerView: 2,
    spaceBetween: 10,

    pagination: {
        el: ".swiper-pagination",

        type: "fraction",
    },
    breakpoints: {
        640: {
            slidesPerView: 3,
            spaceBetween: 5,
        },
    },
});

document.querySelectorAll(".swiper-slide").forEach((slide) => {
    slide.addEventListener("click", () => {
        if (swiper.clickedIndex === swiper.slides.length - 2) {
            swiper.slideTo(0);
        } else {
            swiper.slideNext();
        }
    });
});

// const swiper = new Swiper(".swiper", {
//     slidesPerView: 2.25,
//     spaceBetween: 10,
//     loop: true,
//     slideToClickedSlide: true,
// });
