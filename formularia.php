<?php 
/*
Plugin Name: Formularia
Plugin URI: https://github.com/williameemi/formularia
Description: This plugin permit to quickly and easily create forms. A large choice of fields is available and you can create create your own fields! You can also custom your fields with colors and shadow ************* THIS PLUGIN IS ONLY AVAILABLE IF THE PLUGIN ACF IS ACTIVATE:  <a href="https://wordpress.org/plugins/advanced-custom-fields/"/>ACF (Advanced Custom Fields)</a> *************** YOU ALSO NEED TO INSERT A FUNCTION (IT'S INDICATE IN THE ADMINISTRATION PAGE) IN THE THEME. This plugin is traduced in French & in English
Author: William Merle-Marty
Version: 0.1
License: 
Text Domain : Fomularia
*/

require( plugin_dir_path( __FILE__ ) . 'inc/register-field-group.inc.php');
require( plugin_dir_path( __FILE__ ) . 'inc/post-type.inc.php');

add_filter( 'the_content', 'formularia_show_form' );


function formularia_show_form( $content ){

    $allfields = get_field_objects( get_queried_object_id() );
    var_dump($allfields);
    $content = '<form method="POST" action="" enctype="multipart/form-data">';

    foreach ( $allfields as $key => $value ) {

        if ( $key == "first_name" && $value['value'] != "" ) {
            $content .= '<label for="first_name">' . __('Firstname', 'formularia') . ': </label><input type="text" name="first_name" id="first_name"/><br/><br/>';
        }

        if ( $key == "name" && $value['value'] != "" ) {
            $content .= '<label for="name">' . __('Name', 'formularia') . ': </label><input type="text" name="name" id="name"/><br/><br/>';
        }

        if ( $key == "civility" && $value['value'] != "" ) {
            $content .=  __('Civility', 'mm-plugin') . ' :
                            <label for="sir"> ' . __('Mrs', 'mm-plugin') . '</label> <input type="radio" value="sir" id="sir" name="civility"/>
                            <label for="madam">' . __('Ms', 'mm-plugin') . '</label> <input type="radio" value="madam" id="madam" name="civility"/>
                            <br/><br/>';
        }

        if ( $key == "birthday" && $value['value'] != "" ) {
            $content .=  '<label for="birthday">' . __('Birthday', 'mm-plugin') . ' </label> : <input class="mm-plugin" type="date" name="birthday" id="birthday"/><br/><br/>';

        }

        if ( $key == "city_of_birth" && $value['value'] != "" ) {
            $content .=  '<label for="city_of_birth">' . __('City of birth', 'mm-plugin') . ' : </label> <input class="mm-plugin" type="text" name="city_of_birth" id="city_of_birth"/><br/><br/>';

        }

        if ( $key == "department_of_birth" && $value['value'] != "" ) {
            $content .=  '<label for="department_of_birth">' . __('Department of birth', 'mm-plugin') . ' </label> :

	<select class="mm-plugin" name="department_of_birth">

		<option value="01">01 - Ain</option>

		<option value="02">02 - Aisne</option>

		<option value="03">03 - Allier</option>

		<option value="04">04 - Alpes de Haute Provence</option>

		<option value="05">05 - Alpes (Hautes)</option>

		<option value="06">06 - Alpes Maritimes</option>

		<option value="07">07 - Ard&egrave;che</option>

		<option value="08">08 - Ardennes</option>

		<option value="09">09 - Ari&egrave;ge</option>

		<option value="10">10 - Aube</option>

		<option value="11">11 - Aude</option>

		<option value="12">12 - Aveyron</option>

		<option value="13">13 - Bouches du Rh&ocirc;ne</option>

		<option value="14">14 - Calvados</option>

		<option value="15">15 - Cantal</option>

		<option value="16">16 - Charente</option>

		<option value="17">17 - Charente Maritime</option>

		<option value="18">18 - Cher</option>

		<option value="19">19 - Corr&egrave;ze</option>

		<option value="20">20 - Corse</option>

		<option value="21">21 - C&ocirc;te d&acute;Or</option>

		<option value="22">22 - C&ocirc;tes d&acute;Armor</option>

		<option value="23">23 - Creuse</option>

		<option value="24">24 - Dordogne</option>

		<option value="25">25 - Doubs</option>

		<option value="26">26 - Dr&ocirc;me</option>

		<option value="27">27 - Eure</option>

		<option value="28">28 - Eure et Loir</option>

		<option value="29">29 - Finist&egrave;re</option>

		<option value="30">30 - Gard</option>

		<option value="31">31 - Garonne (Haute)</option>

		<option value="32">32 - Gers</option>

		<option value="33">33 - Gironde</option>

		<option value="34">34 - H&eacute;rault</option>

		<option value="35">35 - Ille et Vilaine</option>

		<option value="36">36 - Indre</option>

		<option value="37">37 - Indre et Loire</option>

		<option value="38">38 - Is&egrave;re</option>

		<option value="39">39 - Jura</option>

		<option value="40">40 - Landes</option>

		<option value="41">41 - Loir et Cher</option>

		<option value="42">42 - Loire</option>

		<option value="43">43 - Loire (Haute)</option>

		<option value="44">44 - Loire Atlantique</option>

		<option value="45">45 - Loiret</option>

		<option value="46">46 - Lot</option>

		<option value="47">47 - Lot et Garonne</option>

		<option value="48">48 - Loz&egrave;re</option>

		<option value="49">49 - Maine et Loire</option>

		<option value="50">50 - Manche</option>

		<option value="51">51 - Marne</option>

		<option value="52">52 - Marne (Haute)</option>

		<option value="53">53 - Mayenne</option>

		<option value="54">54 - Meurthe et Moselle</option>

		<option value="55">55 - Meuse</option>

		<option value="56">56 - Morbihan</option>

		<option value="57">57 - Moselle</option>

		<option value="58">58 - Ni&egrave;vre</option>

		<option value="59">59 - Nord</option>

		<option value="60">60 - Oise</option>

		<option value="61">61 - Orne</option>

		<option value="62">62 - Pas de Calais</option>

		<option value="63">63 - Puy de D&ocirc;me</option>

		<option value="64">64 - Pyr&eacute;n&eacute;es Atlantiques</option>

		<option value="65">65 - Pyr&eacute;n&eacute;es (Hautes)</option>

		<option value="66">66 - Pyr&eacute;n&eacute;es Orientales</option>

		<option value="67">67 - Rhin (Bas)</option>

		<option value="68">68 - Rhin (Haut)</option>

		<option value="69">69 - Rh&ocirc;ne</option>

		<option value="70">70 - Sa&ocirc;ne (Haute)</option>

		<option value="71">71 - Sa&ocirc;ne et Loire</option>

		<option value="72">72 - Sarthe</option>

		<option value="73">73 - Savoie</option>

		<option value="74">74 - Savoie (Haute)</option>

		<option value="75">75 - Paris (Dept.)</option>

		<option value="76">76 - Seine Maritime</option>

		<option value="77">77 - Seine et Marne</option>

		<option value="78">78 - Yvelines</option>

		<option value="79">79 - S&egrave;vres (Deux)</option>

		<option value="80">80 - Somme</option>

		<option value="81">81 - Tarn</option>

		<option value="82">82 - Tarn et Garonne</option>

		<option value="83">83 - Var</option>

		<option value="84">84 - Vaucluse</option>

		<option value="85">85 - Vend&eacute;e</option>

		<option value="86">86 - Vienne</option>

		<option value="87">87 - Vienne (Haute)</option>

		<option value="88">88 - Vosges</option>

		<option value="89">89 - Yonne</option>

		<option value="90">90 - Belfort (Territoire de)</option>

		<option value="91">91 - Essonne</option>

		<option value="92">92 - Hauts de Seine</option>

		<option value="93">93 - Seine Saint Denis</option>

		<option value="94">94 - Val de Marne</option>

		<option value="95">95 - Val d&acute;Oise</option>

		<option value="98">98 - Mayotte</option>

		<option value="9A">9A - Guadeloupe</option>

		<option value="9B">9B - Guyane</option>

		<option value="9C">9C - Martinique</option>

		<option value="9D">9D - R&eacute;union</option>

    </select><br/><br/>';

        }

        if ( $key == "country_of_birth" && $value['value'] != "" ) {
            $content .=  '<label for="country_of_birth">' . __('Country of birth', 'mm-plugin') . ' </label> :
                            <select class="mm-plugin" name="country_of_birth">
                                <option value="Afganistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
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
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Canary Islands">Canary Islands</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Channel Islands">Channel Islands</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Island">Cocos Island</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote DIvoire">Cote D\'Ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curaco">Curacao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Ter">French Southern Ter</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Great Britain">Great Britain</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea North">Korea North</option>
                                <option value="Korea Sout">Korea South</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Midway Islands">Midway Islands</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Nambia">Nambia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherland Antilles">Netherland Antilles</option>
                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                <option value="Nevis">Nevis</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau Island">Palau Island</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Phillipines">Philippines</option>
                                <option value="Pitcairn Island">Pitcairn Island</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                <option value="Republic of Serbia">Republic of Serbia</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="St Barthelemy">St Barthelemy</option>
                                <option value="St Eustatius">St Eustatius</option>
                                <option value="St Helena">St Helena</option>
                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                <option value="St Lucia">St Lucia</option>
                                <option value="St Maarten">St Maarten</option>
                                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
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
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tahiti">Tahiti</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Erimates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uraguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City State">Vatican City State</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                <option value="Wake Island">Wake Island</option>
                                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select><br/><br/>';

        }

        if ( $key == "nationality" && $value['value'] != "" ) {
            $content .=  '<label for="nationality">' . __('Nationality', 'mm-plugin') . ' </label> : <input class="mm-plugin" type="date" name="nationality" id="nationality"/><br/><br/>';

        }

        if ( $key == "age" && $value['value'] != "" ) {
            $content .=  '<label for="age">' . __('Age', 'mm-plugin') . ' </label><input class="mm-plugin" type="number" name="age" value="age" id="age"><br/><br/>';

        }

        if ( $key == "name_of_birth" && $value['value'] != "" ) {
            $content .=  '<label for="name_of_birth">' . __('Name of birth', 'mm-plugin') . ' : </label><input class="mm-plugin" type="text" name="name_of_birth" id="name_of_birth"/><br/><br/>';
        }

        if ( $key == "maiden_name" && $value['value'] != "" ) {
            $content .=  '<label for="maiden_name">' . __('Maiden name', 'mm-plugin') . ' : </label><input class="mm-plugin" type="text" name="maiden_name" id="maiden_name"/><br/><br/>';
        }

        if ( $key == "mail" && $value['value'] != "" ) {
            $content .=  '<label for="mail">' . __('Mail', 'mm-plugin') . ' : </label><input class="mm-plugin" type="text" name="mail" id="mail"/><br/><br/>';
        }

        if ( $key == "confirmation_mail" && $value['value'] != "" ) {
            $content .=  '<label for="confirmation_mail">' . __('Confirmation Mail', 'mm-plugin') . ' : </label><input class="mm-plugin" type="text" name="confirmation_mail" id="confirmation_mail"/><br/><br/>';
        }

        if ( $key == "subject_mail" && $value['value'] != "" ) {
            $content .=  '<label for="subject_mail">' . __('Subject Mail', 'mm-plugin') . ' : </label><input class="mm-plugin" type="text" name="subject_mail" id="subject_mail"/><br/><br/>';
        }

        if ( $key == "text" && $value['value'] != "" ) {
            $content .=  '<label for="text">' . __('Text', 'mm-plugin') . ' : </label><textarea class="mm-plugin" name="text" id="text"></textarea><br/><br/>';
        }

        if ( $key == "message" && $value['value'] != "" ) {
            $content .=  '<label for="message">' . __('Message', 'mm-plugin') . ' : </label><textarea class="mm-plugin" name="message" id="message"></textarea><br/><br/>';
        }

        if ( $key == "comment" && $value['value'] != "" ) {
            $content .=  '<label for="comment">' . __('Comment', 'mm-plugin') . ' : </label><textarea class="mm-plugin" name="comment" id="comment"></textarea><br/><br/>';
        }

        if ( $key == "mobile_phone_number" && $value['value'] != "" ) {
            $content .=  '<label for="mobile_phone_number">' . __('Mobile phone number', 'mm-plugin') . ' : </label><input type="text" class="mm-plugin" name="mobile_phone_number" id="mobile_phone_number"/><br/><br/>';
        }

        if ( $key == "house_phone_number" && $value['value'] != "" ) {
            $content .=  '<label for="house_phone_number">' . __('House phone number', 'mm-plugin') . ' : </label><input type="text"  class="mm-plugin"  name="house_phone_number" id="house_phone_number"/><br/><br/>';
        }

        if ( $key == "office_phone_number" && $value['value'] != "" ) {
            $content .=  '<label for="office_phone_number">' . __('Office phone number', 'mm-plugin') . ' : </label><input type="text"  class="mm-plugin"  name="office_phone_number" id="office_phone_number"/><br/><br/>';
        }

        if ( $key == "fax" && $value['value'] != "" ) {
            $content .=  '<label for="fax">' . __('Fax', 'mm-plugin') . ' : </label><input type="text"  class="mm-plugin"  name="fax" id="fax"/><br/><br/>';
        }

        if ( $key == "adress" && $value['value'] != "" ) {
            $content .=  '<label for="fax">' . __('Adress', 'mm-plugin') . ' : </label><input type="text"  class="mm-plugin"  name="adress" id="adress"/><br/><br/>';
        }

        if ( $key == "zip_code" && $value['value'] != "" ) {
            $content .=  '<label for="zip_code">' . __('Zip Code', 'mm-plugin') . ' : </label><input type="text" class="mm-plugin" name="zip_code" id="zip_code"/><br/><br/>';
        }

        if ( $key == "city" && $value['value'] != "" ) {
            $content .=  '<label for="city">' . __('City', 'mm-plugin') . ' : </label><input type="text" class="mm-plugin" name="city" id="city"/><br/><br/>';
        }

        if ( $key == "country" && $value['value'] != "" ) {
            $content .=  '<label for="country">' . __('Country', 'mm-plugin') . ' : </label><input type="text" class="mm-plugin" name="country" id="country"/><br/><br/>';
        }

        if ( $key == "name_street" && $value['value'] != "" ) {
            $content .=  '<label for="name_street">' . __('Name street', 'mm-plugin') . ' : </label><input type="text" class="mm-plugin" name="name_street" id="name_street"/><br/><br/>';
        }

        if ( $key == "number_street" && $value['value'] != "" ) {
            $content .=  '<label for="number_street">' . __('Number street', 'mm-plugin') . ' : </label><input type="text" class="mm-plugin" name="number_street" id="number_street"/><br/><br/>';
        }

        if ( $key == "longitude" && $value['value'] != "" ) {
            $content .=  '<label for="longitude">' . __('Longitude', 'mm-plugin') . ' : </label><input type="text" class="mm-plugin" name="longitude" id="longitude"/><br/><br/>';
        }

        if ( $key == "latitude" && $value['value'] != "" ) {
            $content .=  '<label for="latitude">' . __('Latitude', 'mm-plugin') . ' : </label><input type="text" class="mm-plugin" name="latitude" id="latitude"/><br/><br/>';
        }

        if ( $key == "cedex" && $value['value'] != "" ) {
            $content .=  '<label for="cedex">' . __('Cedex', 'mm-plugin') . ' : </label><input type="text" class="mm-plugin" name="cedex" id="cedex"/><br/><br/>';
        }

        if ( $key == "cedex" && $value['value'] != "" ) {
            $content .=  '<label for="cedex">' . __('Cedex', 'mm-plugin') . ' : </label><input type="text" class="mm-plugin" name="cedex" id="cedex"/><br/><br/>';
        }

        if ( $key == "btq" && $value['value'] != "" ) {
            $content .=  '<label for="btq">' . __('Bis/Ter/Quater', 'mm-plugin') . ' : </label>
                            <select class="mm-plugin" id="btq" name="btq">
                              <option value="bis">Bis</option>
                              <option value="ter">Ter</option>
                              <option value="quater">Quater</option>
                            </select><br/><br/>';
        }

        if ( $key == "type_street" && $value['value'] != "" ) {
            $content .=  '<label for="type_street">' . __('Type street (French)', 'mm-plugin') . ' : </label>
            <select class="mm-plugin" id="btq" name="type_street">

	          		<option value="ALL">Allée</option>

	          		<option value="ARC">Arcade</option>

	          		<option value="AUT">Autoroute</option>

	          		<option value="AV">Avenue</option>

	          		<option value="AER">Aérodrome</option>

	          		<option value="BRE">Barrière</option>

	          		<option value="BAS">Bas (se, ses)</option>

	          		<option value="BSN">Bassin</option>

	          		<option value="BD">Boulevard</option>

	          		<option value="BRG">Bourg</option>

	          		<option value="CAN">Canal</option>

	          		<option value="CAR">Carrefour</option>

	          		<option value="CHS">Chaussée</option>

	          		<option value="CHE">Chemin</option>

	          		<option value="CITE">Cité</option>

	          		<option value="COR">Corniche</option>

	          		<option value="CRS">Cours</option>

	          		<option value="DSC">Descente</option>

	          		<option value="DIG">Digue</option>

	          		<option value="ECA">Ecart</option>

	          		<option value="ESC">Escalier</option>

	          		<option value="ESP">Esplanade</option>

	          		<option value="FG">Faubourg</option>

	          		<option value="GR">Grand Rue</option>

	          		<option value="HAM">Hameau</option>

	          		<option value="IMP">Impasse</option>

	          		<option value="JTE">Jetée</option>

	          		<option value="MTE">Montée</option>

	          		<option value="PRV">Parvis</option>

	          		<option value="PAS">Pas (sage)</option>

	          		<option value="PL">Place</option>

	          		<option value="PTE">Porte</option>

	          		<option value="POT">Poterne</option>

	          		<option value="PRO">Promenade</option>

	          		<option value="QUAI">Quai</option>

	          		<option value="QUA">Quartier</option>

	          		<option value="RPE">Rampe</option>

	          		<option value="REM">Rempart</option>

	          		<option value="ROC">Roc (ade)</option>

	          		<option value="RPT">Rond-Point</option>

	          		<option value="RTE">Route</option>

	          		<option value="RUE">Rue</option>

	          		<option value="RLE">Ruelle</option>

	          		<option value="SEN">Sente (ier)</option>

	          		<option value="SQ">Square</option>

	          		<option value="TSSE">Terrasse</option>

	          		<option value="TPL">Terre-Plein</option>

	          		<option value="TRT">Tertre</option>

	          		<option value="TRA">Traverse</option>

	          		<option value="VEN">Venelle</option>

	          		<option value="VLA">Villa</option>

	          		<option value="VGE">Village</option></select><br/><br/>';
        }

        if ( $key == "province" && $value['value'] != "" ) {
            $content .=  '<label for="province">' . __('Province', 'mm-plugin') . ' : </label><input type="text" class="mm-plugin" name="province" id="province"/><br/><br/>';
        }

        if ( $key == "department" && $value['value'] != "" ) {
            $content .=  '<label for="department">' . __('Department (French)', 'mm-plugin') . ' : </label>
                            <select id="department" class="mm-plugin" name="department">

                                <option value="01">01 - Ain</option>

                                <option value="02">02 - Aisne</option>

                                <option value="03">03 - Allier</option>

                                <option value="04">04 - Alpes de Haute Provence</option>

                                <option value="05">05 - Alpes (Hautes)</option>

                                <option value="06">06 - Alpes Maritimes</option>

                                <option value="07">07 - Ard&egrave;che</option>

                                <option value="08">08 - Ardennes</option>

                                <option value="09">09 - Ari&egrave;ge</option>

                                <option value="10">10 - Aube</option>

                                <option value="11">11 - Aude</option>

                                <option value="12">12 - Aveyron</option>

                                <option value="13">13 - Bouches du Rh&ocirc;ne</option>

                                <option value="14">14 - Calvados</option>

                                <option value="15">15 - Cantal</option>

                                <option value="16">16 - Charente</option>

                                <option value="17">17 - Charente Maritime</option>

                                <option value="18">18 - Cher</option>

                                <option value="19">19 - Corr&egrave;ze</option>

                                <option value="20">20 - Corse</option>

                                <option value="21">21 - C&ocirc;te d&acute;Or</option>

                                <option value="22">22 - C&ocirc;tes d&acute;Armor</option>

                                <option value="23">23 - Creuse</option>

                                <option value="24">24 - Dordogne</option>

                                <option value="25">25 - Doubs</option>

                                <option value="26">26 - Dr&ocirc;me</option>

                                <option value="27">27 - Eure</option>

                                <option value="28">28 - Eure et Loir</option>

                                <option value="29">29 - Finist&egrave;re</option>

                                <option value="30">30 - Gard</option>

                                <option value="31">31 - Garonne (Haute)</option>

                                <option value="32">32 - Gers</option>

                                <option value="33">33 - Gironde</option>

                                <option value="34">34 - H&eacute;rault</option>

                                <option value="35">35 - Ille et Vilaine</option>

                                <option value="36">36 - Indre</option>

                                <option value="37">37 - Indre et Loire</option>

                                <option value="38">38 - Is&egrave;re</option>

                                <option value="39">39 - Jura</option>

                                <option value="40">40 - Landes</option>

                                <option value="41">41 - Loir et Cher</option>

                                <option value="42">42 - Loire</option>

                                <option value="43">43 - Loire (Haute)</option>

                                <option value="44">44 - Loire Atlantique</option>

                                <option value="45">45 - Loiret</option>

                                <option value="46">46 - Lot</option>

                                <option value="47">47 - Lot et Garonne</option>

                                <option value="48">48 - Loz&egrave;re</option>

                                <option value="49">49 - Maine et Loire</option>

                                <option value="50">50 - Manche</option>

                                <option value="51">51 - Marne</option>

                                <option value="52">52 - Marne (Haute)</option>

                                <option value="53">53 - Mayenne</option>

                                <option value="54">54 - Meurthe et Moselle</option>

                                <option value="55">55 - Meuse</option>

                                <option value="56">56 - Morbihan</option>

                                <option value="57">57 - Moselle</option>

                                <option value="58">58 - Ni&egrave;vre</option>

                                <option value="59">59 - Nord</option>

                                <option value="60">60 - Oise</option>

                                <option value="61">61 - Orne</option>

                                <option value="62">62 - Pas de Calais</option>

                                <option value="63">63 - Puy de D&ocirc;me</option>

                                <option value="64">64 - Pyr&eacute;n&eacute;es Atlantiques</option>

                                <option value="65">65 - Pyr&eacute;n&eacute;es (Hautes)</option>

                                <option value="66">66 - Pyr&eacute;n&eacute;es Orientales</option>

                                <option value="67">67 - Rhin (Bas)</option>

                                <option value="68">68 - Rhin (Haut)</option>

                                <option value="69">69 - Rh&ocirc;ne</option>

                                <option value="70">70 - Sa&ocirc;ne (Haute)</option>

                                <option value="71">71 - Sa&ocirc;ne et Loire</option>

                                <option value="72">72 - Sarthe</option>

                                <option value="73">73 - Savoie</option>

                                <option value="74">74 - Savoie (Haute)</option>

                                <option value="75">75 - Paris (Dept.)</option>

                                <option value="76">76 - Seine Maritime</option>

                                <option value="77">77 - Seine et Marne</option>

                                <option value="78">78 - Yvelines</option>

                                <option value="79">79 - S&egrave;vres (Deux)</option>

                                <option value="80">80 - Somme</option>

                                <option value="81">81 - Tarn</option>

                                <option value="82">82 - Tarn et Garonne</option>

                                <option value="83">83 - Var</option>

                                <option value="84">84 - Vaucluse</option>

                                <option value="85">85 - Vend&eacute;e</option>

                                <option value="86">86 - Vienne</option>

                                <option value="87">87 - Vienne (Haute)</option>

                                <option value="88">88 - Vosges</option>

                                <option value="89">89 - Yonne</option>

                                <option value="90">90 - Belfort (Territoire de)</option>

                                <option value="91">91 - Essonne</option>

                                <option value="92">92 - Hauts de Seine</option>

                                <option value="93">93 - Seine Saint Denis</option>

                                <option value="94">94 - Val de Marne</option>

                                <option value="95">95 - Val d&acute;Oise</option>

                                <option value="98">98 - Mayotte</option>

                                <option value="9A">9A - Guadeloupe</option>

                                <option value="9B">9B - Guyane</option>

                                <option value="9C">9C - Martinique</option>

                                <option value="9D">9D - R&eacute;union</option>

                            </select><br/><br/>';
        }

        if ( $key == "region" && $value['value'] != "" ) {
            $content .=  '<label for="region">' . __('Region(French)', 'mm-plugin') . ' : </label>
                            <select id="region" class="mm-plugin" name="department">
                                <script language="javascript">
                                    var states = new Array("Alsace", "Aquitaine", "Auvergne", "Basse-Normandie", "Bourgogne", "Bretagne", "Centre", "Champagne-Ardenne", "Corse", "Franche-Comte", "Haute-Normandie", "Ile-de-France", "Languedoc-Roussillon", "Limousin", "Lorraine", "Midi-Pyrenees", "Nord-Pas-de-Calais", "country de la Loire", "Picardie", "Poitou-Charentes", "Provence-Alpes-Cote d\'Azur", "Rhone-Alpes");
                                    for(var hi=0; hi<states.length; hi++)
                                    document.write("<option value="+states[hi]+">"+states[hi]+"</option>");
                                </script>
                            </select><br/><br/>';
        }

        if ( $key == "host_identifier" && $value['value'] != "" ) {
            $content .=  '<label for="host_identifier">' . __('Host_identifier', 'mm-plugin') . ' : </label><input type="text" class="mm-plugin" name="host_identifier" id="host_identifier"/><br/><br/>';
        }

        if ( $key == "pseudo" && $value['value'] != "" ) {
            $content .=  '<label for="pseudo">' . __('Pseudo', 'mm-plugin') . ' : </label><input type="text" class="mm-plugin" name="pseudo" id="pseudo"/><br/><br/>';
        }

        if ( $key == "password" && $value['value'] != "" ) {
            $content .=  '<label for="password">' . __('Password', 'mm-plugin') . ' : </label><input type="password" class="mm-plugin" name="password" id="password"/><br/><br/>';
        }

        if ( $key == "confirmation_password" && $value['value'] != "" ) {
            $content .=  '<label for="confirmation_password">' . __('Confirmation_password', 'mm-plugin') . ' : </label><input type="password" class="mm-plugin" name="confirmation_password" id="confirmation_password"/><br/><br/>';
        }

        if ( $key == "number_bank_card" && $value['value'] != "" ) {
            $content .=  '<label for="number_bank_card">' . __('Number Bank Card', 'mm-plugin') . ' : </label><input class="mm-plugin" type="number" name="number_bank_card" id="number_bank_card" pattern="[0-9]{13,16}"/><br/><br/>';
        }

        if ( $key == "date_expiration_bank_card" && $value['value'] != "" ) {
            $content .=  '<label for="number_bank_card">' . __('Date expiration bank card', 'mm-plugin') . ' : </label><input class="mm-plugin" type="month" name="date_expiration_bank_card" id="date_expiration_bank_card"/><br/><br/>';
        }

        if ( $key == "security_password_bank_card" && $value['value'] != "" ) {
            $content .=  '<label for="security_password_bank_card">' . __('Security password bank card', 'mm-plugin') . ' : </label><input class="mm-plugin" type="number" name="security_password_bank_card" id="security_password_bank_card"/><br/><br/>';
        }

        if ( $key == "occupation" && $value['value'] != "" ) {
                $content .=  '<label for="occupation">' . __('Occupation', 'mm-plugin') . ' : </label><input class="mm-plugin" type="text" name="occupation" id="occupation"/><br/><br/>';
            }

        if ( $key == "social_insurance_number" && $value['value'] != "" ) {
            $content .=  '<label for="social_insurance_number">' . __('Sociale insurance number', 'mm-plugin') . ' : </label><input class="mm-plugin" type="number" name="social_insurance_number" id="social_insurance_number"/><br/><br/>';

        }

        if ( $key == "website" && $value['value'] != "" ) {
            $content .=  '<label for="website">' . __('Website', 'mm-plugin') . ' : </label><input class="mm-plugin" type="url" name="website" id="website"/><br/><br/>';
        }

        if ( $key == "facebook_account" && $value['value'] != "" ) {
            $content .=  '<label for="facebook_account">' . __('Facebook account', 'mm-plugin') . ' : </label><input class="mm-plugin" pattern="^[a-z\d\.]{5,}$" type="url" name="facebook_account" id="facebook_account"/><br/><br/>';
        }

        if ( $key == "twitter_account" && $value['value'] != "" ) {
            $content .=  '<label for="twitter_account">' . __('Twitter account', 'mm-plugin') . ' : </label><input class="mm-plugin" pattern="^[A-Za-z0-9_]{1,15}$" type="url" name="twitter_account" id="twitter_account"/><br/><br/>';
        }

        if ( $key == "linkedin_account" && $value['value'] != "" ) {
            $content .=  '<label for="linkedin_account">' . __('LinkedIn account', 'mm-plugin') . ' : </label><input class="mm-plugin" type="url" name="linkedin_account" id="linkedin_account"/><br/><br/>';
        }

        if ( $key == "pinterest_account" && $value['value'] != "" ) {
            $content .=  '<label for="pinterest_account">' . __('Pinterest account', 'mm-plugin') . ' : </label><input class="mm-plugin" type="url" name="pinterest_account" id="pinterest_account"/><br/><br/>';
        }

        if ( $key == "google_plus_account" && $value['value'] != "" ) {
            $content .=  '<label for="google_plus_account">' . __('Google Plus account', 'mm-plugin') . ' : </label><input class="mm-plugin" type="url" name="google_plus_account" id="google_plus_account"/><br/><br/>';
        }

        if ( $key == "instagram_account" && $value['value'] != "" ) {
            $content .=  '<label for="instagram_account">' . __('Instagram account', 'mm-plugin') . ' : </label><input class="mm-plugin" type="url" name="instagram_account" id="instagram_account"/><br/><br/>';
        }

        if ( $key == "viadeo_account" && $value['value'] != "" ) {
            $content .=  '<label for="viadeo_account">' . __('Viadeo account', 'mm-plugin') . ' : </label><input class="mm-plugin" type="url" name="viadeo_account" id="viadeo_account"/><br/><br/>';
        }

        if ( $key == "file_number" && $value['value'] != "" ) {
            $content .=  '<label for="file_number">' . __('File number', 'mm-plugin') . ' : </label><input class="mm-plugin" type="text" name="file_number" id="file_number"/><br/><br/>';
        }

        if ( $key == "order_number" && $value['value'] != "" ) {
            $content .=  '<label for="order_number">' . __('Order number', 'mm-plugin') . ' : </label><input class="mm-plugin" type="text" name="order_number" id="order_number"/><br/><br/>';
        }

        if ( $key == "company" && $value['value'] != "" ) {
            $content .=  '<label for="company">' . __('Company', 'mm-plugin') . ' : </label><input class="mm-plugin" type="text" name="company" id="company"/><br/><br/>';
        }

        if ( $key == "name_company" && $value['value'] != "" ) {
            $content .=  '<label for="name_company">' . __('Name of the company', 'mm-plugin') . ' : </label><input class="mm-plugin" type="text" name="name_company" id="name_company"/><br/><br/>';
        }

        if ( $key == "siret_number" && $value['value'] != "" ) {
            $content .=  '<label for="siret_number">' . __('SIRET number', 'mm-plugin') . ' : </label><input class="mm-plugin" type="text" name="siret_number" id="siret_number"/><br/><br/>';
        }

        if ( $key == "iban_number" && $value['value'] != "" ) {
            $content .=  '<label for="iban_number">' . __('IBAN number', 'mm-plugin') . ' : </label><input class="mm-plugin" type="text" name="iban_number" id="iban_number"/><br/><br/>';
        }

        if ( $key == "date" && $value['value'] != "" ) {
            $content .=  '<label for="date">' . __('Date', 'mm-plugin') . ' : </label><input class="mm-plugin" type="date" name="date" id="date"/><br/><br/>';
        }

        if ( $key == "beginning_date" && $value['value'] != "" ) {
            $content .=  '<label for="beginning_date">' . __('Date of beginning', 'mm-plugin') . ' : </label><input class="mm-plugin" type="date" name="beginning_date" id="beginning_date"/><br/><br/>';
        }

        if ( $key == "end_date" && $value['value'] != "" ) {
            $content .=  '<label for="end_date">' . __('Date of end', 'mm-plugin') . ' : </label><input class="mm-plugin" type="date" name="end_date" id="end_date"/><br/><br/>';
        }

        if ( $key == "label_new_text_1" && $value['value'] != "" ) {
            $content .= '<label for="label_new_text_1">'.$value['value'].' : </label><input type="text" class="mm-plugin" name="label_new_text_1" id="label_new_text_1"/><br/><br/>';
        }

        if ( $key == "label_new_textarea_1" && $value['value'] != "" ) {
            $content .= '<label for="label_new_textarea_1">'.$value['value'].' : </label><textarea class="mm-plugin" name="label_new_textarea_1" id="label_new_textarea_1"></textarea><br/><br/>';
        }

        if ( $key == "label_new_color_selector_1" && $value['value'] != "" ) {
            $content .= '<label for="label_new_color_selector_1">'.$value['value'].' : </label><input type="color" class="mm-plugin" name="label_new_color_selector_1" id="label_new_color_selector_1"/><br/><br/>';
        }

        if ( $key == "label_new_input_number_1" && $value['value'] != "" ) {
            $content .= '<label for="label_new_input_number_1">'.$value['value'].' : </label><input type="number" class="mm-plugin" name="label_new_input_number_1" id="label_new_input_number_1"/><br/><br/>';
        }

        if ( $key == "label_new_input_number_1" && $value['value'] != "" ) {
            $content .= '<label for="label_new_input_number_1">'.$value['value'].' : </label><input type="number" class="mm-plugin" name="label_new_input_number_1" id="label_new_input_number_1"/><br/><br/>';
        }

        if ( $key == "label_new_button_1" && $value['value'] != "" ) {
            $content .= '<label for="label_new_button_1">'.$value['value'].' : </label><input type="button" class="mm-plugin" name="label_new_button_1" id="label_new_button_1"/><br/><br/>';
        }

        if ( $key == "label_new_file_1" && $value['value'] != "" ) {
            $content .= '<label for="label_new_file_1">'.$value['value'].' : </label><input type="file" class="mm-plugin" name="label_new_file_1" id="label_new_file_1"/><br/><br/>';
        }

        if ( $key == "label_new_password_1" && $value['value'] != "" ) {
            $content .= '<label for="label_new_password_1">'.$value['value'].' : </label><input type="password" class="mm-plugin" name="label_new_password_1" id="label_new_password_1"/><br/><br/>';
        }

        if ( $key == "label_new_date_1" && $value['value'] != "" ) {
            $content .= '<label for="label_new_date_1">'.$value['value'].' : </label><input type="date" class="mm-plugin" name="label_new_date_1" id="label_new_date_1"/><br/><br/>';
        }

    }

    $content .= '<input type="submit" value="Send"></form>';
    return $content;
}
