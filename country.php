<html>
  <head>
    <style>
      body {}
      .p0{
        color:#fff12e;
        text-align:center;
        font-size:30px;
        background-color:#12192b;
      }
      #div0 {
        display: flex;
      }
      #div1 {
            float:right;
            width: 450px;
            /*border: 5px solid black;*/
        }
        .p1 {
        font-size:30px;
        text-align:center;
        background-color: #12192b;
        color:#fff12e;
        padding: 10px;
        margin: 30px;
        border-radius: 30px;
        overflow:auto;
        text-shadow: 1px 1px;
      }
        a{text-decoration:none;border-radius:30px;}

        a:link, a:visited{
            background-color: white;
            color:black;
            padding:0px 15px;
            margin:20px;
            border: 5px solid  #2F4F4F;
            
        }
        a:hover{
            background-color: #2F4F4F;
            color: white
        }
        #span{color:#7FFFD4;
                font-size:30px;
                display:inline-block;
                margin:20px}

      .img {
        border-radius: 20px; 
        width: 350px;
        display:block;
        margin-left:auto;
        margin-right:auto;
        width:50%
      }
      #submit {
                padding:10px;
                font-size: 20px;
                border-radius: 30px
            }
      .img {
        border-radius: 20px; 
        width: 350px;
        display:block;
        margin-left:auto;
        margin-right:auto;
        width:50%
      }
      #div2{display:flex}
      #filtertype {
                background-color: #fff12e;
                margin: 20px;   
                padding: 30px;
                border-radius:30px;
                width:50%;
            }
    select{width:250px}
    #filtertypetd {
                border: 5px solid #0f3d57;
                border-radius: 30px;
                padding:10px;
                font-size:20px
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

<body >
<?php
$servername = "31.11.39.140";
$username = "Sql1755204";
$password = "T_L*p8r%FRDLE";
$database = "Sql1755204_1";
//$servername = "31.11.39.140";
//$username = "Sql1755204";
//$password = "T_L*p8r%FRDLE";
//$database = "Sql1755204_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Great work!";

$filterbycountry = $_POST['filterbycountry'];

//$sql = "SELECT * FROM conferences";
//$query= mysqli_query($conn, $sql);


