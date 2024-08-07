<html>
  <head>
    <style>
      p {
                text-align: center;
                font-family:Georgia;
                color:#fff12e;
                background-color:#12192b;
                font-size:30px;
      }
      #gotobutton{border: 5px solid #0f3d57;
                padding:20px;
                font-size:20px;
                border-radius: 30px; 
              }
      #p0 {
                /*background-color:#0f3d57;
                color:white;
                border: 10px solid black;
                padding: 10px;
                font-size:20px;
                box-shadow: 10px 10px black*/
                text-align: left; 
                border-radius: 10px;
            /*margin: 5px;*/
                padding: 10px;
                background-color:white;
                color:#12192b
            }
            #p1 {
                background-color: #12192b; 
                color:white;
                padding:20px;
                font-size:30px
            }
            .p1 {
            font-size:30px;
            width: 400px;
            text-align:center;
            background-color: #12192b;
            color:#fff12e;
            padding: 10px;
            margin: 30px;
            border-radius: 30px;
            overflow:auto;
            }
            a{text-decoration:none;border-radius:30px;}
            a:link, a:visited{
                background-color: white;
                color:black;
                padding:0px 15px;
                margin:20px;
                border: 5px solid #2F4F4F;

            }
            a:hover{
                background-color:#2F4F4F;
                color: white
            }
            #span{color:#7FFFD4;
                font-size:30px;
                display:inline-block;
                margin:20px}
                
    </style>  
  </head>
</html>  
<?php
ini_set('error_reporting', true);
error_reporting(E_ALL);
//$servername = "localhost";
//$username = "root";
//$password = "";
//$database = "dynamical_systems";
$servername = "31.11.39.140";
$username = "Sql1755204";
$password = "T_L*p8r%FRDLE";
$database = "Sql1755204_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Great work!";
$title_error="";
//echo "Great work!";
if(isset($_POST['submit'])){
    $conftitle = $_POST['conftitle'];
    $confstartdate = $_POST['confstartdate'];
    $confenddate = $_POST['confenddate'];
    $confcountry = $_POST['confcountry'];
    $confinstitution = $_POST['confinstitution'];
    $confwebsite = $_POST['confwebsite'];
    $conftype = $_POST['conftype'];   
    if(empty($conftitle)){
	         echo "<p class = 'p1'>Title field is empty</p> <a href='submit.php'> use the back button to go back or click to start a new submission</a> <br>";
	      }else{
	            $success = "Thank you for your registration";
	         }
	 if(empty($confstartdate)){
	         echo "<p class = 'p1'>You must insert a start date.</p><a href='submit.php'> use the back button to go back or click to start a new submission</a> <br>";
	      }else{
	            $success = "Thank you for your registration";
	         }
	 if(empty($confenddate)){
	         echo "<p class = 'p1'>You must insert an end date.</p><a href='submit.php'>use the back button to go back or click to start a new submission</a> <br>";
	      }else{
	            $success = "Thank you for your registration";
	         }
	  if(empty($confcountry)){
	         echo "<p class = 'p1'>You must insert a country.<p><a href='submit.php'> use the back button to go back or click to start a new submission</a> <br>";
	      }else{
	            $success = "Thank you for your registration";
	         }
	   if(empty($confinstitution)){
	         echo "<p class = 'p1'>You must insert an Institution and city.</p><a href='submit.php'> use the back button to go back or click to start a new submission</a> <br>";
	      }else{
	            $success = "Thank you for your registration";
	         }
	   if(empty($confwebsite)){
	         echo "<p class = 'p1'>You must insert a valid website link.</p><a href='submit.php'> use the back button to go back or click to start a new submission</a> <br>";
	      }else{
	            $success = "Thank you for your registration";
	         }
	   if(empty($conftype)){
	         echo "<p class = 'p1'>You must insert a type.</p><a href='submit.php'> use the back button to go back or click to start a new submission</a> <br>";
	      }else{
	            $success = "Thank you for your registration";
	         }
} 
//$confcategory = $_POST['confcategory'];
//$MY_FILE= $_FILES['confposter']['tmp_name'];


