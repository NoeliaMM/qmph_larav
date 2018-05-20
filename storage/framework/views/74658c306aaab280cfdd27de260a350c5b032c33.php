<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <form class="form-registro" method="POST" action="<?php echo e(route('register')); ?>">
    <h1><?php echo e(__('Register')); ?></h1>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name" class=""><?php echo e(__('Name')); ?></label>
            <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                <?php if($errors->has('name')): ?>
                    <span class="invalid-feedback">
                        <strong><?php echo e($errors->first('name')); ?></strong>
                    </span>
                <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="email" class=""><?php echo e(__('E-Mail Address')); ?></label>
                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>
                <?php if($errors->has('email')): ?>
                    <span class="invalid-feedback">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="password" class=""><?php echo e(__('Password')); ?></label>
            <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
                <?php if($errors->has('password')): ?>
                    <span class="invalid-feedback">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="password-confirm" class=""><?php echo e(__('Confirm Password')); ?></label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>

        <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    <?php echo e(__('Register')); ?>

                </button>

        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>