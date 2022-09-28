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
<div class="grid-container">
<div class="header">
<div class="h1">
<?php
echo "<h1>Welcome to WEGC Cafe "."</h1>";

?>
</div>
</div>

	<div class = "navbar">
	<div class = "ul  li a li a:hover">
  	<h2>Options</h2>

			<nav>
				<ul class="ul">
					<li class="li"><a class="active" href="index_assessment.php">Home</a></li> 
					<li class = "li"><a class="active" href="menu.php">Menu</a></li>
					<li class="li"><a class="active" href="items.php">Items</a></li>
					<li class = "li"><a class="active" href="weekly_special.php">Weekly Specials</a></li>
				</ul>
			</nav>
			</div>
	</div>
	<div class = "index_p">
	<div class="p">
	<?php
	echo "<p>Here at the WEGC cafe we are committed to providing our students with cheap and well made food that relieves the stress of packed lunches. We offer a wide range
	of food and drinks for students to enjoy. We offer cabinet and counter food, as well as cooked meals. We are a student and staff run organisation who are passionate about providing
	a great experience for our customers. Our goals are to make new and current students feel safe and welcome in our WEGC community, by providing them with delicious and nutritious food
	at reasonable prices.
	
	</p>";

	?>
	</div>
	</div>
		<div class="img_div">
			<img src="images/wegc.png" alt="wegc school logo" title="wegc school logo" width="250" height="250">	
			<img src="images/croissant.jpg" alt="croissant" title="croissant" width="250" height="250">	
		</div>

		
	<div class="wrap">
	<div class="footer">
	<footer>
		<p>&copy; 2022 E Squire. Picture of Wellington East Girls' College logo: sourced directly from wegc.school.nz. Please note, these images are merely stock images and should not be used as an example of what the items at the WEGC Cafe look like.</p>
		
		<p class="attribution">"<a target="_blank" rel="noopener noreferrer" href="https://www.flickr.com/photos/28669118@N00/4766528912">20100703 making croissants 16</a>" by <a target="_blank" rel="noopener noreferrer" 			href="https://www.flickr.com/photos/28669118@N00">JStove</a> is licensed under <a target="_blank" rel="noopener noreferrer" href="https://creativecommons.org/licenses/by-nd-nc/2.0/jp/?ref=openverse">CC BY-NC-ND 2.0 			<img src="https://mirrors.creativecommons.org/presskit/icons/cc.svg" style="height: 1em; margin-right: 0.125em; display: inline;"><img src="https://mirrors.creativecommons.org/presskit/icons/by.svg" 							style="height: 		1em; margin-right: 0.125em; display: inline;"><img src="https://mirrors.creativecommons.org/presskit/icons/nc.svg" style="height: 1em; margin-right: 0.125em; display: inline;"><img 							src="https://mirrors.creativecommons.org/presskit/icons/nd.svg" style="height: 1em; margin-right: 0.125em; display: inline;">.</p>
	</footer>
	</div>
	</div>
</div>
</body>
</html>
