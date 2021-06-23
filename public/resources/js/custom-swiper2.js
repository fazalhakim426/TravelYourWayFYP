 var swiper = new Swiper('.swiper-container', {
      direction: 'horizontal',
      speed: 3000,
      autoplay: true,
      grabCursor:true,
      arrrow:true,
      slidesPerView: 'auto',
      loop:true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });