// add class position fixed ---
function fixedMenu() {

    let fixed = document.getElementById("fixed_id");
    let logo = document.getElementById("logo-main");
    let logoTwo = document.getElementById("logo-main-two");

    let mywindows = window.onscroll = () => {
        if(window.scrollY > 80){
            fixed.setAttribute("class", "active-main");
            logo.style.display = "none";
            logoTwo.style.display = "block";
 
        }else{
            fixed.removeAttribute("class", "active-main");
            logo.style.display = "block";
            logoTwo.style.display = "none";
 
        };
    };
};
fixedMenu();


// Start swiper banner slider --------
function swiper() {
 
    const swiper = new Swiper('.swiper', {
    
      // Optional parameters
      direction: 'horizontal',
      
      loop: true,
      speed: 1000,
      spaceBetween: 200,
      effect: 'fade',
 
      fadeEffect: {
        // crossFade: true,
        depth: 100,
      },
    
        autoplay: {
          delay: 4000,
        },
    
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    
      scrollbar: {
      el: '.swiper-scrollbar',
      draggable: null,
      verticalClass: "swiper-scrollbar-vertical",
      },
      
    });
}
swiper();
// End swiper banner slider --------


// Start swiper about slider --------
function swiperService(){

  var swiper = new Swiper(".mySwiper", {
    slidesPerView:4,
    direction: 'horizontal',
    spaceBetween: 0,
    grabCursor: true,
   
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  // Responsive breakpoints
    breakpoints: {

      250: {
        allowTouchMove: true,
        slidesPerView: 2,
        spaceBetween: 10,
        centeredSlides: true,
        grid: {
          rows: 1,
        },
      },


      // when window width is >= 320px
      320: {
        allowTouchMove: true,
        slidesPerView: 2,
        spaceBetween: 10,
        centeredSlides: true,
        grid: {
          rows: 1,
        },
      },
      // when window width is >= 480px
  
      499:{
        allowTouchMove: true,
        slidesPerView: 2,
        spaceBetween: 15,
        centeredSlides: true,
        grid: {
          rows: 1,
        },
      },
      // when window width is >= 640px
      640: {
        allowTouchMove: true,
        slidesPerView: 2,
        spaceBetween: 15,
        centeredSlides: true,
        grid: {
          rows: 1,
        },
      },
      901: {
        allowTouchMove: false,
        slidesPerView: 2,
        spaceBetween: 15,
        centeredSlides: false,
        grid: {
          rows: 2,
        },
  
      },
      
      1151: {
        allowTouchMove: false,
        slidesPerView: 4,
        spaceBetween: 15,
        grid: {
          rows: 1,
        },
        
      }
    }
  });
}
swiperService();
// Send swiper about slider --------


// Start random sample work backgroundColor ---------------
function bgColornew(){

  let randomColor = new Array("#7935f8", "#EEA1B3", "#CAEB91");
  let boxWork = document.querySelectorAll(".box-sample-work").forEach((i) => {
    i.style.backgroundColor = randomColor[Math.floor(Math.random()*randomColor.length)];
  });
};
bgColornew();
// End random sample work backgroundColor ---------------


// Start Our Partner ---------------------------
function partnerSlider() {
  const swiper = new Swiper('.Swiper-partner', {
    // Optional parameters

    direction: 'horizontal',
    // loop: true,
    slidesPerView:1,
 
      // Responsive breakpoints
      breakpoints: {

        // when window width is >= 320px
        320: {
          slidesPerView: 2.2,
          spaceBetween: 0,
          allowTouchMove: true,
          slidesPerGroup: 2,
          grid: {
            rows: 1,
          },
        },
        // when window width is >= 480px
    
        499:{
          slidesPerView: 2.2,
          spaceBetween: 0,
          allowTouchMove: true,
          slidesPerGroup: 2,
          grid: {
            rows: 1,
          },
        },
        // when window width is >= 640px
        640: {
          slidesPerView: 2.1,
          spaceBetween: 0,
          allowTouchMove: true,
          slidesPerGroup: 2,
          grid: {
            rows: 1,
          },
        // eslint-disable-next-line linebreak-style
        },
        
        900: {
          slidesPerView: 5,
          spaceBetween:0,
          allowTouchMove: false,
          grid: {
            rows: 1,
          },
        },
        
        1151: {
          slidesPerView: 5,
          spaceBetween: 0,
          allowTouchMove: false,
          grid: {
            rows: 1,
          }
        },
      }
  });
}
partnerSlider();
// End Our Partner ---------------------------



function sipeerBlog(){
  const swiper = new Swiper('.Swiper-blog', {
    // Optional parameters
    pagination: {
      el: ".swiper-pagination",
      clickable: false,
    },
 
    direction: 'horizontal',
    // loop: true,
    slidesPerView:1,
 
      // Responsive breakpoints
      breakpoints: {

        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 15,
          allowTouchMove: true,
        },
        // when window width is >= 480px
    
        499:{
          slidesPerView: 1,
          spaceBetween: 15,
          allowTouchMove: true,
          slidesPerGroup: 1,
        },
        // when window width is >= 640px
        600: {
          slidesPerView: 1.5,
          spaceBetween: 15,
          allowTouchMove: true,
          slidesPerGroup: 1,
 
        },
        806: {
          slidesPerView: 2.5,
          spaceBetween: 15,
          allowTouchMove: true,
 
        },
        950: {
          slidesPerView: 3,
          spaceBetween: 15,
          allowTouchMove: false,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        },
        
        1151: {
          slidesPerView: 3,
          spaceBetween: 30,
          allowTouchMove: false,
        }
      }
  });

}

