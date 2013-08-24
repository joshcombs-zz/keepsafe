<?php
$page_id = '404';
$title   = 'Error 404 Page Not Found';
include 'core/init.php';
include 'includes/overall/header.php'; ?>

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="span12 text-center">
        <div class="well">

        	<h1>Page Not Found <small><p><font face="Tahoma" color="red">Error 404</font></small></h1><br>
        	<p>The page you requested could not be found, either contact your webmaster or try again. Use your browsers <b>Back</b> 
        		button to navigate to the page you have prevously come from</p>
        		<p><b>Or you could just press this neat little button:</b></p>
        		<a href="/index.php" class="btn btn-large btn-primary"><i class="icon-home icon-white"></i> Take Me Home</a>

        </div>
      </div><!-- /.span4 -->
    </div><!-- /.row -->

<?php include 'includes/overall/footer.php'; ?>