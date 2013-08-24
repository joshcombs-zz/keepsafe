<?php
ob_start();
$page_id = 'updateinfo';
$title   = 'Update User Information';
include 'core/init.php';
protect_page();

$grav_url = "http://www.gravatar.com/avatar/" . md5(strtolower(trim($user_data['email']))) . "?d=" . urlencode( '' ) . "&s=" . 220;

if (empty($_POST) === false) {
	$required_fields = array('first_name', 'last_name', 'email');
	foreach($_POST as $key=>$value) {
    if (empty($value) && in_array($key, $required_fields) === true) {
      $errors[] = 'Fields marked with an * are required.';
      break 1;
	  }
	}

	if (empty($errors) === true) {
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'A valid email address is required.';
		} else if (email_exists($_POST['email']) === true && $user_data['email'] !== $_POST['email']) {
			$errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' is already in use.';
		}
	}


}

include 'includes/overall/header.php'; ?>

<!-- Main Content -->
<div class="row">
	<div class="span12">
		<div class="well">

			<form action="" method="POST" class="form-horizontal" id="change_password">
				<fieldset>
					<legend>Update Your Information</legend>

					<?php 
					if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
						echo '<div class="alert alert-success">Your details have been updated successfully!</div><a href="settings.php" class="btn">Go Back</a>';
					} else {
					if (empty($_POST) === false && empty($errors) === true) {
							$update_data = array(
								'first_name' => $_POST['first_name'],
								'last_name'  => $_POST['last_name'],
								'address' 	 => $_POST['address'],
								'city' 		 => $_POST['city'],
								'state'		 => $_POST['state'],
								'zip' 		 => $_POST['zip'],
								'email' 	 => $_POST['email']
								);

							update_user($session_user_id, $update_data);
							header('Location: settings.php?success');
							exit();

						} else if (empty($errors) === false) {
							echo output_errors($errors);
						}
					?>
					<div class="control-group">
						<label class="control-label" for="grav">Your Picture</label>
						<div class="controls">
							<img src="<?php echo $grav_url; ?>" alt="" />
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="account">Account #</label>
						<div class="controls">
							<input id="account" name="account" type="text" class="input" value="<?php echo $user_data['account']; ?>" disabled> 
						</div>
					</div>
				    <div class="control-group">
						<label class="control-label" for="first_name">First Name *</label>
						<div class="controls">
							<input id="first_name" name="first_name" type="text" class="input" value="<?php echo ucfirst($user_data['first_name']); ?>"> 
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="last_name">Last Name *</label>
						<div class="controls">
							<input id="last_name" name="last_name" type="text" class="input" value="<?php echo ucfirst($user_data['last_name']); ?>"> 
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="address">Street Address</label>
						<div class="controls">
							<input id="address" name="address" type="text" class="input" value="<?php echo $user_data['address']; ?>"> 
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="city">City</label>
						<div class="controls">
							<input id="city" name="city" type="text" class="input" value="<?php echo ucfirst($user_data['city']); ?>"> 
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="state">State</label>
						<div class="controls">
							<input id="state" name="state" type="text" class="input" value="<?php echo ucfirst($user_data['state']); ?>"> 
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="zip">Zip Code</label>
						<div class="controls">
							<input id="zip" name="zip" type="text" class="input" value="<?php echo $user_data['zip']; ?>"> 
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="email">Email Address *</label>
						<div class="controls">
							<input id="email" name="email" type="text" class="input" value="<?php echo strtolower($user_data['email']); ?>"> 
						</div>
					</div>
					<div class="controls">
						<button id="updateinfo-submit" type="submit" class="btn btn-primary" value="update">Update Information</button>
						<button type="reset" class="btn">Cancel</button>
					</div>

				</fieldset>
			</form>

<?php 
} 
?>

		</div>
	</div>
</div>

<?php include 'includes/overall/footer.php';?>