<?php $__env->startSection('title', 'BFRI-Xylarium'); ?>

<?php $__env->startSection('content-css'); ?>
<style>
img {
  margin-bottom: -4px;
}

@media  screen and (min-width: 1201px)

.col-md-9 {
    padding-right: 0;
}


#main_content
{
 width: 100%;
}
#main_content li
{
 display:inline;
 list-style-type:none;
 
 padding:10px;
 border-radius:5px 5px 0px 0px;
 color:#292A0A;
 font-weight:bold;
 cursor:pointer;
}
#main_content li.notselected
{
 background-color:#53fcd2;
 color:#292A0A; 
}
#main_content li.selected
{
 background-color:#D0F5A9;
 color:#292A0A; 
}
#main_content .hidden_desc
{
 display:none;
 visibility:hidden;
}
#main_content #page_content
{
 
 padding:10px;
 margin-top:9px;
 border-radius:0px 5px 5px 5px;
 color:#2E2E2E;
 line-height: 1.6em;
 word-spacing:4px;
}


*, h1, h2, h3, h4, h5, h6, li, ul {
    margin: 0;
    padding: 0;
    text-align: -webkit-match-parent;
}


.mr-4 {
    margin-right: 1.5rem!important;
}

.float-left {
    float: left!important;
}


@media (min-width: 992px)

.d-lg-block {
    display: block!important;
}

.img-fluid {
    max-width: 30%;
    height: auto;
}

img {
    vertical-align: middle;
    border-style: none;
}

</style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>


    


<div class="searchPanelContainer " image="url(/img/img_1908.jpg)" style="background-image: url(&quot;/img/img_1908.jpg&quot;);">

    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <!--<link rel="stylesheet" href="css/odometer-theme-default.css" />-->
                <div class="search-panel">
                    <h1>BFRI-Xylarium</h1>
                    <div class="search-form">

                        <form action="" method="post" target="_blank" _lpchecked="1">

                            <div class="inner-addon keyword-search">
                                <i class="icon-tag"></i>
                                <input type="text" name="txtsearch" id="txtKeyword" class="form-control" placeholder="Search by keyword">
                            </div>

                            <div class="inner-addon categoryCombo hidden-sm hidden-xs">
                                <i class="icon-briefcase"></i>
                                <select name="qOT" id="qOT" class="form-control">
                                    <option value="0" selected="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taxanomy</option>
                                    <option value="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Life</option>
                                    <option value="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Domain</option>
                                    <option value="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kingdom</option>
                                    <option value="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phylum</option>
                                    <option value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class</option>
                                    <option value="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Orders</option>
                                    <option value="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Family</option>
                                    <option value="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genus</option>
                                    <option value="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Species</option>
                                </select>
                            </div>

                            <!--<a href="http://www.bdjobs.com/"  class="btn btn-default">
          <i class="icon-search"></i>&nbsp;Search
        </a>-->
                            <input type="hidden" id="hidJobSearch" name="hidJobSearch" value="jobsearch">
                            <input type="submit" class="btn btn-default" value="Search" onclick="Generategglevent()">
                        </form>
                    </div>

                    <!-- Start counter //JopApply'JobShow'CompnayShow-->
                    <div class="counter hidden-xs hidden-sm">

                        <a href="http://jobs.bdjobs.com/jobsearch.asp?log=stats" target="_blank">

                            <div class="live-jobs">
                                <div class="border">
                                    <div class="counter-icon">
                                        <i class="icon-live"></i>
                                    </div>
                                </div>
                                <h6>Genus</h6>
                                <p id="JobShow" class="odometer odometer-auto-theme">800</p>
                            </div>
                        </a>

                        <a href="#" target="_blank">

                            <div class="companies">
                                <div class="border">
                                    <div class="counter-icon">
                                        <i class="icon-buildings"></i>
                                    </div>
                                </div>
                                <h6>Species</h6>
                                <p id="CompnayShow" class="odometer odometer-auto-theme">1500</p>
                            </div>
                        </a>

                        <a href="#" target="_blank">

                            <div class="apply-online">
                                <div class="border">
                                    <div class="counter-icon">
                                        <i class="icon-mouse-click"></i>
                                    </div>
                                </div>
                                <h6>Specimen</h6>
                                <p id="JopApply" class="odometer odometer-auto-theme">30000</p>
                            </div>
                        </a>
                    </div>
                    <!-- End counter -->
                </div>

            </div>

            <div class="col-md-3 col-sm-12">

                <div class="sliderSidebar">
                    <div class="division">
                        <h4>Divisional Findings</h4>
                        <div class="all-division">
                            <a href="#" class="btn btn-default" target="_blank">Chittagong <span>(342)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Dhaka <span>(1979)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Barisal <span>(28)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Khulna <span>(115)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Sylhet <span>(65)</span></a>
                            
                            <a href="#" class="btn btn-default" target="_blank">Rajshahi <span>(79)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Rangpur <span>(45)</span></a>
                            
                            <a href="#" class="btn btn-default" target="_blank">Mymensingh <span>(23)</span></a>
                        </div>
                    </div>

                    <div class="quick-links desktop">
                        <h4>Quick links</h4>
                        <div class="ql-list">
                            <ul>
                                <li><a href="#" target="_blank"><i class="icon-right-angle-double"></i>1</a></li>
                                <li><a href="#" target="_blank"><i class="icon-right-angle-double"></i>2</a></li>
                                <li><a href="#" target="_blank"><i class="icon-right-angle-double"></i3</a></li>
                                <li><a href="#" target="_blank"><i class="icon-right-angle-double"></i>4</a></li>

                                <li><a href="#" target="_blank" class="yellow"><i class="icon-right-angle-double"></i>5</a></li>

                                <li>
                                    <a href="#" target="_blank"><i class="icon-right-angle-double"></i>6</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <script type="application/javascript">
                function init() {}
            </script>

            <!--eid background ends-->
        </div>
    </div>
