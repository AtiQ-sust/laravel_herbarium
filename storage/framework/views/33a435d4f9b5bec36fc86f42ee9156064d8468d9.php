
    
        <?php echo $__env->make('layout.xylarium.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('layout.xylarium.topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('layout.xylarium.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    
        <?php echo $__env->yieldContent('content'); ?>
    
        <?php echo $__env->make('layout.xylarium.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
