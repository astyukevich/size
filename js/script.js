window.onload = function() {
  let preloader = document.getElementById('preloader');
  preloader.classList.add('hide-preloader');
  setInterval(function() {
        preloader.classList.add('preloader-hidden');
  }, 990);
}



new Swiper('.features-slider', {
	// Включаем параллакс
	parallax: true,
	// скорость переключения
	speed: 2000,

  autoHeight: false,
    slidesPerView: '1',
    spaceBetween: 20,
    loop: true,
    slidesPerColumn: 1,
	// Стрелки
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev'
	},
  autoplay: {
    // Пауза между прокруткой
    delay: 5000,
    // Закончить на последнем слайде
    stopOnLastSlide: false,
    // Отключить после ручного переключения
    disableOnInteraction: true
  },
});


// $(document).ready(function(){
//   $("#menu").on("click","a", function (event) {
//       //отменяем стандартную обработку нажатия по ссылке
//       event.preventDefault();

//       //забираем идентификатор бока с атрибута href
//       var id  = $(this).attr('href'),

//       //узнаем высоту от начала страницы до блока на который ссылается якорь
//           top = $(id).offset().top;

//       //анимируем переход на расстояние - top за 1500 мс
//       $('body,html').animate({scrollTop: top}, 1500);
//   });
// });

$(document).ready(function(){
  $("#arrow").on("click","a", function (event) {
      //отменяем стандартную обработку нажатия по ссылке
      event.preventDefault();

      //забираем идентификатор бока с атрибута href
      var id  = $(this).attr('href'),

      //узнаем высоту от начала страницы до блока на который ссылается якорь
          top = $(id).offset().top;
          // top = top - 76;

      //анимируем переход на расстояние - top за 1500 мс
      $('body,html').animate({scrollTop: top}, 1500);
  });
});

$(document).ready(function(){
  $("#arrow-2").on("click","a", function (event) {
      //отменяем стандартную обработку нажатия по ссылке
      event.preventDefault();

      //забираем идентификатор бока с атрибута href
      var id  = $(this).attr('href'),

      //узнаем высоту от начала страницы до блока на который ссылается якорь
          top = $(id).offset().top;

      //анимируем переход на расстояние - top за 1500 мс
      $('body,html').animate({scrollTop: top}, 1500);
  });
});





$("#navToggle").click(function () {
  $(this).toggleClass("active");
  $(".overlay").toggleClass("open");
  // this line ▼ prevents content scroll-behind

});

$('.overlay').click(function () {
  $(this).removeClass('open');
  $('.navBurger').removeClass('active');
});




