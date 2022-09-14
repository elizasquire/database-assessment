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
	<?php
	echo "<h1>Items Information "."</h1>";
	?>
</head>
<body>
	<header>
		<h1>Items</h1>
	</header>
	<nav>
		<a class="active" href="index_assessment.php">Home</a>
  		<a href="menu.php">Back to Menu</a>
	</nav>
	




<?php

$sql = "SELECT * FROM Items
WHERE Items.Item='$item'"; 


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
</table>
</body>
</html>
