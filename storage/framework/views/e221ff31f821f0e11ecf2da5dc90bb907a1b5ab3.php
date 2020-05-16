<?php $__env->startSection('content-top'); ?>
  <?php echo $__env->make('layout.herbarium.topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-nav'); ?>
  <?php echo $__env->make('layout.herbarium.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('sub-layout-css'); ?>
<link href="/theme/chiefstrap/skin/chiefskin/css/wiki.main.css?v=17.10.09.002" rel="stylesheet">
<link href="/theme/chiefstrap/skin/chiefskin/css/wiki.article.css?v=17.10.09.002" rel="stylesheet">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('sub-layout-js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.fullpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>