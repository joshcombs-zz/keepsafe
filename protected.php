<?php
$page_id = 'home';
$title   = 'KeepSafe Security';
include 'core/init.php';
include 'includes/overall/header.php'; ?>

<!-- Main Content -->
<div class="row">
	<div class="span12">
		<div class="well text-center">

			<h1><div class="alert alert-danger">Sorry, you need to be logged in to do that!</h1></a><br>
        	<p>
        		You can use your browsers 'back' button to get back where you were,  
        		<b>or you could use the buttons below to either register or sign in.</b>
        	</p>
        		<a href="/register.php" class="btn btn-primary"><i class="icon-user icon-white"></i> Register</a>
        		<a href="/login.php" class="btn btn-primary"><i class="icon-user icon-white"></i> Sign in</a>

		</div>
	</div>
</div><!-- /.row -->
<!-- /.Main Content -->


<?php include 'includes/overall/footer.php'; ?>