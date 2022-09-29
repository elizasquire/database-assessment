<?php
/*Connect to database */
$dbcon = mysqli_connect("localhost", "elizasquire", "CQYu2NF", "elizasquire_1");

if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL:".mysqli_connect_error(); die();} /*This is what connects the website to my database, so my tables can be accessed*/
else {																   /* so my tables can be accessed */
	echo "";}
?>

<?php
$all_ws_query = "SELECT ID, item_on_special, new_cost, Week from weekly_special
ORDER BY Week ASC;"; /*ws stands for weekly special*/
$all_ws_result = mysqli_query($dbcon, $all_ws_query);
?>
<?php

if(isset($_GET['ID'])){
	$ID = $_GET['ID'];
}else{
	$ID = "0";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="css/styles.css" rel="stylesheet">

</head>
<body>

<div class="grid-container">
	<div class="navbar">
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
<?php
$sql = "SELECT * FROM weekly_special
WHERE weekly_special.ID='$ID'"; 


$rs = mysqli_query($dbcon, $sql)
or die ('Problem with query' . mysqli_error());

?>

<table border="1" summary="Staff Orders">
<tr>
<th>ID</th>
<th>Item on special</th>
<th>New Cost</th>
<th>Week on special</th>
</tr>

<?php
while ($row = mysqli_fetch_array($rs)) { ?>

<tr>

<td><?php echo $row["ID"]?></td>
<td><?php echo $row["item_on_special"]?></td>
<td><?php echo $row["new_cost"]?></td>
<td><?php echo $row["Week"]?></td>

</tr>


<?php   }
 ?>
</table>
</div>
</div>
</body>
</html>
