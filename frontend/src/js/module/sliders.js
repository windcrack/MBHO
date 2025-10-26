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
    new Swiper('.js-slider-home-tariff', options.homeTariff);
}