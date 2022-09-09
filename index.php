<?php
/*Connect to database */
$dbcon = mysqli_connect("localhost", "elizasquire", "CQYu2NF", "elizasquire_cafe");

if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL:".mysqli_connect_error(); die();} /*This is what connects the website to my database, so my tables can be accessed*/
else {																   /* so my tables can be accessed */
	echo "connected to database";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> WEGC Cafe </title>
</head>
<body>	
<?php
echo "<h1>Welcome to WEGC Cafe "."</h1>";

?>
<main>
	<header>
		<h1>Options</h1>
	</header>
	<nav>
  <a class="active" href="index_assessment.php">Home</a>
  <a href="menu.php">Menu</a>
  <a href="items.php">Items</a>
  <a href="weekly_special.php">Weekly Special</a>
	</nav>
	<?php
	echo "<p>Here at WEGC we are committed to providing our students with cheap and well made food that relieves the stress of packed lunches.
	</p>";

	?>
</main>
</body>
</html>
