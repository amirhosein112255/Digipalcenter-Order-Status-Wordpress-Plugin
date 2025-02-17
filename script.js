$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        rtl: true,
        nav: true,
        navText: ['<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C18.937 21.2498 21.25 18.9368 21.25 11.9998C21.25 5.06276 18.937 2.74976 12 2.74976C5.063 2.74976 2.75 5.06276 2.75 11.9998C2.75 18.9368 5.063 21.2498 12 21.2498Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.5581 15.4714C10.5581 15.4714 14.0441 13.0794 14.0441 11.9994C14.0441 10.9194 10.5581 8.52944 10.5581 8.52944" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>','<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75024C5.063 2.75024 2.75 5.06324 2.75 12.0002C2.75 18.9372 5.063 21.2502 12 21.2502C18.937 21.2502 21.25 18.9372 21.25 12.0002C21.25 5.06324 18.937 2.75024 12 2.75024Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.4419 8.52856C13.4419 8.52856 9.95589 10.9206 9.95589 12.0006C9.95589 13.0806 13.4419 15.4706 13.4419 15.4706" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
        responsive: {
            0:{
                items: 2
            },
            480:{
                items: 2
            },
            768:{
                items: 3
            },
            1200:{
                items: 4
            },
            1400:{
                items: 5
            }
        }
    });
  });