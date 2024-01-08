

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('login.auth')); ?>" class="card p-5" method="POST">
      <?php echo csrf_field(); ?>
      <?php if(Session::get('failed')): ?>
        <div class="alert alert-danger"><?php echo e(Session::get('failed')); ?></div>
      <?php endif; ?>
      <?php if(Session::get('logout')): ?>
        <div class="alert alert-primary"><?php echo e(Session::get('logout')); ?></div>
      <?php endif; ?>
      <?php if(Session::get('canAccess')): ?>
        <div class="alert alert-danger"><?php echo e(Session::get('canAccess')); ?></div>
      <?php endif; ?>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control">
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
          <small class="text-danger"><?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control">
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <small class="text-danger"><?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>
      <button type="submit" class="btn btn-success">Login</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Documents\doni\apotek-app\apotek-app\resources\views/login.blade.php ENDPATH**/ ?>