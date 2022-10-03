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
/* Menu Query */
/*sets item as 1 so that a result will always be returned*/
if(isset($_GET['Item'])){
	$item_id = $_GET['Item'];
}else{
	$item_id = 1;
}
/*sets ID as 1 so that a result will always be returned*/
if(isset($_GET['ID'])){
	$id = $_GET['ID'];
}else{
	$id = 1;
}
?>
<?php
$all_menu_query = "SELECT ID, Item FROM menu   
ORDER BY ID ASC;";		/*query that calls the menu*/
$rs = mysqli_query($dbcon, $all_menu_query)  /*connects the query to the database*/
or die ('Problem with query' . mysqli_error());

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="css/styles.css" rel="stylesheet"> <!-- Connects to stylesheet -->
	<title> WEGC Cafe </title>

</head>
	
<body>
<div class="grid-container-menu">  <!-- specific grid container for menu page -->
<div class="header">
<div class="h1">
<?php
echo "<h1>Menu"."</h1>";

?>
</div>
</div>

	<div class="navbar">
	 <div class = "ul li a li a:hover">    <!-- nav bar divs-->
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
<div class="img_div">	
<img src="images/fruit_salad.jpg" alt="fruit salad" title="fruit salad" width="350" height="350"> <!--images-->
<br>
<br>
<br> <!-- break between images so there is a gap between them -->
<br>
<br>
<img src="images/garlic_bread(1).jpg" alt="garlic bread" title="garlic bread" width="350" height="350">

	</div>
		<div class = "menu">
		<div class="a:visited">
<form name='drinks_form' id='drinks_form' method='get' action='menu_sort.php'> <!-- sort button that sorts the menu by cost when the user clicks on it -->

		<!--drink button-->
		<input type='submit' name='menu button' value='Sort by cost'>
	</form>
<?php
	echo "<p>Click the item to find out more information!</p>";
	echo "<p>Click the ID to find out when this is on special!</p>"; /* Tells the user how to use the links in the menu*/
?>
			
			<table border="1">
			<tr>
			<th>Item</th>  <!-- names of the columns -->
			<th>ID</th>
			</tr>
	
<?php
while ($row = mysqli_fetch_array($rs)){ ?>
<tr>
<td><a href="items_individual.php?Item=<?php echo $row["Item"]?>"><?php echo $row["Item"]?></a> <!--links the items to the page with the individual information about each item-->
<td><a href="weekly_special_individual.php?ID=<?php echo $row["ID"]?>"> <!-- links the ids to the page with the weekly special information about that particular id that was clicked -->
	<?php echo $row["ID"]?></a>
</tr>

<?php
	}
?>
</table>
 
</div>
</div>

	<div class="aside">  <!-- aside with extra information about wegc-->
		<aside>
			<img src="images/wegc.jpg" alt="front of wellington east girls' college" title="wellington east girls' college" width="350" height="350"> <!-- dimensions are equal so image is a square-->
			<p> Wellington East Girls' College was founded in 1925 as the second girls' school in Wellington City, as the role at Wellington Girls' College was getting too large for staff to manage.
				It now has its own role if 1058 pupils (as of July 2022). The WEGC cafe is situated in the new building Matairangi (pictured above) which was opened in 2019. It provides a large amount of
				the sense of community at WEGC, as many pupils gather here during meal time while purchasing food. At WEGC Cafe, we are proud to offer a safe and happy environment in which students can 					congregate while queuing up to get their food.</p>
		</aside>
	</div>
	
	<div class="footer"> <!-- footer div opens -->
		<footer>
			<p>&copy; 2022 E Squire. Please note, these images are merely stock images and should not be used as an example of what the items at the WEGC Cafe look like.</p>
			<p> File:Wellington East Girls' College.jpg" by Tom Ackroyd is licensed under CC BY-SA 4.0. To view a copy of this license, visit:
				<a href ="https://creativecommons.org/licenses/by-sa/4.0/?ref=openverse">https://creativecommons.org/licenses/by-sa/4.0/?ref=openverse</a></p> <!--Credits from creative commons -->
				<!--crediting the image of wegc with a direct link to the information about the copyright license -->
			<p>"Fruit Salad" by marktesta124 is licensed under CC BY-NC-ND 2.0. To view a copy of this license, visit: <a href ="https://creativecommons.org/licenses/by-nc-nd/2.0/?ref=openverse">
				https://creativecommons.org/licenses/by-nc-nd/2.0/?ref=openverse</a></p>
				<!-- crediting the image of the fruit salad from creative commons -->


			<p>"Garlic bread" by Charles Haynes is licensed under CC BY-SA 2.0. To view a copy of this license, visit: <a href="https://creativecommons.org/licenses/by-sa/2.0/?ref=openverse">
				https://creativecommons.org/licenses/by-sa/2.0/?ref=openverse</a></p>
			<!-- crediting the image of the garlic bread from creative commons -->
				
		</footer>
</div>
</div>
</body>
</html>
