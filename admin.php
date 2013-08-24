<?php
ob_start();
$page_id = 'admin';
$title   = 'Administration';
include 'core/init.php';
protect_page();
admin_protect();
include 'includes/overall/header.php'; 
?>

<div class="row-fluid">
	<div class="span12 well">

			<legend>Administration</legend>

	</div>
</div> 


<?php include 'includes/overall/footer.php'; ?>
