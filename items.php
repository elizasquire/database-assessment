<?php
/*Connect to database */
$dbcon = mysqli_connect("localhost", "elizasquire", "CQYu2NF", "elizasquire_1");

if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL:".mysqli_connect_error(); die();} /*This is what connects the website to my database, so my tables can be accessed*/
else {																   /* so my tables can be accessed */
	echo "connected to database";
 ?>
<?php
//Queries for this page
$all_items_query = "SELECT Item, Cost, Nutrition, Availability FROM Items";
$all_items_result = mysqli_query($dbcon, $all_items_query);
//then display the result here
?>