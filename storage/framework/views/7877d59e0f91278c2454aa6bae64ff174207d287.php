    <?php $__env->startSection('content'); ?>

      <h2 style="color:white;"><?php echo e($buyers->crop_type); ?></h2>
      <h3 style="color:white;"><?php echo e($buyers->order_quantity); ?></h3>
      <h4 style="color:white;"><?php echo e($buyers->end_date_of_order); ?></h4>
      <h5 style="color:white;">created by: <?php echo e($buyers->user->name); ?></h5>
      <h5 style="color:white;"><?php echo e($buyers->order_status); ?></h5>
      <?php if(Auth::user()->adminOrCurrentUserOwns($buyers)): ?>
      <a href="/Buyers/<?php echo e($buyers->id); ?>/edit" class="btn btn-success">Edit</a> <br>
      <form class="form" role="form" method="delete" action="<?php echo e(url('/Buyers/'. $buyers->id)); ?>">
                          <input type="hidden" name="_method" value="delete">
                          <?php echo e(csrf_field()); ?>

      <input type="submit" onclick="return confirmDelete()" name="delete" value="Delete" class="btn btn-danger">
    </form>
    <?php endif; ?>

    <div class="comments">
            <ul class="list-group">
              <?php $__currentLoopData = $buyers->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if(auth()->id() == $comment->user_id): ?>
              <small><a href="#" class="btn btn-primary">Edit</a></small>
              <small><a href="#" class="btn btn-danger">Delete</a></small>
              <?php endif; ?>
                <li class="list-group-item"><h4><u style="color:blue;"><?php echo e($comment->user->name); ?></u></h4></li>
                <li class="list-group-item"><?php echo e($comment->body); ?> <br> created on <?php echo e($comment->created_at); ?></li> <br>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
    </div>



<hr>
    <div class="card">
          <div class="card-block">
                <form class="form-group" action="/Buyers/<?php echo e($buyers->id); ?>/comments" method="post">
                  <?php echo e(csrf_field()); ?>

                      <textarea name="body" placeholder="Your Comment Here" class="form-control" rows="4" columns="75"></textarea>
                      <br>
                      <input type="submit" name="submit" value="Post Comment" class=" btn btn-primary">
                </form>
              </div>



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