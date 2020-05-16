@extends('layout.herbarium.master')

@section('title', 'BFRI-Herbarium')

@section('content-css')
<style>
    



</style>

@endsection

@section('content')


<div class="searchPanelContainer " image="url(/img/Herbarium.jpg)" style="background-image: url(&quot;/img/Herbarium.jpg&quot;);">

    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <!--<link rel="stylesheet" href="css/odometer-theme-default.css" />-->
                <div class="search-panel">
                    <h1>BFRI-Herbarium</h1>
                    <div class="search-form">

                        <form action="#" method="post" target="_blank" _lpchecked="1">

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

                            
                            <input type="hidden" id="hidJobSearch" name="hidJobSearch" value="jobsearch">
                            <input type="submit" class="btn btn-default" value="Search" onclick="Generategglevent()">
                        </form>
                    </div>

                    <!-- Start counter //JopApply'JobShow'CompnayShow-->
                    <div class="counter hidden-xs hidden-sm">

                        <a href="#" target="_blank">
                            <div class="live-jobs">
                                <button class="mybutton mybutton4">Genus <br/><span>800</span></button>
                            </div>
                        </a>
                        <a href="#" target="_blank">
                            <div class="companies">
                                <button class="mybutton mybutton4">Species <br/><span>1500</span></button>
                            </div>
                        </a>

                        <a href="#" target="_blank">

                            <div class="apply-online">
                                <!-- <div class="border">
                                    <div class="counter-icon">
                                        <i class="icon-mouse-click"></i>
                                    </div>
                                </div>-->
                                <button class="mybutton mybutton4">Specimens <br/><span>30000</span></button>
                            </div>
                        </a>
                    </div>
                    <!-- End counter -->
                </div>

            </div>

            <div class="col-md-3 col-sm-12">

                <div class="sliderSidebar">
                    <div class="division">
                        <h4 style="color: azure;">Divisional Findings</h4>
                        <div class="all-division">
                            <a href="#" class="btn btn-default" target="_blank">Chittagong <span>(342)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Dhaka <span>(1979)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Barisal <span>(28)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Khulna <span>(115)</span></a>
                            <a href="#" class="btn btn-default" target="_blank">Sylhet <span>(65)</span></a>

                            <a href="#" class="btn btn-default" target="_blank">Rajshahi <span>(79)</span></a>
                        </div>
                    </div>

                    <div class="all-division">
                        <h4 style="color: azure;">Specimens by volume</h4>
                        <a href="#" class="btn btn-default" target="_blank">Chittagong <span>(342)</span></a>
                        <a href="#" class="btn btn-default" target="_blank">Dhaka <span>(1979)</span></a>
                        <a href="#" class="btn btn-default" target="_blank">Barisal <span>(28)</span></a>
                        <a href="#" class="btn btn-default" target="_blank">Khulna <span>(115)</span></a>
                        <a href="#" class="btn btn-default" target="_blank">Sylhet <span>(65)</span></a>
                    </div>
                </div>
            </div>

           

            <!--eid background ends-->
        </div>
    </div>
</div><!-- tob banner ends-->



