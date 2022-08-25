// $(document).ready(function() 
  function numberOnly(id) {
        let elem = document.getElementById(id);
        elem.value = elem.value.replace(/[^0-9]/gi, "");
    }

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



// });