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
	$item = $_GET['Item'];  /* sets the item as 1 automatically so a result will always be returned */
}else{
	$item = 1;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="css/styles.css" rel="stylesheet"> <!-- connecting to the stylesheet -->
	<title> WEGC Cafe </title>

</head>
	
<body>
<div class="grid-container"> <!-- opening the grid container -->
<div class="header">
<div class="h1">
<?php
echo "<h1>Items"."</h1>";

?>
</div>
</div>
	 <div class="navbar">				
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


<div class="wrap">
<div class="img_div">	
<img src="images/sushi.jpg" alt="sushi" title="sushi" width="320" height="320">
<img src="images/brownie.jpg" alt="brownie" title="brownie" width="320" height="320">

	</div>
</div>
		<div class = "menu">
			
<?php

$sql = "SELECT * FROM Items"; /*the query that displays all the information about the items*/


$rs = mysqli_query($dbcon, $sql) /*connects the query to the database*/
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

<td><?php echo $row["Item"]?></td>    <!--displays all the data under these fields in the items table -->
<td><?php echo $row["Cost"]?></td>
<td><?php echo $row["Nutrition"]?></td>
<td><?php echo $row["Availability"]?></td>

</tr>


<?php   }
mysqli_close($dbcon); ?> <!-- closes the database for the rest of the page -->
	 <form name='drinks_form' id='drinks_form' method='get' action='availability.php'>

		<!--the button that sorts the items by availability when clicked on-->
		<input type='submit' name='drinks_button' value='Sort by availability'>
	</form>
</table>
</div>
	<div class="footer">
		<footer>
			<p> &copy; 2022 E Squire. Please note, these images are stock images and should not be used as an example of what the items at the WEGC Cafe look like.</p>
			<p>"Best Salmon Sushi" by Michael Kappel is licensed under CC BY-NC 2.0. To view a copy of this license, visit: <a href = "https://creativecommons.org/licenses/by-nc/2.0/?ref=openverse">
				https://creativecommons.org/licenses/by-nc/2.0/?ref=openverse.</a></p> <!-- crediting the sushi image-->
			<p>"Brownies" by Cristiano Betta is licensed under CC BY 2.0. To view a copy of this license, visit: <a href = "https://creativecommons.org/licenses/by/2.0/?ref=openverse">
				https://creativecommons.org/licenses/by/2.0/?ref=openverse</a></p> <!-- crediting the brownie image-->
	</footer>
</div>
</div> <!-- closing the grid container div-->
</body>
</html>
