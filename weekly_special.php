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

if(isset($_GET['ID'])){
	$id = $_GET['ID'];
}else{
	$id = 1;
}
$sql = "SELECT * FROM weekly_special
ORDER BY Week ASC"; 


$rs = mysqli_query($dbcon, $sql)
or die ('Problem with query' . mysqli_error());

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="css/styles.css" rel="stylesheet">
	<title> WEGC Cafe </title>
</head>
<body>
<div class="grid-container-ws">
<div class="header">
<div class="h1">
<?php
echo "<h1>Weekly Specials"."</h1>";

?>
</div>
</div>
<div class = "navbar">
<div class = "ul li a li a:hover">
			<h2>Options</h2>

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

		<div class = "menu">
<table border="1" summary="Staff Orders">
<tr>
<th>Week On Special</th>
<th>Item On Special</th>
<th>ID</th>
<th>New Cost</th>
</tr>

<?php
while ($row = mysqli_fetch_array($rs)) { ?>

<tr>

<td><?php echo $row["Week"]?></td>
<td><?php echo $row["item_on_special"]?></td>
<td><?php echo $row["ID"]?></td>
<td><?php echo $row["new_cost"]?></td>

</tr>
<?php
	}
?>
 <form name='drinks_form' id='drinks_form' method='get' action='weekly_special_sort.php'>

		<!--drink button-->
		<input type='submit' name='drinks_button' value='Sort by cost'>
	</form>
</table>
</div>
<div class="aside">
		<aside>
			<img src="images/wegc.jpg" alt="front of wellington east girls' college" title="wellington east girls' college" width="350" height="350">
			<p> To the left is a list of our weekly specials. We like to provide cheaper options for all our students when possible. Our weekly special timetable runsthrough Term 1 and 2, and is then repeated for 
				Terms 3 and 4. We have a weekly special every week apart from Week 10 of each term.</p>
		</aside>
	</div>
	
	<div class="footer">
		<footer>
		<p>&copy; 2022 E Squire.</p>
			<p class="attribution">"<a target="_blank" rel="noopener noreferrer" href="https://commons.wikimedia.org/w/index.php?curid=89490464">File:Wellington East Girls' College.jpg</a>" by <a target="_blank" 						rel="noopener noreferrer"
			href="https://commons.wikimedia.org/wiki/User:Quilt_Phase">Tom Ackroyd</a> is licensed under <a target="_blank" rel="noopener noreferrer" href="https://creativecommons.org/licenses/by-sa/4.0/?								ref=openverse">CC BY-SA 4.0 <img src="https://mirrors.creativecommons.org/presskit/icons/cc.svg" 
			style="height: 1em; margin-right: 0.125em; display: inline;"><img 	src="https://mirrors.creativecommons.org/presskit/icons/by.svg" style="height: 1em; margin-right: 0.125em; display: inline;"><img 							src="https://mirrors.creativecommons.org/presskit/icons/sa.svg" style="height: 1em; margin-	right: 0.125em; display: inline;">. </p> <!--Credits from creative commons -->
		</footer>
	</div>
</div>
</body>
</html>
