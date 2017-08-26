    <?php $__env->startSection('content'); ?>

        <?php $__currentLoopData = $demands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $demand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <h4 style="color:white;">Crop in Demand: <?php echo e($demand->crop_type); ?></h4>
            <h4 style="color:white;">Due Date: <?php echo e($demand->end_date_of_order); ?></h4>
            <a name="view" href="/Buyers/<?php echo e($demand->id); ?>" class="btn btn-success">View</a>
            <input type="submit" name="bid" value="bid" class="btn btn-primary"> <hr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('templates/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>