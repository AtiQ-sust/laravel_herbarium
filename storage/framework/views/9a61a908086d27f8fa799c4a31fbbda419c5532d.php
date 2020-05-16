<?php $__env->startSection('title', 'Home'); ?>



<?php $__env->startSection('sub-layout-css'); ?>
<style>
    
    p {
    margin: 0 0 10px;
    text-align: justify;
}




body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */


/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}








</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
  <div class="row">
    <div id="headingBar" class="heading-bar">
        <h1 style="width:100%;" id="searchHeader">Search for records in The Bangladesh Forest Research Virtual Herbarium</h1>
    </div>

    <form class="form-horizontal">
        <fieldset>
            <legend>General Search</legend>


            <div class="form-group">
                <label class="col-md-4 control-label" for="checkboxes">Search on</label>
                <div class="col-md-6">
                    <label class="checkbox-inline" for="checkboxes-0">
                        <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1"> All
                    </label>
                    <label class="checkbox-inline" for="checkboxes-1">
                        <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2"> Family
                    </label>
                    <label class="checkbox-inline" for="checkboxes-2">
                        <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3"> Genus
                    </label>
                    <label class="checkbox-inline" for="checkboxes-3">
                        <input type="checkbox" name="checkboxes" id="checkboxes-3" value="4"> Species
                    </label>
                    <label class="checkbox-inline" for="checkboxes-4">
                        <input type="checkbox" name="checkboxes" id="checkboxes-4" value="5"> Habit
                    </label>
                    <label class="checkbox-inline" for="checkboxes-5">
                        <input type="checkbox" name="checkboxes" id="checkboxes-5" value="6"> Stems
                    </label>
                    <label class="checkbox-inline" for="checkboxes-6">
                        <input type="checkbox" name="checkboxes" id="checkboxes-6" value="7"> Flower
                    </label>
                    <label class="checkbox-inline" for="checkboxes-7">
                        <input type="checkbox" name="checkboxes" id="checkboxes-7" value="8"> Fruit
                    </label>
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="searchinput">Search Input</label>
                <div class="col-md-4">
                    <input id="searchinput" name="searchinput" type="search" placeholder="placeholder" class="form-control input-md">

                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Search</button>
                </div>
            </div>
        </fieldset>
    </form>

    <div class="xcontainer">
        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Advanced search</button>
        <div id="demo" class="collapse">
            <form class="form-horizontal">
                <fieldset>


                    <div class="form-group">
                        <label class="col-md-4 control-label" for="buttondropdown">Button Drop Down</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="placeholder" type="text">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        Action
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Option one</a>
                                        </li>
                                        <li><a href="#">Option two</a>
                                        </li>
                                        <li><a href="#">Option three</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label" for="buttondropdown">Scientific Name</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="..." type="text">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        Keyword
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Exact</a>
                                        </li>
                                        <li><a href="#">Phrase</a>
                                        </li>
                                        <li><a href="#">Option 3</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label" for="buttondropdown">Collector</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="placeholder" type="text">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        Keyword
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Exact</a>
                                        </li>
                                        <li><a href="#">Phrase</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label" for="friid">FRI ID</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">prepend</span>
                                <input id="friid" name="friid" class="form-control" placeholder="placeholder" type="text">
                            </div>
                            <p class="help-block">help</p>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label" for="buttondropdown">Localities</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="placeholder" type="text">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        Action
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Exact Name</a>
                                        </li>
                                        <li><a href="#">Phrase</a>
                                        </li>
                                        <li><a href="#">Option three</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Text Input</label>
                        <div class="col-md-4">
                            <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
                            <span class="help-block">help</span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label" for="associatedtaxa">Associate Taxa</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="associatedtaxa" name="associatedtaxa" class="form-control" placeholder="placeholder" type="text">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        Taxa
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Option one</a>
                                        </li>
                                        <li><a href="#">Option two</a>
                                        </li>
                                        <li><a href="#">Option three</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectmajorgroup">Major Group</label>
                        <div class="col-md-4">
                            <select id="selectmajorgroup" name="selectmajorgroup" class="form-control">
                                <option value="1">Option one</option>
                                <option value="2">Option two</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label" for="keyword">Keyword</label>
                        <div class="col-md-4">
                            <input id="keyword" name="keyword" type="text" placeholder="placeholder" class="form-control input-md">
                            <span class="help-block">help</span>
                        </div>
                    </div>

                    <label class="custom-file">
                        <input type="file" id="file" class="custom-file-input">
                        <span class="custom-file-control"></span>
                    </label>


                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectcountry">Countries</label>
                        <div class="col-md-4">
                            <select id="selectcountry" name="selectcountry" class="form-control">
                                <option value="Select">Select</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas, The">Bahamas, The</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burma">Burma</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cabo Verde">Cabo Verde</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                                <option value="Congo, Republic of the">Congo, Republic of the</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curacao">Curacao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czechia">Czechia</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor (see Timor-Leste)">East Timor (see Timor-Leste)</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia, The">Gambia, The</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Greece">Greece</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Holy See">Holy See</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, North">Korea, North</option>
                                <option value="Korea, South">Korea, South</option>
                                <option value="Kosovo">Kosovo</option>
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
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="North Korea">North Korea</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territories">Palestinian Territories</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Sint Maarten">Sint Maarten</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Korea">South Korea</option>
                                <option value="South Sudan">South Sudan</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-Leste">Timor-Leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>

    <table style="width: 100%;border-collapse: collapse;border: none;" width="352">
        <tbody>
            <tr>
                <td style="border-top: solid windowtext 2.25pt; border-left: none; border-bottom: solid windowtext 2.25pt; border-right: none; background: #4BACC6; padding: 0in 5.4pt 0in 5.4pt;" colspan="2">
                    <p style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: white;">Bangladesh Forest Research Institute</span></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="border: none; background: #4BACC6; padding: 0in 5.4pt 0in 5.4pt;">
                    <p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: white;">Established</span>
                    </p>
                </td>
                <td style="border: none; background: #D8D8D8; padding: 0in 5.4pt 0in 5.4pt;">
                    <p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">1955</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="border: none; background: #4BACC6; padding: 0in 5.4pt 0in 5.4pt;">
                    <p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: white;">Focus</span>
                    </p>
                </td>
                <td style="border: none; padding: 0in 5.4pt 0in 5.4pt;">
                    <p style="margin-bottom: .0001pt; line-height: normal;"><a href="https://en.wikipedia.org/wiki/Forestry"><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">Forestry</span></a>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="border: none; background: #4BACC6; padding: 0in 5.4pt 0in 5.4pt;">
                    <p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: white;">Staff</span>
                    </p>
                </td>
                <td style="border: none; background: #D8D8D8; padding: 0in 5.4pt 0in 5.4pt;">
                    <p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">720</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="border: none; background: #4BACC6; padding: 0in 5.4pt 0in 5.4pt;">
                    <p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: white;">Key people</span>
                    </p>
                </td>
                <td style="border: none; padding: 0in 5.4pt 0in 5.4pt;">
                    <p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">Dr &nbsp;Khorshed&nbsp; Akhter<br /> (Director C.C.)</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="border: none; background: #4BACC6; padding: 0in 5.4pt 0in 5.4pt;">
                    <p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: white;">Formerly called</span>
                    </p>
                </td>
                <td style="border: none; background: #D8D8D8; padding: 0in 5.4pt 0in 5.4pt;">
                    <p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">East Pakistan Forest Research Laboratory</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="border: none; background: #4BACC6; padding: 0in 5.4pt 0in 5.4pt;">
                    <p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: white;">Location</span>
                    </p>
                </td>
                <td style="border: none; padding: 0in 5.4pt 0in 5.4pt;">
                    <p style="margin-bottom: .0001pt; line-height: normal;"><a href="https://en.wikipedia.org/wiki/Chittagong"><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">Chittagong</span></a><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">, </span><a href="https://en.wikipedia.org/wiki/Chittagong_Division"><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">Chittagong Division</span></a><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">, </span><a href="https://en.wikipedia.org/wiki/Bangladesh"><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">Bangladesh</span></a>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="border: none; background: #4BACC6; padding: 0in 5.4pt 0in 5.4pt;">
                    <p style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; color: white;">Website</span>
                    </p>
                </td>
                <td style="border: none; background: #D8D8D8; padding: 0in 5.4pt 0in 5.4pt;">
                    <p style="margin-bottom: .0001pt; line-height: normal;"><a href="http://www.bfri.gov.bd/"><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">http://www.bfri.gov.bd/</span></a>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="border: none; border-bottom: solid windowtext 2.25pt; background: #4BACC6; padding: 0in 5.4pt 0in 5.4pt;">&nbsp;</td>
                <td style="border: none; border-bottom: solid windowtext 2.25pt; padding: 0in 5.4pt 0in 5.4pt;">&nbsp;</td>
            </tr>
        </tbody>
    </table>

    <table style="border-collapse: collapse;border: none;width: 100%;">
        <tbody>
            <tr>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-bottom: solid #4BACC6 2.25pt; padding: 0in 5.4pt 0in 5.4pt;" width="302">
                    <p style="line-height: normal;"><span style="font-size: 18.0pt; font-family: 'Times New Roman','serif';">Research divisions</span>
                    </p>
                </td>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-bottom: solid #4BACC6 2.25pt; padding: 0in 5.4pt 0in 5.4pt;" width="302">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; background: #D2EAF1; padding: 0in 5.4pt 0in 5.4pt;" width="302">
                    <ul>
                        <li style="line-height: normal; tab-stops: list .5in;"><strong><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">Forest Management Branch </span></strong>
                        </li>
                    </ul>
                </td>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; background: #D2EAF1; padding: 0in 5.4pt 0in 5.4pt;" width="302"><strong><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">Forest Products Branch</span></strong>
                </td>
            </tr>
            <tr>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; padding: 0in 5.4pt 0in 5.4pt;" width="302">
                    <ul>
                        <ul>
                            <li style="line-height: normal; tab-stops: list 1.0in;"><strong><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">Silvicultural Research</span></strong>
                            </li>
                        </ul>
                    </ul>
                </td>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; padding: 0in 5.4pt 0in 5.4pt;" width="302">
                    <ul>
                        <li><strong>Wood Working &amp; Timber Engineering</strong>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; background: #D2EAF1; padding: 0in 5.4pt 0in 5.4pt;" width="302">
                    <ul>
                        <ul>
                            <li style="line-height: normal; tab-stops: list 1.0in;"><strong><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">Silviculture Genetics</span></strong>
                            </li>
                        </ul>
                    </ul>
                </td>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; background: #D2EAF1; padding: 0in 5.4pt 0in 5.4pt;" width="302">&nbsp;
                    <ul>
                        <li><strong>Seasoning &amp; Timber Physics</strong>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; padding: 0in 5.4pt 0in 5.4pt;" width="302">
                    <ul>
                        <ul>
                            <li style="line-height: normal; tab-stops: list 1.0in;"><strong><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">Seed Orchard</span></strong>
                            </li>
                        </ul>
                    </ul>
                </td>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; padding: 0in 5.4pt 0in 5.4pt;" width="302">&nbsp;
                    <ul>
                        <li><strong>Veneer &amp; Composite Wood Products</strong>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; background: #D2EAF1; padding: 0in 5.4pt 0in 5.4pt;" width="302">
                    <ul>
                        <ul>
                            <li style="line-height: normal; tab-stops: list 1.0in;"><strong><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">Mangrove Silviculture</span></strong>
                            </li>
                        </ul>
                    </ul>
                </td>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; background: #D2EAF1; padding: 0in 5.4pt 0in 5.4pt;" width="302">&nbsp;
                    <ul>
                        <li><strong>Wood Preservation</strong>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; padding: 0in 5.4pt 0in 5.4pt;" width="302">
                    <ul>
                        <ul>
                            <li style="line-height: normal; tab-stops: list 1.0in;"><strong><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">Plantation Trial Unit</span></strong>
                            </li>
                        </ul>
                    </ul>
                </td>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; padding: 0in 5.4pt 0in 5.4pt;" width="302">&nbsp;
                    <ul>
                        <li><strong>Pulp and Paper</strong>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; background: #D2EAF1; padding: 0in 5.4pt 0in 5.4pt;" width="302">
                    <ul>
                        <ul>
                            <li style="line-height: normal; tab-stops: list 1.0in;"><strong><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">Minor Forest Products</span></strong>
                            </li>
                        </ul>
                    </ul>
                </td>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; background: #D2EAF1; padding: 0in 5.4pt 0in 5.4pt;" width="302">&nbsp;
                    <ul>
                        <li><strong>Forest Chemistry</strong>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; padding: 0in 5.4pt 0in 5.4pt;" width="302">
                    <ul>
                        <ul>
                            <li style="line-height: normal; tab-stops: list 1.0in;"><strong><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">Forest Botany</span></strong>
                            </li>
                        </ul>
                    </ul>
                </td>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; padding: 0in 5.4pt 0in 5.4pt;" width="302">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; background: #D2EAF1; padding: 0in 5.4pt 0in 5.4pt;" width="302">
                    <ul>
                        <ul>
                            <li style="line-height: normal; tab-stops: list 1.0in;"><strong><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">Forest Economics &amp; Statistics</span></strong>
                            </li>
                        </ul>
                    </ul>
                </td>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; background: #D2EAF1; padding: 0in 5.4pt 0in 5.4pt;" width="302">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; padding: 0in 5.4pt 0in 5.4pt;" width="302">
                    <ul>
                        <ul>
                            <li style="line-height: normal; tab-stops: list 1.0in;"><strong><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">Forest Inventory</span></strong>
                            </li>
                        </ul>
                    </ul>
                </td>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; padding: 0in 5.4pt 0in 5.4pt;" width="302">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; background: #D2EAF1; padding: 0in 5.4pt 0in 5.4pt;" width="302">
                    <ul>
                        <ul>
                            <li style="line-height: normal; tab-stops: list 1.0in;"><strong><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">Soil Science</span></strong>
                            </li>
                        </ul>
                    </ul>
                </td>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; background: #D2EAF1; padding: 0in 5.4pt 0in 5.4pt;" width="302">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; padding: 0in 5.4pt 0in 5.4pt;" width="302">
                    <ul>
                        <ul>
                            <li style="line-height: normal; tab-stops: list 1.0in;"><strong><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif';">Forest Protection<br /> <br /> </span></strong>
                            </li>
                        </ul>
                    </ul>
                </td>
                <td style="width: 3.15in; border: solid #4BACC6 1.0pt; border-top: none; padding: 0in 5.4pt 0in 5.4pt;" width="302">&nbsp;</td>
            </tr>
        </tbody>
    </table>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <p><strong><span style="font-size: 14.0pt; line-height: 115%; font-family: 'Cambria','serif'; color: #365f91;"><br style="page-break-before: auto;" /> </span></strong>
                </p>
                <h1>Bangladesh Forest Research Institute</h1>
                <div class="col-sm-6" style="margin-bottom: 20px;">

                    <p style="text-align: justify; text-justify: inter-ideograph;"><strong>Bangladesh Forest Research Institute</strong> (BFRI) national institute of forestry and forest product research. It was established as the East Pakistan Forest Research Laboratory (EPRL) in 1955 with the technical assistance of the US Agency for International Development. Its initial objective was the utilisation of forest produces available in the forests of East Pakistan. Later, the need for forest management research was felt due to a rapid decline in stock density in the forestland. Consequently, the Forest Management Branch was created in 1968 with the assistance of FAO/UNDP, and EPRL was reorganised as a forest research institute to make it a full-fledged forest research organisation. It was renamed as the Bangladesh Forest Research Institute. It is a government organisation under the Ministry of Environment and Forest, and is located at Sholashahar, Chittagong.</p>
                    <p style="text-align: justify; text-justify: inter-ideograph;">The major objectives of the institute are to optimize productivity in hills, plains, villages and coastal forests through the application of technology and to alleviate poverty; provide research backup to forestry and <a href="http://en.banglapedia.org/index.php?title=Agroforestry">agroforestry</a> in waste and marginal land for optimum and sustainable utilisation; rational utilisation of forest produces through the application of technology; help in conservation of <a href="http://en.banglapedia.org/index.php?title=Biodiversity">biodiversity</a> and environmental balance in national and rural forests.</p>
                    <p style="text-align: justify; text-justify: inter-ideograph;">The director is the executive head of the institute. BFRI conducts applied and adaptive research through 17 research divisions under two branches, viz Forest Management Branch and Forest Products Branch. The Forest Management Branch comprises 11 research divisions, viz, Silviculture Research, Silviculture Genetics, Mangrove Silviculture, Plantation Trial Unit, Forest Economics, Seed Orchard, Forest Inventory, Soil Science, Forest Protection, and Minor Forest Products. There are 21 research stations in different parts of the country based on dendroecological conditions. The Forest Products Branch includes research divisions, namely woodworking and timber engineering, seasoning and timber physics, wood preservation, pulp and paper, veneer and composite wood products and forest chemistry. Two general divisions, viz administration and service engineering, provide the support services of the institute. An advisory board consisting of 11 members of related disciplines headed by the secretary of the Ministry of Environment and Forest offers policy guidelines in respect of research and other affairs. About 70 researchers and 650 supporting officers and staff are now working in the institute.</p>
                    <p style="text-align: justify; text-justify: inter-ideograph;">The major research programmes of the institute include: tree improvement for sustained productivity; establishment of clonal and seedling seed orchards and seed stands; development of micro-propagation techniques; development of nursery, plantation, and silvicultural system of hill, plain and mangrove forests; socio-economic studies of plantation and village forestry and wood based industries; development of an integrated pest management system for forests and nurseries; ecosystem management and biodiversity conservation; wildlife management research; optimization of wood use for industrial and other purposes, wood seasoning for improving timber quality; increasing the durability of forest products using preservatives; industrial use of waste wood; development of improved methods for pulp production and production of import substitute pulp from indigenous raw materials; extension, training and advisory services. </p>
                    <p style="text-align: justify; text-justify: inter-ideograph;">BFRI has developed noteworthy technologies and generated useful information regarding forest management and utilisation of forest resources. Notable among them are: simple technique for propagation of bamboo; technique for the enhancement of service life of rural housing materials; propagation of forest tree species and tissue culture of bamboo; seasoning of timber using solar energy: a simple, inexpensive and effective solar kiln has been developed for seasoning timber using solar radiation; non-conventional timber for railway sleepers; the major insect pest and diseases in nurseries and plantations have been identified and control measures suggested. These measures can be applied in nursery management; utilisation of wood waste; a technique has been developed for the utilisation of wood waste for making novelty items, panel products and particleboard. This will not only save resources from wastes, but also keep the environment clean. </p>

                    <p style="text-align: justify; text-justify: inter-ideograph;">The institute has an administrative building and two laboratory/office buildings in its headquarters at Chittagong city on 75 acres of land. About 3,500 acres of land with laboratory, office and residential facilities are available in the field stations.</p>
                    <p style="text-align: justify; text-justify: inter-ideograph;">BFRI has a library containing more than 12,000 books on forestry and related subjects. The herbarium has more than 16,000 collections; the arboretum with more than 100 indigenous and exotic tree species. [<a href="https://link.springer.com/article/10.1007/s11676-008-0055-y">MA Sattar</a>]</p>
                    <p>&nbsp;</p>
                    <button type="button" class="btn btn-info">Explore more</button>
                </div>
                <div class="col-sm-6">
                    <img src="/img/Herbarium collection.jpg" style="float: right;width: 30%;padding: 1px; width: -webkit-fill-available; border:1px solid #021a40;">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center bg-grey" style="margin-bottom: 1%;">
      <div class="row">
        <div class="column">
          <img src="/img/Research-on-trees.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
        </div>
        <div class="column">
          <img src="/img/Herbarium collection.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
        </div>
        <div class="column">
          <img src="/img//collector/collector_2.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
        </div>
        <div class="column">
          <img src="/img/museum-Backstage8.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
        </div>
      </div>

      <div id="newModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">

          <div class="mySlides">
            <div class="numbertext">1 / 4</div>
            <img src="/img/Research-on-trees.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">2 / 4</div>
            <img src="/img/Herbarium collection.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">2 / 4</div>
            <img src="/img//collector/collector_2.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">3 / 4</div>
            <img src="/img/museum-Backstage8.jpg" style="width:100%">
          </div>
          
          <div class="mySlides">
            <div class="numbertext">4 / 4</div>
            <img src="/img/Research-on-trees.jpg" style="width:100%">
          </div>
          
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>

          <div class="caption-container">
            <p id="caption"></p>
          </div>


          <div class="column">
            <img class="demo cursor" src="/img/Research-on-trees.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
          </div>
          <div class="column">
            <img class="demo cursor" src="/img/Herbarium collection.jpg" style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
          </div>
          <div class="column">
            <img class="demo cursor" src="/img//collector/collector_2.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
          </div>
          <div class="column">
            <img class="demo cursor" src="/img/museum-Backstage8.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('sub-layout-js'); ?>

<script>
function openModal() {
  document.getElementById('newModal').style.display = "block";
}

function closeModal() {
  document.getElementById('newModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>