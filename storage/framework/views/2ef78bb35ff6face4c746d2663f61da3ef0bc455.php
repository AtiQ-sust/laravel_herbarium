
    
        <?php echo $__env->make('layout.herbarium.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('layout.herbarium.topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('layout.herbarium.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    
        <?php echo $__env->yieldContent('content'); ?>
    
        <?php echo $__env->make('layout.herbarium.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
