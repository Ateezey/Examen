<!DOCTYPE HTML>
<html>

<head>
  <title>Landing Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>





</head>

<body>
<?php
$db = mysqli_connect('localhost', 'root', '', 'examendb');
mysqli_query($db, "SET NAMES utf8");
if (!$db) {
    die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}
?>
  <header> 
    <div class="container-fluid">
      <div class="row banner">
        <div class="banner-text">
         <h2><?php
							$query = "SELECT * FROM content WHERE ID = 1";
    						$result = mysqli_query($db, $query);
    						$ord = mysqli_fetch_assoc($result);
    						echo $ord['header']; 
							?></h2>
							<p><?php
   							echo $ord['breadtext'];
   							?></p>
          <a class="button-register cta" id="scroll--js" href="#register">Anmäl nu!</a>
          <a class="button-register cta" id="scroll--js" href="#read-more">Läs mer</a>
        </div>
      </div>
    </div>
    </div>
  </header>
  <div class="full-width">
  <div class="container">
    <div class="row justify-content-center" id="read-more">
      <div class="col-lg-6 single-text-box test">
        <h1 class="text-center">
        <?php
							$query = "SELECT * FROM content WHERE ID = 2";
    						$result = mysqli_query($db, $query);
    						$ord = mysqli_fetch_assoc($result);
    						echo $ord['header']; 
							?></h2>
							<p><?php
   							echo $ord['breadtext'];
   							?></p>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row image-section">
      <div class="col-md-6 img-box">
      <img src="https://images.pexels.com/photos/529599/pexels-photo-529599.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
      <div class="img-box-header">
        <h2>Explore and try </h2>
        <h3>New Tech</h3>
    </div>
    </div>
    <div class="col-md-6 img-box">
        <div class="img-box-header">
            <h2>Ready to try VR?</h2>
            <h3>I know V R !</h3>
        </div>
      <img src="https://images.pexels.com/photos/834949/pexels-photo-834949.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
    </div>
    <div class="col-md-12 img-box">
      <div class="img-box-header center">
          <h2>Reaching higher heights</h2>
          <h3>Together</h3>
      </div>
      
      <img src="https://images.pexels.com/photos/373965/pexels-photo-373965.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
    </div>
  </div>
