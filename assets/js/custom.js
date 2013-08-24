$(document).ready(function(){

  // Validate
  // http://bassistance.de/jquery-plugins/jquery-plugin-validation/
  // http://docs.jquery.com/Plugins/Validation/
  // http://docs.jquery.com/Plugins/Validation/validate#toptions

    $('#contact').validate({
      rules: {
        name: {
          minlength: 3,
          required: true
        },
        contact_email: {
          required: true,
          email: true
        },
        subject: {
          minlength: 5,
          required: true
        },
        contact_message: {
          minlength: 25,
          required: true
        }
      },
      highlight: function(element) {
        $(element).closest('.control-group').removeClass('success').addClass('error');
      },
      success: function(element) {
        element
        .text('OK!').addClass('valid')
        .closest('.control-group').removeClass('error').addClass('success');
      }
    });

}); // end document.ready



$(document).ready(function(){

  // Validate
  // http://bassistance.de/jquery-plugins/jquery-plugin-validation/
  // http://docs.jquery.com/Plugins/Validation/
  // http://docs.jquery.com/Plugins/Validation/validate#toptions

    $('#paypalform').validate({
      rules: {
        os0: {
          minlength: 4,
          digits: true,
          required: true
        },
        os1: {
          minlength: 5,
          digits: true,
          required: true
        },
        amount: {
          minlength: 2,
          digits: true,
          required: true
        }
      },
      highlight: function(element) {
        $(element).closest('.control-group').removeClass('success').addClass('error');
      },
      success: function(element) {
        element
        .text('OK!').addClass('valid')
        .closest('.control-group').removeClass('error').addClass('success');
      }
    });

}); // end document.ready



  !function ($) {
    $(function(){
// carousel demo
$('#myCarousel').carousel()
})
  }(window.jQuery)



var news = $('.news')
current = 0;
news.hide();
Rotator();
function Rotator() {
    $(news[current]).fadeIn('slow').delay(6000).fadeOut('slow');
    $(news[current]).queue(function() {
        current = current < news.length - 1 ? current + 1 : 0;
        Rotator();
        $(this).dequeue();
    });
}