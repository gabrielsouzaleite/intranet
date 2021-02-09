<?php
$link = mysqli_connect("localhost", "root", "", "nova_intranet");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$results = mysqli_query($link, "SELECT * FROM `usuario`");

mysqli_close($link);

?>
<!DOCTYPE html>
<html>
<head>
	<title> Página Inicial </title>
	  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

 
	<?php
   include 'menu.php'
  
	?>
</body>
</html>