<?php 

$user_count = user_count();
$suffix 	= ($user_count != 1) ? '(s)' : '';

?>

<p class="text-success">We currently have <span class="badge"><?php echo $user_count; ?></span> registered user<?php echo $suffix ?>.</p>