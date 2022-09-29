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
$ws = "SELECT Item, Availability FROM Items
ORDER BY Availability ASC";

$rs = mysqli_query($dbcon, $ws)
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
<div class="grid-container">
<div class="header">
<div class="h1">
	<h1>Availability</h1>
</div>
</div>
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
<div class="menu">
	<p>These are the current availability statuses of our items:</p>
<table border="3" summary="Items">
<tr>
<th>Item</th>
<th>Availability</th>
</tr>
	
<?php
while ($row = mysqli_fetch_array($rs)){ ?>
<tr>

<td><?php echo $row["Item"]?></td>
<td><?php echo $row["Availability"]?></td>

</tr>
<?php
	}
?>
</table>
</div>
</div>
</body>
</html>
