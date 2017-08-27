  <?php $__env->startSection('content'); ?>

  <div class="col-sm-8">
      <h1>Sign In</h1>
      <form action="/Buyers/signIn" method="post">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                  <label for="Name">Email</label>
                  <input class="form-control" type="email" name="email" id="name">
            </div>
            <div class="form-group">
                  <label for="password">Password</label>
                  <input class="form-control" type="password" name="password" id="password">
            </div>
            <div class="form-group">
                  <input class="btn btn-primary" type="submit" name="submit" id="submit" value="login">
            </div>
        <?php echo $__env->make('templates.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </form>
          </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>