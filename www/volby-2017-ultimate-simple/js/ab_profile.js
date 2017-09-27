$('document').ready(function() {

    abreg = parseInt($('#abreg').val());

    $('#carousel').on('slide.bs.carousel',function(e){
        var slideFrom = $(this).find('.item.active').index();
        var slideTo = $(e.relatedTarget).index();

        cookie = Cookies.get('vkemail');
        if (typeof(cookie) == 'undefined') {
            if (slideTo == ($('.item').length - 1)) {
                $('#registration-modal').modal({show: true, backdrop: 'static'});
            }
            // if ((abreg == 2) && (slideTo == ($('.item').length - 1))) {
            //     $('#registration-modal').modal({show: true, backdrop: 'static'})
            // }
            // if ((abreg == 1) && (slideTo == 6)) {
            //     $('#registration-modal').modal({show: true, backdrop: 'static'})
            // }
        }
  });

  $('.registration-submit').click(function(){
      if (ValidateEmail($('#registration-email').val())) {
          Cookies.set('vkemail', $('#registration-email').val(), { expires: 365*15 });
      }
      if (!(isNaN($('#registration-postcode').val()))) {
          Cookies.set('vkpostcode', $('#registration-postcode').val(), { expires: 365*15 });
      }
  })

});


function ValidateEmail(email)
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
  {
    return (true)
  }
    alert("Ok, tak neregistrujeme, není problém.")
    return (false)
}
