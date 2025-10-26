export function sliders(){
    const options = {
        // example: {
        //     navigation: {
        //         nextEl: ".js-slider-btn-next-",
        //         prevEl: ".js-slider-btn-prev-",
        //     },
        // },
        homeTariff: {
            slidesPerView: 3,
            spaceBetween: 54,
            breakpoints:{
                280: {
                    slidesPerView: 'auto',
                    spaceBetween: 35,
                    pagination: {
                        el: ".js-pagination-home-tariff",
                        type: "progressbar",
                    },
                },
                850:{
                    slidesPerView: 3,
                    spaceBetween: 54,
                }
            }
        },

    }

    // new Swiper('.js-slider', options.example);
    const homeTariffSliders = document.querySelectorAll('.js-slider-home-tariff');
    homeTariffSliders.forEach(slider => {
        const sliderPagination = slider.nextElementSibling;
        new Swiper(slider, {
            slidesPerView: 3,
            spaceBetween: 54,
            breakpoints:{
                280: {
                    slidesPerView: 'auto',
                    spaceBetween: 35,
                    pagination: {
                        el: sliderPagination,
                        type: "progressbar",
                    },
                },
                850:{
                    slidesPerView: 3,
                    spaceBetween: 54,
                }
            }
        },);
    })

}