<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferences</title>
    <!link rel="stylesheet" href="styles.css">
    <style>
        img {height:350px}
        h1 {
            background-color: #12192b;
            color:#fff12e;
            padding:10px;
            border-radius:30px;
            margin-top:20px
        }
        body {
            /*background-image: url('chaostheory1.jpg');*/
            background-color: #12192b;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; /*margin-top:160px*/

        }
        #input{height:30px}
        input[type="text"]
            {
                font-size:24px;
                font-family:serif;
        }
        select {height:40px}
        input[type="date"] {
            height:40px;
        }
        #confform {
            font-size: 20px;
            background-color:#fff12e;
            padding: 20px;
            box-shadow:10px 10px 10px black;
            border-radius: 10px
        }
        #gotobutton {
            background-color: #12192b;
            color:#fff12e;
            padding:20px;
            box-shadow:10px 10px 10px black;
            margin:30px;
            font-size:20px;
            border-radius:20px
        }
        #gotofuturebutton {
            background-color: #fff12e;
            color:#12192b;
            padding:20px;
            margin-top:0px;
            box-shadow:10px 10px 10px black;
            margin:30px;
            font-size: 20px;
            border-radius:20px

        }
        @media (max-width:600px){
            td {
                display:flex;
            }
        }
    </style>
</head>
<img src="ergodic theory(3).png">

<form id="goto" action= "index.php" method= "post">
    <button id="gotofuturebutton" type="submit" value="Submit" >
        Go to list of all schools and workshops</button>
</form>

<h1 style="text-align:center">OR add an activity:<br>(ONLY schools and workshops in Dynamical Systems/Ergodic Theory)</h1>

<body>


<form action="config.php" method="post" enctype="multipart/form-data" id="confform">
    <table border="0">
        <tr style= "text-align:center">
            <!td id="td" width="150" style = "font-size: 20px;padding:20px;background-color:#12192b;
            color:white;"> <!p style= "text-align:center"><!/p> <!/td>
            
        </tr>
        <tr>
            <td>Title</td>
            <td align="center"><input type="text" name="conftitle" size="50" id="input" /></td>
        </tr>
        <tr>
            <td>Institution and City</td>
            <td align="center"><input type="text" name="confinstitution" size="50" id="input"/></td>
        </tr>
        <tr>
            <td>Country</td>
            <td>
            <select name="confcountry">
                <option value = " "> </option>
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
            <td>Start Date</td>
            <td align="left"><input type="date" name="confstartdate"  size="10" id = "date"/></td>
        </tr>
        <tr>
            <td>End Date</td>
            <td align="left"><input type="date" name="confenddate"  size="10" id="date"/></td>
        </tr>
       
        <tr>
            <td>Event website</td>
            <td align="center"><input type="text" name="confwebsite" size="50" id="input" placeholder="please include https://"/></td><br>
        </tr>
        <tr>
            <td>Type</td>
            <td>
            <select name="conftype">
                <option value = " "> </option>
                <option value = "a">School</option>
                <option value = "b">Workshop</option>
                <option value = "c">School and Workshop</option>
            </select>
            </td>
        </tr>
        
        <!tr>
            <!td><!/td>
            <!td align="center"><!input type="file" name="confposter" size="10" /><!/td>
        <!/tr>
        <tr>
            <td colspan="2" align="center"><button  type="submit" value="Submit" name="submit" value="1" id= "gotobutton">submit</button></td>
        </tr>
        
        
    </table>
    <p>All fields are mandatory.</p>
    
</form>

<p style="color:white"> designed and developed by Francesca Luzzatto <a href="mailto:flwebdesignanddevelopment@gmail.com" style="color:white">(flwebdesignanddevelopment@gmail.com)</a></p>

<!form id="goto" action= "show.php" method= "post">
    <!button id="gotobutton" type="submit" value="Submit" >
    <!/button>
<!/form>

</body>

</html>