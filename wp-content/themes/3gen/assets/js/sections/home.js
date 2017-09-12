(function ($, root, undefined) {

  $(function () {

    'use strict';

  	$( '.swipebox' ).swipebox({
      loopAtEnd: true,
      hideBarsDelay : 0
    });

    $('.thumbs-carousel').flickity({
      // options
      cellAlign: 'left',
      contain: true,
      pageDots: false,
      cellSelector: '.carousel-thumb'
    });

  });

})(jQuery, this);
