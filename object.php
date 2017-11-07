<?php
$id = $_REQUEST['id'];

$object = array(
"title" => "", 
"name" => "",
"description" => "", 
"code" => "",
"lastUpdate" => "",
);


// set the object variable based on the id value from the URL
if ($id == 1){
	$object = array(
	"title" => "First Piece of Art", 
	"name" => "Leonarda DaVinci",
	"description" => "This is a classic copy of the portrait",
	"code" => "alert(This is a message)",
	"lastUpdate" => "Nov 2, 2017",
	);
}
elseif ($id == 2) {
	$object = array(

	"title" => "A Second Piece of Art" ,
	"name" => " DaVinci's Mona Lisa",
	"description" => "This is a classic copy of the portrait" ,
	"code" => "alert(This is a message)",
	"lastUpdate" => "Nov 1, 2017",
	);	
}

?>


<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $object["title"]; ?></title>
	</head>
	<body>

		<h1><?php echo $object["name"] ?></h1>
		<p><?php echo $object["description"] ?></p>
		<pre>
			<?php echo $object["code"] ?>
		</pre>
		<p><?php echo $object["lastUpdate"] ?></p>
	</body>
</html>