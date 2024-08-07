<html>
  <head>
    <style>
      .p0 {
        color:#12192b;
        text-align:center;
        font-size:30px
      }
      .p1 {
        font-size:30px;
        text-align:center;
        /*background-color: #0f3d57;*/
        background-color:#12192b;
        color:#fff12e;
        padding: 10px;
      }
      img {
        border-radius: 20px; 
        width: 350px;
        display:block;
        margin-left:auto;
        margin-right:auto;
        width:50%
      }
      #goto {
          background-color: #12192b;
          color: #fff12e;
          margin: 20px;
          padding: 30px;
          border-radius: 30px;
        }
        #gotobutton {
          border: 5px solid #0f3d57;
          padding:20px;
          font-size:20px;
          border-radius: 30px;
        }
    </style>
  </head>


<body>
<?php
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

$filterbycategory = $_POST['filterbycategory'];

//$sql = "SELECT * FROM conferences";
//$query= mysqli_query($conn, $sql);

if ($filterbycategory == "a") {
    echo "<p class = 'p0'>You have selected category A.</p>";
    $sql = "SELECT * FROM conferencess WHERE category= 'a'";
    $query= mysqli_query($conn, $sql);
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
          echo "<br> <p class= 'p1'> Conference: ". $row["title"]. "; <br> Start-Date: ". $row["start-date"]. "; <br> End-Date:" . $row["end-date"] ."; <br> Country:" . $row["country"] . "; <br> Institution and City: ". $row["institution_and_city"] ."; <br> website: ". $row["website"] . ";<br>Type: ". $row["type"] ."; <br>Category: ". $row["category"] . "</p><br>"?>
          <img src= "data:image/jpg;charset=utf;base64, <?php echo base64_encode($row["image"]); ?>" />
          <?php ;
        }
    } else {
        echo "0 results";
    }
  } elseif ($filterbycategory == "b") {
    echo "<p class= 'p0'>You have selected category B.</p>";
    $sql = "SELECT * FROM conferencess WHERE category= 'b'";
    $query= mysqli_query($conn, $sql);
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
          echo "<br> <p class= 'p1'> Conference: ". $row["title"]. "; <br> 
          Start-Date: ". $row["start-date"]. "; <br> 
          End-Date: " . $row["end-date"] ."; <br> 
          Country: " . $row["country"] . "; <br> 
          Institution and City: ". $row["institution_and_city"] ."; <br> 
          Website: ". $row["website"] . ";<br>Type: ". $row["type"] ."; <br>
          Category: ". $row["category"] . "</p><br>"?>
          <img src= "data:image/jpg;charset=utf;base64, <?php echo base64_encode($row["image"]); ?>" />
          <?php ;
        }
    } else {
        echo "0 results";
    }
  } elseif ($filterbycategory == "c") {
    echo "<p class = 'p0' >You have selected category C.</p>";
    $sql = "SELECT * FROM conferencess WHERE category= 'c'";
    $query= mysqli_query($conn, $sql);
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
          echo "<br> <p class= 'p1'> Conference: ". $row["title"]. "; <br> 
          Start-Date: ". $row["start-date"]. "; <br> 
          End-Date: " . $row["end-date"] ."; <br> 
          Country: " . $row["country"] . "; <br> 
          Institution and City: ". $row["institution_and_city"] ."; <br> 
          Website: ". $row["website"] . ";<br>
          Type: ". $row["type"] ."; <br>
          Category: ". $row["category"] . "</p><br>"?>
          <img src= "data:image/jpg;charset=utf;base64, <?php echo base64_encode($row["image"]); ?>" />
          <?php ;
        }
    } else {
        echo "0 results";
    }
  } elseif ($filterbycategory == "d") {
    echo "<p class= 'p0' >You have selected category D.</p>";
    $sql = "SELECT * FROM conferencess WHERE category= 'd'";
    $query= mysqli_query($conn, $sql);
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
          echo "<br> <p class= 'p1'> Conference: ". $row["title"]. "; <br> 
          Start-Date: ". $row["start-date"]. "; <br> 
          End-Date:" . $row["end-date"] ."; <br> 
          Country:" . $row["country"] . "; <br> 
          Institution and City: ". $row["institution_and_city"] ."; <br> 
          Website: ". $row["website"] . ";<br>
          Type: ". $row["type"] ."; <br>
          Category: ". $row["category"] . "</p><br>"?>
          <img src= "data:image/jpg;charset=utf;base64, <?php echo base64_encode($row["image"]); ?>" />
          <?php ;
        }
    } else {
        echo "0 results";
    }
  } else {
    echo "<p class= 'p0'>We do not know which category you have selected.</p>";
        }

//if ($query->num_rows > 0) {
    // output data of each row
  //  while($row = $query->fetch_assoc()) {
    //    echo "<br> conference : ". $row["title"]. " Date: ". $row["date"]. " Location:" . $row["location"] . " Category:". $row["category"] . "<br>";
   // }
//} else {
  //  echo "0 results";
//}

?>
<form id="goto" action= "index.php" method= "post" >
    <button id="gotobutton" type="submit" value="Submit" >
    Go to all future conferences (from today onwards)</button>
</form>
<form id="goto" action= "submit.php" method= "post" >
    <button id="gotobutton" type="submit" value="Submit" >
    Submit a conference</button>
</body>
</html>