</div><!-- tob banner ends-->



<div class="jobCategory">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12">

                <div id="main_content">

                     <li class="selected" id="page1" onclick="change_tab(this.id);">Family</li>
                     <li class="notselected" id="page2" onclick="change_tab(this.id);">Genus</li>
                     <li class="notselected" id="page3" onclick="change_tab(this.id);">Species</li>
                     
                     <div class='hidden_desc' id="page1_desc">
                        <div class="col-md-4 col-lg-4 category-col-1">
                            <ul>
                                <li>
                                    <a target="_blank" href="#" title="Accounting/Finance"><i class="icon-angle-right"></i> Acanthaceae <span>(248)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=2&amp;icatId=" title="Bank/ Non-Bank Fin. Institution"><i class="icon-angle-right"></i> Achariaceae  <span>(48)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=3&amp;icatId=" title="Commercial/Supply Chain"><i class="icon-angle-right"></i> Achatocarpaceae <span>(131)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=4&amp;icatId=" title="Education/Training"><i class="icon-angle-right"></i> Acoraceae <span>(197)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=5&amp;icatId=" title="Engineer/Architects"><i class="icon-angle-right"></i> Acrobolbaceae <span>(289)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=6&amp;icatId=" title="Garments/Textile"><i class="icon-angle-right"></i> Actinidiaceae <span>(382)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=17&amp;icatId=" title="HR/Org. Development"><i class="icon-angle-right"></i> Balanopaceae <span>(115)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=7&amp;icatId=" title="Gen Mgt/Admin"><i class="icon-angle-right"></i> Balanophoraceae <span>(163)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=18&amp;icatId=" title="Design/Creative"><i class="icon-angle-right"></i> Balantiopsaceae <span>(71)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-lg-4 category-col-1">
                            <ul>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=1&amp;icatId=" title="Accounting/Finance"><i class="icon-angle-right"></i> Canellaceae <span>(248)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=2&amp;icatId=" title="Bank/ Non-Bank Fin. Institution"><i class="icon-angle-right"></i> Cannabaceae  <span>(48)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=3&amp;icatId=" title="Commercial/Supply Chain"><i class="icon-angle-right"></i> Cannaceae <span>(131)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=4&amp;icatId=" title="Education/Training"><i class="icon-angle-right"></i> Capparaceae <span>(197)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=5&amp;icatId=" title="Engineer/Architects"><i class="icon-angle-right"></i> Daltoniaceae <span>(289)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=6&amp;icatId=" title="Garments/Textile"><i class="icon-angle-right"></i> Daphniphyllaceae <span>(382)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=17&amp;icatId=" title="HR/Org. Development"><i class="icon-angle-right"></i> Ebenaceae <span>(115)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=7&amp;icatId=" title="Gen Mgt/Admin"><i class="icon-angle-right"></i> Ecdeiocoleaceae <span>(163)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=18&amp;icatId=" title="Design/Creative"><i class="icon-angle-right"></i> Echinodiaceae <span>(71)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-lg-4 category-col-1">
                            <ul>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=1&amp;icatId=" title="Accounting/Finance"><i class="icon-angle-right"></i> Equisetaceae <span>(248)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=2&amp;icatId=" title="Bank/ Non-Bank Fin. Institution"><i class="icon-angle-right"></i> Ericaceae  <span>(48)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=3&amp;icatId=" title="Commercial/Supply Chain"><i class="icon-angle-right"></i> Fabroniaceae <span>(131)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=4&amp;icatId=" title="Education/Training"><i class="icon-angle-right"></i> Fagaceae<span>(197)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=5&amp;icatId=" title="Engineer/Architects"><i class="icon-angle-right"></i> Garryaceae<span>(289)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=6&amp;icatId=" title="Garments/Textile"><i class="icon-angle-right"></i> Garments/Textile <span>(382)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=17&amp;icatId=" title="HR/Org. Development"><i class="icon-angle-right"></i> Haemodoraceae <span>(115)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=7&amp;icatId=" title="Gen Mgt/Admin"><i class="icon-angle-right"></i> Halophytaceae <span>(163)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=18&amp;icatId=" title="Design/Creative"><i class="icon-angle-right"></i> Icacinaceae <span>(71)</span></a>
                                </li>
                            </ul>
                        </div>
                     </div>

                     <div class='hidden_desc' id="page2_desc">
                        <div class="col-md-4 col-lg-4 category-col-1">
                            <ul>
                                <li>
                                    <a target="_blank" href="#" title="Accounting/Finance"><i class="icon-angle-right"></i> Aa (Orchidaceae) <span>(248)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=2&amp;icatId=" title="Bank/ Non-Bank Fin. Institution"><i class="icon-angle-right"></i> Aaronsohnia (Compositae)  <span>(48)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=3&amp;icatId=" title="Commercial/Supply Chain"><i class="icon-angle-right"></i> Abacopteris (Thelypteridaceae) <span>(131)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=4&amp;icatId=" title="Education/Training"><i class="icon-angle-right"></i> Discocnide (Urticaceae) <span>(197)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=5&amp;icatId=" title="Engineer/Architects"><i class="icon-angle-right"></i> Dolichoglottis (Compositae) <span>(289)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=6&amp;icatId=" title="Garments/Textile"><i class="icon-angle-right"></i> Malacothrix (Compositae) <span>(382)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=17&amp;icatId=" title="HR/Org. Development"><i class="icon-angle-right"></i> Mandoniella (Brachytheciaceae) <span>(115)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=7&amp;icatId=" title="Gen Mgt/Admin"><i class="icon-angle-right"></i> Rinoreocarpus (Violaceae) <span>(163)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=18&amp;icatId=" title="Design/Creative"><i class="icon-angle-right"></i> Balantiopsaceae <span>(71)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-lg-4 category-col-1">
                            <ul>
                                <li>
                                    <a target="_blank" href="#" title="Accounting/Finance"><i class="icon-angle-right"></i> Aa (Orchidaceae) <span>(248)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=2&amp;icatId=" title="Bank/ Non-Bank Fin. Institution"><i class="icon-angle-right"></i> Aaronsohnia (Compositae)  <span>(48)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=3&amp;icatId=" title="Commercial/Supply Chain"><i class="icon-angle-right"></i> Abacopteris (Thelypteridaceae) <span>(131)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=4&amp;icatId=" title="Education/Training"><i class="icon-angle-right"></i> Discocnide (Urticaceae) <span>(197)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=5&amp;icatId=" title="Engineer/Architects"><i class="icon-angle-right"></i> Dolichoglottis (Compositae) <span>(289)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=6&amp;icatId=" title="Garments/Textile"><i class="icon-angle-right"></i> Malacothrix (Compositae) <span>(382)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=17&amp;icatId=" title="HR/Org. Development"><i class="icon-angle-right"></i> Mandoniella (Brachytheciaceae) <span>(115)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=7&amp;icatId=" title="Gen Mgt/Admin"><i class="icon-angle-right"></i> Rinoreocarpus (Violaceae) <span>(163)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=18&amp;icatId=" title="Design/Creative"><i class="icon-angle-right"></i> Balantiopsaceae <span>(71)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-lg-4 category-col-1">
                            <ul>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=1&amp;icatId=" title="Accounting/Finance"><i class="icon-angle-right"></i> Equisetaceae <span>(248)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=2&amp;icatId=" title="Bank/ Non-Bank Fin. Institution"><i class="icon-angle-right"></i> Ericaceae  <span>(48)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=3&amp;icatId=" title="Commercial/Supply Chain"><i class="icon-angle-right"></i> Fabroniaceae <span>(131)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=4&amp;icatId=" title="Education/Training"><i class="icon-angle-right"></i> Fagaceae<span>(197)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=5&amp;icatId=" title="Engineer/Architects"><i class="icon-angle-right"></i> Garryaceae<span>(289)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=6&amp;icatId=" title="Garments/Textile"><i class="icon-angle-right"></i> Garments/Textile <span>(382)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=17&amp;icatId=" title="HR/Org. Development"><i class="icon-angle-right"></i> Haemodoraceae <span>(115)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=7&amp;icatId=" title="Gen Mgt/Admin"><i class="icon-angle-right"></i> Halophytaceae <span>(163)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=18&amp;icatId=" title="Design/Creative"><i class="icon-angle-right"></i> Icacinaceae <span>(71)</span></a>
                                </li>
                            </ul>
                        </div>
                     </div>
                     
                     <div class='hidden_desc' id="page3_desc">
                        <div class="col-md-4 col-lg-4 category-col-1">
                            <ul>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=1&amp;icatId=" title="Accounting/Finance"><i class="icon-angle-right"></i> Accounting/Finance <span>(248)</span></a>
                                </li>
                               
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=3&amp;icatId=" title="Commercial/Supply Chain"><i class="icon-angle-right"></i> Commercial/Supply Chain <span>(131)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=4&amp;icatId=" title="Education/Training"><i class="icon-angle-right"></i> Education/Training <span>(197)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=5&amp;icatId=" title="Engineer/Architects"><i class="icon-angle-right"></i> Engineer/Architects <span>(289)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=6&amp;icatId=" title="Garments/Textile"><i class="icon-angle-right"></i> Garments/Textile <span>(382)</span></a>
                                </li>
                                
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=7&amp;icatId=" title="Gen Mgt/Admin"><i class="icon-angle-right"></i> Gen Mgt/Admin <span>(163)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=18&amp;icatId=" title="Design/Creative"><i class="icon-angle-right"></i> Design/Creative <span>(71)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-lg-4 category-col-1">
                            <ul>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=1&amp;icatId=" title="Accounting/Finance"><i class="icon-angle-right"></i> Accounting/Finance <span>(248)</span></a>
                                </li>
                                
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=3&amp;icatId=" title="Commercial/Supply Chain"><i class="icon-angle-right"></i> Commercial/Supply Chain <span>(131)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=4&amp;icatId=" title="Education/Training"><i class="icon-angle-right"></i> Education/Training <span>(197)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=5&amp;icatId=" title="Engineer/Architects"><i class="icon-angle-right"></i> Engineer/Architects <span>(289)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=6&amp;icatId=" title="Garments/Textile"><i class="icon-angle-right"></i> Garments/Textile <span>(382)</span></a>
                                </li>
                               
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=7&amp;icatId=" title="Gen Mgt/Admin"><i class="icon-angle-right"></i> Gen Mgt/Admin <span>(163)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=18&amp;icatId=" title="Design/Creative"><i class="icon-angle-right"></i> Design/Creative <span>(71)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-lg-4 category-col-1">
                            <ul>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=1&amp;icatId=" title="Accounting/Finance"><i class="icon-angle-right"></i> Accounting/Finance <span>(248)</span></a>
                                </li>
                                
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=3&amp;icatId=" title="Commercial/Supply Chain"><i class="icon-angle-right"></i> Commercial/Supply Chain <span>(131)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=4&amp;icatId=" title="Education/Training"><i class="icon-angle-right"></i> Education/Training <span>(197)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=5&amp;icatId=" title="Engineer/Architects"><i class="icon-angle-right"></i> Engineer/Architects <span>(289)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=6&amp;icatId=" title="Garments/Textile"><i class="icon-angle-right"></i> Garments/Textile <span>(382)</span></a>
                                </li>
                               
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=7&amp;icatId=" title="Gen Mgt/Admin"><i class="icon-angle-right"></i> Gen Mgt/Admin <span>(163)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=18&amp;icatId=" title="Design/Creative"><i class="icon-angle-right"></i> Design/Creative <span>(71)</span></a>
                                </li>
                            </ul>
                        </div>
                     </div>
                     
                     <div id="page_content">
                      <div class="col-md-4 col-lg-4 category-col-1">
                            <ul>
                                <li>
                                    <a target="_blank" href="#" title="Accounting/Finance"><i class="icon-angle-right"></i> Acanthaceae <span>(248)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=2&amp;icatId=" title="Bank/ Non-Bank Fin. Institution"><i class="icon-angle-right"></i> Achariaceae  <span>(48)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=3&amp;icatId=" title="Commercial/Supply Chain"><i class="icon-angle-right"></i> Achatocarpaceae <span>(131)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=4&amp;icatId=" title="Education/Training"><i class="icon-angle-right"></i> Acoraceae <span>(197)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=5&amp;icatId=" title="Engineer/Architects"><i class="icon-angle-right"></i> Acrobolbaceae <span>(289)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=6&amp;icatId=" title="Garments/Textile"><i class="icon-angle-right"></i> Actinidiaceae <span>(382)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=17&amp;icatId=" title="HR/Org. Development"><i class="icon-angle-right"></i> Balanopaceae <span>(115)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=7&amp;icatId=" title="Gen Mgt/Admin"><i class="icon-angle-right"></i> Balanophoraceae <span>(163)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=18&amp;icatId=" title="Design/Creative"><i class="icon-angle-right"></i> Balantiopsaceae <span>(71)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-lg-4 category-col-1">
                            <ul>
                                <li>
                                    <a target="_blank" href="#" title="Accounting/Finance"><i class="icon-angle-right"></i> Acanthaceae <span>(248)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=2&amp;icatId=" title="Bank/ Non-Bank Fin. Institution"><i class="icon-angle-right"></i> Achariaceae  <span>(48)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=3&amp;icatId=" title="Commercial/Supply Chain"><i class="icon-angle-right"></i> Achatocarpaceae <span>(131)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=4&amp;icatId=" title="Education/Training"><i class="icon-angle-right"></i> Acoraceae <span>(197)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=5&amp;icatId=" title="Engineer/Architects"><i class="icon-angle-right"></i> Acrobolbaceae <span>(289)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=6&amp;icatId=" title="Garments/Textile"><i class="icon-angle-right"></i> Actinidiaceae <span>(382)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=17&amp;icatId=" title="HR/Org. Development"><i class="icon-angle-right"></i> Balanopaceae <span>(115)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=7&amp;icatId=" title="Gen Mgt/Admin"><i class="icon-angle-right"></i> Balanophoraceae <span>(163)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=18&amp;icatId=" title="Design/Creative"><i class="icon-angle-right"></i> Balantiopsaceae <span>(71)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-lg-4 category-col-1">
                            <ul>
                                <li>
                                    <a target="_blank" href="#" title="Accounting/Finance"><i class="icon-angle-right"></i> Acanthaceae <span>(248)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=2&amp;icatId=" title="Bank/ Non-Bank Fin. Institution"><i class="icon-angle-right"></i> Achariaceae  <span>(48)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=3&amp;icatId=" title="Commercial/Supply Chain"><i class="icon-angle-right"></i> Achatocarpaceae <span>(131)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=4&amp;icatId=" title="Education/Training"><i class="icon-angle-right"></i> Acoraceae <span>(197)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=5&amp;icatId=" title="Engineer/Architects"><i class="icon-angle-right"></i> Acrobolbaceae <span>(289)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=6&amp;icatId=" title="Garments/Textile"><i class="icon-angle-right"></i> Actinidiaceae <span>(382)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=17&amp;icatId=" title="HR/Org. Development"><i class="icon-angle-right"></i> Balanopaceae <span>(115)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=7&amp;icatId=" title="Gen Mgt/Admin"><i class="icon-angle-right"></i> Balanophoraceae <span>(163)</span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://jobs.bdjobs.com/jobsearch.asp?fcatId=18&amp;icatId=" title="Design/Creative"><i class="icon-angle-right"></i> Balantiopsaceae <span>(71)</span></a>
                                </li>
                            </ul>
                        </div>
                     </div>
                     
                    </div>

            </div>
            <div class="col-md-3 col-sm-12">
                <div class="govtJobs sidebar-common">
                    <h4><i class="icon-bd-map"></i>&nbsp;Govt Jobs</h4>
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item">
                                <div class="govt-job-list"><a onclick="_gaq.push(['_trackEvent', 'Govt Jobs' , 'Popular Jobs','Job No.:253133',1.00,true]);" target="_blank" href="http://jobs.bdjobs.com/jobdetails.asp?id=253133&amp;ln=2"><span class="title-bn" title="খুলনা প্রকৌশল ও প্রযুক্তি বিশ্ববিদ্যালয়" style="position: relative;">খুলনা প্রকৌশল ও প্রযুক্তি বিশ্ববিদ্যালয়<span class="title-bn dots">...</span></span><span class="des-bn" title="">সেকশন অফিসার</span></a><a onclick="_gaq.push(['_trackEvent', 'Govt Jobs' , 'Popular Jobs','Job No.:253101',1.00,true]);" target="_blank" href="http://jobs.bdjobs.com/jobdetails.asp?id=253101&amp;ln=2"><span class="title-bn" title="">বরিশাল পল্লী বিদ্যুৎ সমিতি-২</span><span class="des-bn" title="">সহকারী ক্যাশিয়ার</span></a><a onclick="_gaq.push(['_trackEvent', 'Govt Jobs' , 'Popular Jobs','Job No.:723045',1.00,true]);" target="_blank" href="http://jobs.bdjobs.com/jobdetails.asp?id=723045&amp;ln=2"><span class="title-bn" title="">বাংলাদেশ ব্যাংক</span><span class="des-bn" title="">কর্মকর্তা (ক্যাশ)</span></a><a onclick="_gaq.push(['_trackEvent', 'Govt Jobs' , 'Popular Jobs','Job No.:253081',1.00,true]);" target="_blank" href="http://jobs.bdjobs.com/jobdetails.asp?id=253081&amp;ln=2"><span class="title-bn" title="">মোংলা বন্দর কর্তৃপক্ষ</span><span class="des-bn" title="">সিনিয়র স্টাফ নার্স</span></a><a onclick="_gaq.push(['_trackEvent', 'Govt Jobs' , 'Popular Jobs','Job No.:253080',1.00,true]);" target="_blank" href="http://jobs.bdjobs.com/jobdetails.asp?id=253080&amp;ln=2"><span class="title-bn" title="">মোংলা বন্দর কর্তৃপক্ষ</span><span class="des-bn" title="">চিকিৎসা কর্মকর্তা</span></a></div>
                            </div>
                            <div class="item active">
                                <div class="govt-job-list"><a onclick="_gaq.push(['_trackEvent', 'Govt Jobs' , 'Popular Jobs','Job No.:253043',1.00,true]);" target="_blank" href="http://jobs.bdjobs.com/jobdetails.asp?id=253043&amp;ln=2"><span class="title-bn" title="জেলা পরিবার পরিকল্পনা কার্যালয়, লক্ষ্মীপুর" style="position: relative;">জেলা পরিবার পরিকল্পনা কার্যালয়, লক্ষ্মীপুর<span class="title-bn dots">...</span></span><span class="des-bn" title="">পরিবার কল্যাণ সহকারী (মহিলা)</span></a><a onclick="_gaq.push(['_trackEvent', 'Govt Jobs' , 'Popular Jobs','Job No.:253026',1.00,true]);" target="_blank" href="http://jobs.bdjobs.com/jobdetails.asp?id=253026&amp;ln=2"><span class="title-bn" title="">বাংলাদেশ স্থল বন্দর কর্তৃপক্ষ</span><span class="des-bn" title="">হিসাবরক্ষণ কর্মকর্তা</span></a><a onclick="_gaq.push(['_trackEvent', 'Govt Jobs' , 'Popular Jobs','Job No.:253025',1.00,true]);" target="_blank" href="http://jobs.bdjobs.com/jobdetails.asp?id=253025&amp;ln=2"><span class="title-bn" title="">বাংলাদেশ স্থল বন্দর কর্তৃপক্ষ</span><span class="des-bn" title="">সহকারী পরিচালক (ট্রাফিক)</span></a></div>
                            </div>
                        </div>
                    </div><a onclick="_gaq.push(['_trackEvent', 'Govt Jobs' , 'View All','All Jobs',1.00,true]);" target="_blank" href="http://jobs.bdjobs.com/JobSearch.asp?fcatId=-1&amp;icatId=0&amp;requestType=government" class="btn btn-view-more no-border">View All (221)</a>
                    <nav>
                        <ul class="control-box pager">
                            <li><a data-slide="prev" href="#carousel-example-generic"><i class="icon-angle-left-l"></i></a></li>
                            <li><a data-slide="next" href="#carousel-example-generic"><i class="icon-angle-right-l"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Start government jobs -->

            <!--include virtual = "/upcoming/files/specialskilledjobs.html"-->
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#carousel-example-generic,#special-carasoul').bind('slid.bs.carousel', function(e) {
                        govtJobDoted();
                    });

                    function govtJobDoted() {
                        $(".sidebar-common .item.active a>span,.fixedgovJobs a>span").each(function() {
                            $(this).attr("title", "");
                            $(this).find("span").remove();
                            if (this.offsetWidth < this.scrollWidth) {
                                $(this).attr("title", this.innerHTML);
                                $(this).css("position", "relative").append("<span class='" + this.className + " dots' >...</span>");
                            }
                        });
                    }
                    govtJobDoted();
                });
            </script>
            <!-- End government jobs -->
            <!--<div class="mobile-quick-links"></div>-->
        </div>
    </div>
