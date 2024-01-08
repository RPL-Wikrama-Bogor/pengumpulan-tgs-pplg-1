

<?php $__env->startSection('content'); ?>
  <div class="jumbtotron py-4 px-5">
    <?php if(Session::get('alreadyLogin')): ?>
      <div class="alert alert-danger"><?php echo e(Session::get('alreadyLogin')); ?></div>
    <?php endif; ?>
    <h1 class="display-4">Selamat Datang <?php echo e(Auth::user()->name); ?>!</h1>
    <hr class="my-4">
    <p>Aplikasi ini digunakan hanya oleh pegawai administrator APOTEK. Digunakan untuk mengelola data obat, penyetokan, juga pembelian (kasir).</p>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Documents\doni\apotek-app\apotek-app\resources\views/home.blade.php ENDPATH**/ ?>