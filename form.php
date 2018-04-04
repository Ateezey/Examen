<?php
$Namn = $_POST['Namn'];
$Efternamn = $POST['Efternamn'];
$Email = $POST['Email'];

if (!empty($Namn) || !empty($Efternamn) || !empty($Email)) {
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "registers";

	//create connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else{
		$SELECT = "SELECT Email From registers Where Email = ? Limit 1";
		$INSERT = "INSERT Into registers (Namn, Efternamn, Email) values (?, ?, ?)";

		//Prepare statement 
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $Email)
		$stmt->execute();
		$stmt->bind_result($Email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if ($rnum==0) {
			$stmt->close();

			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ssssii", $Namn, $Efternamn, $Email);
			$stmt->execute();
			echo "New record inserted successfully"
		} else{
			echo "Someone is already resgisterd using this Email.";
		}
		$stmt->close();
		$conn->close();
	}
} else{
	echo "All field are required";
	die();
}

?>