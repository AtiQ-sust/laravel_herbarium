<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<style>

.container-fluid {
    padding: 0px 0px;
}
	
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  



/* Add a dark background color with a little bit see-through */ 
.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
    color: #ffffff;
    background-color: #e7e7e7;
}

/* Dropdown */
.open .dropdown-toggle {
    color: #fff ;
    background-color: #555 !important;
}

/* Dropdown links */
.dropdown-menu li a {
    color: #000 !important;
}


/* On hover, the dropdown links will turn red */
.dropdown-menu li a:hover {
    background-color: red !important;
}
</style>

<div class="container-fluid" style="
    margin-top: -40px;
">
  <br>
  <!--<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="/img/ASIA-FOREST.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>BFRI</h3>
          <p>Bangladesh Forest Research Insitute</p>
        </div>
      </div>

      <div class="item">
        <img src="/img/Herbarium collection.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Herbarium Archive</h3>
          <p>One of the biggest herbarium collection over the country.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="/img/FRIM_canopy.JPG" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Botanical Specimens</h3>
          <p>We are proud to have the largest Bambusa vulgaris garden at our premises.</p>
        </div>
      </div>

      <div class="item">
        <img src="/img/FRIM_canopy.JPG" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Xylarium Archieve</h3>
          <p>The biggest among all other national botanical archives.</p>
        </div>
      </div>
  
    </div>

    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>-->

<div id="headingBar" class="heading-bar">
    <h1 style="width:100%;" id="searchHeader">Search for records in The Bangladesh Forest Research Virtual Herbarium</h1>
</div>

<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>General Search</legend>

        <!-- Multiple Checkboxes (inline) -->
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

        <!-- Search input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="searchinput">Search Input</label>
            <div class="col-md-4">
                <input id="searchinput" name="searchinput" type="search" placeholder="placeholder" class="form-control input-md">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
            <div class="col-md-4">
                <button id="singlebutton" name="singlebutton" class="btn btn-primary">Search</button>
            </div>
        </div>
    </fieldset>
</form>

<div class="container">
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Advanced search</button>
    <div id="demo" class="collapse">
        <form class="form-horizontal">
            <fieldset>

                <!-- Button Drop Down -->
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
                                    <li><a href="#">Option one</a></li>
                                    <li><a href="#">Option two</a></li>
                                    <li><a href="#">Option three</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button Drop Down -->
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
                                    <li><a href="#">Exact</a></li>
                                    <li><a href="#">Phrase</a></li>
                                    <li><a href="#">Option 3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button Drop Down -->
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
                                    <li><a href="#">Exact</a></li>
                                    <li><a href="#">Phrase</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prepended text-->
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

                <!-- Button Drop Down -->
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
                                    <li><a href="#">Exact Name</a></li>
                                    <li><a href="#">Phrase</a></li>
                                    <li><a href="#">Option three</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Text Input</label>
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
                        <span class="help-block">help</span>
                    </div>
                </div>

                <!-- Button Drop Down -->
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
                                    <li><a href="#">Option one</a></li>
                                    <li><a href="#">Option two</a></li>
                                    <li><a href="#">Option three</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectmajorgroup">Major Group</label>
                    <div class="col-md-4">
                        <select id="selectmajorgroup" name="selectmajorgroup" class="form-control">
                            <option value="1">Option one</option>
                            <option value="2">Option two</option>
                        </select>
                    </div>
                </div>

                <!-- Text input-->
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

                <!-- Select Basic -->
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

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h3>Brief History</h3>
            <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo reprehenderit, quibusdam, adipisci laborum qui sapiente? Eum dolorum ut facilis sequi deserunt, voluptatem omnis dolorem dolores cum, ex sunt, beatae nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus ad ipsam nobis neque qui dolore fuga molestias velit blanditiis quia suscipit, quibusdam eius voluptatibus ipsa at nisi consequatur, nulla facere.</p>

            <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo reprehenderit, quibusdam, adipisci laborum qui sapiente? Eum dolorum ut facilis sequi deserunt, voluptatem omnis dolorem dolores cum, ex sunt, beatae nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus ad ipsam nobis neque qui dolore fuga molestias velit blanditiis quia suscipit, quibusdam eius voluptatibus ipsa at nisi consequatur, nulla facere.</p>
            <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo reprehenderit, quibusdam, adipisci laborum qui sapiente? Eum dolorum ut facilis sequi deserunt, voluptatem omnis dolorem dolores cum, ex sunt, beatae nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus ad ipsam nobis neque qui dolore fuga molestias velit blanditiis quia suscipit, quibusdam eius voluptatibus ipsa at nisi consequatur, nulla facere.</p>
            <button class="btn btn-default btn-lg">Explore More</button>
        </div>

        <div class="col-sm-6">
            <h3>Collection</h3>
            <img src="/img/pressed.jpg" class="img-rounded" alt="Cinque Terre" width="80%" height="70%">
        </div>
    </div>
</div>

<div class="container-fluid text-center bg-grey">
    <h2>Portfolio</h2>
    <h4>What we have created</h4>
    <div class="row text-center">
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="/img/Herbarium.jpg" alt="" style="
    width: 82%;
">
                <p><strong>Paris</strong></p>
                <p>Yes, we built Paris</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="/img/HERBARIUM-2.jpg" alt="" style="
    width: 50%;
">
                <p><strong>New York</strong></p>
                <p>We built New York</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="/img/Herbarium-sheets-1m3z0s3.jpg" alt="San Francisco">
                <p><strong>San Francisco</strong></p>
                <p>Yes, San Fran is ours</p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>