<div class="jobCategory">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12">

                <div class="tab padding-mobile fun-tab">
                    <div class="tab-header padding-mobile">
                        <h4 class="m-text-center"><i class="icon-list"></i>&nbsp;Browse Category</h4>
                        <div class="tab-btn padding-mobile">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-funtional active">
                                  Functional
                                  <!-- <span class="badge">71</span> -->
                               </button>
                               <button type="button" class="btn btn-default btn-industrial">
                                  Industrial
                                  <!-- <span class="badge">71</span>   -->
                               </button>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="category-list padding-mobile functional active">
                    
                    
                        <div class="col-md-4 col-lg-4 category-col-1">
                            <ul>
                                <li>
                                                    <a target="_blank" href="#" title="Accounting/Finance"><i class="icon-angle-right"></i> Acanthaceae <span>(248)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=2&amp;icatId=" title="Bank/ Non-Bank Fin. Institution"><i class="icon-angle-right"></i> Achariaceae  <span>(48)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=3&amp;icatId=" title="Commercial/Supply Chain"><i class="icon-angle-right"></i> Achatocarpaceae <span>(131)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=4&amp;icatId=" title="Education/Training"><i class="icon-angle-right"></i> Acoraceae <span>(197)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=5&amp;icatId=" title="Engineer/Architects"><i class="icon-angle-right"></i> Acrobolbaceae <span>(289)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=6&amp;icatId=" title="Garments/Textile"><i class="icon-angle-right"></i> Actinidiaceae <span>(382)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=17&amp;icatId=" title="HR/Org. Development"><i class="icon-angle-right"></i> Balanopaceae <span>(115)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=7&amp;icatId=" title="Gen Mgt/Admin"><i class="icon-angle-right"></i> Balanophoraceae <span>(163)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=18&amp;icatId=" title="Design/Creative"><i class="icon-angle-right"></i> Balantiopsaceae <span>(71)</span></a>
                                                </li>
                            </ul>
                        </div>

                        <div class="col-md-4 col-lg-4 category-col-2 m-active">
                            <ul>
                                <li>
                                                    <a target="_blank" href="#" title="Accounting/Finance"><i class="icon-angle-right"></i> Acanthaceae <span>(248)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=2&amp;icatId=" title="Bank/ Non-Bank Fin. Institution"><i class="icon-angle-right"></i> Achariaceae  <span>(48)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=3&amp;icatId=" title="Commercial/Supply Chain"><i class="icon-angle-right"></i> Achatocarpaceae <span>(131)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=4&amp;icatId=" title="Education/Training"><i class="icon-angle-right"></i> Acoraceae <span>(197)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=5&amp;icatId=" title="Engineer/Architects"><i class="icon-angle-right"></i> Acrobolbaceae <span>(289)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=6&amp;icatId=" title="Garments/Textile"><i class="icon-angle-right"></i> Actinidiaceae <span>(382)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=17&amp;icatId=" title="HR/Org. Development"><i class="icon-angle-right"></i> Balanopaceae <span>(115)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=7&amp;icatId=" title="Gen Mgt/Admin"><i class="icon-angle-right"></i> Balanophoraceae <span>(163)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=18&amp;icatId=" title="Design/Creative"><i class="icon-angle-right"></i> Balantiopsaceae <span>(71)</span></a>
                                                </li>
                            </ul>
                        </div>

                        <div class="col-md-4 col-lg-4 category-col-3 m-active">
                            <ul>
                                <li>
                                                    <a target="_blank" href="#" title="Accounting/Finance"><i class="icon-angle-right"></i> Acanthaceae <span>(248)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=2&amp;icatId=" title="Bank/ Non-Bank Fin. Institution"><i class="icon-angle-right"></i> Achariaceae  <span>(48)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=3&amp;icatId=" title="Commercial/Supply Chain"><i class="icon-angle-right"></i> Achatocarpaceae <span>(131)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=4&amp;icatId=" title="Education/Training"><i class="icon-angle-right"></i> Acoraceae <span>(197)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=5&amp;icatId=" title="Engineer/Architects"><i class="icon-angle-right"></i> Acrobolbaceae <span>(289)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=6&amp;icatId=" title="Garments/Textile"><i class="icon-angle-right"></i> Actinidiaceae <span>(382)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=17&amp;icatId=" title="HR/Org. Development"><i class="icon-angle-right"></i> Balanopaceae <span>(115)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=7&amp;icatId=" title="Gen Mgt/Admin"><i class="icon-angle-right"></i> Balanophoraceae <span>(163)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=18&amp;icatId=" title="Design/Creative"><i class="icon-angle-right"></i> Balantiopsaceae <span>(71)</span></a>
                                                </li>
                            </ul>
                        </div>
                        <div class="category-view fun-cat active">
                            <a class="btn btn-default more-cat hidden-md hidden-lg active">More&nbsp;<i class="icon-plus"></i></a>

                            <a class="btn btn-default less-cat">Less&nbsp;<i class="icon-minus"></i></a>
                        </div>
                        

                        <!-- <div id="loadMore" class="hidden-md hidden-lg">Load more</div> -->
                    </div>

                    <div class="category-list padding-mobile industrial">
                    


                        <div class="col-md-4 col-lg-4 category-col-1">
                            <ul>
                                
                            <li>
                                                    <a target="_blank" href="#" title="Accounting/Finance"><i class="icon-angle-right"></i> Acanthaceae <span>(248)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=2&amp;icatId=" title="Bank/ Non-Bank Fin. Institution"><i class="icon-angle-right"></i> Achariaceae  <span>(48)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=3&amp;icatId=" title="Commercial/Supply Chain"><i class="icon-angle-right"></i> Achatocarpaceae <span>(131)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=4&amp;icatId=" title="Education/Training"><i class="icon-angle-right"></i> Acoraceae <span>(197)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=5&amp;icatId=" title="Engineer/Architects"><i class="icon-angle-right"></i> Acrobolbaceae <span>(289)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=6&amp;icatId=" title="Garments/Textile"><i class="icon-angle-right"></i> Actinidiaceae <span>(382)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=17&amp;icatId=" title="HR/Org. Development"><i class="icon-angle-right"></i> Balanopaceae <span>(115)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=7&amp;icatId=" title="Gen Mgt/Admin"><i class="icon-angle-right"></i> Balanophoraceae <span>(163)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=18&amp;icatId=" title="Design/Creative"><i class="icon-angle-right"></i> Balantiopsaceae <span>(71)</span></a>
                                                </li>
                                
                            </ul>
                        </div>
                        
                        <div class="col-md-4 col-lg-4 category-col-2 m-active">
                            <ul>

                            <li>
                                                    <a target="_blank" href="#" title="Accounting/Finance"><i class="icon-angle-right"></i> Acanthaceae <span>(248)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=2&amp;icatId=" title="Bank/ Non-Bank Fin. Institution"><i class="icon-angle-right"></i> Achariaceae  <span>(48)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=3&amp;icatId=" title="Commercial/Supply Chain"><i class="icon-angle-right"></i> Achatocarpaceae <span>(131)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=4&amp;icatId=" title="Education/Training"><i class="icon-angle-right"></i> Acoraceae <span>(197)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=5&amp;icatId=" title="Engineer/Architects"><i class="icon-angle-right"></i> Acrobolbaceae <span>(289)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=6&amp;icatId=" title="Garments/Textile"><i class="icon-angle-right"></i> Actinidiaceae <span>(382)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=17&amp;icatId=" title="HR/Org. Development"><i class="icon-angle-right"></i> Balanopaceae <span>(115)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=7&amp;icatId=" title="Gen Mgt/Admin"><i class="icon-angle-right"></i> Balanophoraceae <span>(163)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=18&amp;icatId=" title="Design/Creative"><i class="icon-angle-right"></i> Balantiopsaceae <span>(71)</span></a>
                                                </li>
                            


                            </ul>
                        </div>
                        
                        
                        
                        <div class="col-md-4 col-lg-4 category-col-3 m-active">
                            <ul>
                            
                             <li>
                                                    <a target="_blank" href="#" title="Accounting/Finance"><i class="icon-angle-right"></i> Acanthaceae <span>(248)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=2&amp;icatId=" title="Bank/ Non-Bank Fin. Institution"><i class="icon-angle-right"></i> Achariaceae  <span>(48)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=3&amp;icatId=" title="Commercial/Supply Chain"><i class="icon-angle-right"></i> Achatocarpaceae <span>(131)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=4&amp;icatId=" title="Education/Training"><i class="icon-angle-right"></i> Acoraceae <span>(197)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=5&amp;icatId=" title="Engineer/Architects"><i class="icon-angle-right"></i> Acrobolbaceae <span>(289)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=6&amp;icatId=" title="Garments/Textile"><i class="icon-angle-right"></i> Actinidiaceae <span>(382)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=17&amp;icatId=" title="HR/Org. Development"><i class="icon-angle-right"></i> Balanopaceae <span>(115)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=7&amp;icatId=" title="Gen Mgt/Admin"><i class="icon-angle-right"></i> Balanophoraceae <span>(163)</span></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#?fcatId=18&amp;icatId=" title="Design/Creative"><i class="icon-angle-right"></i> Balantiopsaceae <span>(71)</span></a>
                                                </li>            
                                
                            </ul>
                        </div>

                       <div class="category-view ind-cat">
                            <a class="btn btn-default more-cat hidden-md hidden-lg active">More&nbsp;<i class="icon-plus"></i></a>
                            <a class="btn btn-default less-cat">Less&nbsp;<i class="icon-minus"></i></a>
                        </div>


                      
                    </div>
                   
                </div>

            </div>
            <div class="col-md-3 col-sm-12">
                <div class="govtJobs sidebar-common">
                    <h4><i class="icon-bd-map"></i>&nbsp;BFRI News</h4>
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item">
                                <div class="govt-job-list"><a onclick="_gaq.push(['_trackEvent', 'Govt Jobs' , 'Popular Jobs','Job No.:253133',1.00,true]);" target="_blank" href="/xylarium/arboretum"><span class="title-bn" title="জাতীয় বৃক্ষমেলা ২০১৭ এ বিএফআরআই এর ২য় পুরস্কার লাভ" style="position: relative;">জাতীয় বৃক্ষমেলা ২০১৭ এ বিএফআরআই এর ২য় পুরস্কার লাভ<span class="title-bn dots">...</span></span><span class="des-bn" title="">২০১৭-০৭-১৭</span></a><a onclick="_gaq.push(['_trackEvent', 'Govt Jobs' , 'Popular Jobs','Job No.:253101',1.00,true]);" target="_blank" href="/xylarium/arboretum"><span class="title-bn" title="বিএফআরআইতে বৃক্ষরোপণ অভিযান-২০১৭ এর উদ্বোধন">বিএফআরআইতে বৃক্ষরোপণ অভিযান-২০১৭ এর উদ্বোধন</span><span class="des-bn" title="">২০১৭-০৬-২৯</span></a><a onclick="_gaq.push(['_trackEvent', 'Govt Jobs' , 'Popular Jobs','Job No.:723045',1.00,true]);" target="_blank" href="/xylarium/arboretum"><span class="title-bn" title="বিএফআরআইতে ‘নাগরিক সেবায় উদ্ভাবন’ প্রশিক্ষণ কর্মশালা অনুষ্ঠিত"> বিএফআরআইতে ‘নাগরিক সেবায় উদ্ভাবন’ প্রশিক্ষণ কর্মশালা অনুষ্ঠিত</span><span class="des-bn" title="">২০১৭-০৬-১৫</span></a><a onclick="_gaq.push(['_trackEvent', 'Govt Jobs' , 'Popular Jobs','Job No.:253081',1.00,true]);" target="_blank" href="/xylarium/arboretum"><span class="title-bn" title="গোপালগঞ্জে উপস্থাপিত হল বিএফআরআই এর প্রযুক্তিসমূহ">গোপালগঞ্জে উপস্থাপিত হল বিএফআরআই এর প্রযুক্তিসমূহ</span><span class="des-bn" title="">২০১৭-০৪-১৯</span></a><a onclick="_gaq.push(['_trackEvent', 'Govt Jobs' , 'Popular Jobs','Job No.:253080',1.00,true]);" target="_blank" href="/xylarium/arboretum"><span class="title-bn" title="">বিএফআরআইতে অর্ধবাষিক গবেষণা অগ্রগতি পর্যালোচনা কর্মশালা (২০১৬-১৭)এ প্রধান অতিথি পরিবেশ ও বন মন্ত্রণালয়ের সচিব</span><span class="des-bn" title="">২০১৭-০৪-১৬</span></a></div>
                            </div>
                            <div class="item active">
                                <div class="govt-job-list"><a onclick="_gaq.push(['_trackEvent', 'Govt Jobs' , 'Popular Jobs','Job No.:253043',1.00,true]);" target="_blank" href="/xylarium/arboretum"><span class="title-bn" title="জেলা পরিবার পরিকল্পনা কার্যালয়, লক্ষ্মীপুর" style="position: relative;">জাতীয় বৃক্ষমেলা ২০১৭ এ বিএফআরআই এর ২য় পুরস্কার লাভ<span class="title-bn dots">...</span></span><span class="des-bn" title="">২০১৭-০৭-১৭</span></a><a onclick="_gaq.push(['_trackEvent', 'Govt Jobs' , 'Popular Jobs','Job No.:253026',1.00,true]);" target="_blank" href="/xylarium/arboretum"><span class="title-bn" title="বিএফআরআইতে বৃক্ষরোপণ অভিযান-২০১৭ এর উদ্বোধন">বিএফআরআইতে বৃক্ষরোপণ অভিযান-২০১৭ এর উদ্বোধন</span><span class="des-bn" title="">২০১৭-০৬-২৯</span></a><a onclick="_gaq.push(['_trackEvent', 'Govt Jobs' , 'Popular Jobs','Job No.:253025',1.00,true]);" target="_blank" href="/xylarium/arboretum"><span class="title-bn" title="">বিএফআরআইতে ‘নাগরিক সেবায় উদ্ভাবন’ প্রশিক্ষণ কর্মশালা অনুষ্ঠিত</span><span class="des-bn" title="">২০১৭-০৬-১৫</span></a></div>
                            </div>
                        </div>
                    </div><a onclick="_gaq.push(['_trackEvent', 'Govt Jobs' , 'View All','All Jobs',1.00,true]);" target="_blank" href="/xylarium/arboretum?fcatId=-1&amp;icatId=0&amp;requestType=government" class="btn btn-view-more no-border">View All (221)</a>
                    
                </div>
            </div>

            <!-- Start government jobs -->

            
            <!-- End government jobs -->
            <!--<div class="mobile-quick-links"></div>-->
        </div>
    </div>
