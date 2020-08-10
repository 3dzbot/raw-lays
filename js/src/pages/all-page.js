document.addEventListener('DOMContentLoaded', () => {

    if(document.querySelector('.main-prev-timer')){
        let deadline = '2020-08-07';

        const timer = (id, deadline)=>{

            const addZero = (num) => {
                if (num <= 9) {
                    return '0' + num;
                }
                else {
                    return num;
                }
            };

            const getTimeRemaining = (endtime) => {
                //добавил 9 часов
                const t = (Date.parse(endtime) - Date.parse(new Date())+32400000),
                 seconds = Math.floor((t/1000) % 60),
                 minutes = Math.floor((t/1000/60) % 60),
                 hours = Math.floor((t/(1000*60*60)) % 24),
                 days = Math.floor((t/(1000*60*60*24)));

                return {
                    'total': t,
                    'days': days,
                    'hours': hours,
                    'minutes': minutes,
                    'seconds': seconds
                };
            };

            const setClock = (selector, endtime)=>{
                const timer = document.querySelector(selector),
                 days = timer.querySelector('#days'),
                 hours = timer.querySelector('#hours'),
                 minutes = timer.querySelector('#minutes'),
                 seconds = timer.querySelector('#seconds'),
                 timeInterval = setInterval(updateClock, 1000);

                updateClock();

                function updateClock(){
                    const t = getTimeRemaining(endtime);

                    days.textContent = addZero(t.days);
                    hours.textContent = addZero(t.hours);
                    minutes.textContent = addZero(t.minutes);
                    seconds.textContent = addZero(t.seconds);

                    if (t.total <= 0 ){
                        days.textContent = '00';
                        hours.textContent = '00';
                        minutes.textContent = '00';
                        seconds.textContent = '00';

                        clearInterval(timeInterval);
                    }
                }
            };

            setClock(id, deadline);
        };
        timer('.main-prev-timer', deadline);
        //endtimer
    }

    if(document.getElementById('registration-page')){
        $("#registration-phone").mask("+7 (999) 999-99-99");
        $("#registration-birthday").mask("99.99.9999");
    }

    if(document.getElementById('city-page')) {
        let cityNumber = document.querySelector('.city-left .city-number span');
        let firstSlide = document.querySelector('.swiper-slide-one');
        let secondSlide = document.querySelector('.swiper-slide-two');
        var mySwiper = new Swiper('#city-page .swiper-container', {
            // Optional parameters
            direction: 'vertical',
            loop: true,
            speed: 400,
            spaceBetween: 10,
            mousewheel: true,

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                // prevEl: '.swiper-button-prev',
            },
        })
        mySwiper.on('slideChange', function () {
            let swiperActiveNumber = document.querySelector('.swiper-slide-active').dataset.number;
            firstSlide = document.querySelector('.swiper-slide-one');
            secondSlide = document.querySelector('.swiper-slide-two');
            if(swiperActiveNumber === '01') {
                cityNumber.textContent = '02';
            } else {
                cityNumber.textContent = '01';
            }
        });
    }
});
