<html>
	<head>
		<title>
		</title>
		</head>
			<body>
				<?php
$hostname= "localhost";
$db = "support";
$username= "root";
$password= "";
$conn = new mysqli($hostname, $username, $password,$db);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }
 
?>
	</body>
			
</html>