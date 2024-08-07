<html>
    <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {/*background-image: url('chaostheoryshow.jpg');*/
            color: #12192b; 
            text-align: center; 
            font-family:Georgia, 'Times New Roman', Times, serif; 
            font-size: 20px; 
            }
        h1 {
            color:#fff12e;
            background-color:#12192b
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
        #img {margin:0px;
            border-radius: 20px; 
            width: 300px}
        #div2 {}
        #filtercategory{
            background-color: #fff12e;
            margin: 20px;
            padding: 30px;
            border-radius:30px;
        }
        #filtercategorytd {
            border: 5px solid #0f3d57;
            padding:10px;
            font-size:20px;
            border-radius: 30px
        }
        #filtertype {
            background-color: #fff12e;
            margin: 20px;   
            padding: 30px;
            border-radius:30px
        }
        #filtertypetd {
            border: 5px solid #0f3d57;
            border-radius: 30px;
            padding:10px;
            font-size:20px
        }
        #submit {
            padding:10px;
            font-size: 20px;
            border-radius: 30px
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
    <head>    
<h1>Here you can see all the conferences:</h1>
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

$sql = "SELECT * FROM conferencess ORDER BY `start-date`";
$query= mysqli_query($conn, $sql);
?>
<div id= "div0">
<?php
if ($query->num_rows > 0) {
    // output data of each row
    while($row = $query->fetch_assoc()) {?>
    
        <div id= "div1">
    
        <?php echo "<br> <p class = 'p1'> ". $row["title"]. " <br> 
                 <span style='color:white;display:inline-block;margin-top:20px'>". $row["institution_and_city"] ." </span><br> 
             <span style='color:white'>" . $row["country"] . " </span><br> 
              <span id= 'span'>". $row["start-date"]. " <br> 
             to " . $row["end-date"] ."</span> <br>
            <a target='_blank' href=".$row["website"].">website</a></button><br>
             
             <span style= 'color:#fff12e; display:inline-block;margin-top:20px'>"; if($row["type"]=='a'){echo "school";}elseif($row["type"]=='b'){echo "workshop";}elseif($row['type']=='c'){echo "School and Workshop";} ;"</span> <br>
             </p>"?>
        <!img id= "img"style= "border-radius: 20px; width: 350px" src= "data:image/jpg;charset=utf;base64, <?php // echo base64_encode($row["image"]); ?>" />
        </div>
        <?php ;
    }
} else {
    echo "0 results";
}
?>
</div>
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
<form id="goto" action= "index.php" method= "post" >
    <button id="gotobutton" type="submit" value="Submit" >
    Go to all future conferences (from today onwards)</button>
</form>
<form id="goto" action= "submit.php" method= "post" >
    <button id="gotobutton" type="submit" value="Submit" >
    Submit a conference</button>
</form>
</div>
</body>
</html>