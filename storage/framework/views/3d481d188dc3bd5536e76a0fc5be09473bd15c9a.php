<?php $__env->startSection('content-top'); ?>
  <?php echo $__env->make('layout.topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-nav'); ?>
  <?php echo $__env->make('layout.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('sub-layout-css'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('sub-layout-js'); ?>


	

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.fullpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>