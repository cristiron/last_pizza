<?php $__env->startSection('menu-content'); ?>
	<section>
		<?php echo Form::open(array('url' => 'menu/postOrder', 'role' => 'form', 'class' => 'form-horizontal')); ?>

			<div class="form-group">
				<?php echo Form::label('name', 'Menu List', array('class' => 'control-label col-sm-2')); ?>		
			<?php $__currentLoopData = $menuList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-sm-offset-2 col-sm-10">
						<label style="width: 120px;"><?php echo $item->dish ?></label>
						<?php echo Form::number($item->dish, 0, array('style' =>'width: 50px;', 'min'=>'0', 'max'=>'5')); ?>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
			</div>
			
			<div class="form-group">
				<?php echo Form::label('olio', 'Olio Piccante', array('class' => 'control-label col-sm-2')); ?>	
				<div class="col-sm-8">
					<?php echo Form::checkbox('olio', 'olio_picc');?>
				</div>
			</div>

			<div class="form-group">		
				<?php echo Form::label('name', 'Your name', array('class' => 'control-label col-sm-2')); ?>
				<div class="col-sm-8">
					<?php echo Form::text('name', 'Stefano', array('class' => 'form-control')); ?>
				</div>		
			</div>

			<div class="form-group">
				<?php echo Form::label('email', 'E-Mail Address', array('class' => 'control-label col-sm-2')); ?>
					<div class="col-sm-8">
				<?php echo Form::text('email', 'example@webyourmind.com', array('class' => 'form-control')); ?>
				</div>
			</div>

			<div class="form-group">
				<?php echo Form::label('freeOrder', 'Free Order', array('class' => 'control-label col-sm-2')); ?>
					<div class="col-sm-8">
				<?php echo Form::text('freeOrder', 'margherita', array('class' => 'form-control')); ?>
				</div>
			</div>

		    <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-8">
					<?php echo Form::button('Order Now!', array('class' => 'btn btn-default', 'type' => 'submit')); ?>
			    </div>
		    </div>
		<?php echo Form::close(); ?>

	</section>	

	<section>
		<?php if($errors->has('')): ?>
		   <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		      <div><pre><?php echo e($error); ?></pre></div>
		  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
	</section>
<?php $__env->stopSection(); ?>



		
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>