</div><!-- archive section ends-->

<div id="page">
    <main id="main">
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row" id="themelist">
                        <div class="col-md-6">
                            <div class="theme-box">
                                <a href="#"><img src="/img/image.jpg" alt="Bell – Free Multipurpose Bootstrap 4 Template" class="img-responsive"></a>
                                <div class="theme-info">
                                    <div class="clearfix">
                                        <h2> <a href="#" rel="bookmark">Acanthaceae</a></h2>
                                        <div class="publish-date">Barcode / id: K000882360</div>

                                    </div>
                                    <p>You may make copies; including electronic copies; of the data held within this database provided that it is for your own personal use or for use within your organisation. Data may; for example; be used in the compilation of a bibliography. If you find this site useful then please do cite us since this will help us maintain and develop the resource further.
                                    </p>
                                    <div class="buttons"> <a href="#" target="_blank"><i class="fa fa-eye"></i> &nbsp;Preview</a> <a href="#" class="buy-pro"><i class="fa fa-shopping-cart"></i> &nbsp;Details</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="theme-box">
                                <a href="#"><img src="/img/image.jpg" alt="Imperial – Free Onepage Bootstrap Theme" class="img-responsive"></a>
                                <div class="theme-info">
                                    <div class="clearfix">
                                        <h2> <a href="#" rel="bookmark">Asclepiadaceae
