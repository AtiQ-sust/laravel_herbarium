<?php $__env->startSection('title', 'Editor'); ?>


<?php $__env->startSection('content-css'); ?>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="container-fluid">
   
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>article_id</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->article_id); ?></td>
                    
                    
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>


</div>




   
				
    
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content-orphan'); ?>

	

	
	
	
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-js'); ?>

        

<?php $__env->stopSection(); ?>
		



    
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>