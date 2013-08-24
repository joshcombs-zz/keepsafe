<?php
$page_id = 'changepassword';
$title   = 'Change Password';
ob_start();
include 'core/init.php';
protect_page();

if (empty($_POST) === false) {
	$required_fields = array('current_password', 'password', 'password_again');
	foreach($_POST as $key=>$value) {
    if (empty($value) && in_array($key, $required_fields) === true) {
      $errors[] = 'Fields marked with an * are required.';
      break 1;
    }
  }

  if (md5($_POST['current_password']) === $user_data['password']) {
  	if (trim($_POST['password']) !== trim($_POST['password_again'])) {
  		$errors[] = 'Your passwords do not match';
  	} else if (strlen($_POST['password']) < 8) {
  		$errors[] = 'Your new password must be at least 8 characters.';
  	}
  } else {
  	$errors[] = 'Your current password is incorrect.';
  }
}
include 'includes/overall/header.php'; ?>

<!-- Main Content -->
<div class="row">
	<div class="span12">
		<div class="well">

			<form action="" method="POST" class="form-horizontal" id="change_password">
				<fieldset>
					<legend>Change Password</legend>

					<?php
					if (isset($_GET['success']) && empty($_GET['success'])) {
						echo '<div class="alert alert-success">Your password has been changed.</div><a href="/changepassword.php" class="btn">Go Back</a>';
					} else {
						if (empty($_POST) === false && empty($errors) === true) {
							change_password($session_user_id, $_POST['password']);
							header('Location: changepassword.php?success');
						} else if (empty($errors) === false) {
							echo output_errors($errors);
						}
						?>

				    <div class="control-group">
						<label class="control-label" for="current_password">Current Password *</label>
						<div class="controls">
							<input id="current_password" name="current_password" type="password" class="input"> 
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password">New Password *</label>
						<div class="controls">
							<input id="password" name="password" type="password" class="input"> 
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password_again">Confirm Password *</label>
						<div class="controls">
							<input id="password_again" name="password_again" type="password" class="input"> 
						</div>
					</div>
					<div class="controls">
						<button id="changepassword-submit" type="submit" class="btn btn-primary">Change Password</button>
						<button type="reset" class="btn">Cancel</button>
					</div>

				</fieldset>
			</form>

<?php
}
?>

		</div>
	</div>
</div><!-- /.row -->
<!-- /.Main Content -->


<?php include 'includes/overall/footer.php';?>