//$file = fopen($MY_FILE, 'r');
//$file_contents = fread($file, filesize($MY_FILE));
//fclose($file);
//$file_contents = addslashes($file_contents);

//if(isset($_POST['conftitle'])){
//  $conftitle = $_POST['conftitle'];
//}
//else {$conftitle = " ";}
//if(isset($_POST['confstartdate'])){
//  $confstartdate = $_POST['confstartdate'];
//}
//else{$confstartdate =" ";}
//if(isset($_POST['confenddate'])){
//  $confenddate = $_POST['confenddate'];
//}
//else{$confenddate =" ";}
//if(isset($_POST['confcountry'])){
//  $confcountry = $_POST['confcountry'];
//}
//else{$confcountry =" ";}
//if(isset($_POST['confinstitution'])){
//  $confinstitution = $_POST['confinstitution'];
//}
//else{$confinstitution =" ";}
//if(isset($_POST['confwebsite'])){
//  $confwebsite = $_POST['confwebsite'];
//}
//else{$confwebsite =" ";}
//if(isset($_POST['conftype'])){
//  $conftype = $_POST['conftype'];
//}
//else{$conftype =" ";}
//if(isset($_POST['confcategory'])){
//  $confcategory = $_POST['confcategory'];
//}
//else{$confcategory =" ";}
if(!empty($_FILES['confposter']['tmp_name'])){
    $MY_FILE= $_FILES['confposter']['tmp_name'];
    $file = fopen($MY_FILE, 'r');
    $file_contents = fread($file, filesize($MY_FILE));
    fclose($file);
    $file_contents = addslashes($file_contents);

}
else{$file = fopen("NO_POSTER_YET.png", 'r');
    $file_contents = fread($file, filesize("NO_POSTER_YET.png"));
    fclose($file);
    $file_contents = addslashes($file_contents);
};


$sql = "INSERT INTO `conferencess`(`title`, `start-date`,`end-date`,`country`, `institution_and_city`,`website`,`type`,`image`) VALUES ('$conftitle', '$confstartdate','$confenddate', '$confcountry', '$confinstitution','$confwebsite', '$conftype', '$file_contents')";
$query= mysqli_query($conn, $sql); 
?>

<div id= "div1">
        <?php echo "<br> <p class = 'p1'> ". $conftitle. " <br> 
             <span style='color:white;display:inline-block;margin-top:20px'>". $confinstitution ." </span><br> 
             <span style='color:white'>" . $confcountry . "</span> <br> 
             <span id= 'span'>". $confstartdate. " <br> 
             to " . $confenddate ." </span><br>
             <a target='_blank' href=".$confwebsite.">website</a><br>
             
             <span style= 'color:#fff12e; display:inline-block;margin-top:20px'>"; if($conftype=='a'){echo "School";}elseif($conftype=='b'){echo "Workshop";}elseif($conftype=='c'){echo "School and Workshop";} ;" </span><br>
             </p>"?>
        <!img id= "img"style= "border-radius: 20px; width: 350px" src= "data:image/jpg;charset=utf;base64, <?php //  echo base64_encode($row["image"]); ?>" />
        </div>
<p>Please do not refresh page. <br> Please check that the details are correct. If they are incorrect, please send an email to <a href="mailto:flwebdesignanddevelopment@gmail.com">flwebdesignanddevelopment@gmail.com</a></p>
<?php

//if ($confcategory == "a") {
//  echo "<p>This conference belongs to category A.</p>";
//} elseif ($confcategory == "b") {
//  echo "<p>This conference belongs to category B.</p>";
//} elseif ($confcategory == "c") {
//  echo "<p>This conference belongs to category C.</p>";
//} elseif ($confcategory == "d") {
//  echo "<p>This conference belongs to category D.</p>";
//} else {
//  echo "<p>We do not know what category your conference is in.</p>";
//      }

$conn->close();
?> 
<html>
    
<form id="goto" action= "index.php" method= "post"><button id="gotobutton" type="submit" value="Submit" />Go to list of schools and workshops</button></form>
<form id="goto" action= "submit.php" method= "post"><button id="gotobutton" type="submit" value="Submit" />Submit another activity</button></form>
</html>