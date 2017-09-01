    <?php $__env->startSection('content'); ?>



      <div class="container">
        <div class="panel panel-default" style="padding:25px;">


    <div class="jumbotron">
      <div class="row">

      <div class="col-lg-11">


      <h2><?php echo e($buyers->crop_type); ?></h2> <br>
      <h3><?php echo e($buyers->order_quantity); ?></h3>
      <h4><?php echo e($buyers->end_date_of_order); ?></h4>
      <h5>created by: <?php echo e($buyers->user->name); ?></h5>
      <h5><?php echo e($buyers->order_status); ?></h5>
      </div>
      <div class="col-lg-1">
        <input type="submit" name="bid" value="Bid" class="btn btn-danger btn-lg pull-left">
      </div>

    </div>
  </div>
      <br>

      <?php if(Auth::user()->adminOrCurrentUserOwns($buyers)): ?>

      <a href="/Buyers/<?php echo e($buyers->id); ?>/edit" class="btn btn-success">Edit</a>

      <form style="padding-top:5px;" class="form" role="form" method="delete" action="<?php echo e(url('/Buyers/'. $buyers->id)); ?>">
      <input type="hidden" name="_method" value="delete">
      <?php echo e(csrf_field()); ?>

      <input type="submit" onclick="return confirmDelete()" name="delete" value="Delete" class="btn btn-danger">
      </form>
    <?php endif; ?>

    <div class="comments">
            <ul class="list-group" style="padding:20px; background:url('/images/cherryBG.png'); border-radius:10px;">
              <h2 style="color:white;">Comments:</h2>
              <?php $__currentLoopData = $buyers->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <li class="list-group-item"><h4><u style="color:blue;"><?php echo e($comment->user->name); ?></u></h4></li>
                <li class="list-group-item"><?php echo e($comment->body); ?> <br> created on <?php echo e($comment->created_at); ?>


                  <br><br><br>
                  <?php if(auth()->id() == $comment->user_id): ?>
                  <small><a href="#" class="btn btn-primary">Edit</a></small>
                  <small><a href="#" class="btn btn-danger">Delete</a></small>
                  <?php endif; ?>

                </li> <br>




              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

    </div>
    <br> <br>
    </div>



<hr>
<div class="panel panel-default" style="padding:10px;">
  <div class="container">


  <h3>Leave a comment:</h3>


    <div class="card" style="padding:15px;">
          <div class="card-block">
                <form class="form-group" action="/Buyers/<?php echo e($buyers->id); ?>/comments" method="post">
                  <?php echo e(csrf_field()); ?>

                      <textarea name="body" placeholder="Your Comment Here" class="form-control" rows="4" columns="75"></textarea>
                      <br>
                      <input type="submit" name="submit" value="Post Comment" class=" btn btn-primary">
                </form>
              </div>


</div>
</div>
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