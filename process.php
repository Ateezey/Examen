
<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
</head>
	<div class=="container-fluid">
		<div class="row">
			<div class="col-md-12">
<?php 
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	mysql_connect("localhost", "root", "");
	mysql_select_db("examendb");

	$result = mysql_query("select * from users where username = '$username' and password = '$password'") or die("Failed to query database".mysql_error());

	$row = mysql_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password ){
		echo "Login success!!";
	} else {
		echo "Failed to login";
	}
?>
</div>
<div class="col-md-6">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "examendb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, lastname, email FROM register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "
		<br> 
			Name: ". $row["name"]. " " . $row["lastname"] . " - 
			Email: " . $row["email"] . "
		<br>"
		;
		
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
</div>
<div class="col-md-6">
<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="examendb";
	$con=mysqli_connect($servername,$username,$password,$dbname);

	$sql="SELECT count(id) AS total FROM register";
	$result=mysqli_query($con,$sql);
	$values=mysqli_fetch_assoc($result);
	$num_rows=$values['total'];
	echo "Antal registrerade till eventet: <br>". $num_rows;
?>
</div>
</div>
</div>
</html>