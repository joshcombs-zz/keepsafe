<?php
ob_start();
$page_id = 'admin';
$title   = 'Administration';
include 'core/init.php';
protect_page();
admin_protect();
include 'includes/overall/header.php'; 
?>

<div class="row">
	<div class="span12">
		<div class="well">

			<legend>Administration</legend>

		</div>
	</div>
</div> 
<!-- .row-fluid -->


<?php include 'includes/overall/footer.php'; ?>
