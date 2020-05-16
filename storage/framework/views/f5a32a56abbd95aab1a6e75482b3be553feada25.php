<?php $__env->startSection('title', 'Xylarium- Arboretum'); ?>

<?php $__env->startSection('content'); ?>


<style>
    


</style>


<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/xylarium">Xylarium</a>
        </li>
        <li class="breadcrumb-item active">Arboretum</li>
    </ol>
</div>



<div class="container-fluid">
    <div class="row">
        <div class="col-lg-7">
            <div class="card sb-card">
                <a class="sb-img" target="_blank" href="#">
                    <img class="card-img-top" src="/img/img_1908.jpg" alt="xylarium item" style="width: 100%;height: auto;">
                </a>
                <div class="card-body download-links">
                    <ul class="list-inline m-0">
                        <li class="list-inline-item">
                            <a href="#" class="btn btn-secondary">
                                <i class="fa fa-eye"></i> Live Preview
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn btn-secondary" onclick="ga('send','event','Download','Download Full Width Pics')">
                                <i class="fa fa-download"></i> Preview
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn btn-secondary"><i class="fa fa-github"></i> View Source</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
            
        
        <div class="col-lg-5">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Family
                            </th>
                            <th>Genus</th>
                            <th>Species</th>
                            <th>Country</th>
                            <th>Collector No:</th>
                            <th>Collector</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Acanthaceae
                            </td>
                            <td>Bravaisia
                            </td>
                            <td>tubiflora
                            </td>
                            <td>Belize
                            </td>
                            <td>380
                            </td>
                            <td>Percy H. Gentle

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="col-lg-12">
        <div class="card sb-card download-links">
                <div class="card-body">
                    <h4>Description</h4>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quibusdam incidunt facilis quis id laborum dicta quaerat omnis quam quae eos, repudiandae, molestiae labore cupiditate quasi molestias corporis repellendus nulla.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>







<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.xylarium', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>