</div>
  <div class="container">
      <div class="row location js-fadein">
        <div class="col-md-6 offset-md-3 location">
          <h1>Här är vi</h1>
        </div>
        <div class="col-md-4">
           <i class="fas fa-map-pin"></i>
          <p>Stockholm</p>
        </div>
        <div class="col-md-4">
           <i class="fas fa-map-marker-alt"></i>
          <p>Kista Mässan</p>
        </div>
        <div class="col-md-4">
           <i class="far fa-calendar"></i>
          <p>24-27 Juli</p>
        </div>
      </div>
    </div>
  <!--<div class="container">
    <div class="row equal-height">
      <div class="col-md-4">
        <h1 class="text-center">Header</h1>
       <ul>
         <li>Check 1</li>
         <li>Check 1</li>
         <li>Check 1</li>
         <li>Check 1</li>
       </ul>
      </div>
      <div class="col-md-8 nopadding">
        <div class="img-box">
          <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0956178e44084db0e4a725c8b1e370e9&auto=format&fit=crop&w=1350&q=80 ">
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row equal-height location">
      <div class="col-md-6 text-box">
        <h1 class="text-center">Här är vi!</h1>
        <div class="row">
          <div class="col-md-4 location-info">
            <i class="fas fa-map-pin"></i>
            <p>Stockholm</p>
          </div>
          <div class="col-md-4 location-info">
            <i class="fas fa-map-marker-alt"></i>
            <p>Kista Mässan</p>
          </div>
          <div class="col-md-4 location-info">
            <i class="far fa-calendar"></i>
            <p>24-27 Juni</p>
          </div>
          <div class="col-md-8 offset-md-2 location-info">
            <p>Hur tar jag mig hit?</p>
          </div>
        </div>

      </div>
      <div class="col-md-6 img nopadding">
        <div class="img-box">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Kistam%C3%A4ssan_okt_2014.jpg/1200px-Kistam%C3%A4ssan_okt_2014.jpg">
        </div>
      </div>

    </div>
  </div>-->
  <div class="full-width content-break orange">
  </div>


  <div class="container">
    <div class="row panel-menu">
      <div class="col-md-6 text-center offset-md-3">
        <div class="open-panel active" panel="1">        
            <i class="fas fa-glass-martini"></i>
            
        </div>
        <div class="open-panel" panel="2">       
            <i class="fas fa-utensils"></i>
           
        </div>
        <div class="open-panel" panel="3">      
            <i class="fas fa-lightbulb"></i>
          
        </div>
        <div class="open-panel" panel="4">       
            <i class="fas fa-gift"></i>
           
        </div>
      </div>  
    </div>
  </div>

  <div class="container">
    <div class="row  text-center">
      <div class="col-md-6 offset-md-3 panel--js panel panel1">        
          <h1>Öppen bar</h1>
          <p>Vi uppmanar våra kära, törstiga gäster att lämna plånboken hemma då en öppen bar kommer finnas tillgänglig under 
            hela eventet. Baren finns då på Entrétorget om det är så att du skulle vara sugen på någon drink. Baren har öppet
            mellan 15:00 - 22:00. 
          </p><hr>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row  text-center">
      <div class="col-md-6 offset-md-3 panel--js panel panel2">        
          <h1>Proviant</h1>
          <p>Blir du hungrig så ska du inte behöva bli orolig då det kommer finnas många mat alternativ under eventet. På eventet så kommer 
            det finnas massa resturanger att välja mellan. Dem flesta resturangerna kommer finnas på första våningen vid Entrétorget, men det 
            kommer även finnas enstaka resturanger på resterande våningar. Resturangerna har öppet mellan 11:00 - 16:30.
          </p>
          <hr>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row  text-center">
      <div class="col-md-6 offset-md-3 panel--js panel panel3">        
          <h1>Inspiration</h1>
          <p>Är du en tekniknörd som oss? Då har du kommit till rätt plats! Vi vill hjälpa dig hitta inspiration när det kommer till ny teknik.
            Under eventet så kommer vi presentera ny teknik, ha intressanta företag på plats som kan upplysa folk om hur dem har 
            gått till väga med sin teknologi och samt ha stora,kära gäster i vårt sällskap som kommer i sin tur ha några föreläsningar! 
            Kom in och låt oss inspirera dig!
          </p><hr>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row  text-center">
      <div class="col-md-6 offset-md-3 panel--js panel panel4">        
          <h1 class="text-center">Goodiebags</h1>
          <p>Som varje event så måste det ha ett slut tyvärr. Men i detta fall så är det ett gott slut. När eventet är slut så kommer
            vi inte låta dig gå hem tomhänt. Vi kommer stå och ge ut goodiebags till alla våra kära gäster som deltog i vårt fantastiska event.
            Välkomna in!
          </p><hr>
      </div>
    </div>
  </div>

  <div class="container speakers">
    <div class="row justify-content-center">
      <div class="col-6 text-center">
        <h1 class="header-space">Gäster</h1>
      </div>
    </div>
    <div class="row avatars">
      <div class="col-lg-3 col-6 js-fadein">
        <div class="avatar">
          <img src="https://images.pexels.com/photos/462680/pexels-photo-462680.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
          <h3>Brian</h3>
          <h4>Influenser</h4>
        </div>
      </div>
      <div class="col-lg-3 col-6 js-fadein">
        <div class="avatar">
          <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
          <h3>Jonathan</h3>
          <h4>System Architect</h4>
        </div>
      </div>
      <div class="col-lg-3 col-6 js-fadein">
        <div class="avatar">
          <img src="https://images.pexels.com/photos/295821/pexels-photo-295821.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
          <h3>Julietta</h3>
          <h4>SM Specialist</h4>
        </div>
      </div>
      <div class="col-lg-3 col-6 js-fadein">
        <div class="avatar">
          <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
          <h3>Ming</h3>
          <h4>Programmer</h4>
        </div>
      </div>
    </div>
  </div>
  <div class="full-width orange content-break">
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 single-text-box">
        <h1 id="register" class="text-center header-space">Anmäl</h1>
        <form id="register-form" action="insert.php" method="POST">
          <input class="test-form" type="text" placeholder="Namn" name="name">
          <i class="fas fa-check valid hidden input-name-valid"></i>
          <input type="text" placeholder="Efternamn" name="lastname">
          <i class="fas fa-check valid hidden input-lastname-valid"></i>
          <input type="email" id="email" placeholder="Email" name="email">
          <i class="fas fa-check valid hidden input-email-valid"></i>

          <button class="register-button--js" type="submit">Anmäl</button>

        </form>
      </div>
    </div>
  </div>
  <div class="full-width darkgray">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h1 class=" header-space">Partners</h1>
          <p>Utan våra partners skulle inte Obstetrical labors vara det de är idag. Vi är väldigt glada att få sammarbeta med följande
            företag.
          </p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 text-center brands">
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
    <div class="full-width black">
      <div class="container black">
        <div class="row text-center footer-section">
          <div class="col-md-4 ">
            <h1>Google</h1>
          </div>

          <div class="col-md-4 offset-md-4">
            <div class="icon-wrap">
              <i class="fab fa-facebook-f"></i>
            </div>
            <div class="icon-wrap">
              <i class="fab fa-twitter"></i>
            </div>
            <div class="icon-wrap">
              <i class="fab fa-google-plus-g"></i>
            </div>


          </div>
        </div>
      </div>
    </div>
  </footer>


</body>
<script src="script.js"></script>

</html>