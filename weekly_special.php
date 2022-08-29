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
