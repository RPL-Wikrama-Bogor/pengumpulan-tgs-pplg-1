

<?php $__env->startSection('content'); ?>
  <div class="d-flex justify-content-between my-5">
    <div class="row col-7 g-3 justify-content-between">
      <div class="col-9">
        <form action="<?php echo e(route('order.search')); ?>" method="GET">
        <?php echo csrf_field(); ?>
        <input type="date" name="search" class="form-control" value="<?php echo e(session('date')); ?>">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-info">Cari Data</button>
      </form>
        <a href="<?php echo e(route('order.data')); ?>" class="btn btn-secondary">Clear</a>
      
      </div>
    </div>
    <a href="<?php echo e(route('order.export-excel')); ?>" class="btn btn-primary">Export data (excel)</a>
  </div>
  <table class="table table-stripped table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Pembeli</th>
        <th>Obat</th>
        <th>Kasir</th>
        <th>Tanggal Pembelian</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e(($orders->currentpage()-1) * $orders->perpage() + $loop->index + 1); ?></td>
          <td><?php echo e($order->name_customer); ?></td>
          <td>
            <ol>
              <?php $__currentLoopData = $order['medicines']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                  <?php echo e($medicine['name_medicine']); ?>

                  ( Rp. <?php echo e(number_format($medicine['price'], 0, ',', '.')); ?> ) :
                  Rp. <?php echo e(number_format($medicine['sub_price'], 0, ',', '.')); ?>

                  <small>qty <?php echo e($medicine['qty']); ?></small>
                </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
          </td>
          <td><?php echo e($order['user']['name']); ?></td>
          <?php
            setlocale(LC_ALL, 'IND');
          ?>
          <td><?php echo e(Carbon\Carbon::parse($order->created_at)->formatLocalized('%d %B %Y')); ?></td>
          <td>
            <a href="<?php echo e(route('order.download', $order['id'])); ?>" class="btn btn-secondary">Unduh (.pdf)</a>
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Documents\doni\apotek-app\apotek-app\resources\views/order/admin/index.blade.php ENDPATH**/ ?>