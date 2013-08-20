<div class="navbar-inner">
	<!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
	<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a class="brand" href="index.php">KeepSafe Security</a>
	<!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
	<div class="nav-collapse collapse">
		<ul class="nav">
			<li class="<?php echo ($page_id == "home" ? "active" : "");?>"><a href="../index.php">Home</a></li>
			<li class="<?php echo ($page_id == "about" ? "active" : "");?>"><a href="../about.php">About</a></li>
			<li class="<?php echo ($page_id == "contact" ? "active" : "");?>"><a href="../contact.php">Contact</a></li>
			<li class="<?php echo ($page_id == "faq" ? "active" : "");?>"><a href="../faq.php">FAQs</a></li>
			<!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
			<li class="dropdown">
				<a class="dropdown-toggle"
				data-toggle="dropdown"
				href="#">
				Services
				<b class="caret"></b>
			</a>
			<ul class="dropdown-menu">
				<li><a href="#">Monitoring</a></li>
				<li><a href="#">Video Surveillance</a></li>
				<li><a href="#">Burglar Alarms</a></li>
				<li><a href="#">Fire Alarms</a></li>
				<li class="divider"></li>
				<li class="nav-header">RESOURCES</li>
				<li><a href="/manuals.php">Manuals</a></li>
				<li><a href="#">Update Call List</a></li>
				<li><a href="#">Setup Service Call</a></li>
				<li><a href="#">Free Security Quote</a></li>
			</ul>
		</li>
	</ul>
</div><!--/.nav-collapse -->
</div><!-- /.navbar-inner -->