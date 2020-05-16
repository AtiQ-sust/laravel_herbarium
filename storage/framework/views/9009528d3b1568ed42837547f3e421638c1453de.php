
    
        <?php echo $__env->make('layout.wiki.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('layout.wiki.topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('layout.wiki.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    
        <?php echo $__env->yieldContent('content'); ?>
    
        <?php echo $__env->make('layout.wiki.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
