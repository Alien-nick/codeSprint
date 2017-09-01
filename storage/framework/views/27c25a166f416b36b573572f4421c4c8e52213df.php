  <?php $__env->startSection('content'); ?>


    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/Farmers'>Crops</a></li>
        <li><a href='/Farmers/<?php echo e($inStocks->id); ?>'><?php echo e($inStocks->crop_name); ?></a></li>
        <li class='active'>Edit</li>
    </ol>

    <h1 style="color:white;">Edit Demands</h1>

    <hr/>


    <form class="form" role="form" method="post" action="/Farmers/<?php echo e($inStocks->id); ?>">

        <?php echo e(csrf_field()); ?>


    <!-- crop_name Form Input -->
        <div class="form-group<?php echo e($errors->has('crop_name') ? ' has-error' : ''); ?>">
            <label style="color:white;" class="control-label">Crop Name</label>

            <input type="text" class="form-control" name="crop_type" value="<?php echo e($inStocks->crop_name); ?>">

            <?php if($errors->has('crop_name')): ?>
                <span class="help-block">
                                        <strong><?php echo e($errors->first('crop_name')); ?></strong>
                                    </span>
            <?php endif; ?>

        </div>

        <div class="form-group<?php echo e($errors->has('order_quantity') ? ' has-error' : ''); ?>">
            <label style="color:white;" class="control-label">Order Quantity</label>

            <input type="number" class="form-control" name="order_quantity" value="<?php echo e($inStocks->crop_quantity); ?>">

            <?php if($errors->has('crop_quantity')): ?>
                <span class="help-block">
                                        <strong><?php echo e($errors->first('crop_quantity')); ?></strong>
                                    </span>
            <?php endif; ?>

        </div>

        <div class="form-group<?php echo e($errors->has('crop_estimate_reap_date') ? ' has-error' : ''); ?>">
            <label style="color:white;" class="control-label">Crop Estimate Reap Date</label>

            <input type="date" class="form-control" name="end_date_of_order" value="<?php echo e($inStocks->crop_estimate_reap_date); ?>">

            <?php if($errors->has('crop_estimate_reap_date')): ?>
                <span class="help-block">
                                        <strong><?php echo e($errors->first('crop_estimate_reap_date')); ?></strong>
                                    </span>
            <?php endif; ?>

        </div>
        <!-- <div class="form-group<?php echo e($errors->has('order_status') ? ' has-error' : ''); ?>">
            <label style="color:white;" class="control-label">Order Status</label>

            <input type="text" class="form-control" name="order_status" value="">

            <?php if($errors->has('order_status')): ?>
                <span class="help-block">
                                        <strong><?php echo e($errors->first('order_status')); ?></strong>
                                    </span>
            <?php endif; ?>

        </div> -->

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">
                Update
            </button>
        </div>

    </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>