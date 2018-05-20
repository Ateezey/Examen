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

<!doctype html>
<html>

<head>

 <meta charset="utf-8" />
 <title>Textadmin</title>

<style>
    
    hr {
        width 90%;
    }
    
</style>


</head>

<body>

<br />
<br />

<?php
$db = mysqli_connect('localhost', 'root', '', 'examendb');
mysqli_query($db, "SET NAMES utf8");
if (!$db) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
?>

<br />
<br />

<br />

<p id='hero-content'>
    <?php
    if(isset($_POST['update01'])){ 
        $parag01 = $_POST['paragraf01'];
    $q = "UPDATE content SET header = '$parag01' WHERE ID = 1;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 1";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'header: ';
        echo $ord['header'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <input type='text' name='paragraf01'></input>
            <input type='submit' value='Skicka' name='update01'>
            </form>";   
    ?>
</p>

<br />

<p id='hero-content'>
    <?php
    if(isset($_POST['update1'])){ 
        $parag1 = $_POST['paragraf1'];
    $q = "UPDATE content SET breadtext = '$parag1' WHERE ID = 1;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 1";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'breadtext: ';
        echo $ord['breadtext'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <textarea rows='5' cols='50' name='paragraf1'></textarea>
            <input type='submit' value='Skicka' name='update1'>
            </form>";   
    ?>
</p>

<br />

<hr />

<p id='section-content'>
    <?php
    if(isset($_POST['update02'])){ 
        $parag02 = $_POST['paragraf02'];
    $q = "UPDATE content SET header = '$parag02' WHERE ID = 2;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 2";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'header: ';
        echo $ord['header'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <input type='text' name='paragraf02'></input>
            <input type='submit' value='Skicka' name='update02'>
            </form>";   
    ?>
</p>

<br />

<p id='section-content'>
    <?php
    if(isset($_POST['update2'])){ 
        $parag2 = $_POST['paragraf2'];
    $q = "UPDATE content SET breadtext = '$parag2' WHERE ID = 2;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 2";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'breadtext: ';
        echo $ord['breadtext'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <textarea rows='5' cols='50' name='paragraf2'></textarea>
            <input type='submit' value='Skicka' name='update2'>
            </form>";   
    ?>
</p>


</body>
</html>
    </div>

    <p><a href="logout.php" class="btn btn-danger">Sign out</a></p>
</body>
</html>