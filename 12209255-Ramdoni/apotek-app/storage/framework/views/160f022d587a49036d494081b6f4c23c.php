

<?php $__env->startSection('content'); ?>

  <?php if(Session::get('success')): ?>
      <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
  <?php endif; ?>
  <?php if(Session::get('deleted')): ?>
      <div class="alert alert-warning"><?php echo e(Session::get('deleted')); ?></div>
  <?php endif; ?>

  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tipe</th>
        <th>Harga</th>
        <th>Stock</th>
        <th class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($no++); ?></td>
          <td><?php echo e($item['name']); ?></td>
          <td><?php echo e($item['type']); ?></td>
          <td><?php echo e($item['price']); ?></td>
          <td><?php echo e($item['stock']); ?></td>
          <td class="d-flex justify-content-center">
            <a href="<?php echo e(route('medicine.edit', $item['id'])); ?>" class="btn btn-primary me-3">Edit</a>
            <form action="<?php echo e(route('medicine.delete', $item['id'])); ?>" method="post">
              <?php echo csrf_field(); ?>
              <?php echo method_field('DELETE'); ?>
              <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Documents\doni\apotek-app\apotek-app\resources\views/medicine/index.blade.php ENDPATH**/ ?>