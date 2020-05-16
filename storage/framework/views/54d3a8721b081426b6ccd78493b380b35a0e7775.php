<?php $__env->startSection('title', 'Xylarium- Arboretum'); ?>


<?php $__env->startSection('sub-layout-css'); ?>


<?php $__env->stopSection(); ?>
<style>
    p {
        text-align: justify;
    }

</style>


<?php $__env->startSection('content'); ?>





<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/xylarium">Xylarium</a>
        </li>
        <li class="breadcrumb-item active">Arboretum</li>
    </ol>
</div>



<div class="container-fluid body-content" id="centerRegion">

    <div class="row">

        <div class="col-md-5" style="background-color:#FFFFFF ;">

            <div style="font-size:1.0em; margin:1em 1em 1em 1em; padding:0.5em; ">

                <h2>Xylarium (FHOw)</h2>
                <hr>

                <p style="font-size:1.2em;">The xylarium is the University's wood collection and contains c. 24,000 wood blocks and 13,000 microscope slides; approximately 30% of wood blocks have associated microscope slides. Approximately 5% of accessions are from gymnosperms, and the remainder from non-gymnosperms (including palms and tree ferns). </p>

                <!-- <a href="#" target="_blank"> <img style="float: left; margin-right:10px;" src="/img/xylarium/img_1908.jpg" title="Xylarium wood sections"></a>-->

                <p>Approximately 10,000 species are represented in FHOw; 51 accessions are identified as associated with type material. Based on geographical regions, 22% of the collection is from Malaysia, 20% from tropical Africa and 12% from South America. 765 collectors have contributed to FHOw. 25% of the accessions have no collector associated with them. </p>

                <p>The most prolific individual collectors are Krukoff, Gamble, Vigne, Breteler, Molfino, Cuatrecasas, Cooper, Stern &amp; Brizicky and Anderson, whilst Forest Departments from former British Colonies have contributed 25% of the accessions. 60% of accessions were made between 1930 and 1960.</p>

                <br>

            </div>
        </div>

        <div class="col-md-7">
            <div style="max-width: 85%; margin: 3em  auto;">

                <br>
                <br>
                <br>
                <br>

                <div class="container-fluid">
                  
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item">
                        <img src="/img/xylarium/img_1908.jpg" alt="Los Angeles" >
                      </div>

                      <div class="item">
                        <img src="/img/xylarium/img_1908.jpg" alt="Chicago" >
                      </div>
                    
                      <div class="item active">
                        <img src="/img/xylarium/img_1908.jpg" alt="New york" >
                      </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>

            </div>

        </div>
    </div>

</div>







<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.xylarium.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>