<?php
/*Connect to database */
$dbcon = mysqli_connect("localhost", "elizasquire", "CQYu2NF", "elizasquire_1");

if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL:".mysqli_connect_error(); die();} /*This is what connects the website to my database, so my tables can be accessed*/
else {																   /* so my tables can be accessed */
	echo "";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="css/styles.css" rel="stylesheet">

	<title>WEGC Cafe</title>
</head>
<body>	
<?php
echo "<h2>Welcome to WEGC Cafe "."</h2>";

?>

<main>
	<header>
		<h3>Options</h3>
	</header>
	<div class = "ul  li a li a:hover">
  
			<nav>
				<ul class="ul">
					<li class="li"><a class="active" href="index_assessment.php">Home</a></li> <!-- Why is it not horizontal! -->
					<li class="li"><a class="active" href="items.php">Items</a></li>
					<li class = "li"><a class="active" href="menu.php">Menu</a></li>
					<li class = "li"><a class="active" href="weekly_special.php">Weekly Specials</a></li>
				</ul>
			</nav>
			</div>

	<div class = "grid-item-c">
	<?php
	echo "<p>Here at the WEGC cafe we are committed to providing our students with cheap and well made food that relieves the stress of packed lunches. We offer a wide range
	of food and drinks for students to enjoy.
	</p>";

	?>
		
	</div>


</main>


</body>
</html>
