<?php session_start(); ?>
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
    $q = "UPDATE content SET header = '$parag01' WHERE id = 1;";
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

<p id='main-content'>
    <?php
    if(isset($_POST['update1'])){ 
        $parag1 = $_POST['paragraf1'];
    $q = "UPDATE content SET text = '$parag1' WHERE id = 1;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 1";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'Text: ';
        echo $ord['text'];  
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

<p id='hero-content'>
    <?php
    if(isset($_POST['update02'])){ 
        $parag02 = $_POST['paragraf02'];
    $q = "UPDATE content SET header = '$parag02' WHERE id = 2;";
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

<p id="main-content">
    <?php
    if(isset($_POST['update2'])){ 
        $parag2 = $_POST['paragraf2'];
    $q = "UPDATE content SET text = '$parag2' WHERE id = 2;";
    mysqli_query($db, $q);
    }
    $query = "SELECT * FROM content WHERE ID = 2";
    $result = mysqli_query($db, $query);
    $ord = mysqli_fetch_assoc($result);
    echo 'Text: ';
    echo $ord['text'];
    echo "<br />
         <p>Ändra:</p> 
         <form method='post'>
         <textarea rows='5' cols='50' name='paragraf2'></textarea>
         <input type='submit' value='Skicka' name='update2'>
         </form>"; 
    ?>
</p>

<br />

<hr />

<p id='hero-content'>
    <?php
    if(isset($_POST['update03'])){ 
        $parag03 = $_POST['paragraf03'];
    $q = "UPDATE content SET header = '$parag03' WHERE id = 3;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 3";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'header: ';
        echo $ord['header'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <input type='text' name='paragraf03'></input>
            <input type='submit' value='Skicka' name='update03'>
            </form>";   
    ?>
</p>

<br />

<p id="main-content">
    <?php
    if(isset($_POST['update3'])){ 
        $parag3 = $_POST['paragraf3'];
    $q = "UPDATE content SET text = '$parag3' WHERE id = 3;";
    mysqli_query($db, $q);
    }
    $query = "SELECT * FROM content WHERE ID = 3";
    $result = mysqli_query($db, $query);
    $ord = mysqli_fetch_assoc($result);
    echo 'Text: ';
    echo $ord['text'];
    echo "<br />
         <p>Ändra:</p> 
         <form method='post'>
         <textarea rows='5' cols='50' name='paragraf3'></textarea>
         <input type='submit' value='Skicka' name='update3'>
         </form>";  
    ?>
</p>

<br />

<hr />

<p id='hero-content'>
    <?php
    if(isset($_POST['update04'])){ 
        $parag04 = $_POST['paragraf04'];
    $q = "UPDATE content SET header = '$parag04' WHERE id = 4;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 4";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'header: ';
        echo $ord['header'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <input type='text' name='paragraf04'></input>
            <input type='submit' value='Skicka' name='update04'>
            </form>";   
    ?>
</p>

<br />

<p id='main-content'>
    <?php
    if(isset($_POST['update4'])){ 
        $parag4 = $_POST['paragraf4'];
    $q = "UPDATE content SET text = '$parag4' WHERE id = 4;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 4";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'Text: ';
        echo $ord['text'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <textarea rows='5' cols='50' name='paragraf4'></textarea>
            <input type='submit' value='Skicka' name='update4'>
            </form>";   
    ?>
</p>

<br />

<hr />

<p id='hero-content'>
    <?php
    if(isset($_POST['update05'])){ 
        $parag05 = $_POST['paragraf05'];
    $q = "UPDATE content SET header = '$parag05' WHERE id = 5;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 5";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'header: ';
        echo $ord['header'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <input type='text' name='paragraf05'></input>
            <input type='submit' value='Skicka' name='update05'>
            </form>";   
    ?>
</p>

<br />

<p id='main-content'>
    <?php
    if(isset($_POST['update5'])){ 
        $parag5 = $_POST['paragraf5'];
    $q = "UPDATE content SET text = '$parag5' WHERE id = 5;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 5";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'Text: ';
        echo $ord['text'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <textarea rows='5' cols='50' name='paragraf5'></textarea>
            <input type='submit' value='Skicka' name='update5'>
            </form>";   
    ?>
</p>

<br />

<hr />

<p id='hero-content'>
    <?php
    if(isset($_POST['update06'])){ 
        $parag06 = $_POST['paragraf06'];
    $q = "UPDATE content SET header = '$parag06' WHERE id = 6;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 6";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'header: ';
        echo $ord['header'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <input type='text' name='paragraf06'></input>
            <input type='submit' value='Skicka' name='update06'>
            </form>";   
    ?>
</p>

<br />

<p id='main-content'>
    <?php
    if(isset($_POST['update6'])){ 
        $parag6 = $_POST['paragraf6'];
    $q = "UPDATE content SET text = '$parag6' WHERE id = 6;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 6";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'Text: ';
        echo $ord['text'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <textarea rows='5' cols='50' name='paragraf6'></textarea>
            <input type='submit' value='Skicka' name='update6'>
            </form>";   
    ?>
</p>

<br />

<hr />
<hr />
<hr />

<br />

<p id='hero-content'>
    <?php
    if(isset($_POST['update07'])){ 
        $parag07 = $_POST['paragraf07'];
    $q = "UPDATE content SET header = '$parag07' WHERE id = 7;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 7";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'header: ';
        echo $ord['header'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <input type='text' name='paragraf07'></input>
            <input type='submit' value='Skicka' name='update07'>
            </form>";   
    ?>
</p>

<br />

<p id='main-content'>
    <?php
    if(isset($_POST['update7'])){ 
        $parag7 = $_POST['paragraf7'];
    $q = "UPDATE content SET text = '$parag7' WHERE id = 7;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 7";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'Text: ';
        echo $ord['text'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <textarea rows='5' cols='50' name='paragraf7'></textarea>
            <input type='submit' value='Skicka' name='update7'>
            </form>";   
    ?>
</p>

<br />

<hr />

<p id='hero-content'>
    <?php
    if(isset($_POST['update08'])){ 
        $parag08 = $_POST['paragraf08'];
    $q = "UPDATE content SET header = '$parag08' WHERE id = 8;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 8";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'header: ';
        echo $ord['header'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <input type='text' name='paragraf08'></input>
            <input type='submit' value='Skicka' name='update08'>
            </form>";   
    ?>
</p>

<br />

<p id='main-content'>
    <?php
    if(isset($_POST['update8'])){ 
        $parag8 = $_POST['paragraf8'];
    $q = "UPDATE content SET text = '$parag8' WHERE id = 8;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 8";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'Text: ';
        echo $ord['text'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <textarea rows='5' cols='50' name='paragraf8'></textarea>
            <input type='submit' value='Skicka' name='update8'>
            </form>";   
    ?>
</p>

<br />

<hr />
<hr />

<p id='hero-content'>
    <?php
    if(isset($_POST['update09'])){ 
        $parag09 = $_POST['paragraf09'];
    $q = "UPDATE content SET header = '$parag09' WHERE id = 9;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 9";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'header: ';
        echo $ord['header'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <input type='text' name='paragraf09'></input>
            <input type='submit' value='Skicka' name='update09'>
            </form>";   
    ?>
</p>

<hr />

<p id='hero-content'>
    <?php
    if(isset($_POST['update010'])){ 
        $parag010 = $_POST['paragraf010'];
    $q = "UPDATE content SET header = '$parag010' WHERE id = 10;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 10";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'header: ';
        echo $ord['header'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <input type='text' name='paragraf010'></input>
            <input type='submit' value='Skicka' name='update010'>
            </form>";   
    ?>
</p>

<hr />

<p id='main-content'>
    <?php
    if(isset($_POST['update011'])){ 
        $parag011 = $_POST['paragraf011'];
    $q = "UPDATE content SET header = '$parag011' WHERE id = 11;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 11";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'header: ';
        echo $ord['header'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <input type='text' name='paragraf011'></input>
            <input type='submit' value='Skicka' name='update011'>
            </form>";   
    ?>
</p>

<hr />
<hr />
<hr />

<br />         

<p id='hero-content'>
    <?php
    if(isset($_POST['update013'])){ 
        $parag013 = $_POST['paragraf013'];
    $q = "UPDATE content SET header = '$parag013' WHERE id = 13;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 13";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'header: ';
        echo $ord['header'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <input type='text' name='paragraf013'></input>
            <input type='submit' value='Skicka' name='update013'>
            </form>";   
    ?>
</p>

<br />

<p id='main-content'>
    <?php
    if(isset($_POST['update13'])){ 
        $parag13 = $_POST['paragraf13'];
    $q = "UPDATE content SET text = '$parag13' WHERE id = 13;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 13";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'Text: ';
        echo $ord['text'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <textarea rows='5' cols='50' name='paragraf13'></textarea>
            <input type='submit' value='Skicka' name='update13'>
            </form>";   
    ?>
</p>

<br />

<hr />

<p id='hero-content'>
    <?php
    if(isset($_POST['update014'])){ 
        $parag014 = $_POST['paragraf014'];
    $q = "UPDATE content SET header = '$parag014' WHERE id = 14;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 14";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'header: ';
        echo $ord['header'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <input type='text' name='paragraf014'></input>
            <input type='submit' value='Skicka' name='update014'>
            </form>";   
    ?>
</p>

<br />

<p id='main-content'>
    <?php
    if(isset($_POST['update14'])){ 
        $parag14 = $_POST['paragraf14'];
    $q = "UPDATE content SET text = '$parag14' WHERE id = 14;";
    mysqli_query($db, $q);
    }
    
        $query = "SELECT * FROM content WHERE ID = 14";
        $result = mysqli_query($db, $query);
        $ord = mysqli_fetch_assoc($result);
        echo 'Text: ';
        echo $ord['text'];  
        echo "<br />
            <p>Ändra:</p> 
            <form method='post'>
            <textarea rows='5' cols='50' name='paragraf14'></textarea>
            <input type='submit' value='Skicka' name='update14'>
            </form>";   
    ?>
</p>

<br />


<h3>Slut på sidan! :o)</h3>

</body>
</html>