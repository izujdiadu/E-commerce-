<?php
$conn = mysqli_connect("localhost", "root", "root", "iPomme");
$conn->set_charset("utf8");
?>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="ipommecss.css" />
    <link
        rel="icon"
        href="https://logos-marques.com/wp-content/uploads/2021/03/Apple-logo.png"
    />
    <title>iPomme</title>
</head>
<body>
<?php require_once("header.php"); require_once("conn.php");
?>
<section id="account">
    <form action="ipommecreate.php" onsubmit="return validform()" method="GET">
    <div class="accounttab">
        <div class="accountphrase">
            <?php
            if(isset($_SESSION["idexist"]) == true){
                echo "<h1 style='color:red'>Compte déja existant.</h1>";
                unset($_SESSION["idexist"]);
            }
            ?>
            <h1>Crée votre Apple ID</h1>
            <p>Vous devez disposez d'un Apple ID afin d'accéder aux services Apple.</p>
            <p>Vous possédez déjà un compte ? <a href="ipommeconnect.php">Connectez vous ici ></a></p>
        </div>
        <div class="input">
        <div class="nameinput">
            <input type="text" id="prenom" name="prenom" placeholder="Prénom">
            <input type="text" id="nom" name="nom" placeholder="Nom de famille">
        </div>
            <h1 style="color:red; font-weight: 300" id="txt"></h1>
        <div class="countryinput"> 
            <h1>Pays / Région</h1>
        <label for="country"></label>    
          <select id="country" name="pays" class="form-control">
            <option value="Afghanistan">Afghanistan</option>
            <option value="Åland Islands">Åland Islands</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="American Samoa">American Samoa</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Anguilla">Anguilla</option>
            <option value="Antarctica">Antarctica</option>
            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
            <option value="Argentina">Argentina</option>
            <option value="Armenia">Armenia</option>
            <option value="Aruba">Aruba</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Azerbaijan">Azerbaijan</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahrain">Bahrain</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Barbados">Barbados</option>
            <option value="Belarus">Belarus</option>
            <option value="Belgium">Belgium</option>
            <option value="Belize">Belize</option>
            <option value="Benin">Benin</option>
            <option value="Bermuda">Bermuda</option>
            <option value="Bhutan">Bhutan</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option value="Botswana">Botswana</option>
            <option value="Bouvet Island">Bouvet Island</option>
            <option value="Brazil">Brazil</option>
            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
            <option value="Brunei Darussalam">Brunei Darussalam</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burundi">Burundi</option>
            <option value="Cambodia">Cambodia</option>
            <option value="Cameroon">Cameroon</option>
            <option value="Canada">Canada</option>
            <option value="Cape Verde">Cape Verde</option>
            <option value="Cayman Islands">Cayman Islands</option>
            <option value="Central African Republic">Central African Republic</option>
            <option value="Chad">Chad</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Christmas Island">Christmas Island</option>
            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
            <option value="Colombia">Colombia</option>
            <option value="Comoros">Comoros</option>
            <option value="Congo">Congo</option>
            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
            <option value="Cook Islands">Cook Islands</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Cote D'ivoire">Cote D'ivoire</option>
            <option value="Croatia">Croatia</option>
            <option value="Cuba">Cuba</option>
            <option value="Cyprus">Cyprus</option>
            <option value="Czech Republic">Czech Republic</option>
            <option value="Denmark">Denmark</option>
            <option value="Djibouti">Djibouti</option>
            <option value="Dominica">Dominica</option>
            <option value="Dominican Republic">Dominican Republic</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Egypt">Egypt</option>
            <option value="El Salvador">El Salvador</option>
            <option value="Equatorial Guinea">Equatorial Guinea</option>
            <option value="Eritrea">Eritrea</option>
            <option value="Estonia">Estonia</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
            <option value="Faroe Islands">Faroe Islands</option>
            <option value="Fiji">Fiji</option>
            <option value="Finland">Finland</option>
            <option value="France">France</option>
            <option value="French Guiana">French Guiana</option>
            <option value="French Polynesia">French Polynesia</option>
            <option value="French Southern Territories">French Southern Territories</option>
            <option value="Gabon">Gabon</option>
            <option value="Gambia">Gambia</option>
            <option value="Georgia">Georgia</option>
            <option value="Germany">Germany</option>
            <option value="Ghana">Ghana</option>
            <option value="Gibraltar">Gibraltar</option>
            <option value="Greece">Greece</option>
            <option value="Greenland">Greenland</option>
            <option value="Grenada">Grenada</option>
            <option value="Guadeloupe">Guadeloupe</option>
            <option value="Guam">Guam</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Guernsey">Guernsey</option>
            <option value="Guinea">Guinea</option>
            <option value="Guinea-bissau">Guinea-bissau</option>
            <option value="Guyana">Guyana</option>
            <option value="Haiti">Haiti</option>
            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
            <option value="Honduras">Honduras</option>
            <option value="Hong Kong">Hong Kong</option>
            <option value="Hungary">Hungary</option>
            <option value="Iceland">Iceland</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
            <option value="Iraq">Iraq</option>
            <option value="Ireland">Ireland</option>
            <option value="Isle of Man">Isle of Man</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japan">Japan</option>
            <option value="Jersey">Jersey</option>
            <option value="Jordan">Jordan</option>
            <option value="Kazakhstan">Kazakhstan</option>
            <option value="Kenya">Kenya</option>
            <option value="Kiribati">Kiribati</option>
            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
            <option value="Korea, Republic of">Korea, Republic of</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Kyrgyzstan">Kyrgyzstan</option>
            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
            <option value="Latvia">Latvia</option>
            <option value="Lebanon">Lebanon</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Liberia">Liberia</option>
            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Macao">Macao</option>
            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
            <option value="Madagascar">Madagascar</option>
            <option value="Malawi">Malawi</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Maldives">Maldives</option>
            <option value="Mali">Mali</option>
            <option value="Malta">Malta</option>
            <option value="Marshall Islands">Marshall Islands</option>
            <option value="Martinique">Martinique</option>
            <option value="Mauritania">Mauritania</option>
            <option value="Mauritius">Mauritius</option>
            <option value="Mayotte">Mayotte</option>
            <option value="Mexico">Mexico</option>
            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
            <option value="Moldova, Republic of">Moldova, Republic of</option>
            <option value="Monaco">Monaco</option>
            <option value="Mongolia">Mongolia</option>
            <option value="Montenegro">Montenegro</option>
            <option value="Montserrat">Montserrat</option>
            <option value="Morocco">Morocco</option>
            <option value="Mozambique">Mozambique</option>
            <option value="Myanmar">Myanmar</option>
            <option value="Namibia">Namibia</option>
            <option value="Nauru">Nauru</option>
            <option value="Nepal">Nepal</option>
            <option value="Netherlands">Netherlands</option>
            <option value="Netherlands Antilles">Netherlands Antilles</option>
            <option value="New Caledonia">New Caledonia</option>
            <option value="New Zealand">New Zealand</option>
            <option value="Nicaragua">Nicaragua</option>
            <option value="Niger">Niger</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Niue">Niue</option>
            <option value="Norfolk Island">Norfolk Island</option>
            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
            <option value="Norway">Norway</option>
            <option value="Oman">Oman</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Palau">Palau</option>
            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
            <option value="Panama">Panama</option>
            <option value="Papua New Guinea">Papua New Guinea</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option>
            <option value="Philippines">Philippines</option>
            <option value="Pitcairn">Pitcairn</option>
            <option value="Poland">Poland</option>
            <option value="Portugal">Portugal</option>
            <option value="Puerto Rico">Puerto Rico</option>
            <option value="Qatar">Qatar</option>
            <option value="Reunion">Reunion</option>
            <option value="Romania">Romania</option>
            <option value="Russian Federation">Russian Federation</option>
            <option value="Rwanda">Rwanda</option>
            <option value="Saint Helena">Saint Helena</option>
            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
            <option value="Saint Lucia">Saint Lucia</option>
            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
            <option value="Samoa">Samoa</option>
            <option value="San Marino">San Marino</option>
            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Senegal">Senegal</option>
            <option value="Serbia">Serbia</option>
            <option value="Seychelles">Seychelles</option>
            <option value="Sierra Leone">Sierra Leone</option>
            <option value="Singapore">Singapore</option>
            <option value="Slovakia">Slovakia</option>
            <option value="Slovenia">Slovenia</option>
            <option value="Solomon Islands">Solomon Islands</option>
            <option value="Somalia">Somalia</option>
            <option value="South Africa">South Africa</option>
            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
            <option value="Spain">Spain</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Sudan">Sudan</option>
            <option value="Suriname">Suriname</option>
            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
            <option value="Swaziland">Swaziland</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
            <option value="Taiwan">Taiwan</option>
            <option value="Tajikistan">Tajikistan</option>
            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
            <option value="Thailand">Thailand</option>
            <option value="Timor-leste">Timor-leste</option>
            <option value="Togo">Togo</option>
            <option value="Tokelau">Tokelau</option>
            <option value="Tonga">Tonga</option>
            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
            <option value="Tunisia">Tunisia</option>
            <option value="Turkey">Turkey</option>
            <option value="Turkmenistan">Turkmenistan</option>
            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
            <option value="Tuvalu">Tuvalu</option>
            <option value="Uganda">Uganda</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Emirates">United Arab Emirates</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United States">United States</option>
            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Uzbekistan">Uzbekistan</option>
            <option value="Vanuatu">Vanuatu</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Viet Nam">Viet Nam</option>
            <option value="Virgin Islands, British">Virgin Islands, British</option>
            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
            <option value="Wallis and Futuna">Wallis and Futuna</option>
            <option value="Western Sahara">Western Sahara</option>
            <option value="Yemen">Yemen</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
        </select>
        <div class="hr"></div>
        <div class="pwd">
            <div class="pwdid">
            <input type="text" id="appleid" name="appleid" placeholder="samsung@exemple.fr">
                <h1 style="color:red" id="txt2"></h1>
            <p>Votre apple ID.</p></div>
            <div class="pwdconfirm">
            <input id="mdp" name="pwd" type="text" placeholder="Mot de passe">
            <input id="mdpverif" type="text" name="pwdverif" placeholder="Confirmer"></div>
            <h1 style="color:red" id="txt3"></h1>
        </div>
        <div class="hr"></div>
        <div class="phonenum">
