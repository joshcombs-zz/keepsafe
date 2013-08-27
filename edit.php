<?php
ob_start();
$page_id = 'manageusers';
$title   = 'Update User Information';
include 'core/init.php';
protect_page();

// $gravimg_url = "http://www.gravatar.com/avatar/" . md5(strtolower(trim($user_data['email']))) . "?d=" . urlencode( '' ) . "&s=" . 220;

include 'includes/overall/header.php'; ?>

<!-- Main Content -->
<div class="row-fluid">
	<div class="span12 well">

<?php include 'includes/admin_navigation.php'; ?>

		<div class="span7">

			<form action="" method="POST" class="form-horizontal" id="admin_update_account">
				<fieldset>
					<legend>Edit Account</legend>

					<?php 
					if (isset($_GET['edit']) === true && empty($_GET['edit']) === true) {
						echo '<div class="alert alert-success">Your details have been updated successfully!</div><a href="manageusers.php" class="btn">Go Back</a>';
					} else {
					if (empty($_POST) === false && empty($errors) === true) {
							$update_data = array(
								'account'	 => $_POST['account'],
								'first_name' => $_POST['first_name'],
								'last_name'  => $_POST['last_name'],
								'address' 	 => $_POST['address'],
								'city' 		 => $_POST['city'],
								'state'		 => $_POST['state'],
								'zip' 		 => $_POST['zip'],
								'email' 	 => $_POST['email']
								);

							update_user($session_user_id, $update_data);
							header('Location: manageusers.php?success');
							exit();

						} else if (empty($errors) === false) {
							echo output_errors($errors);
						}
					?>

					<div class="control-group">
						<label class="control-label" for="account">Account #</label>
						<div class="controls">
							<input id="account" name="account" type="text" class="input" value="<?php echo $user_data['account']; ?>"> 
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
						<button id="updateinfo-submit" type="submit" class="btn btn-primary input-medium" value="update">Update Information</button>
					</div>

				</fieldset>
			</form>

<?php 
} 
?>
		</div>
	</div>
</div>

<?php 
include 'includes/overall/footer.php';
?>