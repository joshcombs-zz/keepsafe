<hr>

<footer>
  <p class="pull-right"><a href="#">Back to top</a></p>
  <p>&copy; 2013 Keepsafe Security &middot; <a href="privacy.php">Privacy</a> &middot; <a href="terms.php">Terms</a></p><hr>
  <p><small>Keepsafe Security Systems is a full service alarm company specializing in the design and professional installation of wireless UL listed burglar alarm systems with remote access, fire alarms, residential and commercial security camera systems, CCTV, surveillance cameras, access control, key cards, key fobs, and more.</small></p>
  <p class="pull-right"><small>Website designed and maintained by <a href="mailto:josh.combs@me.com?Subject=KeepSafe%20Website">Josh Combs</a><small></p>
</footer>

</div><!-- /.container -->



<!-- Le javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="/assets/js/jquery-1.7.1.min.js"></script>
  <script src="/assets/js/bootstrap.js"></script>
  <script src="/assets/js/jquery.validate.js"></script>
  <script>

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


  !function ($) {
    $(function(){
// carousel demo
$('#myCarousel').carousel()
})
  }(window.jQuery)
  </script>