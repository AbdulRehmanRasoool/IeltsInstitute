(function() {
	"use strict";
    
    // Header Sticky
    window.addEventListener('scroll', event => {
        const height = 150;
        const { scrollTop } = event.target.scrollingElement;
        document.querySelector('#navbar').classList.toggle('sticky', scrollTop >= height);
    });
  
    window.onload = function(){
        
        // Back to Top
        const getId = document.getElementById("back-to-top");
        if (getId) {
            const topbutton = document.getElementById("back-to-top");
            topbutton.onclick = function (e) {
                window.scrollTo({ top: 0, behavior: "smooth" });
            };
            window.onscroll = function () {
                if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                    topbutton.style.opacity = "1";
                } else {
                    topbutton.style.opacity = "0";
                }
            };
        }
        
        // Counter Js
        if ("IntersectionObserver" in window) {  
            let counterObserver = new IntersectionObserver(function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                    let counter = entry.target;
                    let target = parseInt(counter.innerText);
                    let step = target / 200;
                    let current = 0;
                    let timer = setInterval(function () {
                        current += step;
                        counter.innerText = Math.floor(current);
                        if (parseInt(counter.innerText) >= target) {
                        clearInterval(timer);
                        }
                    }, 10);
                    counterObserver.unobserve(counter);
                    }
                });
            });
            let counters = document.querySelectorAll(".counter");
            counters.forEach(function (counter) {
                counterObserver.observe(counter);
            });
        }
    };

    // Testimonial JS
    var swiper = new Swiper(".testimonial", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
    });
    var swiper2 = new Swiper(".testimonial2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".next",
            prevEl: ".prev",
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        thumbs: {
            swiper: swiper,
        },
    });
    var swiper2 = new Swiper(".testimonial-slider-2", {
        loop: true,
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            576: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 2
            },
            1200: {
                slidesPerView: 2
            },
            1400: {
                slidesPerView: 2
            }
        }
    });
    var swiper2 = new Swiper(".testimonial-slider-3", {
        loop: true,
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            576: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 2
            },
            1200: {
                slidesPerView: 2
            },
            1400: {
                slidesPerView: 3
            }
        }
    });

    // Partner JS
    var swiper = new Swiper(".partner-slider", {
        spaceBetween: 70,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            0: {
                slidesPerView: 2
            },
            576: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            },
            992: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 4
            },
            1400: {
                slidesPerView: 5
            }
        }
    });

    // Programs JS
    var swiper = new Swiper(".programs-slider", {
        spaceBetween: 25,
        loop:true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            576: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 3
            },
            1400: {
                slidesPerView: 3
            }
        }
    });

    // Timer Js
    try {
        const days1 =document.querySelector("#days")
        const hours1 =document.querySelector("#hours")
        const minutes1 =document.querySelector("#minutes")
        const seconds1  =document.querySelector("#seconds")
        const newYears = 'Jan 01 2028 00:00:00';
        function countdown(){
            const newYearsDate = new Date(newYears);
            const currentDate = new Date();

            const totalSeconds = (newYearsDate-currentDate)/1000;
            const days = Math.floor(totalSeconds / 3600 / 24);
            const hours = Math.floor(totalSeconds / 3600 ) % 24;
            const minutes = Math.floor(totalSeconds / 60 ) % 60;
            const seconds = Math.floor(totalSeconds % 60);
            
            days1.innerHTML =   formatTime( days);
            hours1.innerHTML =  formatTime( hours);
            minutes1.innerHTML =formatTime(  minutes);
            seconds1.innerHTML =formatTime(  seconds);
        }
        countdown();
        function formatTime(time){
            return time < 10 ? `0${time}` : time;
        }
        setInterval(countdown,1000);
    } catch {}
   
    // ScrollCue
    scrollCue.init();

})();

// Offcanvas Responsive Menu
const list = document.querySelectorAll('.responsive-menu-list');
function accordion(e) {
    e.stopPropagation(); 
    if(this.classList.contains('active')){
        this.classList.remove('active');
    }
    else if(this.parentElement.parentElement.classList.contains('active')){
        this.classList.add('active');
    }
    else {
        for(i=0; i < list.length; i++){
            list[i].classList.remove('active');
        }
        this.classList.add('active');
    }
}
for(i = 0; i < list.length; i++ ){
    list[i].addEventListener('click', accordion);
}