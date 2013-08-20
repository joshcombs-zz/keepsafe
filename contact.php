<?php
$page_id = 'contact';
$title = "KeepSafe Security &middot; Contact Us";
?>

<?php include 'includes/overall/header.php'; ?>

<div class="row">
	<div class="span8">
		<div class="well">
			<form method="POST" action="contact-form-submission.php" id="contact" class="form-horizontal">
				<fieldset>
					<legend>Send us a message! <small>(we'll respond as soon as possible.)</small></legend>

					<?php  
					if (isset($_GET['success'])) echo "<div class=\"alert alert-success\">Thank you. We have successfully received your message.<button data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button></div>";
					?>  

					<div class="control-group">
						<label class="control-label" for="name">Your Name</label>
						<div class="controls">
							<input id="name" name="name" type="text" class="input-xlarge" placeholder="John Doe"> 
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="contact_email">Your Email Address</label>
						<div class="controls">
							<input id="contact_email" name="contact_email" type="text" class="input-xlarge" placeholder="your@emailaddress.com">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="subject">Subject</label>
						<div class="controls">
							<input id="subject" name="subject" type="text" class="input-xlarge" placeholder="Inquiry">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="contact_message">Brief Message</label>
						<div class="controls">
							<textarea id="contact_message" name="contact_message" class="input-xlarge" placeholder="What can we help you with?" rows="5"></textarea>
						</div>
					</div>
					<div class="controls">
						<input type="hidden" name="save" value="contact">
						<button id="contact-submit" type="submit" class="btn btn-primary input-medium">Send</button>
						<button type="reset" class="btn input-medium">Cancel</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
	<div class="span4">
		<div class="well">
			<h2>Questions?</h2>
			<address>
				<strong>KeepSafe Security & Fire</strong><br>
				P.O. Box 7287<br>
				Statesville, NC 28625<br>
				<abbr title="Phone">P:</abbr> (704) 873-0803
				<br>
				<abbr title="Fax">F:</abbr> (704) 873-0505
				<br>
				<a href="mailto:josh.combs@me.com">mark@keepsafesecurity.net</a>
			</address>
		</div>
	</div>
</div> 
<!-- .row-fluid -->



<div class="row-fluid">
	<div class="span12">
		<div class="well">


<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<style type="text/css">
#user_gmap{ width:100%;height:400px; margin:20px20px 0px; }
#user_glink {width:100%; text-align:right; font-size:10px; font-weight:normal; padding:0px; height:20px; margin:0px;}
</style>
<script type="text/javascript">
google.maps.event.addDomListener(window, 'load', function() {
	var mapdiv = document.getElementById('user_gmap');
	var myOptions = {
	zoom: 16,
	center: new google.maps.LatLng(35.78268306107475,-80.97368938379674),
	mapTypeId: google.maps.MapTypeId.ROADMAP,
	scaleControl: true
	};
	var map = new google.maps.Map(mapdiv, myOptions);
	var marker = new google.maps.Marker({
	position: new google.maps.LatLng(35.78268306107475,-80.97368938379674),
	map: map, 
	title: 'KeepSafe Security Systems'
	});
	var infowindow = new google.maps.InfoWindow({
	content: '<strong>KeepSafe Security Systems</strong><br />132 Modular Drive<br />Statesville, NC 28625',
	size: new google.maps.Size(200, 200)
	});
	google.maps.event.addListener(marker, 'click', function() {
	infowindow.open(map,marker);
	});
	infowindow.open(map,marker);
});
</script>
<div id="user_gmap"></div>
</div>



		</div>
	</div>
<! -- .row-fluid -->


<div class="thumbnail center well well-small text-center">
	<h2>Newsletter</h2>

	<p>Subscribe to our weekly Newsletter and stay tuned.</p>

	<form action="http://keepsafesecurity.us4.list-manage.com/subscribe/post?u=df227b2890a4e7aa682e2b2f1&amp;id=2b4cbc14c1" method="post">
		<div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span>
			<input type="text" id="EMAIL" name="EMAIL" placeholder="your@email.com">
		</div>
		<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			<input type="text" id="FNAME" name="FNAME" placeholder="First Name">
		</div>
		<br />
		<input type="submit" value="Subscribe Now!" class="btn btn-danger" />
	</form>
</div>

<?php include 'includes/overall/footer.php'; ?>
