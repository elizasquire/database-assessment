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
/*SELECT menu_id, FROM menu*/
if(isset($_GET['Item'])){
	$item_id = $_GET['Item'];
}else{
	$item_id = 1;
}
if(isset($_GET['ID'])){
	$id = $_GET['ID'];
}else{
	$id = 1;
}
?>
<?php
$all_menu_query = "SELECT ID, Item FROM menu
ORDER BY ID ASC;";
$all_menu_result = mysqli_query($dbcon, $all_menu_query);
$rs = mysqli_query($dbcon, $all_menu_query)
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
<div class="grid-container-menu">
<div class="header">
<div class="h1">
<?php
echo "<h1>Menu"."</h1>";

?>
</div>
</div>

	<div class="navbar">
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
<div class="img_div">	
<img src="images/fruit_salad.jpg" alt="fruit salad" title="fruit salad" width="350" height="350">
<br>
<br>
<br>
<br>
<br>
<img src="images/garlic_bread(1).jpg" alt="garlic bread" title="garlic bread" width="350" height="350">

	</div>
		<div class = "menu">

			<table border="1" summary="Menu">
			<tr>
			<th>Item</th>
			<th>ID</th>
			</tr>
	
<?php
while ($row = mysqli_fetch_array($rs)){ ?>
<tr>
<div class="menu_a">
<td><a href="items_individual.php?Item=<?php echo $row["Item"]?>" style="text-decoration: none;" "color: #84CEEB;">
    <?php echo $row["Item"]?></a>
<td><a href="weekly_special_individual.php?ID=<?php echo $row["ID"]?>">
	<?php echo $row["ID"]?></a>
</div>
</tr>
<?php
	}
?>
 <form name='drinks_form' id='drinks_form' method='get' action='menu_sort.php'>

		<!--drink button-->
		<input type='submit' name='menu button' value='Sort by cost'>
	</form>
<?php
	echo "<p>Click the item to find out more information!</p>";
	echo "<p>Click the ID to find out when this is on special!</p>";
	?>
</table>
</div>

	<div class="aside">
		<aside>
			<img src="images/wegc.jpg" alt="front of wellington east girls' college" title="wellington east girls' college" width="350" height="350">
			<p> Wellington East Girls' College was founded in 1925 as the second girls' school in Wellington City, as the role at Wellington Girls' College was getting too large for staff to manage.
				It now has its own role if 1058 pupils (as of July 2022). The WEGC cafe is situated in the new building Matairangi (pictured above) which was opened in 2019. It provides a large amount of
				the sense of community at WEGC, as many pupils gather here during meal time while purchasing food. At WEGC Cafe, we are proud to offer a safe and happy environment in which students can congregate
				while queuing up to get their food.</p>
		</aside>
	</div>
	
	<div class="footer">
		<footer>
			<p>&copy; 2022 E Squire. Please note, these images are merely stock images and should not be used as an example of what the items at the WEGC Cafe look like.</p>
			<p class="attribution">"<a target="_blank" rel="noopener noreferrer" href="https://commons.wikimedia.org/w/index.php?curid=89490464">File:Wellington East Girls' College.jpg</a>" by <a target="_blank" 						rel="noopener noreferrer"
			href="https://commons.wikimedia.org/wiki/User:Quilt_Phase">Tom Ackroyd</a> is licensed under <a target="_blank" rel="noopener noreferrer" href="https://creativecommons.org/licenses/by-sa/4.0/?								ref=openverse">CC BY-SA 4.0 <img src="https://mirrors.creativecommons.org/presskit/icons/cc.svg" 
			style="height: 1em; margin-right: 0.125em; display: inline;"><img 	src="https://mirrors.creativecommons.org/presskit/icons/by.svg" style="height: 1em; margin-right: 0.125em; display: inline;"><img 							src="https://mirrors.creativecommons.org/presskit/icons/sa.svg" style="height: 1em; margin-	right: 0.125em; display: inline;">. </p> <!--Credits from creative commons -->
				
			<p class="attribution">"<a target="_blank" rel="noopener noreferrer" href="https://www.flickr.com/photos/43053759@N04/5582818920">Fruit Salad</a>" by <a target="_blank" rel="noopener noreferrer" 									href="https://www.flickr.com/photos/43053759@N04">marktesta124</a> is licensed under <a target="_blank" rel="noopener noreferrer" href="https://creativecommons.org/licenses/by-nc-nd/2.0/?ref=openverse">CC BY-				NC-ND 2.0 <img src="https://mirrors.creativecommons.org/presskit/icons/cc.svg" style="height: 1em; margin-right: 0.125em; display: inline;"><img src="https://mirrors.creativecommons.org/presskit/icons/by.svg" 				style="height: 1em; margin-right: 0.125em; display: inline;"><img src="https://mirrors.creativecommons.org/presskit/icons/nc.svg" style="height: 1em; margin-right: 0.125em; display: inline;"><img 							src="https://mirrors.creativecommons.org/presskit/icons/nd.svg" style="height: 1em; margin-right: 0.125em; display: inline;">.</p> <!-- Credit details for fruit salad image -->

			<p class="attribution">"<a target="_blank" rel="noopener noreferrer" href="https://www.flickr.com/photos/87232391@N00/937700197">Garlic bread</a>" by <a target="_blank" rel="noopener noreferrer" 								href="https://www.flickr.com/photos/87232391@N00">Charles Haynes</a> is licensed under <a target="_blank" rel="noopener noreferrer" href="https://creativecommons.org/licenses/by-sa/2.0/?ref=openverse">CC BY-SA 2.0 <img 	  src="https://mirrors.creativecommons.org/presskit/icons/cc.svg" style="height: 1em; margin-right: 0.125em; display: inline;"><img src="https://mirrors.creativecommons.org/presskit/icons/by.svg" style="height: 				1em; margin-right: 0.125em; display: inline;"><img src="https://mirrors.creativecommons.org/presskit/icons/sa.svg" style="height: 1em; margin-right: 0.125em; display: inline;">.</p>
		</footer>
</div>
</div>
</body>
</html>
