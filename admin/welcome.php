<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <style type="text/css">
        body{ font: 18px sans-serif; text-align: center; }
        .list{
            text-align: left;
            height: 50vh;
            overflow-y: scroll;
        }
        .amount{
            font-size:50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1>Welcome <b><?php echo htmlspecialchars($_SESSION['username']); ?></b></h1>
                <hr>
            </div>
            <div class="col-md-6 amount">
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
    echo "Submits <br>". $num_rows;
?>
            </div>
             <div class="col-md-6 list">
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
        </div>
    </div>
    <p><a href="logout.php" class="btn btn-danger">Sign out</a></p>
</body>
</html>