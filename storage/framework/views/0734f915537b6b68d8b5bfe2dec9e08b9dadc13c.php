<?php $__env->startSection('orderdone-content'); ?>
	<section>
		<div class="col-md-12 col-sm-12 col-lg-12">
			Order done
			<?php echo $msg['name'] ?>
			<br />
			Sent confirmation email to: <?php echo $msg['email'] ?>
		</div>
	</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>