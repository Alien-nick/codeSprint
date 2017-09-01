<?php if( session()->has('sweet_alert_message')): ?>
    <script>
            swal(
                {
                    title: "<?php echo e(session('sweet_alert_message.title')); ?>",
                    text: "<?php echo e(session('sweet_alert_message.message')); ?>",
                    type: "<?php echo e(session('sweet_alert_message.type')); ?>",
                    timer: 1500,
                    showConfirmButton: false
                }
            );
    </script>
<?php endif; ?>

<?php if( session()->has('sweet_alert_message_overlay')): ?>
    <script>
            swal(
                {
                    title: "<?php echo e(session('sweet_alert_message_overlay.title')); ?>",
                    text: "<?php echo e(session('sweet_alert_message_overlay.message')); ?>",
                    type: "<?php echo e(session('sweet_alert_message_overlay.type')); ?>",
                    confirmButtonText: "Okay!"
                }
            );
    </script>
<?php endif; ?>