</a></h2>
                                        <div class="publish-date">Barcode Id: K000910013
                                        </div>

                                    </div>
                                    <p>You may make copies; including electronic copies; of the data held within this database provided that it is for your own personal use or for use within your organisation. Data may; for example; be used in the compilation of a bibliography. If you find this site useful then please do cite us since this will help us maintain and develop the resource further.
                                    </p>
                                    <div class="buttons"> <a href="#" target="_blank"><i class="fa fa-eye"></i> &nbsp;Preview</a> <a href="#" class="buy-pro"><i class="fa fa-shopping-cart"></i> &nbsp;Details</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="theme-box">
                                <a href="#"><img src="/img/image.jpg" alt="Maxim – Free Onepage Bootstrap Theme" class="img-responsive"></a>
                                <div class="theme-info">
                                    <div class="clearfix">
                                        <h2> <a href="#" rel="bookmark">Acanthaceae
</a></h2>
                                        <div class="publish-date">Barcode Id: K000885658
                                        </div>

                                    </div>
                                    <p>You may make copies; including electronic copies; of the data held within this database provided that it is for your own personal use or for use within your organisation. Data may; for example; be used in the compilation of a bibliography. If you find this site useful then please do cite us since this will help us maintain and develop the resource further.
                                    </p>
                                    <div class="buttons"> <a href="#" target="_blank"><i class="fa fa-eye"></i> &nbsp;Preview</a> <a href="#" class="buy-pro"><i class="fa fa-shopping-cart"></i> &nbsp;Details</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="theme-box">
                                <a href="#"><img src="/img/xylarium 1.jpg" alt="MyBiz Free Business Bootstrap Theme" class="img-responsive"></a>
                                <div class="theme-info">
                                    <div class="clearfix">
                                        <h2> <a href="#" rel="bookmark">Acanthaceae
