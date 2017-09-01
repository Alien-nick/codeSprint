  <?php $__env->startSection('content'); ?>

<div class="container">


    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/Buyers'>Demands</a></li>
        <li><a href='/Buyers/<?php echo e($demands->id); ?>'><?php echo e($demands->crop_type); ?></a></li>
        <li class='active'>Edit</li>
    </ol>

    <div class="panel panel-default" style="padding:25px;">


    <h1>Edit Demand</h1>

    <hr/>


    <form class="form" role="form" method="post" action="/Buyers/<?php echo e($demands->id); ?>">

        <?php echo e(csrf_field()); ?>


    <!-- crop_name Form Input -->
        <div class="form-group<?php echo e($errors->has('crop_type') ? ' has-error' : ''); ?>">
            <label class="control-label">Crop Name</label>

            <input type="text" class="form-control" name="crop_type" value="<?php echo e($demands->crop_type); ?>">

            <?php if($errors->has('crop_type')): ?>
                <span class="help-block">
                                        <strong><?php echo e($errors->first('crop_type')); ?></strong>
                                    </span>
            <?php endif; ?>

        </div>

        <div class="form-group<?php echo e($errors->has('order_quantity') ? ' has-error' : ''); ?>">
            <label class="control-label">Order Quantity</label>

            <input type="number" class="form-control" name="order_quantity" value="<?php echo e($demands->order_quantity); ?>">

            <?php if($errors->has('order_quantity')): ?>
                <span class="help-block">
                                        <strong><?php echo e($errors->first('order_quantity')); ?></strong>
                                    </span>
            <?php endif; ?>

        </div>

        <div class="form-group<?php echo e($errors->has('end_date_of_order') ? ' has-error' : ''); ?>">
            <label class="control-label">Due Date</label>

            <input type="date" class="form-control" name="end_date_of_order" value="<?php echo e($demands->end_date_of_order); ?>">

            <?php if($errors->has('order_quantity')): ?>
                <span class="help-block">
                                        <strong><?php echo e($errors->first('end_date_of_order')); ?></strong>
                                    </span>
            <?php endif; ?>

        </div>
        <div class="form-group<?php echo e($errors->has('order_status') ? ' has-error' : ''); ?>">
            <label class="control-label">Order Status</label>

            <input type="text" class="form-control" name="order_status" value="<?php echo e($demands->order_status); ?>">

            <?php if($errors->has('order_status')): ?>
                <span class="help-block">
                                        <strong><?php echo e($errors->first('order_status')); ?></strong>
                                    </span>
            <?php endif; ?>

        </div>
<br>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg">
                Update
            </button>
        </div>

    </form>

</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>