$(document).ready(function(){
  $('.banner_meio').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2500,
    pauseOnHover: false,
    infinite: true,
    fade: true,
    cssEase: 'Linear',
    arrows: false,
  });
});

/* $(document).ready(function(){
  $('.banner_meio').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true
  });
}); */

$(document).ready(function(){   
    $('.galeria').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        pauseOnHover: false,
        arrows: false,
        responsive: [
            {
              breakpoint: 1204,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                pauseOnHover: false,
                arrows: false,
              }
            },
            {
              breakpoint: 804,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                pauseOnHover: false,
                arrows: false,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                pauseOnHover: false,
                arrows: false,
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]

    });       
});
$(document) .ready(function(){
  $('.item-menu') .click(function()
    {
      $('.item-menu') .removeClass('ativo');
      $(this) .addClass('ativo');
    });
  });
  
  document.querySelector(".abrirMenu").onclick = function(){
    document.documentElement.classList.add("menuAtivo");
  }
  document.querySelector(".fecharMenu").onclick = function(){
    document.documentElement.classList.remove("menuAtivo");
  }