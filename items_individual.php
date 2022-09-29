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
<meta charset="utf-8">
<link href="css/styles.css" rel="stylesheet">
	<title> WEGC Cafe </title>

</head>
<body>
<div class="grid-container-sort">
	<div class = "navbar">
	 <div class = "ul li a li a:hover">
	
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
</div>
</div>
</body>
</html>
