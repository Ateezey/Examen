<?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

if (!empty($name) || !empty($lastname) || !empty($email)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "examendb";

    //create connection 
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    } else {
        $SELECT = "SELECT email From register Where email = ? Limit 1";
        $INSERT = "INSERT Into register (name, lastname, email) values(?, ?, ?)";

        //prepare statement 
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0) {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sss", $name, $lastname, $email);
            $stmt->execute();
            echo "Grattis! Du har nu registrerat dig";
        } else {
            echo "Någon använder redan den här mail adressen.";
        }
        $stmt->close();
        $conn->close();
    }
} else{
    echo "Alla fällt måste fyllas i.";
    die();
}

?>