</div><!-- archive section ends-->



<!-- search portal starts-->
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
<!-- search portal ends-->


<table id="border_globaltable" align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tbody>
        <tr>
            <td>

                <table width="100%" bgcolor="#ffffff" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td id="quicknavig">
                                <div style="padding-left:3px; ">&nbsp;</div>
                            </td>
                            <td id="youarehere">
                                <div style="padding-right:10px; ">&nbsp;You are here:&nbsp;<a href="index.php">Home </a> ><img src="/img/right_triangel.png" align="absmiddle" hspace="4" border="0"><a href="colldata_hbg.php">Herbarium </a> ><img src="/img/right_triangel.png" align="absmiddle" hspace="4" border="0"><a href="colldata_hbg.php">Collections &amp; Details</a></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table height="600" bgcolor="white" width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td id="ina" valign="top">
                                <div class="box_main_left">
                                    <div id="hbgstat_box">
                                        <div class="infobox_headline_text" id="bground_darkgrey">
                                            <b>HBG Statistics</b></div>
                                        <div id="pad_left_right_2px">Sheets in the Details:&nbsp;<font color="#000000"><strong>37873</strong></font>
                                            <br>
                                            <br>
                                        </div>
                                        <div id="menu1">
                                            <a href="./Data_Spermatophyta/index.php" target="_self"><img src="/img/right_triangel.png" align="absmiddle" hspace="4" border="0">Details&nbsp;Phanerogams</a>
                                        </div>
                                    </div>
                                    <div id="hbgbox">
                                        <div class="infobox_headline_text" id="bground_darkgrey">
                                            <b>Random herbarium sheet</b></div>
                                        <div style=" padding-left:0px;padding-right:0px;">
                                            <a href="/img/HBG-500290.jpg" rel="lightbox[test]" title=""><img src="/img/HBG-500290.jpg" width="214" alt ''="" border="0"></a>
                                        </div>
                                        <div id="pad_left_right_2px">Collector:&nbsp;Winkler, H. (Hans) K.A.
                                            <br> Isoneotype
                                            <br> Year:&nbsp;1924
                                            <br> Country:&nbsp;Indonesia
                                            <br>
                                            <i>(HBG500290)</i>
                                            <br>
                                        </div>
                                        <div id="menu1">
                                            <a href="./Data_Spermatophyta/index.php?hbgid=HBG500290&amp;is_extern_hbgid=1" target="_self"><img src="/img/right_triangel.png" align="absmiddle" hspace="4" border="0">Go to this sheet</a>
                                        </div>
                                    </div>
                                    <img src="/img/uhh-logo.gif" width="195" border="0" alt="Bfri Logo Here"></div>
                                <div id="navline_2">
                                </div>
                            </td>
                            <td id="inb" width="100%" height="600" valign="top">
                                <div id="headline_main">
                                    <font size="+1">Collections &amp; Details</font></div>
                                <table cellpadding="4" cellspacing="0" style="width:98%">
                                    <tbody>
                                        <tr>
                                            <td width="106" class="cell_right_open">
                                                <img src="/img/picto_phanerogam.jpg" align="top" border="1" width="100" hspace="3" vspace="3">
                                            </td>
                                            <td width="37%" class="cell_left_open">
                                                <div id="cellfont2"><b>Azadirachta indica</b>&nbsp;(seed plants)</div>
                                                <br>
                                                <div style="padding-right:2px;">Azadirachta indica (commonly known as neem, nimtree and Indian lilac) is a tree in the mahogany family Meliaceae. It is one of two species in the genus Azadirachta, and is native to the Indian subcontinent, i.e. India, Nepal, Pakistan, Bangladesh, Sri Lanka, and Maldives. It typically is grown in tropical and semi-tropical regions. Neem trees now also grow in islands located in the southern part of Iran. Its fruits and seeds are the source of neem oil.</div>
                                                <br>
                                                <a href="herbarium/article/neem" target="_self">Details</a>
                                                <br>
                                                <br>
                                            </td>
                                            <td width="1%"></td>
                                            <td width="106" class="cell_right_open">
                                                <img src="/img/picto_pteridophyten.jpg" align="top" border="1" width="100" hspace="3" vspace="3">
                                            </td>
                                            <td class="cell_left_open">
                                                <div id="cellfont2"><b>Spondias</b>&nbsp;(ferns and allies)</div>
                                                <br>
                                                <div style="padding-right:2px;">Spondias is a genus of flowering plants in the cashew family, Anacardiaceae. The genus consists of 17 described species, 7 of which are native to the Neotropics and about 10 are native to tropical Asia. They are commonly named hog plums, Spanish plums, libas in Bikol and in some cases golden apples for their brightly colored fruit which resemble an apple or small plum at a casual glance. They are only distantly related to apple and plum trees, however. A more unequivocal common name is mombins.</div>
                                                <br>
                                                <a href="/herbarium/article/spondias" target="_self">Details</a>
                                                <br>
                                                <br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <table cellpadding="4" cellspacing="0" style="width:98%">
                                    <tbody>
                                        <tr>
                                            <td width="106" class="cell_right_open">
                                                <img src="/img/picto_bryophytes.jpg" align="top" border="1" width="100" hspace="3" vspace="3">
                                            </td>
                                            <td width="37%" class="cell_left_open">
                                                <div id="cellfont2"><b>Basella alba</b>&nbsp;(mosses and liverworts)</div>
                                                <br>
                                                <div style="padding-right:2px;">Basella alba is an edible perennial vine in the family Basellaceae. It is found in tropical Asia and Africa where it is widely used as a leaf vegetable. It is native to the Indian Subcontinent, Southeast Asia and New Guinea. It is reportedly naturalized in China, tropical Africa, Brazil, Belize, Colombia, the West Indies, Fiji and French Polynesia.</div>
                                                <br>
                                                <a href="/herbarium/article/basella-alba" target="_self">Details</a>
                                                <br>
                                                <br>
                                            </td>
                                            <td width="1%"></td>
                                            <td width="106" class="cell_right_open">
                                                <img src="/img/picto_lichen.jpg" align="top" border="1" width="100" hspace="3" vspace="3">
                                            </td>
                                            <td class="cell_left_open">
                                                <div id="cellfont2"><b>Spondias</b>&nbsp;(lichens)</div>
                                                <br>
                                                <div style="padding-right:2px;">Spondias is a genus of flowering plants in the cashew family, Anacardiaceae. The genus consists of 17 described species, 7 of which are native to the Neotropics and about 10 are native to tropical Asia. They are commonly named hog plums, Spanish plums, libas in Bikol and in some cases golden apples for their brightly colored fruit which resemble an apple or small plum at a casual glance. They are only distantly related to apple and plum trees, however. A more unequivocal common name is mombins.</div>
                                                <br>
                                                <a href="/herbarium/article/spondias" target="_self">Details</a>
                                                <br>
                                                <br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <table cellpadding="4" cellspacing="0" style="width:98%">
                                    <tbody>
                                        <tr>
                                            <td width="106" class="cell_right_open">
                                                <img src="/img/picto_fungi.jpg" align="top" border="1" width="100" hspace="3" vspace="3">
                                            </td>
                                            <td width="37%" class="cell_left_open">
                                                <div id="cellfont2"><b>Jubaea</b></div>
                                                <br>
                                                <div style="padding-right:2px;">Jubaea is a genus of palms (family Arecaceae) with one species, Jubaea chilensis, or J. spectabilis, the Chilean wine palm or Chile cocopalm. It is native to southwestern South America, where it is endemic to a small area of central Chile, between 32°S and 35°S in southern Coquimbo, Valparaíso, Santiago, O'Higgins and northern Maule regions. It was long assumed that the extinct palm tree of Easter Island belonged to this genus too, but it is distinct and now placed in its own genus, Paschalococos.

</div>
                                                <br>
                                                <a href="/herbarium/article/jubaea" target="_self">Details</a>
                                                <br>
                                                <br>
                                            </td>
                                            <td width="1%"></td>
                                            <td width="106" class="cell_right_open">
                                                <img src="/img/picto_algae.jpg" align="top" border="1" width="100" hspace="3" vspace="3">
                                            </td>
                                            <td class="cell_left_open">
                                                <div id="cellfont2"><b>Fabaceae</b>&nbsp;(seeweeds and other macroalgae)</div>
                                                <br>
                                                <div style="padding-right:2px;">he Fabaceae or Papilionoideae,[6] commonly known as the legume, pea, or bean family, is a large and economically important family of flowering plants. It includes trees, shrubs, and perennial or annual herbaceous plants, which are easily recognized by their fruit (legume) and their compound, stipulated leaves. Many legumes have characteristics of flowers and fruits.</div>
                                                <br>
                                                <a href="/herbarium/article/fabaceae" target="_self">Details</a>
                                                <br>
                                                <br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- aussentab-->
            </td>
        </tr>
    </tbody>
</table>

<div id="toTop" class="btn btn-info" style="display: none;"><span class="icon-angle-up"></span></div>





@endsection


@section('content-js')

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


@endsection