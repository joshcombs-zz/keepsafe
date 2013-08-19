<?php
$page_id = 'contact';
$title = "KeepSafe Security &middot; Contact Us";
?>

<?php include 'includes/overall/header.php'; ?>

<?php include 'includes/style.php'; ?>

<!-- Three columns of text below the carousel -->

<div class="page-header">
	<h1>Needing Assistance?</h1>
</div>
<div class="row-fluid">
	<div class="span8">
		<div class="well">
			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=132+Modular+Drive,+Statesville,+NC&amp;aq=0&amp;oq=132+modular+dri&amp;sll=37.6,-95.665&amp;sspn=38.406429,92.988281&amp;ie=UTF8&amp;hq=&amp;hnear=132+Modular+Dr,+Statesville,+North+Carolina+28625&amp;t=m&amp;ll=35.782658,-80.973701&amp;spn=0.02437,0.008583&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
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
<div class="row-fluid">
	<div class="span8">
		<div class="well">
			<div class="header">
	<h3>Send us an Email!</h3>

<?php  
  
        // check for a successful form post  
        if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
  
        // check for a form error  
        elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
  
?>  

</div>
			<form method="POST" action="contact-form-submission.php">
				<div class="controls controls-row">
					<input id="name" name="first_name" type="text" class="span6" placeholder="Name"> 
					<input id="email" name="contact_email" type="email" class="span6" placeholder="Email address">
				</div>
				<div class="controls">
					<textarea id="message" name="contact_message" class="span12" placeholder="Your Message" rows="5"></textarea>
				</div>

				<div class="controls">
					<input type="hidden" name="save" value="contact">
					<button id="contact-submit" type="submit" class="btn btn-primary input-medium pull-right">Send</button>
				</div>
			</form>
		</div>
	</div>
</div>


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