if ($filterbycountry == "Afghanistan") {
    echo "<p class = 'p0'> Schools and Workshops in Ergodic Theory in Afghanistan.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date FROM conferencess WHERE country= 'Afghanistan'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
  } elseif ($filterbycountry == "Albania") {
    echo "<p class = 'p0'> Schools and Workshops in Ergodic Theory in Albania.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Albania'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
  } elseif ($filterbycountry == "Algeria") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Algeria.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Algeria'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Andorra") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Andorra.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Andorra'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Angola") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Angola.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Angola'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Antigua and Barbuda") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Antigua and Barbuda.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Antigua and Barbuda'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Argentina") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Argentina.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Argentina'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Armenia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Armenia.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Armenia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Australia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Australia.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Australia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Austria") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Austria.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Austria'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Azerbaijan") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Azerbaijan.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Azerbaijan'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "The Bahamas") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in The Bahamas.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'The Bahamas'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Bahrain") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Bahrain.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Bahrain'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Bangladesh") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Bangladesh.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Bangladesh'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Barbados") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Barbados.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Barbados'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Belarus") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Belarus.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Belarus'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Belgium") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Belgium.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Belgium'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Belize") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Belize.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Belize'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Benin") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Benin.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Benin'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Bhutan") {
    echo "<p class= 'p0'>Schools and Workshops in Ergodic Theory in Bhutan.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Bhutan'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Bolivia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Bolivia.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Bolivia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Bosnia and Herzegovina") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Bosnia and Herzegovina.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Bosnia and Herzegovina'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Botswana") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Botswana.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Botswana'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Brazil") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Brazil.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Brazil'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Brunei") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Brunei.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Brunei'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Bulgaria") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Bulgaria.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Bulgaria'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Burkina Faso") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Burkina Faso.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Burkina Faso'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Burundi") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Burundi.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Burundi'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Cabo Verde") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Cabo Verde.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Cabo Verde'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Cambodia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Cambodia.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Cambodia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Cameroon") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Cameroon.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Cameroon'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Canada") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Canada.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Canada'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Central African Republic") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Central African Republic.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Central African Republic'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start-date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Chad") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Chad.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Chad'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php 
} elseif ($filterbycountry == "Chile") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Chile.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Chile'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "China") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in China.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'China'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Colombia") {
    echo "<p class= 'p0'>Schools and Workshops in Ergodic Theory in Colombia.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Colombia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Comoros") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Comoros.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Comoros'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Congo, Democratic Republic of the") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Congo, Democratic Republic of the.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Congo, Democratic Republic of the'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Congo, Republic of the") {
    echo "<p class= 'p0'>Schools and Workshops in Ergodic Theory in  Congo, Republic of the.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Congo, Republic of the'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Costa Rica") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Costa Rica.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Costa Rica'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Côte d’Ivoire") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Côte d’Ivoire.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Côte d’Ivoire'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Croatia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Croatia.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Croatia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Cuba") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Cuba.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Cuba'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Cyprus") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Cyprus.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Cyprus'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Czech Republic") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Czech Republic.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Czech Republic'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Denmark") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Denmark.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Denmark'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Djibouti") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Djibouti.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Djibouti'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Dominica") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Dominica.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Dominica'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Dominican Republic") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Dominican Republic.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Dominican Republic'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "East Timor (Timor-Leste)") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in East Timor (Timor-Leste).</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'East Timor (Timor-Leste)'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Ecuador") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Ecuador.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Ecuador'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Egypt") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Egypt.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Egypt'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "El Salvador") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in El Salvador.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'El Salvador'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Equatorial Guinea") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Equatorial Guinea.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Equatorial Guinea'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Eritrea") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Eritrea.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Eritrea'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Estonia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Estonia.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Estonia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Eswatini") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Eswatini.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Eswatini'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Ethiopia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Ethiopia.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Ethiopia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Fiji") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Fiji.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Fiji'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Finland") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Finland.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Finland'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "France") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  France.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'France'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Gabon") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Gabon.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Gabon'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "The Gambia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in The Gambia.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'The Gambia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Georgia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Georgia.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Georgia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Germany") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Germany.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Germany'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php 
} elseif ($filterbycountry == "Ghana") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Ghana.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Ghana'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Greece") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Greece.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Greece'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Grenada") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Grenada.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Grenada'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Guatemala") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Guatemala.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Guatemala'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Guinea") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Guinea.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Guinea'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Guinea-Bissau") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Guinea-Bissau.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Guinea-Bissau'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Guyana") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Guyana.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Guyana'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Haiti") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Haiti.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Haiti'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Honduras") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Honduras.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Honduras'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Hungary") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Hungary.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Hungary'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Iceland") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Iceland.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Iceland'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "India") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  India.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'India'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Indonesia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Indonesia.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Indonesia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Iran") {
    echo "<p class= 'p0'> You have selected Iran.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Iran'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Iraq") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Iraq.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Iraq'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Ireland") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Ireland.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Ireland'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Israel") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Israel.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Israel'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Italy") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Italy.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Italy'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Jamaica") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Jamaica.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Jamaica'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Japan") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Japan.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Japan'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Jordan") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Jordan.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Jordan'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Kazakhstan") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Kazakhstan.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Kazakhstan'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Kenya") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Kenya.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Kenya'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Kiribati") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Kiribati.</p>";
    $sql = "SELECT *, DATE_FORMAT(`start-date`, '%a, %e %M %Y') AS new_start_date, DATE_FORMAT(`end-date`, '%a, %e %M %Y') AS new_end_date  FROM conferencess WHERE country= 'Kiribati'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["new_start_date"]. " <br> 
                 to " . $row["new_end_date"] ." </span><br>
                 <a target='_blank' href=".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Korea, North") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Korea, North.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Korea, North'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Korea, South") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Korea, South.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Korea, South'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Kosovo") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Kosovo.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Kosovo'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Kuwait") {
    echo "<p class= 'p0'>Schools and Workshops in Ergodic Theory in  Kuwait.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Kuwait'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Kyrgyzstan") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Kyrgyzstan.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Kyrgyzstan'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Laos") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Laos.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Laos'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Latvia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Latvia.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Latvia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Lebanon") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Lebanon.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Lebanon'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Lesotho") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Lesotho.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Lesotho'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Liberia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Liberia.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Liberia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Libya") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Libya.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Libya'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Liechtenstein") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Liechtenstein.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Liechtenstein'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Lithuania") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Lithuania.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Lithuania'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Luxembourg") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Luxembourg.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Luxembourg'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Madagascar") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Madagascar.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Madagascar'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Malawi") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Malawi.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Malawi'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Malaysia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Malaysia.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Malaysia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Maldives") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Maldives.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Maldives'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Mali") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Mali.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Mali'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Malta") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Malta.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Malta'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Marshall Islands") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Marshall Islands.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Marshall Islands'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Mauritania") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Mauritania.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Mauritania'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Mauritius") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Mauritius.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Mauritius'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Mexico") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Mexico.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Mexico'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Micronesia, Federated States of") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Micronesia, Federated States of.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Micronesia, Federated States of'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Moldova") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Moldova.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Moldova'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Monaco") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Monaco.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Monaco'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Mongolia") {
    echo "<p class= 'p0'>Schools and Workshops in Ergodic Theory in Mongolia.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Mongolia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Montenegro") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Montenegro.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Montenegro'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Morocco") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Morocco.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Morocco'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Mozambique") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Mozambique.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Mozambique'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Myanmar (Burma)") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Myanmar (Burma).</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Myanmar (Burma)'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Namibia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Namibia.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Namibia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Nauru") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Nauru.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Nauru'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Nepal") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Nepal.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Nepal'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Netherlands") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Netherlands.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Netherlands'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "New Zealand") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in New Zealand.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'New Zealand'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Nicaragua") {
    echo "<p class= 'p0'>Schools and Workshops in Ergodic Theory in Nicaragua.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Nicaragua'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Niger") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Niger.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Niger'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Nigeria") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Nigeria.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Nigeria'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "North Macedonia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in North Macedonia.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'North Macedonia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Norway") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Norway.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Norway'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Oman") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Oman.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Oman'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Pakistan") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Pakistan.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Pakistan'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Palau") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Palau.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Palau'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Panama") {
    echo "<p class= 'p0'>Schools and Workshops in Ergodic Theory in Panama.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Panama'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Papua New Guinea") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Papua New Guinea.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Papua New Guinea'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Paraguay") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Paraguay.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Paraguay'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Peru") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Peru.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Peru'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Philippines") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Philippines.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Philippines'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Poland") {
    echo "<p class= 'p0'>Schools and Workshops in Ergodic Theory in Poland.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Poland'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Portugal") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Portugal.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Portugal'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Qatar") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Qatar.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Qatar'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Saint Kitts and Nevis") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Saint Kitts and Nevis.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Saint Kitts and Nevis'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Saint Lucia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Saint Lucia.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Saint Lucia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Saint Vincent and the Grenadines") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Saint Vincent and the Grenadines.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Saint Vincent and the Grenadines'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Samoa") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Samoa.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Samoa'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "San Marino") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in San Marino.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'San Marino'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Sao Tome and Principe") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Sao Tome and Principe.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Sao Tome and Principe'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Saudi Arabia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Saudi Arabia.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Saudi Arabia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Senegal") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Senegal.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Senegal'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Serbia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Serbia.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Serbia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Seychelles") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Seychelles.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Seychelles'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Sierra Leone") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Sierra Leone.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Sierra Leone'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Singapore") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Singapore.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Singapore'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Slovakia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Slovakia.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Slovakia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Slovenia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Slovenia.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Slovenia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Solomon Islands") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Solomon Islands.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Solomon Islands'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Somalia") {
    echo "<p class= 'p0'>Schools and Workshops in Ergodic Theory in  Somalia.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Somalia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "South Africa") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  South Africa.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'South Africa'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Spain") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Spain.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Spain'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Sri Lanka") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Sri Lanka.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Sri Lanka'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Sudan") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Sudan.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Sudan'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Sudan, South") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Sudan, South.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Sudan, South'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Suriname") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Suriname.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Suriname'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Sweden") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Sweden.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Sweden'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Switzerland") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Switzerland.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Switzerland'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Syria") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Syria.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Syria'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Taiwan") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Taiwan.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Taiwan'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Tajikistan") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Tajikistan.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Tajikistan'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Tanzania") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Tanzania.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Tanzania'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Thailand") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Thailand.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Thailand'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Togo") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Togo.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Togo'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Tonga") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Tonga.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Tonga'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Trinidad and Tobago") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Trinidad and Tobago.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Trinidad and Tobago'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Tunisia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in Tunisia.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Tunisia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Turkey") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Turkey.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Turkey'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Turkmenistan") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Turkmenistan.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Turkmenistan'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Tuvalu") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Tuvalu.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Tuvalu'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Uganda") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Uganda.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Uganda'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Ukraine") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Ukraine.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Ukraine'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "United Arab Emirates") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  United Arab Emirates.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'United Arab Emirates'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "United Kingdom") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  United Kingdom.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'United Kingdom'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "United States") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  United States.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'United States'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Uruguay") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Uruguay.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Uruguay'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Uzbekistan") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Uzbekistan.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Uzbekistan'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Vanuatu") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Vanuatu.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Vanuatu'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Vatican City") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Vatican City.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Vatican City'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Venezuela") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Venezuela.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Venezuela'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Vietnam") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Vietnam.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Vietnam'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Yemen") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Yemen.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Yemen'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Zambia") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Zambia.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Zambia'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
} elseif ($filterbycountry == "Zimbabwe") {
    echo "<p class= 'p0'> Schools and Workshops in Ergodic Theory in  Zimbabwe.</p>";
    $sql = "SELECT * FROM conferencess WHERE country= 'Zimbabwe'";
    $query= mysqli_query($conn, $sql);
    ?>
    <div id = "div0">
    <?php
    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?> <div id= "div1">
            <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
                 <span style='color:white'>" . $row["country"] . "</span> <br> 
                 <span id= 'span'>". $row["start-date"]. " <br> 
                 to " . $row["end-date"] ." </span><br>
                 <a target='_blank' href=http://".$row["website"].">website</a><br>
                 <span style= 'color:#fff12e;display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "workshop and school";} ;" </span><br>
                 </p>"?>
            
            </div><?php ;
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>
  
    <?php
  } else {
    echo "<p class= 'p0'>We do not know which type you have selected.</p>";
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
<div id= "div2">
<form action= "type.php" method= "post" id ="filtertype">
    <tr>
        <td>Filter by type</td>
        <td>
            <select name="filterbytype" id= "filtertypetd">
                <option value = "a">School</option>
                <option value = "b">Workshop</option>
                <option value = "c">Both</option>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2" style= "align:center"><button  type="submit" value="Submit" id= "submit">
        submit</button></td>
    </tr>
</form>
<form action= "country.php" method= "post" id ="filtertype">
    <tr>
        <td>Filter by country</td>
        <td>
            <select name="filterbycountry" id= "filtertypetd">
            <option value = "Afghanistan">Afghanistan</option>
                <option value = "Albania">Albania</option>
                <option value = "Algeria">Algeria</option>
                <option value = "Andorra">Andorra</option>
                <option value = "Angola">Angola</option>
                <option value = "Antigua and Barbuda">Antigua and Barbura</option>
                <option value = "Argentina">Argentina</option>
                <option value = "Armenia">Armenia</option>
                <option value = "Australia">Australia</option>
                <option value = "Austria"> Austria</option>
                <option value = "Azerbaijan">Azerbaijan</option>
                <option value = "The Bahamas">The Bahamas</option>
                <option value = "Bahrain">Bahrain</option>
                <option value = "Bangladesh">Bangladesh</option>
                <option value = "Barbados">Barbados</option>
                <option value = "Belarus">Belarus</option>
                <option value = "Belgium">Belgium</option>
                <option value = "Belize">Belize</option>
                <option value = "Benin">Benin</option>
                <option value = "Bhutan">Bhutan</option>
                <option value = "Bolivia">Bolivia</option>
                <option value = "Bosnia and Herzegovina"> Bosnia and Herzegovina</option>
                <option value = "Botswana">Botswana</option>
                <option value = "Brazil">Brazil</option>
                <option value = "Brunei">Brunei</option>
                <option value = "Bulgaria">Bulgaria</option>
                <option value = "Burkina Faso">Burkina Faso</option>
                <option value = "Burundi">Burundi</option>
                <option value = "Cabo Verde">Cabo Verde</option>
                <option value = "Cambodia">Cambodia</option>
                <option value = "Cameroon">Cameroon</option>
                <option value = "Canada">Canada</option>
                <option value = "Central African Republic">Central African Republic</option>
                <option value = "Chad">Chad</option>
                <option value = "Chile">Chile</option>
                <option value = "China">China</option>
                <option value = "Colombia">Colombia</option>
                <option value = "Comoros">Comoros</option>
                <option value = "Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                <option value = "Congo, Republic of the">Congo, Republic of the</option>
                <option value = "Costa Rica">Costa Rica</option>
                <option value = "Côte d’Ivoire">Côte d’Ivoire</option>
                <option value = "Croatia">Croatia</option>
                <option value = "Cuba">Cuba</option>
                <option value = "Cyprus">Cyprus</option>
                <option value = "Czech Republic">Czech Republic</option>
                <option value = "Denmark">Denmark</option>
                <option value = "Djibouti">Djibouti</option>
                <option value = "Dominica">Dominica</option>
                <option value = "Dominican Republic">Dominican Republic</option>
                <option value = "East Timor (Timor-Leste)">East Timor (Timor-Leste)</option>
                <option value = "Ecuador">Ecuador</option>
                <option value = "Egypt">Egypt</option>
                <option value = "El Salvador">El Salvador</option>
                <option value = "Equatorial Guinea">Equatorial Guinea</option>
                <option value = "Eritrea">Eritrea</option>
                <option value = "Estonia">Estonia</option>
                <option value = "Eswatini">Eswatini</option>
                <option value = "Ethiopia">Ethiopia</option>
                <option value = "Fiji">Fiji</option>
                <option value = "Finland">Finland</option>
                <option value = "France">France</option>
                <option value = "Gabon">Gabon</option>
                <option value = "The Gambia">The Gambia</option>
                <option value = "Georgia">Georgia</option>
                <option value = "Germany">Germany</option>
                <option value = "Ghana">Ghana</option>
                <option value = "Greece">Greece</option>
                <option value = "Grenada">Grenada</option>
                <option value = "Guatemala">Guatemala</option>
                <option value = "Guinea">Guinea</option>
                <option value = "Guinea-Bissau">Guinea-Bissau</option>
                <option value = "Guyana">Guyana</option>
                <option value = "Haiti">Haiti</option>
                <option value = "Honduras">Honduras</option>
                <option value = "Hungary">Hungary</option>
                <option value = "Iceland">Iceland</option>
                <option value = "India">India</option>
                <option value = "Indonesia">Indonesia</option>
                <option value = "Iran">Iran</option>
                <option value = "Iraq">Iraq</option>
                <option value = "Ireland">Ireland</option>
                <option value = "Israel">Israel</option>
                <option value = "Italy">Italy</option>
                <option value = "Jamaica">Iceland</option>
                <option value = "Japan">Iceland</option>
                <option value = "Jordan">Iceland</option>
                <option value = "Kazakhstan">Kazakhstan</option>
                <option value = "Kenya">Kenya</option>
                <option value = "Kiribati">Kiribati</option>
                <option value = "Korea, North">Korea, North</option>
                <option value = "Korea, South">Korea, South</option>
                <option value = "Kosovo">Kosovo</option>
                <option value = "Kuwait">Kuwait</option>
                <option value = "Kyrgyzstan">Kyrgyzstan</option>
                <option value = "Laos">Laos</option>
                <option value = "Latvia">Latvia</option>
                <option value = "Lebanon">Lebanon</option>
                <option value = "Lesotho">Lesotho</option>
                <option value = "Liberia">Liberia</option>
                <option value = "Libya">Libya</option>
                <option value = "Liechtenstein">Liechtenstein</option>
                <option value = "Lithuania">Lithuania</option>
                <option value = "Luxembourg">Luxembourg</option>
                <option value = "Madagascar">Madagascar</option>
                <option value = "Malawi">Malawi</option>
                <option value = "Malaysia">Malaysia</option>
                <option value = "Maldives">Maldives</option>
                <option value = "Mali">Mali</option>
                <option value = "Malta">Malta</option>
                <option value = "Marshall Islands">Marshall Islands</option>
                <option value = "Mauritania">Mauritania</option>
                <option value = "Mauritius">Mauritius</option>
                <option value = "Mexico">Mexico</option>
                <option value = "Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value = "Moldova">Moldova</option>
                <option value = "Monaco">Monaco</option>
                <option value = "Mongolia">Mongolia</option>
                <option value = "Montenegro">Montenegro</option>
                <option value = "Morocco">Morocco</option>
                <option value = "Mozambique">Mozambique</option>
                <option value = "Myanmar (Burma)">Myanmar (Burma)</option>
                <option value = "Namibia">Namibia</option>
                <option value = "Nauru">Nauru</option>
                <option value = "Nepal">Nepal</option>
                <option value = "Netherlands">Netherlands</option>
                <option value = "New Zealand">New Zealand</option>
                <option value = "Nicaragua">Nicaragua</option>
                <option value = "Niger">Niger</option>
                <option value = "Nigeria">Nigeria</option>
                <option value = "North Macedonia">North Macedonia</option>
                <option value = "Norway">Norway</option>
                <option value = "Oman">Oman</option>
                <option value = "Pakistan">Pakistan</option>
                <option value = "Palau">Palau</option>
                <option value = "Panama">Panama</option>
                <option value = "Papua New Guinea">Papua New Guinea</option>
                <option value = "Paraguay">Paraguay</option>
                <option value = "Peru">Peru</option>
                <option value = "Philippines">Philippines</option>
                <option value = "Poland">Poland</option>
                <option value = "Portugal">Portugal</option>
                <option value = "Qatar">Qatar</option>
                <option value = "Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value = "Saint Lucia">Saint Lucia</option>
                <option value = "Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                <option value = "Samoa">Samoa</option>
                <option value = "San Marino">San Marino</option>
                <option value = "Sao Tome and Principe">Sao Tome and Principe</option>
                <option value = "Saudi Arabia">Saudi Arabia</option>
                <option value = "Senegal">Senegal</option>
                <option value = "Serbia">Serbia</option>
                <option value = "Seychelles">Seychelles</option>
                <option value = "Sierra Leone">Sierra Leone</option>
                <option value = "Singapore">Singapore</option>
                <option value = "Slovakia">Slovakia</option>
                <option value = "Slovenia">Slovenia</option>
                <option value = "Solomon Islands">Solomon Islands</option>
                <option value = "Somalia">Somalia</option>
                <option value = "South Africa">South Africa</option>
                <option value = "Spain">Spain</option>
                <option value = "Sri Lanka">Sri Lanka</option>
                <option value = "Sudan">Sudan</option>
                <option value = "Sudan, South">Sudan, South</option>
                <option value = "Suriname">Suriname</option>
                <option value = "Sweden">Sweden</option>
                <option value = "Switzerland">Switzerland</option>
                <option value = "Syria">Syria</option>
                <option value = "Taiwan">Taiwan</option>
                <option value = "Tajikistan">Tajikistan</option>
                <option value = "Tanzania">Tanzania</option>
                <option value = "Thailand">Thailand</option>
                <option value = "Togo">Togo</option>
                <option value = "Tonga">Tonga</option>
                <option value = "Trinidad and Tobago">Trinidad and Tobago</option>
                <option value = "Tunisia">Tunisia</option>
                <option value = "Turkey">Turkey</option>
                <option value = "Turkmenistan">Turkmenistan</option>
                <option value = "Tuvalu">Tuvalu</option>
                <option value = "Uganda">Uganda</option>
                <option value = "Ukraine">Ukraine</option>
                <option value = "United Arab Emirates">United Arab Emirates</option>
                <option value = "United Kingdom">United Kingdom</option>
                <option value = "United States">United States</option>
                <option value = "Uruguay">Uruguay</option>
                <option value = "Uzbekistan">Uzbekistan</option>
                <option value = "Vanuatu">Vanuatu</option>
                <option value = "Vatican City">Vatican City</option>
                <option value = "Venezuela">Venezuela</option>
                <option value = "Vietnam">Vietnam</option>
                <option value = "Yemen">Yemen</option>
                <option value = "Zambia">Zambia</option>
                <option value = "Zimbabwe">Zimbabwe</option>






            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2" style= "align:center"><button  type="submit" value="Submit" id= "submit">
        submit</button></td>
    </tr>
</form>
<form id="goto" action= "submit.php" method= "post" >
    <button id="gotobutton" type="submit" value="Submit" >
    Submit a conference</button>
</form>
</div>
<form id="goto" action= "index.php" method= "post" >
    <button id="gotobutton" type="submit" value="Submit" >
    Go to list of all schools and workshops</button>
</form>

</form>
</body>
</html>