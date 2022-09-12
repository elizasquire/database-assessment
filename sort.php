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
	$item = $_GET['Item'];
}else{
	$item = 1;
}
if(isset($_GET['ID'])){
	$id = $_GET['ID'];
}else{
	$id = 1;
}
?>
<?php
$all_menu_query = "SELECT Item, Cost FROM Items
ORDER BY Cost ASC;";

$rs = mysqli_query($dbcon, $all_menu_query)
or die ('Problem with query' . mysqli_error());

?>
	`
<!DOCTYPE html>
<html lang="en">
<head>
	<title> WEGC Cafe </title>
</head>
	<h1>Costs</h1>
<nav>
  <a class="active" href="index_assessment.php">Home</a>
  <a href="menu.php">Menu</a>
</nav>
<body>
<table border="1" summary="Menu">
<tr>
<th>Item</th>
<th>Cost</th>
</tr>
	
<?php
while ($row = mysqli_fetch_array($rs)){ ?>
<tr>

<td><?php echo $row["Item"]?></td>
<td><?php echo $row["Cost"]?></td>

</tr>
<?php
	}
?>
