$(document).ready(function () {
    /******** Inicializa carrusel */
      var images = $('.carousel'),
           imgIx = 0;

      (function nextImage(){
          $(images[imgIx++] || images[imgIx = 0, imgIx++]).fadeIn(1000).delay(4000).fadeOut(1000, nextImage);
      })();

    /******* Inicializa búsqueda */
    $('#search_button').click(function () {
      if ($('#search_input').val().trim() != "") {
        window.location.href = site_url + "/?s=" + $('#search_input').val() + "&post_type=product";
      }
    });

    $('#search_button').popup({
      on: 'focus'
    });
});
