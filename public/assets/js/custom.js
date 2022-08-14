$(document).ready(function() {

    // Flashdata
    let flashData = $('.flash-data').data('flashdata');

    if (flashData) {
      iziToast.success({
        title        : '',
        message      : flashData,
        position     : 'topRight',
        timeout      : 3000,
        transitionIn : 'fadeInLeft',
        transitionOut: 'fadeOutRight',
        progressBar  : false
      });
  }

});