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


if(isset($_GET['ID'])){   /* sets the ID as 1 automatically so a result will always be returned */
	$id = $_GET['ID'];
}else{
	$id = 1;
}

/* the query which calls all the fields from the weekly special table to display on this page */
$sql = "SELECT * FROM weekly_special    
ORDER BY Week ASC"; 


$rs = mysqli_query($dbcon, $sql)  /* connecting the query to the database */
or die ('Problem with query' . mysqli_error());

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="css/styles.css" rel="stylesheet">  <!-- Connecting to the stylesheet -->
	<title> WEGC Cafe </title>
</head>
<body>
<div class="grid-container-ws">  <!-- Opening the div for the whole page's container, specifically for the weekly special page -->
<div class="header">
<div class="h1">
<?php
echo "<h1>Weekly Specials"."</h1>";

?>
</div>
</div>
<div class = "navbar"> <!-- overarching navbar div -->
<div class = "ul li a li a:hover"> <!-- all the nav bar divs in one -->
			<h2>Options</h2>

			<nav>
				<ul class="ul">
					<li class="li"><a class="active" href="index_assessment.php">Home</a></li> 
					<li class = "li"><a class="active" href="menu.php">Menu</a></li>
					<li class="li"><a class="active" href="items.php">Items</a></li>
					<li class = "li"><a class="active" href="weekly_special.php">Weekly Specials</a></li>
				</ul>
			</nav>
			</div>
	</div>

	<div class = "menu"> <!-- opening the menu div -->
		<table border="1" summary="Staff Orders">
			<tr>
			<th>Week On Special</th>   <!-- individual field names -->
			<th>Item On Special</th>
			<th>ID</th>
			<th>New Cost</th>
			</tr>

			<?php
			while ($row = mysqli_fetch_array($rs)) { ?>

			<tr>

			<td><?php echo $row["Week"]?></td>       <!--displays all the data under these specific fields in the weekly special table, on this page -->
			<td><?php echo $row["item_on_special"]?></td>
			<td><?php echo $row["ID"]?></td>
			<td><?php echo $row["new_cost"]?></td>

			</tr>
			<?php
				}
			?>
 <form name='weekly_special_form' id='weekly_special_form' method='get' action='weekly_special_sort.php'> 		<!--button that allows the user to sort the weekly specials by cost-->

	<input type='submit' name='drinks_button' value='Sort by cost'>
</form>
</table>
</div>
<div class="aside">  <!-- aside div opens -->
		<aside>
			<img src="images/wegc.jpg" alt="front of wellington east girls' college" title="wellington east girls' college" width="350" height="350">
			<p> To the left is a list of our weekly specials. We like to provide cheaper options for all our students when possible. Our weekly special timetable runsthrough Term 1 and 2, and is then 					repeated for 
				Terms 3 and 4. We have a weekly special every week apart from Week 10 of each term.</p>    <!-- explains the weekly specials the user in a paragraph in an aside -->
		</aside>
	</div>
	
	<div class="footer">
		<footer>
		<p>&copy; 2022 E Squire.</p>
			<p> 20100703 making croissants 16" by JStove is licensed under CC BY-NC-ND 2.0. To view a copy of this license, visit: 
			<a  href="https://creativecommons.org/licenses/by-nd-nc/2.0/jp/?ref=openverse">https://creativecommons.org/licenses/by-nd-nc/2.0/jp/?ref=openverse</a></p>   
		<!--- Credit information sourced from creative commons -->
		</footer>
	</div>
</div> <!-- div for page container closed -->
</body>
</html>
