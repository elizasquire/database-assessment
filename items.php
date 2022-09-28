<?php
/*Connect to database */
$dbcon = mysqli_connect("localhost", "elizasquire", "CQYu2NF", "elizasquire_1");

if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL:".mysqli_connect_error(); die();} /*This is what connects the website to my database, so my tables can be accessed*/
else {																   /* so my tables can be accessed */
	echo "";
}
?>




<?php

if(isset($_GET['Item'])){
	$item = $_GET['Item'];
}else{
	$item = 1;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="css/styles.css" rel="stylesheet">
	<title> WEGC Cafe </title>

</head>
	
<body>
<div class="grid-container">
<div class="header">
<div class="h1">
<?php
echo "<h1>Items"."</h1>";

?>
</div>
</div>
	 <div class="navbar">
	 <div class = "ul li a li a:hover">
		<div class="option">
		<h2>Options</h2>
		 </div>
			<nav>
				<ul class="ul">
					<li class="li"><a class="active" href="index_assessment.php">Home</a></li> <!-- Why is it not horizontal! -->
					<li class = "li"><a class="active" href="menu.php">Menu</a></li>
					<li class="li"><a class="active" href="items.php">Items</a></li>
					<li class = "li"><a class="active" href="weekly_special.php">Weekly Specials</a></li>
				</ul>
			</nav>
			</div>
		</div>


<div class="wrap">
<div class="img_div">	
<img src="images/sushi.jpg" alt="sushi" title="sushi" width="320" height="320">
<img src="images/brownie.jpg" alt="brownie" title="brownie" width="320" height="320">

	</div>
</div>
		<div class = "menu">
			
<?php

$sql = "SELECT * FROM Items"; 


$rs = mysqli_query($dbcon, $sql)
or die ('Problem with query' . mysqli_error());

?>

<table border="1" summary="Staff Orders">
<tr>
<th>Item</th>
<th>Cost</th>
<th>Nutrition</th>
<th>Availability</th>
</tr>

<?php
while ($row = mysqli_fetch_array($rs)) { ?>

<tr>

<td><?php echo $row["Item"]?></td>
<td><?php echo $row["Cost"]?></td>
<td><?php echo $row["Nutrition"]?></td>
<td><?php echo $row["Availability"]?></td>

</tr>


<?php   }
mysqli_close($dbcon); ?>
	<div class="p1">
	 <form name='drinks_form' id='drinks_form' method='get' action='availability.php'>

		<!--drink button-->
		<input type='submit' name='drinks_button' value='Sort by availability'>
	</form>
	</div>
</table>
</div>
	<div class="footer">
		<footer>
			<p> &copy; 2022 E Squire. Please note, these images are merely stock images and should not be used as an example of what the items at the WEGC Cafe look like.</p>
			<p class="attribution">"<a target="_blank" rel="noopener noreferrer" href="https://www.flickr.com/photos/78779574@N00/8486536177">Best Salmon Sushi</a>" by <a target="_blank" rel="noopener noreferrer" 			href="https://www.flickr.com/photos/78779574@N00">Michael Kappel</a> is licensed under <a target="_blank" rel="noopener noreferrer" href="https://creativecommons.org/licenses/by-nc/2.0/?ref=openverse">CC BY-NC 2.0 <img src="https://mirrors.creativecommons.org/presskit/icons/cc.svg" style="height: 1em; margin-right: 0.125em; display: inline;"><img src="https://mirrors.creativecommons.org/presskit/icons/by.svg" style="height: 1em; margin-right: 0.125em; display: inline;"><img src="https://mirrors.creativecommons.org/presskit/icons/nc.svg" style="height: 1em; margin-right: 0.125em; display: inline;">. </p>
			<p class="attribution">"<a target="_blank" rel="noopener noreferrer" href="https://www.flickr.com/photos/45488928@N00/2975510440">Brownies</a>" by <a target="_blank" rel="noopener noreferrer" href="https://www.flickr.com/photos/45488928@N00">Cristiano Betta</a> is licensed under <a target="_blank" rel="noopener noreferrer" href="https://creativecommons.org/licenses/by/2.0/?ref=openverse">CC BY 2.0 <img src="https://mirrors.creativecommons.org/presskit/icons/cc.svg" style="height: 1em; margin-right: 0.125em; display: inline;"><img src="https://mirrors.creativecommons.org/presskit/icons/by.svg" style="height: 1em; margin-right: 0.125em; display: inline;">. </p>
	</footer>
</div>
</div>
</body>
</html>
