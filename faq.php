<?php 
$page_id = 'faq';
$title   = 'Frequenty Asked Questions';
include 'core/init.php';
include 'includes/overall/header.php'; ?>

<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="span12">
    <div class="well">

    	<legend>Frequently Asked Questions</legend>

    	<div class="accordion" id="accordion2">
    		<div class="accordion-group">
    			<div class="accordion-heading">
    				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
    					How do I replace the battery for my Keyfob?
    				</a>
    			</div><!-- /.Accordian Heading -->
    			<div id="collapseOne" class="accordion-body collapse">
    				<div class="accordion-inner">
    					<h5>Battery Replacement</h5>
    					1. Remove the screw that secures the case and lift off the top cover.<br>
    					2. Remove the rubber Button Assembly.<br>
    					3. With the Key Ring Hole facing upwards carefully lift the top circuit board to allow removal of batteries from bottom circuit board.<br>
    					4. Remove the bottom plastic tab to replace the bottom battery and slide the battery out to the bottom. Insert the plastic tab into the circuit board.<br>
    					5. Replace the top battery by sliding it out to the right.<br>
    					7. Reassemble the case and slip the neckchain through the eyelet.<br><br>
    				</div><!-- /.accordian-inner -->
    			</div><!-- /.CollapseOne -->
    		</div><!-- /.accordian-group -->
    	</div><!-- /.accordian -->

    </div><!-- /.well -->
  </div><!-- /.span12 -->
</div><!-- /.row -->

<div class="thumbnail center well well-small text-center">
  <legend>Newsletter <small>Subscribe to our Newsletter for useful security tips and new products.</small></legend>

    <form action="http://keepsafesecurity.us4.list-manage.com/subscribe/post?u=df227b2890a4e7aa682e2b2f1&amp;id=2b4cbc14c1" method="post">
      <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span>
        <input type="text" id="EMAIL" name="EMAIL" placeholder="your@email.com">
      </div>
      <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
        <input type="text" id="FNAME" name="FNAME" placeholder="First Name">
      </div>
      <br />
      <input type="submit" value="Subscribe Now!" class="btn input-medium" />
    </form>
</div>

<?php include 'includes/overall/footer.php'; ?>
