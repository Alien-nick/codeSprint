    <?php $__env->startSection('content'); ?>

        <?php $__currentLoopData = $demands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $demand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="row">
            <div class="col-lg-4">
              <div class="panel panel-default" style="padding:10px;">



            <h4 style="color:white;">Crop in Demand: <?php echo e($demand->crop_type); ?></h4>
            <h4 style="color:white;">Due Date: <?php echo e($demand->end_date_of_order); ?></h4>
            <a name="view" href="/Buyers/<?php echo e($demand->id); ?>" class="btn btn-success">View</a>
              <!-- <a href="Bids/<?php echo e($demand->id); ?>/create" class="btn btn-primary">Bid</a> <hr> -->
            <form class="" action="/Bids/<?php echo e($demand->id); ?>/create/" method="post">
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <?php echo csrf_field(); ?>

                <input type="submit" name="bid" value="Bid" class="btn btn-danger">
            </form>
            </div>
          </div>
              </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($demands->links()); ?>


    <?php $__env->stopSection(); ?>

<?php echo $__env->make('templates/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>