sipeerBlog();



function mySwiper_vertical(){

  var swiper = new Swiper(".mySwiper-vertical", {
    direction: "vertical",
    slidesPerView: 1,
    spaceBetween: 0,
    mousewheel: true,
    scrollbar: {
      el: ".swiper-scrollbar",
    },
 
    breakpoints: {

      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 15,
        direction: "horizontal",
      },
      // when window width is >= 480px
  
      499:{
        slidesPerView: 1,
        spaceBetween: 15,
        direction: "horizontal",
 
      },
      750: {
        slidesPerView: 1,
        spaceBetween: 15,
 
      },
      // when window width is >= 640px
 
      806: {
        slidesPerView: 1,
        spaceBetween: 15,
 

      },
      950: {
        slidesPerView:1,
        spaceBetween: 15,
  
 
      },
      
      1151: {
        slidesPerView: 1,
        spaceBetween: 30,
   
      }
    }
  });
}
mySwiper_vertical()

function tabcontent(){

  document.querySelectorAll('button[data-bs-toggle="pill"]').forEach((t,i)=>{

    t.addEventListener('show.bs.tab', function (e) {

      let targetClass = t.dataset.bsTarget
      var pane = document.querySelector('#v-pills-tabContentB__ ' + targetClass)
      var sibling = document.querySelector('#v-pills-tabContentB__ .tab-pane.active')
    

      pane.classList.add('show')
      pane.classList.add('active')

      sibling.classList.remove('show')
      sibling.classList.remove('active')
 
 
    });
})

 
}
tabcontent();

 

function map() {

let mapuk = document.getElementById("uk-mark-bg");
let mapspain = document.getElementById('spain-mark-bg');
let mapitaly = document.getElementById('italy-mark-bg');
let maptbilisi = document.getElementById('georgia-mark-bg');
 

let ukLocation = document.getElementById('Location');
let italyLocation_2 = document.getElementById('Location-2');
let spainLocation_3 = document.getElementById('Location-3');
let tbilisiLocation_4 = document.getElementById('Location-4');
 


  let map = document.querySelectorAll('.map_card').forEach((x, k) => {


    if(k === 0){
      x.addEventListener('mouseover', ()=> {
        mapuk.classList.add('addcolorfill');
      });

      x.addEventListener('mouseout', () => {
        mapuk.classList.remove('addcolorfill');
      });

        mapuk.addEventListener('mousemove', ()=> {
          x.classList.add('boxlocationclass');
        });

        mapuk.addEventListener('mouseout', ()=> {
          x.classList.remove('boxlocationclass');
        });

          ukLocation.addEventListener('mousemove', ()=> {
            x.classList.add('boxlocationclass');
            mapuk.classList.add('colorlocationfill')
          });

          ukLocation.addEventListener('mouseout', ()=> {
            x.classList.remove('boxlocationclass');
            mapuk.classList.remove('colorlocationfill')
          });

    }

    if(k === 1){
      x.addEventListener('mouseover', ()=> {
        mapspain.classList.add('addcolorfill');
      });  

      x.addEventListener('mouseout', () => {
        mapspain.classList.remove('addcolorfill');
      });

        mapspain.addEventListener('mousemove', ()=> {
          x.classList.add('boxlocationclass');
        });

        mapspain.addEventListener('mouseout', ()=> {
          x.classList.remove('boxlocationclass');
        });

          spainLocation_3.addEventListener('mousemove', ()=> {
            x.classList.add('boxlocationclass');
            mapspain.classList.add('colorlocationfill')
          });
          
          spainLocation_3.addEventListener('mouseout', ()=> {
            x.classList.remove('boxlocationclass');
            mapspain.classList.remove('colorlocationfill')
          });

    };

    if(k === 2){
      x.addEventListener('mouseover', ()=> {
        mapitaly.classList.add('addcolorfill');
      });

      x.addEventListener('mouseout', () => {
        mapitaly.classList.remove('addcolorfill');
      });

        mapitaly.addEventListener('mousemove', ()=> {
          x.classList.add('boxlocationclass');
        });

        mapitaly.addEventListener('mouseout', ()=> {
          x.classList.remove('boxlocationclass');
        });

          italyLocation_2.addEventListener('mousemove', ()=> {
            x.classList.add('boxlocationclass');
            mapitaly.classList.add('colorlocationfill')
          });
          
          italyLocation_2.addEventListener('mouseout', ()=> {
            x.classList.remove('boxlocationclass');
            mapitaly.classList.remove('colorlocationfill')
          });
        
    };

    if(k === 3){
      x.addEventListener('mouseover', ()=> {
        maptbilisi.classList.add('addcolorfill');
      });

      x.addEventListener('mouseout', () => {
        maptbilisi.classList.remove('addcolorfill');
      });

        maptbilisi.addEventListener('mousemove', ()=> {
          x.classList.add('boxlocationclass');
        });

        maptbilisi.addEventListener('mouseout', ()=> {
          x.classList.remove('boxlocationclass');
        });

          tbilisiLocation_4.addEventListener('mousemove', ()=> {
            x.classList.add('boxlocationclass');
            maptbilisi.classList.add('colorlocationfill')
          });
          
          tbilisiLocation_4.addEventListener('mouseout', ()=> {
            x.classList.remove('boxlocationclass');
            maptbilisi.classList.remove('colorlocationfill')
          });
    };
  });
};
map();
