<?php
$page_id = 'contact';
$title   = 'Contact Us';
include 'core/init.php';
ob_start();
include 'includes/overall/header.php'; 
?>

<div class="row-fluid">
	<div class="span8 well">
		<form method="POST" action="contact-form-submission.php" id="contact" class="form-horizontal">
			<fieldset>
				<legend>Send us a message! <small>(we'll respond as soon as possible.)</small></legend> 

				<?php  
				if (isset($_GET['success'])) {
					echo "<div class=\"alert alert-success\">Thank you. We have successfully received your message.<button data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button></div>";
				}
				?> 

				<div class="control-group">
					<label class="control-label" for="name">Your Name</label>
					<div class="controls">
						<input id="name" name="name" type="text" class="input" placeholder="John Doe" value="<?php echo ucfirst($user_data['first_name']); ?>"> 
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="contact_email">Your Email Address</label>
					<div class="controls">
						<input id="contact_email" name="contact_email" type="text" class="input" placeholder="your@emailaddress.com" value="<?php echo strtolower(ucfirst($user_data['email'])); ?>">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="subject">Subject</label>
					<div class="controls">
						<input id="subject" name="subject" type="text" class="input" placeholder="Inquiry">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="contact_message">Brief Message</label>
					<div class="controls">
						<textarea id="contact_message" name="contact_message" class="input" placeholder="What can we help you with?" rows="5"></textarea>
					</div>
				</div>
				<div class="controls">
					<input type="hidden" name="save" value="contact">
					<button id="contact-submit" type="submit" class="btn btn-primary input-medium">Send</button>
					<button type="reset" class="btn">Cancel</button>
				</div>
			</fieldset>
		</form>
	</div>
	<div class="span4 well">
		<legend>Questions</legend>
		<address>
			<strong>KeepSafe Security & Fire</strong><br>
			P.O. Box 7287<br>
			Statesville, NC 28625<br>
			<abbr title="Phone">P:</abbr> (704) 873-0803
			<br>
			<abbr title="Fax">F:</abbr> (704) 873-0505
		</address>
	</div>
</div> 
<!-- .row-fluid -->


<?php include 'includes/overall/footer.php'; ?>
