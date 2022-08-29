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
		<ul>
			<li> <a href="index_assessment.php">Home</a></li>
			<li> <a href="menu.php">Our Menu</a></li>
			<li> <a href="items.php">Items</a></li>
			<li> <a href="weekly_special.php">Weekly Specials</a></li>
		</ul>
	</nav>

<?php

$result = mysqli_query($dbcon, $all_ws_query);
if (!$result) 
{
	$message = 'ERROR: ' . mysqli_connect_error();
	return $message;
}
else
{
	$i = 0;
	echo '<html><body><table><tr>';
	while ($i < mysqli_num_fields($result))
	{
		$tr = mysqli_fetch_field($result);
		echo '<td>' . $tr->name . '</td>';
		$i = $i + 1;
	}
	echo '</tr>';
	
	while ( ($row = mysqli_fetch_row($result))) 
	{
		$count = count($row);
		$y = 0;
		echo '<tr>';
		while ($y < $count)
		{
			$c_row = current($row);
			echo '<td>' . $c_row . '</td>';
			next($row);
			$y = $y + 1;
		}
		echo '</tr>';
		
	}
	mysqli_free_result($result);
	
	echo '</table></body></html>';

}
?>
</main>
</body>
</html>
