@extends('layout.herbarium.master')

@section('title', 'BFRI-Collector')


@section('sub-layout-css')
<link href="/theme/chiefstrap/skin/chiefskin/css/mod.css" rel="stylesheet">



@endsection

@section('content')






<div id="body" data-spy="scroll" data-target=".header" class="page-on-scroll">

        <!--========== HEADER ==========-->
        
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div class="promo-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 sm-margin-b-60">
                        <div class="margin-b-30">
                            <h1 class="promo-block-title" style="text-align: -webkit-center;">Collectors portal</h1>
                            <p class="promo-block-text" style="
    text-align: -webkit-center;
">Herbarium and Xylarium</p>
                        </div>
                        <ul class="list-inline">
                            <li><a href="#" class="social-icons"><i class="icon-social-facebook"></i></a></li>
                            <li><a href="#" class="social-icons"><i class="icon-social-twitter"></i></a></li>
                            <li><a href="#" class="social-icons"><i class="icon-social-dribbble"></i></a></li>
                            <li><a href="#" class="social-icons"><i class="icon-social-behance"></i></a></li>
                            <li><a href="#" class="social-icons"><i class="icon-social-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <div class="promo-block-img-wrap">
                            <img class="promo-block-img img-responsive" src="img/1492111469_6f40.jpg" align="Avatar" style="
    width: inherit;
    height: auto;
">
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
        <div id="about">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-5 sm-margin-b-60">
                        <img class="full-width img-responsive" src="img/herbarium-compactus-bronwyn-2008-700.jpg" alt="Image">
                    </div>
                    <div class="col-sm-7">
                        <div class="section-seperator margin-b-50">
                            <div class="margin-b-50">
                                <div class="margin-b-30">
                                    <h2>About our archive</h2>
                                    <p>Authors of plant names, botanical and mycological collectors, and authors of publications of importance to systematic botany and mycology, are combined into a single resource. To search: enter the person's name either as lastname, firstname, e.g. jones, david or by the standard abbreviation, e.g. d r jones. The name of an author or collector sometimes consists of multiple names and can be entered as such. Team records can be located by searching for the name of any of its members. </p>
                                    <p>Check the Team box when searching for a team. Checking the botanist's role (Authors, Collectors, Individuals, Teams) will constrain the search further, otherwise all records in the database that satisfy the search criteria will be matched. Herbaria in which material is known to have been deposited by a botanist can be searched in Remarks. Place names and taxon names sporadically occur within Remarks.</p>
                                </div>
                                <a href="#" class="btn-theme btn-theme-md btn-default-bg text-uppercase">Download our collectors list</a>
                            </div>
                        </div>

                        <h2>BFRI Collectors Portal</h2>
                        <!-- Progress Box -->
                        <div class="progress-box">
                            <h5>Botanists<span class="color-heading pull-right">87</span></h5>
                            <div class="progress" style="opacity: 1; left: 0px;">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="87" style="width: 87%;"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>Plant Collectors<span class="color-heading pull-right">96</span></h5>
                            <div class="progress" style="opacity: 1; left: 0px;">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="96" style="width: 96%;"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>Researchers<span class="color-heading pull-right">77</span></h5>
                            <div class="progress" style="opacity: 1; left: 0px;">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="77" style="width: 77%;"></div>
                            </div>
                        </div>
                        <!-- End Progress Box -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End About -->

        <!-- Experience -->
        <div id="experience">
            <div class="bg-color-sky-light" data-auto-height="true">
                <div class="container content-lg">
                    <div class="row row-space-2 margin-b-4">
                        <div class="col-md-3 col-sm-6 md-margin-b-4">
                            <div class="service" data-height="height" style="height: 233px;">
                                <div class="service-element">
                                    
                                </div>
                                <div class="service-info">
                                    <h3>John Whitfield</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <img src="img/museum-Backstage8.jpg" style="
    width: 80%;
    height: auto;
">    
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 md-margin-b-4">
                            <div class="service bg-color-base wow zoomIn animated" data-height="height" data-wow-duration=".3" data-wow-delay=".1s" style="height: 233px; visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                                <div class="service-element">
                                    <i class="service-icon color-white icon-screen-tablet"></i>
                                </div>
                                <div class="service-info">
                                    <h3 class="color-white">John Whitfield</h3>
                                    <p class="color-white margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <img src="img/museum-Backstage8.jpg" style="
    width: 80%;
    height: auto;
">    
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 sm-margin-b-4">
                            <div class="service" data-height="height" style="height: 233px;">
                                <div class="service-element">
                                    <i class="service-icon icon-chemistry"></i>
                                </div>
                                <div class="service-info">
                                    <h3>John Whitfield</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <img src="img/museum-Backstage8.jpg" style="
    width: 80%;
    height: auto;
">    
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service" data-height="height" style="height: 233px;">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>John Whitfield</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <img src="img/museum-Backstage8.jpg" style="
    width: 80%;
    height: auto;
">    
                            </div>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Experience -->

        <!-- Work -->
        <div id="work">
            <div class="container content-lg">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Latest Includes</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                    </div>
                </div>
                <!--// end row -->

                <div class="row">
                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <div class="wow zoomIn animated" data-wow-duration=".3" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                                <img class="img-responsive" src="img/collector_1.jpeg" alt="Latest Products Image">
                            </div>
                        </div>
                        <h4><a href="#">Triangle Roof</a> <span class="text-uppercase margin-l-20">Specimen</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                        <a class="link" href="#">Read More</a>
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <div class="wow zoomIn animated" data-wow-duration=".3" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                                <img class="img-responsive" src="img/collector_1.jpeg" alt="Latest Products Image">
                            </div>
                        </div>
                        <h4><a href="#">Curved Corners</a> <span class="text-uppercase margin-l-20">Specimen</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                        <a class="link" href="#">Read More</a>
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <div class="wow zoomIn animated" data-wow-duration=".3" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                                <img class="img-responsive" src="img/collector_1.jpeg" alt="Latest Products Image">
                            </div>
                        </div>
                        <h4><a href="#">Bird On Green</a> <span class="text-uppercase margin-l-20">Specimen</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                        <a class="link" href="#">Read More</a>
                    </div>
                    <!-- End Latest Products -->
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Work -->

        <!-- Clients -->
        
        <!-- End Clients -->

        <!-- Promo Banner -->
        
        <!-- End Promo Banner -->
            
        <!-- Contact -->
        <div id="contact">
            
        </div>
        <!-- End Contact -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        
        
        

        <!-- PAGE LEVEL PLUGINS -->
        
        
        
        
        
        
        

        <!-- PAGE LEVEL SCRIPTS -->
        
        
        
        

    
    <!-- END BODY -->
</div>








@endsection


