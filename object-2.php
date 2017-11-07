<?php
$title ="A Second Piece of Art" ;
$name = " DaVinci's Mona Lisa";
$description ="This is a classic copy of the portrait" ;
$code = "alert(This is a message)";
$lastUpdate = "Nov 1, 2017";

?>



<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title ?></title>
	</head>
	<body>
		<h1><?php echo $name ?></h1>
		<p><?php echo $description ?></p>
		<pre>
			<?php echo $code ?>
		</pre>
		<p><?php echo $lastUpdate; ?></p>
	</body>
</html>