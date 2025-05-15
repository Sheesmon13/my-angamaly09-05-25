
document.addEventListener("DOMContentLoaded", (event) => {

      AOS.init();

     /*** Swiper Slider ***/

      var swiper = new Swiper('.home-swiper', {
        loop: true,
         autoplay:true,
         autoplayTimeout:3000,
      navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

/*     $("#mobile-menu").meanmenu({
		meanMenuContainer: ".mobile-menu",
		meanScreenWidth: "991",
		meanExpand: ['<i class="fal fa-plus"></i>'],
	});

	$("#mobile-menu-2").meanmenu({
		meanMenuContainer: ".mobile-menu-2",
		meanScreenWidth: "4000",
		meanExpand: ['<i class="fal fa-plus"></i>'],
	}); */
 
/* toggle-mobile */

/*      let menutoggle = document.querySelector('.toggle');
    menutoggle.onclick = function(){
        menutoggle.classList.toggle('active')
    } 
     */

    
/* Sticky */

 $(document).ready(function () {
    $(window).on("scroll", function () {
        var scrollTop = $(window).scrollTop(); 

        if (scrollTop > 100) {
            $(".sticky-nav").addClass("sticky").removeClass("fadeOutUp").addClass("fadeInDown");
            $(".looogoo").css("top", "60px");
        } else {
            $(".sticky-nav").removeClass("sticky fadeInDown").addClass("fadeOutUp");
            $(".looogoo").css("top", "100px");
        }
    });
});
 
/* main sliders */

$('.main-block-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots:false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 3
        },
        1240: {
            items: 3
        },
    }
});

/* Top resturants */

$('.customer-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    navText : [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

/* Instituion */

$('.institution-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    autoplay:true,
    navText : [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

/* Right-ad-institution */

$('.right-img-inst').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});


/* Destination */

$('.desti-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    autoplay:true,
    navText : [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})


/* Company */

$('.company-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
  
 /*  electronics */

  $('.electronics-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    navText : [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

/* Hospital */

$('.hospital-owl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    dots:false,
    navText : [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})




    // HEADER NAV IN MOBILE
    
    if (document.querySelector(".ul-header-nav")) {
        const ulSidebar = document.querySelector(".ul-sidebar");
        const ulSidebarOpener = document.querySelector(".ul-header-sidebar-opener");
        const ulSidebarCloser = document.querySelector(".ul-sidebar-closer");
        const ulMobileMenuContent = document.querySelector(".to-go-to-sidebar-in-mobile");
        const ulHeaderNavMobileWrapper = document.querySelector(".ul-sidebar-header-nav-wrapper");
        const ulHeaderNavOgWrapper = document.querySelector(".ul-header-nav-wrapper");

        function updateMenuPosition() {
            if (window.innerWidth < 992) {
                ulHeaderNavMobileWrapper.appendChild(ulMobileMenuContent);
            }

            if (window.innerWidth >= 992) {
                ulHeaderNavOgWrapper.appendChild(ulMobileMenuContent);
            }
        }

        updateMenuPosition();

        window.addEventListener("resize", () => {
            updateMenuPosition();
        });

        ulSidebarOpener.addEventListener("click", () => {
            ulSidebar.classList.add("active");
        });

        ulSidebarCloser.addEventListener("click", () => {
            ulSidebar.classList.remove("active");
        });


        // menu dropdown/submenu in mobile
        const ulHeaderNavMobile = document.querySelector(".ul-header-nav");
        const ulHeaderNavMobileItems = ulHeaderNavMobile.querySelectorAll(".has-sub-menu");
        ulHeaderNavMobileItems.forEach((item) => {
            if (window.innerWidth < 992) {
                item.addEventListener("click", () => {
                    item.classList.toggle("active");
                });
            }
        });
    }

    // header search in mobile start
/*     const ulHeaderSearchOpener = document.querySelector(".ul-header-mobile-search-opener");
    const ulHeaderSearchCloser = document.querySelector(".ul-header-mobile-search-closer");
    if (ulHeaderSearchOpener) {
        ulHeaderSearchOpener.addEventListener("click", () => {
            document.querySelector(".ul-header-search-form-wrapper").classList.add("active");
        });
    }

    if (ulHeaderSearchCloser) {
        ulHeaderSearchCloser.addEventListener("click", () => {
            document.querySelector(".ul-header-search-form-wrapper").classList.remove("active");
        });
    }
 */


    // sidebar products slider
    new Swiper(".ul-sidebar-products-slider", {
        slidesPerView: 1,
        loop: true,
        autoplay: true,
        spaceBetween: 30,
        navigation: {
            nextEl: ".ul-sidebar-products-slider-nav .next",
            prevEl: ".ul-sidebar-products-slider-nav .prev",
        },
        breakpoints: {
            1400: {
                slidesPerView: 2,
            }
        }
    });

    });