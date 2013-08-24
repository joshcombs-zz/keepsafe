<?php
$page_id = 'updateinfo';
$title   = 'Update User Information';
ob_start();
include 'core/init.php';
protect_page();



include 'includes/overall/header.php'; ?>

<!-- Main Content -->
<div class="row">
	<div class="span12">
		<div class="well">

			<form action="" method="POST" class="form-horizontal" id="change_password">
				<fieldset>
					<legend>Update Your Information</legend>



					<div class="control-group">
						<label class="control-label" for="account">Account #</label>
						<div class="controls">
							<input id="account" name="account" type="text" class="input" value="<?php echo $user_data['account'] ?>" disabled> 
						</div>
					</div>
				    <div class="control-group">
						<label class="control-label" for="first_name">First Name</label>
						<div class="controls">
							<input id="first_name" name="first_name" type="text" class="input" value="<?php echo $user_data['first_name'] ?>"> 
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="last_name">Last Name</label>
						<div class="controls">
							<input id="last_name" name="last_name" type="text" class="input" value="<?php echo $user_data['last_name'] ?>"> 
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="email">Email Address</label>
						<div class="controls">
							<input id="email" name="email" type="text" class="input" value="<?php echo $user_data['email'] ?>"> 
						</div>
					</div>
					<div class="controls">
						<button id="updateinfo-submit" type="submit" class="btn btn-primary" value="update">Update Information</button>
						<button type="reset" class="btn">Cancel</button>
					</div>

				</fieldset>
			</form>



		</div>
	</div>
</div><!-- /.row -->
<!-- /.Main Content -->


<?php include 'includes/overall/footer.php';?>