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
    <link rel="stylesheet" type="text/css" href="confirmation.css">
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
        } 
        $stmt->close();
        $conn->close();
    }
} else{
    echo "Alla fällt måste fyllas i.";
    die();
}

?>

<?php if ($rnum==0) : ?> 

    <div class="container-fluid">
        <div class="row justify-content-center">
                <div class="col-md-6 text-center register-valid">
                    <i class="fas fa-check"></i>
                    <h1 class="header-space" >Tack</h1>
                    <p>Du är nu regitrerad till evenemanget!</p>
                    <p>Plats: Kistamässan, Arne Beurlings Torg 5</p>
                    <p>Tid: 12:00</p>
                    <p>Datum: 25/5/2018</p>   
                </div>
        </div>
        <div class="row">
          <div class="col-md-6 offset-md-3 img-box">
          <img src="https://images.pexels.com/photos/834949/pexels-photo-834949.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
          </div>
          </div>

  <div class="row">
                <div class="col-md-4 offset-md-4 go-back-button">
                    <a href="index.html">
                    <button class="header-space cta">Tillbaka till startsidan!</button>
                    </a>
                </div>       
        </div>
    </div>

     <div class="full-width darkgray">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <h1 class="header-space" >Partners</h1>
              <p>Utan våra partners skulle inte "evenemang-namn" vara det de är idag. Vi är väldigt glada att få sammarbeta med dessa företag.</p>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center brands">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Yahoo%21_icon.svg/2000px-Yahoo%21_icon.svg.png">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2000px-Google_%22G%22_Logo.svg.png">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Ericsson_logo.svg/2000px-Ericsson_logo.svg.png">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Lyft_logo.svg/2000px-Lyft_logo.svg.png">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/HP_logo_2012.svg/2000px-HP_logo_2012.svg.png">
              <img src="https://upload.wikimedia.org/wikipedia/fr/thumb/c/c8/Twitter_Bird.svg/1259px-Twitter_Bird.svg.png">
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div class="container-fluid black">
          <div class="row text-center">
            <div class="col-lg-4 footer-section">
              <h1>Google</h1>
            </div>
            <div class="col-lg-4 footer-section">

            </div>
            <div class="col-lg-4 footer-section">
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-linkedin"></i>
              <i class="fab fa-google-plus-g"></i>


            </div>
          </div>
        </div>
      </footer>

<?php else : ?>

   <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center register-invalid">
                <i class="fas fa-times"></i>
                <h1 class="header-space" >Hoppsan!</h1>
                <p>Något gick fel! Det ser ut som att emailen är i bruk.<br>
                Var vänlig och testa igen.</p>
            </div>    
        </div>
    </div>

    <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 single-text-box">
        <h1 id="register" class="text-center header-space">Registrera</h1>
        <form id="register-form" action="insert.php" method="POST">
          <input class="test-form" type="text" placeholder="Namn" name="name">
          <i class="fas fa-check valid hidden input-name-valid"></i>
          <input type="text" placeholder="Efternamn" name="lastname">
          <i class="fas fa-check valid hidden input-lastname-valid"></i>
          <input type="email" id="email" placeholder="Email" name="email">
          <i class="fas fa-check valid hidden input-email-valid"></i>

          <button class="register-button--js" type="submit">Anmäl</button>
          <p>OBS! Till skillnad från andra så använder vi inte din information emot dig. Detta är enbart för statistik.
          </p>

        </form>
      </div>
    </div>
  </div>

     <div class="full-width darkgray">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <h1 class="header-space" >Partners</h1>
              <p>Utan våra partners skulle inte "evenemang-namn" vara det de är idag. Vi är väldigt glada att få sammarbeta med dessa företag.</p>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center brands">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Yahoo%21_icon.svg/2000px-Yahoo%21_icon.svg.png">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2000px-Google_%22G%22_Logo.svg.png">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Ericsson_logo.svg/2000px-Ericsson_logo.svg.png">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Lyft_logo.svg/2000px-Lyft_logo.svg.png">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/HP_logo_2012.svg/2000px-HP_logo_2012.svg.png">
              <img src="https://upload.wikimedia.org/wikipedia/fr/thumb/c/c8/Twitter_Bird.svg/1259px-Twitter_Bird.svg.png">
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div class="container-fluid black">
          <div class="row text-center">
            <div class="col-lg-4 footer-section">
              <h1>Google</h1>
            </div>
            <div class="col-lg-4 footer-section">

            </div>
            <div class="col-lg-4 footer-section">
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-linkedin"></i>
              <i class="fab fa-google-plus-g"></i>


            </div>
          </div>
        </div>
      </footer>

<?php endif; ?>        



</body>
</html>