</a></h2>
                                        <div class="publish-date">Barcode / id K001132507
                                        </div>
                                        
                                    </div>
                                    <p>You may make copies; including electronic copies; of the data held within this database provided that it is for your own personal use or for use within your organisation. Data may; for example; be used in the compilation of a bibliography. If you find this site useful then please do cite us since this will help us maintain and develop the resource further.
                                    </p>
                                    <div class="buttons"> <a href="#" target="_blank"><i class="fa fa-eye"></i> &nbsp;Preview</a> <a href="#" class="buy-pro"><i class="fa fa-shopping-cart"></i> &nbsp;Details</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="theme-box">
                                <a href="#"><img src="/img/xylarium 1.jpg" alt="Delicious Free Restaurant Bootstrap Theme" class="img-responsive"></a>
                                <div class="theme-info">
                                    <div class="clearfix">
                                        <h2> <a href="#" rel="bookmark">Dioscoreaceae
</a></h2>
                                        <div class="publish-date">Barcode / id K000809580
                                        </div>
                                        <div class="ratings">
                                            <div class="kk-star-ratings  top-left lft" data-id="276">
                                                <div class="kksr-stars kksr-star gray">
                                                    <div class="kksr-fuel kksr-star yellow" style="width: 62.55%;"></div>
                                                    <a href="#1"></a>
                                                    <a href="#2"></a>
                                                    <a href="#3"></a>
                                                    <a href="#4"></a>
                                                    <a href="#5"></a>
                                                </div>
                                                <div class="kksr-legend">
                                                    <div itemprop="aggregateRating" itemscope="" itemtype="#">
                                                        <div itemprop="name" class="kksr-title">Dioscoreaceae- Dioscorea glabra Roxb.
                                                        </div><span itemprop="ratingValue">3.1</span> / <span itemprop="ratingCount">157</span>
                                                        <meta itemprop="bestRating" content="5">
                                                        <meta itemprop="worstRating" content="1">
                                                        <div itemprop="itemReviewed" itemscope="" itemtype="#"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>You may make copies; including electronic copies; of the data held within this database provided that it is for your own personal use or for use within your organisation. Data may; for example; be used in the compilation of a bibliography. If you find this site useful then please do cite us since this will help us maintain and develop the resource further.
                                    </p>
                                    <div class="buttons"> <a href="#" target="_blank"><i class="fa fa-eye"></i> &nbsp;Preview</a> <a href="#" class="buy-pro"><i class="fa fa-details"></i> &nbsp;Details</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="theme-box">
                                <a href="#"><img src="/img/xylarium 1.jpg" alt="Mentor Free Education Bootstrap Theme" class="img-responsive"></a>
                                <div class="theme-info">
                                    <div class="clearfix">
                                        <h2> <a href="#" rel="bookmark">Dioscoreaceae