<select size="1" name="numpays">
	<option value="1" selected="">United States and Canada (+ 001)</option>
	<option value="93">Afghanistan (+ 093)</option>
	<option value="355">Albania (+ 355)</option>
	<option value="213">Algeria (+ 213)</option>
	<option value="684">American Samoa (+ 684)</option>
	<option value="376">Andorra (+ 376)</option>
	<option value="244">Angola (+ 244)</option>
	<option value="1">Anguilla (+ 001)</option>
	<option value="672">Antarctica (+ 672)</option>
	<option value="1">Antigua and Barbuda (+ 001)</option>
	<option value="54">Argentina (+ 054)</option>
	<option value="374">Armenia (+ 374)</option>
	<option value="297">Aruba (+ 297)</option>
	<option value="61">Australia (+ 061)</option>
	<option value="43">Austria (+ 043)</option>
	<option value="994">Azerbaijan (+ 994)</option>
	<option value="1">Bahamas (+ 001)</option>
	<option value="973">Bahrain (+ 973)</option>
	<option value="880">Bangladesh (+ 880)</option>
	<option value="1">Barbados (+ 001)</option>
	<option value="375">Belarus (+ 375)</option>
	<option value="32">Belgium (+ 032)</option>
	<option value="501">Belize (+ 501)</option>
	<option value="229">Benin (+ 229)</option>
	<option value="1">Bermuda (+ 001)</option>
	<option value="975">Bhutan (+ 975)</option>
	<option value="591">Bolivia (+ 591)</option>
	<option value="387">Bosnia and Herzegovina (+ 387)</option>
	<option value="267">Botswana (+ 267)</option>
	<option value="55">Brazil (+ 055)</option>
	<option value="246">British Indian Ocean Territory (+ 246)</option>
	<option value="673">Brunei (+ 673)</option>
	<option value="359">Bulgaria (+ 359)</option>
	<option value="226">Burkina Faso (+ 226)</option>
	<option value="257">Burundi (+ 257)</option>
	<option value="855">Cambodia (+ 855)</option>
	<option value="237">Cameroon (+ 237)</option>
	<option value="1">Canada (+ 001)</option>
	<option value="238">Cape Verde (+ 238)</option>
	<option value="1">Cayman Islands (+ 001)</option>
	<option value="236">Central African Republic (+ 236)</option>
	<option value="235">Chad (+ 235)</option>
	<option value="56">Chile (+ 056)</option>
	<option value="86">China (+ 086)</option>
	<option value="618">Christmas Islands (+ 618)</option>
	<option value="61">Cocos (Keeling) Islands (+ 061)</option>
	<option value="57">Colombia (+ 057)</option>
	<option value="269">Comoros (+ 269)</option>
	<option value="242">Congo (+ 242)</option>
	<option value="243">Congo, Democratic Republic of (+ 243)</option>
	<option value="682">Cook Island (+ 682)</option>
	<option value="506">Costa Rica (+ 506)</option>
	<option value="225">Cote d'lvoire (+ 225)</option>
	<option value="385">Croatia (+ 385)</option>
	<option value="357">Cyprus (+ 357)</option>
	<option value="420">Czech Republic (+ 420)</option>
	<option value="45">Denmark (+ 045)</option>
	<option value="253">Djibouti (+ 253)</option>
	<option value="1">Dominica (+ 001)</option>
	<option value="1">Dominican Republic (+ 001)</option>
	<option value="670">East Timor (+ 670)</option>
	<option value="20">Egypt (+ 020)</option>
	<option value="503">El Salvador (+ 503)</option>
	<option value="593">Ecuador (+ 593)</option>
	<option value="240">Equatorial Guinea (+ 240)</option>
	<option value="291">Eritrea (+ 291)</option>
	<option value="372">Estonia (+ 372)</option>
	<option value="251">Ethiopia (+ 251)</option>
	<option value="500">Falkland Islands (+ 500)</option>
	<option value="298">Faroe Islands (+ 298)</option>
	<option value="691">Federated States of Micronesia (+ 691)</option>
	<option value="679">Fiji (+ 679)</option>
	<option value="358">Finland (+ 358)</option>
	<option value="33">France (+ 033)</option>
	<option value="594">French Guiana (+ 594)</option>
	<option value="689">French Polynesia (+ 689)</option>
	<option value="596">French Southern Territories (+ 596)</option>
	<option value="241">Gabon (+ 241)</option>
	<option value="220">Gambia (+ 220)</option>
	<option value="995">Georgia (+ 995)</option>
	<option value="49">Germany (+ 049)</option>
	<option value="233">Ghana (+ 233)</option>
	<option value="350">Gibraltar (+ 350)</option>
	<option value="30">Greece (+ 030)</option>
	<option value="299">Greenland (+ 299)</option>
	<option value="1">Grenada (+ 001)</option>
	<option value="590">Guadeloupe (+ 590)</option>
	<option value="1">Guam (+ 001)</option>
	<option value="502">Guatemala (+ 502)</option>
	<option value="224">Guinea (+ 224)</option>
	<option value="245">Guinea-Bissau (+ 245)</option>
	<option value="592">Guyana (+ 592)</option>
	<option value="509">Haiti (+ 509)</option>
	<option value="61">Heard and Macdonald Islands (+ 061)</option>
	<option value="504">Honduras (+ 504)</option>
	<option value="852">Hong Kong (+ 852)</option>
	<option value="36">Hungary (+ 036)</option>
	<option value="354">Iceland (+ 354)</option>
	<option value="91">India (+ 091)</option>
	<option value="62">Indonesia (+ 062)</option>
	<option value="964">Iraq (+ 964)</option>
	<option value="353">Ireland (+ 353)</option>
	<option value="972">Israel (+ 972)</option>
	<option value="39">Italy (+ 039)</option>
	<option value="1">Jamaica (+ 001)</option>
	<option value="81">Japan (+ 081)</option>
	<option value="44">Jersey (+ 044)</option>
	<option value="962">Jordan (+ 962)</option>
	<option value="254">Kenya (+ 254)</option>
	<option value="686">Kiribati (+ 686)</option>
	<option value="850">Korea, North (+ 850)</option>
	<option value="82">Korea, South (+ 082)</option>
	<option value="965">Kuwait (+ 965)</option>
	<option value="996">Kyrgyzstan (+ 996)</option>
	<option value="856">Laos (+ 856)</option>
	<option value="371">Latvia (+ 371)</option>
	<option value="961">Lebanon (+ 961)</option>
	<option value="266">Lesotho (+ 266)</option>
	<option value="231">Liberia (+ 231)</option>
	<option value="218">Libya (+ 218)</option>
	<option value="423">Liechtenstein (+ 423)</option>
	<option value="370">Lithuania (+ 370)</option>
	<option value="352">Luxembourg (+ 352)</option>
	<option value="853">Macau (+ 853)</option>
	<option value="389">Macedonia (Rep. of Fmr Yugoslav) (+ 389)</option>
	<option value="261">Madagascar (+ 261)</option>
	<option value="265">Malawi (+ 265)</option>
	<option value="60">Malaysia (+ 060)</option>
	<option value="960">Maldives (+ 960)</option>
	<option value="223">Mali (+ 223)</option>
	<option value="356">Malta (+ 356)</option>
	<option value="692">Marshall Islands (+ 692)</option>
	<option value="596">Martinique (+ 596)</option>
	<option value="222">Mauritania (+ 222)</option>
	<option value="230">Mauritius (+ 230)</option>
	<option value="269">Mayotte (+ 269)</option>
	<option value="33">Metropolitan France (+ 033)</option>
	<option value="52">Mexico (+ 052)</option>
	<option value="373">Moldova (+ 373)</option>
	<option value="377">Monaco (+ 377)</option>
	<option value="976">Mongolia (+ 976)</option>
	<option value="382">Montenegro (+ 382)</option>
	<option value="1">Montserrat (+ 001)</option>
	<option value="212">Morocco (+ 212)</option>
	<option value="258">Mozambique (+ 258)</option>
	<option value="95">Myanmar (+ 095)</option>
	<option value="264">Namibia (+ 264)</option>
	<option value="674">Nauru (+ 674)</option>
	<option value="977">Nepal (+ 977)</option>
	<option value="31">Netherlands (+ 031)</option>
	<option value="599">Netherlands Antilles (+ 599)</option>
	<option value="687">New Caledonia (+ 687)</option>
	<option value="64">New Zealand (+ 064)</option>
	<option value="505">Nicaragua (+ 505)</option>
	<option value="227">Niger (+ 227)</option>
	<option value="234">Nigeria (+ 234)</option>
	<option value="683">Niue (+ 683)</option>
	<option value="672">Norfolk Island (+ 672)</option>
	<option value="1">Northern Mariana Islands (+ 001)</option>
	<option value="47">Norway (+ 047)</option>
	<option value="968">Oman (+ 968)</option>
	<option value="92">Pakistan (+ 092)</option>
	<option value="680">Palau (+ 680)</option>
	<option value="970">Palestinian Territory, Occupied (+ 970)</option>
	<option value="507">Panama (+ 507)</option>
	<option value="675">Papua New Guinea (+ 675)</option>
	<option value="595">Paraguay (+ 595)</option>
	<option value="51">Peru (+ 051)</option>
	<option value="63">Philippines (+ 063)</option>
	<option value="872">Pitcairn (+ 872)</option>
	<option value="48">Poland (+ 048)</option>
	<option value="351">Portugal (+ 351)</option>
	<option value="1">Puerto Rico (+ 001)</option>
	<option value="974">Qatar (+ 974)</option>
	<option value="262">Reunion (+ 262)</option>
	<option value="40">Romania (+ 040)</option>
	<option value="7">Russia and Kazakhstan (+ 007)</option>
	<option value="250">Rwanda (+ 250)</option>
	<option value="995">S. Georgia and S. Sandwich Islands (+ 995)</option>
	<option value="684">Samoa (+ 684)</option>
	<option value="378">San Marino (+ 378)</option>
	<option value="239">Sao Tome and Principe (+ 239)</option>
	<option value="966">Saudi Arabia (+ 966)</option>
	<option value="221">Senegal (+ 221)</option>
	<option value="381">Serbia, Republic of (+ 381)</option>
	<option value="248">Seychelles (+ 248)</option>
	<option value="232">Sierra Leone (+ 232)</option>
	<option value="65">Singapore (+ 065)</option>
	<option value="421">Slovakia (+ 421)</option>
	<option value="386">Slovenia (+ 386)</option>
	<option value="677">Solomon Islands (+ 677)</option>
	<option value="252">Somalia (+ 252)</option>
	<option value="27">South Africa (+ 027)</option>
	<option value="211">South Sudan (+ 211)</option>
	<option value="34">Spain (+ 034)</option>
	<option value="94">Sri Lanka (+ 094)</option>
	<option value="290">St Helena (+ 290)</option>
	<option value="1">St Kitts and Nevis (+ 001)</option>
	<option value="1">St Lucia (+ 001)</option>
	<option value="508">St Pierre and Miquelon (+ 508)</option>
	<option value="1">St Vincent and the Grenadines (+ 001)</option>
	<option value="249">Sudan (+ 249)</option>
	<option value="597">Suriname (+ 597)</option>
	<option value="47">Svalbard and Jan Mayen Islands (+ 047)</option>
	<option value="268">Swaziland (+ 268)</option>
	<option value="46">Sweden (+ 046)</option>
	<option value="41">Switzerland (+ 041)</option>
	<option value="963">Syria (+ 963)</option>
	<option value="886">Taiwan (+ 886)</option>
	<option value="992">Tajikistan (+ 992)</option>
	<option value="255">Tanzania (+ 255)</option>
	<option value="66">Thailand (+ 066)</option>
	<option value="228">Togo (+ 228)</option>
	<option value="690">Tokelau (+ 690)</option>
	<option value="676">Tonga (+ 676)</option>
	<option value="1">Trinidad and Tobago (+ 001)</option>
	<option value="216">Tunisia (+ 216)</option>
	<option value="90">Turkey (+ 090)</option>
	<option value="993">Turkmenistan (+ 993)</option>
	<option value="1">Turks and Caicos Islands (+ 001)</option>
	<option value="688">Tuvalu (+ 688)</option>
	<option value="256">Uganda (+ 256)</option>
	<option value="380">Ukraine (+ 380)</option>
	<option value="971">United Arab Emirates (+ 971)</option>
	<option value="44">United Kingdom (+ 044)</option>
	<option value="1">United States Minor Outlying Islands (+ 001)</option>
	<option value="598">Uruguay (+ 598)</option>
	<option value="998">Uzbekistan (+ 998)</option>
	<option value="678">Vanuatu (+ 678)</option>
	<option value="39">Vatican City (+ 039)</option>
	<option value="58">Venezuela (+ 058)</option>
	<option value="84">Vietnam (+ 084)</option>
	<option value="1">Virgin Islands - British (+ 001)</option>
	<option value="340">Virgin Islands - US (+ 340)</option>
	<option value="681">Wallis and Futuna Islands (+ 681)</option>
	<option value="212">Western Sahara (+ 212)</option>
	<option value="967">Yemen (+ 967)</option>
	<option value="381">Yugoslavia (+ 381)</option>
	<option value="243">Zaire (+ 243)</option>
	<option value="260">Zambia (+ 260)</option>
	<option value="263">Zimbabwe (+ 263)</option>
            </select>
            <input type="text" id="phone" name="numtel" placeholder="Numéro de téléphone">
            <h1 style="color:red" id="txt4"></h1>
            <input type="text" id="adress" name="adresse" placeholder="Adresse">
            <h1 style="color:red" id="txt5"></h1>
</div>
    </div>
    <button id="button" type="submit">Créer</button>
    </div>
</form>
</section>

<!--
<section id="test">

    <h1>Entrer nom</h1>
    <input id="pwd">
    <h1 id="txt"></h1>

    <h1>Entrer mail</h1>
    <input id="mail">
    <h1 id="txt2"></h1>

    <h1>True pwd</h1>
    <input id="mdp">
    <h1 id="txt3"></h1>

    <h1>Phone number</h1>
    <input id="phone">
    <h1 id="txt4"></h1>

    <h1>Adress</h1>
    <input id="adress">
    <h1 id="txt5"></h1>

    <button type="submit" id="buttest">Submit</button>


</section> -->
<script src="ipomme.js"></script>
</body>
</html>
