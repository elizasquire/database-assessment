<?php
/*Connect to database */
$dbcon = mysqli_connect("localhost", "elizasquire", "CQYu2NF", "elizasquire_1");

if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL:".mysqli_connect_error(); die();} /*This is what connects the website to my database, so my tables can be accessed*/
else {																   /* so my tables can be accessed */
	echo "connected to database";}
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
	<?php
	echo "<h1>Our Weekly Specials"."</h1>";
	?>
</head>
<body>
<main>
	<nav>

			<a class="active" href="index_assessment.php">Home</a>
  			<a href="menu.php">Menu</a>
  			
	</nav>

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
 
</main>
</body>
</html>
