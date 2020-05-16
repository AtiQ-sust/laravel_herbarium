<?php $__env->startSection('title', 'Welcome'); ?>

<?php $__env->startSection('content'); ?>



   
   
        <!--<div class="flex-center position-ref full-height">

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
        </div>-->
        

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>id</th>
                    <th>plant_name</th>
                    <th>plant_family</th>
                    <th>scientific_name</th>
                     <th>lat</th>
                    <th>long</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->plant_name); ?></td>
                    <td><?php echo e($item->plant_family); ?></td>
                    <td><?php echo e($item->scientific_name); ?></td>
                    <td><?php echo e($item->lat); ?></td>
                    <td><?php echo e($item->long); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        
    

    <!-- delete modal-->
    
<!-- edit modal-->
    


    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>