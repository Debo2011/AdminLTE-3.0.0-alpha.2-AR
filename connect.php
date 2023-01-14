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
  //echo "Connected successfully";


/*  $conn = mysql_connect($hostname,$username,$password);
mysql_select_db($db,$conn);
mysql_query('SET Character_set_results=utf8');
mysql_query('SET names=utf8');
mysql_query('SET Character_set_client=utf8');
mysql_query('SET Character_set_connection=utf8');
mysql_query('SET Character_set_results=utf8');
mysql_query('SET collation_connection=utf8_general_ci');	 */ 
?>
	</body>
			
</html>