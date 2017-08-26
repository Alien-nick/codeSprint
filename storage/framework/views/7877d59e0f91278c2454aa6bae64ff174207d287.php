    <?php $__env->startSection('content'); ?>

      <h2 style="color:white;"><?php echo e($buyers->crop_type); ?></h2>
      <h3 style="color:white;"><?php echo e($buyers->order_quantity); ?></h3>
      <h4 style="color:white;"><?php echo e($buyers->end_date_of_order); ?></h4>
      <h5 style="color:white;"><?php echo e($buyers->order_status); ?></h5>
      <a href="/Buyers/<?php echo e($buyers->id); ?>/edit" class="btn btn-success">Edit</a> <br>
      <form class="form" role="form" method="POST" action="<?php echo e(url('/Buyers/'. $buyers->id)); ?>">
                          <input type="hidden" name="_method" value="delete">
                          <?php echo e(csrf_field()); ?>

      <input type="submit" onclick="return confirmDelete()" name="delete" value="Delete" class="btn btn-danger">
    </form>
    <?php $__env->stopSection(); ?>

<script type="text/javascript">
        function confirmDelete()
        {
          var x = confirm('Are you sure you want to delete?');

          if(x){
            return true;
          }
          else{
            return false;
          }
        }
</script>

<?php echo $__env->make('templates.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>