</a></h2>
                                        <div class="publish-date">Barcode / id K000809580
                                        </div>
                                        <div class="ratings">
                                            <div class="kk-star-ratings  top-left lft" data-id="274">
                                                <div class="kksr-stars kksr-star gray">
                                                    <div class="kksr-fuel kksr-star yellow" style="width: 64.23%;"></div>
                                                    <a href="#1"></a>
                                                    <a href="#2"></a>
                                                    <a href="#3"></a>
                                                    <a href="#4"></a>
                                                    <a href="#5"></a>
                                                </div>
                                                <div class="kksr-legend">
                                                    <div itemprop="aggregateRating" itemscope="" itemtype="">
                                                        <div itemprop="name" class="kksr-title">Dioscoreaceae- Dioscorea glabra Roxb.</div><span itemprop="ratingValue">3.2</span> / <span itemprop="ratingCount">71</span>
                                                        <meta itemprop="bestRating" content="5">
                                                        <meta itemprop="worstRating" content="1">
                                                        <div itemprop="itemReviewed" itemscope="" itemtype="http://schema.org/CreativeWork"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>You may make copies; including electronic copies; of the data held within this database provided that it is for your own personal use or for use within your organisation. Data may; for example; be used in the compilation of a bibliography. If you find this site useful then please do cite us since this will help us maintain and develop the resource further.
                                    </p>
                                    <div class="buttons"> <a href="#" target="_blank"><i class="fa fa-eye"></i> &nbsp;Preview</a> <a href="#" class="buy-pro"><i class="fa fa-shopping-cart"></i> &nbsp;Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination">
                        <div class="wp-pagenavi"> <span class="pages">Page 1 of 6</span><span class="current">1</span><a class="page larger" title="Page 2" href="#">2</a><a class="page larger" title="Page 3" href="#">3</a><a class="page larger" title="Page 4" href="#">4</a><a class="page larger" title="Page 5" href="#">5</a><a class="page larger" title="Page 6" href="#">6</a><a class="nextpostslink" rel="next" href="#">»</a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="widget-area">
                            <h3 class="widget-title">Newsletter</h3>
                            <div class="newsletter">
                                <p>Subscribe to get notified when new publication is released</p>
                                <form class="clearfix" action="" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=BootstrapMade', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
                                    <input type="hidden" value="BootstrapMade" name="uri">
                                    <input type="hidden" name="loc" value="en_US">
                                    <div class="email">
                                        <input type="text" name="email" placeholder="Enter your email">
                                    </div>
                                    <div class="submit">
                                        <input type="submit" value="Subscribe">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget-area">
                            <h3 class="widget-title">Specimen Finder</h3>
                            <div class="filter-themes">
                                <div title="Search" class="searchform clearfix">
                                    <form method="get" action=""> <span class="sfield"><input type="text" value="" name="s" class="s" placeholder="Enter keyword..."></span>
                                        <button type="submit" class="sbutton"><i class="fa fa-search sicon" title="Search"></i></button>
                                    </form>
                                </div>
                                <form method="POST" action="">
                                    <ul class="filter-themes-items clearfix">
                                        <li>
                                            <h3>Specimens by Family</h3>
                                            <ul class="item-features">
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="onepage" id="filter-onepage">
                                                    <label for="filter-onepage">One Page</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="comingsoon" id="filter-comingsoon">
                                                    <label for="filter-comingsoon">Coming Soon</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="admin" id="filter-admin">
                                                    <label for="filter-admin">Admin</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="business" id="filter-business">
                                                    <label for="filter-business">Business</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="portfolio" id="filter-portfolio">
                                                    <label for="filter-portfolio">Portfolio</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="education" id="filter-education">
                                                    <label for="filter-education">Education</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="travel" id="filter-travel">
                                                    <label for="filter-travel">Travel</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="restaurant" id="filter-restaurant">
                                                    <label for="filter-restaurant">Restaurant</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="health" id="filter-health">
                                                    <label for="filter-health">Health</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="hotel" id="filter-hotel">
                                                    <label for="filter-hotel">Hotel</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="sports" id="filter-sports">
                                                    <label for="filter-sports">Sports</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="home" id="filter-home">
                                                    <label for="filter-home">Home</label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="filter-themes-items clearfix">
                                        <li>
                                            <h3>Specimens By Location</h3>
                                            <ul class="item-colors">
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="black" id="filter-black">
                                                    <label for="filter-black">Chittagong</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="blue" id="filter-blue">
                                                    <label for="filter-blue">Chittagong</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="brown" id="filter-brown">
                                                    <label for="filter-brown">Chittagong</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="gray" id="filter-gray">
                                                    <label for="filter-gray">Chittagong</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="green" id="filter-green">
                                                    <label for="filter-green">Chittagong</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="orange" id="filter-orange">
                                                    <label for="filter-orange">Chittagong</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="pink" id="filter-pink">
                                                    <label for="filter-pink">Chittagong</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="purple" id="filter-purple">
                                                    <label for="filter-purple">Chittagong</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="red" id="filter-red">
                                                    <label for="filter-red">Chittagong</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="white" id="filter-white">
                                                    <label for="filter-white">Chittagong</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="filters[]" value="yellow" id="filter-yellow">
                                                    <label for="filter-yellow">Chittagong</label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <h3>Collection date range</h3>
                                    <div style="text-align: center;">
                                        <select name="orderby">
                                            <option value="date-latest">1950 upto Present </option>
                                            <option value="date-oldest">1900 upto 1949 </option>
                                            <option value="popularity-most">1850 upto 1899 </option>
                                            <option value="popularity-less">1830 upto 1849 </option>
                                        </select>
                                    </div>
                                    <div style="text-align: center;">
                                        <input type="submit" value="Filter Themes">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget-area">
                            <h3 class="widget-title">Popular Specimens</h3>
                            <div class="popular-themes clearfix">
                                <div class="screen">
                                    <a href="#"><img src="/img/iveTime2.jpg" alt="Squadfree – Free Bootstrap template for creative" class="img-responsive"></a>
                                </div>
                                <h4><a href="#" rel="bookmark">Dioscoreaceae- Dioscorea glabra Roxb
