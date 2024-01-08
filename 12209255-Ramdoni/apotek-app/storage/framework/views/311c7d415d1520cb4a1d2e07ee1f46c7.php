

<?php $__env->startSection('content'); ?>
  <form action="<?php echo e(route('medicine.store')); ?>" method="post" class="card p-5">
    <?php echo csrf_field(); ?>
    <?php if(Session::get('success')): ?>
      <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
    <?php endif; ?>
    <?php if($errors->any()): ?>
      <ul class="alert alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    <?php endif; ?>

    <div class="mb-3 row">
      <label for="name" class="col-sm-2 col-form-label">Nama Obat :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="type" class="col-sm-2 col-form-label">Jenis Obat :</label>
      <div class="col-sm-10">
        <select name="type" id="type" class="form-select">
          <option selected disabled hidden>Pilih</option>
          <option value="tablet">Tablet</option>
          <option value="sirup">Sirup</option>
          <option value="kapsul">Kapsul</option>
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="price" class="col-sm-2 col-form-label">Harga Obat :</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="price" name="price">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="stock" class="col-sm-2 col-form-label">Stock Tersedia :</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="stock" name="stock">
      </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Documents\doni\apotek-app\apotek-app\resources\views/medicine/create.blade.php ENDPATH**/ ?>