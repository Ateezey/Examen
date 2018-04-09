<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>

<body>

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
            echo "Någon använder redan den här mail adressen. Testa igen!";
        }
        $stmt->close();
        $conn->close();
    }
} else{
    echo "Alla fällt måste fyllas i.";
    die();
}

?>

</body>
</html>