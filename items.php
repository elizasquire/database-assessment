<?php
/*Connect to database */
$dbcon = mysqli_connect("localhost", "elizasquire", "CQYu2NF", "elizasquire_1");

if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL:".mysqli_connect_error(); die();} /*This is what connects the website to my database, so my tables can be accessed*/
else {																   /* so my tables can be accessed */
	echo "connected to database";
 ?>
<?php
//Queries for this page
$all_items_query = "SELECT Item, Cost, Nutrition, Availability FROM Items";
$all_items_result = mysqli_query($dbcon, $all_items_query);
//then display the result here
?>

<!DOCTYPE html>
<html lang="en">
<head>
<body>
<main>
	<header>
		<h1>Items</h1>
	</header>
	<nav>
		<ul>
			<li> <a href="index_assessment.php">Home</a></li>
			<li> <a href="menu.php">Our Menu</a></li>
			<li> <a href="items.php">Items</a></li>
			<li> <a href="weekly_special.php">Weekly Specials</a></li>
		</ul>
	</nav>
</main>
</body>
</html>
