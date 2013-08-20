
<footer>
  <div class="well">
<div class="row-fluid">
        <div class="span12">
          <div class="span4" style="width: 29%;">
            <ul class="unstyled">
              <li>Newsflash<li>
                <div id="flashNews">
                  <div class="news">
                    Victims of burglary offenses suffered an estimated $4.6 billion in lost property in 2009; overall, the average dollar loss per burglary offense was $2,096.
                  </div>
                  <div class="news">
                    In 2009, there were an estimated 2,199,125 burglaries & a decrease of 1.3 percent when compared with 2008 data.
                  <br><br>
                  </div>
                  <div class="news">
                    Burglary accounted for 23.6 percent of the estimated number of property crimes committed in 2009.
                  </div>
                  <div class="news">
                    Of all burglaries, 61.0 percent involved forcible entry, 32.6 percent were unlawful entries (without force), and the remainder (6.5 percent) were forcible entry attempts.
                  </div>
                </div>
            </ul>
          </div>
          <div class="span2" style="width: 15%;">
            <ul class="unstyled">
              <li>Applications<li>
              <li><a href="#">Product for Mac</a></li>
              <li><a href="#">Product for Windows</a></li>
              <li><a href="#">Product for Eclipse</a></li>
              <li><a href="#">Product mobile apps</a></li>              
            </ul>
          </div>
          <div class="span2" style="width: 15%;">
            <ul class="unstyled">
              <li>Services<li>
              <li><a href="#">Web analytics</a></li>
              <li><a href="#">Presentations</a></li>
              <li><a href="#">Code snippets</a></li>
              <li><a href="#">Job board</a></li>              
            </ul>
          </div>
          <div class="span2" style="width: 15%;">
            <ul class="unstyled">
              <li>Documentation<li>
              <li><a href="#">Product Help</a></li>
              <li><a href="#">Developer API</a></li>
              <li><a href="#">Product Markdown</a></li>
              <li><a href="#">Product Pages</a></li>              
            </ul>
          </div>  
          <div class="span2" style="width: 15%;">
            <ul class="unstyled">
              <li>Office: (704) 873-0803</li>
              <li>Fax: (704) 873-0505</a></li>
              <li>P.O. Box 7287</li>
              <li>Statesville, NC 28625</li>
              <li><a href="mailto:mark@keepsafesecurity.net">mark@keepsafesecurity.net</a></li>
            </ul>
          </div>          
        </div>
      </div>
      <hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="span8">
            <a href="/terms.php">Terms of Service</a> &middot;
            <a href="/privacy.php">Privacy</a>
          </div>
          <div class="span4">
            <p class="muted pull-right">© 2013 KeepSafe Security. All rights reserved</p>
          </div>
        </div>
      </div>
</div>

</footer>

</div><!-- /.container -->



<!-- Le javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="/assets/js/jquery-1.7.1.min.js"></script>
  <script src="/assets/js/bootstrap.js"></script>
  <script src="/assets/js/jquery.validate.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
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


  </script>