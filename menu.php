<?php
/*Connect to database */
$dbcon = mysqli_connect("localhost", "elizasquire", "CQYu2NF", "elizasquire_1");

if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL:".mysqli_connect_error(); die();} /*This is what connects the website to my database, so my tables can be accessed*/
else {																   /* so my tables can be accessed */
	echo "connected to database";
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
$ws_query =  "SELECT ID, item_on_special, new_cost, Week from weekly_special";
$rs = mysqli_query($dbcon, $all_menu_query)
or die ('Problem with query' . mysqli_error());
$ws =  mysqli_query($dbcon, $ws_query)
or die ('Problem with query' . mysqli_error());
?>

	`
<!DOCTYPE html>
<html lang="en">
<head>
	<title> WEGC Cafe </title>
</head>
<body>


<?php
echo "<h1>Welcome to WEGC Cafe "."</h1>";

?>

<main>
	<header>
		<h1>Options</h1>
	</header>
	<nav>
		<ul>
			
			<nav>
		  <a class="active" href="index_assessment.php">Home</a>
		  <a href="menu.php">Menu</a>
	</nav>
		</ul>
	</nav>





<table border="1" summary="Menu">
<tr>
<th>Item</th>
<th>ID</th>
</tr>
	
<?php
while ($row = mysqli_fetch_array($rs)){ ?>
<tr>

<td><a href="items.php?Item=<?php echo $row["Item"]?>">
    <?php echo $row["Item"]?></a>
<td><a href="weekly_special.php?ID=<?php echo $row["ID"]?>">
	<?php echo $row["ID"]?></a>
</tr>
<?php
	}
?>
 <form name='drinks_form' id='drinks_form' method='get' action='sort.php'>

		<!--drink button-->
		<input type='submit' name='drinks_button' value='Sort by cost'>
	</form>
<?php
	echo "<p>Click the item to find out more information!</p>";
	echo "<p>Click the ID to find out when this is on special!</p>";
	?>

</table>
</main>
</body>
</html>
