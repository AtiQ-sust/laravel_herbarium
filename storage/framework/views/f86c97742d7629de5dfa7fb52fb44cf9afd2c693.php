<?php $__env->startSection('title', 'Welcome'); ?>

<?php $__env->startSection('content'); ?>



        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>

        <div class="container">
        <h2>Sample Search Portal</h2>
        <p>Boss! I hope you like it!</p>
        <div class="table-responsive">
            <table id="grid-basic" class="w3-table-all w3-card-4">
                <thead>
                  <tr class="w3-cyan">
                    <th data-column-id="id" data-type="numeric" data-order="asc">#</th>
                    <th data-column-id="plant_name" >Plant Name</th>
                    <th data-column-id="plant_family" >Plant Family</th>
                    <th data-column-id="scientific_name" >Scientific Name</th>
                    <th data-column-id="lat" >Latitude</th>
                    <th data-column-id="long" >Longtitude</th>
                    
                    
                    <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                       <td><?php echo e($details->id); ?></td>
                       <td><?php echo e($details->plant_name); ?></td>
                       <td><?php echo e($details->plant_family); ?></td>
                       <td><?php echo e($details->scientific_name); ?></td>
                       <td><?php echo e($details->lat); ?></td>
                       <td><?php echo e($details->long); ?></td>
                      
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </tbody>
            </table>
        </div>
    </div><!-- main table-->
    

    <!-- delete modal-->
    
<!-- edit modal-->
    


    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>