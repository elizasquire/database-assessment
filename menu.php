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

$rs = mysqli_query($dbcon, $all_menu_query)
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
			<li> <a href="index_assessment.php">Home</a></li>
			<li> <a href="menu.php">Our Menu</a></li>
			<li> <a href="items.php">Items</a></li>
			<li> <a href="weekly_special.php">Weekly Specials</a></li>
		</ul>
	</nav>





<table border="1" summary="Menu">
<tr>
<th>Item</th>
<th>ID</th>
</tr>
	
<?php
while ($row = mysqli_fetch_array($rs)) { ?>
<tr>

<td><a href="items.php?Item=<?php echo $row["Item"]?>">
    <?php echo $row["Item"]?></a>
<td><?php echo $row["ID"]?></td>

</tr>
		
<?php
}
?>
</table>
</main>
</body>
</html>
