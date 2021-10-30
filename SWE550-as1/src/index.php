<!DOCTYPE html>
<html lang="en">
<head>
<title>Show students</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<h1>show students</h1>

<p>enter number of students:</p>

<p id="getN"><input type="number" id="Sn" name="Sn"
       min="1" max="10"></p>


<form action="index.php" method="get">
  <input type="hidden" name="act" value="run">
  <input type="submit" value="get names">
</form>

<?php

if (!empty($_GET['act'])) {

getenv('MYSQL_DBHOST') ? $db_host=getenv('MYSQL_DBHOST') : $db_host="localhost";
getenv('MYSQL_DBPORT') ? $db_port=getenv('MYSQL_DBPORT') : $db_port="3306";
getenv('MYSQL_DBUSER') ? $db_user=getenv('MYSQL_DBUSER') : $db_user="root";
getenv('MYSQL_DBPASS') ? $db_pass=getenv('MYSQL_DBPASS') : $db_pass="secret";
getenv('MYSQL_DBNAME') ? $db_name=getenv('MYSQL_DBNAME') : $db_name="names";

if (strlen( $db_name ) === 0)
  $conn = new mysqli("$db_host:$db_port", $db_user, $db_pass);
else 
  $conn = new mysqli("$db_host:$db_port", $db_user, $db_pass, $db_name);


if ($conn->connect_error) 
	die("Connection failed: " . $conn->connect_error);
$query = "SELECT * FROM students ";
$result1 = mysqli_query($conn, $query);
$x = 0; 
while($row = mysqli_fetch_row( $result1 )){
// if ($x< (int)$_GET['getN'])
 echo $row[0]."<br />";
 $x++; 
}
//$result -> free_result();
$conn->close();


}

?>

</body>
</html>