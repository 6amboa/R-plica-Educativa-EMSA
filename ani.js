var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    centeredSlides:true,
    loop: true,
    spaceBetween: 5,
    grabCursor:true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'

    },
    breakpoints : {
        980: {
            slidesPerView: 1
        }
    }

});
