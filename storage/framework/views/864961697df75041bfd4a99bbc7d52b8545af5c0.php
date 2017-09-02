<!DOCTYPE html>
<html>
    <head>
        <title>Farmer's Paradise</title>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
          <script type="text/javascript" src="/js/jquery-3.2.1.js"></script>
          <?php echo $__env->make('templates.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </head>
    <body id="app">
        <?php echo $__env->make('templates.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="container theme-showcase" role="main">

            <?php echo $__env->yieldContent('content'); ?>




        </div> <!-- /container -->

      <?php echo $__env->make('templates.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('Alerts::show', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