</a></h4>
                                <div class="info">
                                    <div class="downloads">85,369 Downloads</div>
                                    <div class="ratings">
                                        <div class="kk-star-ratings  top-left lft" data-id="29">
                                            <div class="kksr-stars kksr-star gray">
                                                <div class="kksr-fuel kksr-star yellow" style="width: 68%;"></div>
                                                <a href="#1"></a>
                                                <a href="#2"></a>
                                                <a href="#3"></a>
                                                <a href="#4"></a>
                                                <a href="#5"></a>
                                            </div>
                                            <div class="kksr-legend">
                                                <div itemprop="aggregateRating" itemscope="" itemtype="#">
                                                    <div itemprop="name" class="kksr-title">Dioscoreaceae- Dioscorea glabra Roxb</div><span itemprop="ratingValue">3.4</span> / <span itemprop="ratingCount">160</span>
                                                    <meta itemprop="bestRating" content="5">
                                                    <meta itemprop="worstRating" content="1">
                                                    <div itemprop="itemReviewed" itemscope="" itemtype="#"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons"> <a href="#" target="_blank"><i class="fa fa-eye"></i> &nbsp;Preview</a>  <a href="#"><i class="fa fa-shopping-cart"></i> &nbsp;Details</a></div>
                            </div>
                            
                            <div class="popular-themes clearfix">
                                <div class="screen">
                                    <a href="#"><img src="/img/Tw_53076_xa_004.jpg" alt="Free Bootstrap template for corporate – Moderna" class="img-responsive"></a>
                                </div>
                                <h4><a href="#" rel="bookmark">Dioscoreaceae- Dioscorea glabra Roxb</a></h4>
                                <div class="info">
                                    <div class="downloads">66,018 Downloads</div>
                                    <div class="ratings">
                                        <div class="kk-star-ratings  top-left lft" data-id="19">
                                            <div class="kksr-stars kksr-star gray">
                                                <div class="kksr-fuel kksr-star yellow" style="width: 64.95%;"></div>
                                                <a href="#1"></a>
                                                <a href="#2"></a>
                                                <a href="#3"></a>
                                                <a href="#4"></a>
                                                <a href="#5"></a>
                                            </div>
                                            <div class="kksr-legend">
                                                <div itemprop="aggregateRating" itemscope="" itemtype="#">
                                                    <div itemprop="name" class="kksr-title">Dioscoreaceae- Dioscorea glabra Roxb</div><span itemprop="ratingValue">3.2</span> / <span itemprop="ratingCount">186</span>
                                                    <meta itemprop="bestRating" content="5">
                                                    <meta itemprop="worstRating" content="1">
                                                    <div itemprop="itemReviewed" itemscope="" itemtype="#"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons"> <a href="#" target="_blank"><i class="fa fa-eye"></i> &nbsp;Preview</a>  <a href="#"><i class="fa fa-shopping-cart"></i> &nbsp;Details</a></div>
                            </div>
                            <div class="popular-themes clearfix">
                                <div class="screen">
                                    <a href="#"><img src="/img/Tw_53076_xa_004.jpg" alt="Company – Free HTML Bootstrap Template" class="img-responsive"></a>
                                </div>
                                <h4><a href="#" rel="bookmark">Dioscoreaceae- Dioscorea glabra Roxb</a></h4>
                                <div class="info">
                                    <div class="downloads">54,197 Downloads</div>
                                    
                                </div>
                                <div class="buttons"> <a href="#" target="_blank"><i class="fa fa-eye"></i> &nbsp;Preview</a>  <a href="#"><i class="fa fa-shopping-cart"></i> &nbsp;Details</a></div>
                            </div>
                            <div class="popular-themes clearfix">
                                
                                <div class="buttons"> <a href="#" target="_blank"><i class="fa fa-eye"></i> &nbsp;Preview</a>  <a href="#"><i class="fa fa-shopping-cart"></i> &nbsp;Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</div>









<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.xylarium', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>