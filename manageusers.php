<?php
ob_start();
$page_id = 'manageusers';
$title   = 'Administration - Manage Users';
include 'core/init.php';
protect_page();
admin_protect();
include 'includes/overall/header.php'; 
?>

<div class="row-fluid">
	<div class="span12 well">

<!-- Admin Navigation is .span3 -->
<?php include 'includes/admin_navigation.php'; ?>

		<div class="span10">

<?php

$sql 	= "SELECT * FROM `users` ORDER BY `last_name` DESC";
$myData = mysql_query($sql);




echo "<table class=\"table\">
<thead>
<tr>
<th>Account #</th>
<th>First Name</th>
<th>Last Name</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Zip</th>
<th>Email</th>
<th>Actions</th>
</tr>
</thead>
";
while ($record = mysql_fetch_array($myData)) {
	echo "<tbody>";
	echo "<tr>";
	echo "<td>" . $record['account'] . "</td>";
	echo "<td>" . $record['first_name'] . "</td>";
	echo "<td>" . $record['last_name'] . "</td>";
	echo "<td>" . $record['address'] . "</td>";
	echo "<td>" . $record['city'] . "</td>";
	echo "<td>" . $record['state'] . "</td>";
	echo "<td>" . $record['zip'] . "</td>";
	echo "<td>" . $record['email'] . "</td>";
	echo "<td><div class=btn-group>
    <button class=\"btn\">$record[account]</button>
    <button class=\"btn btn-dagner\" dropdown-toggle data-toggle=dropdown>
    <span class=caret></span>
    </button>
    <ul class=dropdown-menu>
    <!-- dropdown menu links -->
    <li><a href=edit.php?=$record[user_id]>Edit</a></li>
    </ul>
    </div></td>";
	echo "</tr>";
	echo "</tbody>";
}

echo "</table>";

?>


		</div>


	</div>
</div>



<?php include 'includes/overall/footer.php'; ?>