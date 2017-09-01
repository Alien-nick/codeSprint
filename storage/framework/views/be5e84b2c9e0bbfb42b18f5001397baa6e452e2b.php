    <?php $__env->startSection('content'); ?>

    <h1 style="text-align:center; color:white;"> Crops in Demand: </h1>
      <br>
        <?php $__currentLoopData = $demands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $demand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="container">
          <div class=container>


          <div class="row">
            <div class="col-sm-*">
              <div class="panel panel-default" style="padding:10px;">


            <div class="panel-heading">
                <h2 style="text-align:"><?php echo e($demand->crop_type); ?></h2>
            </div>

            <div class="panel-body">
            <h4>Due Date: <?php echo e($demand->end_date_of_order); ?></h4>
            <br>
            <a name="view" href="/Buyers/<?php echo e($demand->id); ?>" class="btn btn-success">View</a>
              <!-- <a href="Bids/<?php echo e($demand->id); ?>/create" class="btn btn-primary">Bid</a> <hr> -->
            <form action="/Bids/<?php echo e($demand->id); ?>/create/" method="post">
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <?php echo csrf_field(); ?>

                <!-- <input type="submit" name="bid" value="Bid" class="btn btn-danger"> -->
            </form>
            </div>



            </div>
          </div>
              </div>
              </div>
              </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($demands->links()); ?>


    <?php $__env->stopSection(); ?>

<?php echo $__env->make('templates/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>