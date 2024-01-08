

<?php $__env->startSection('content'); ?>

  <?php if(Session::get('success')): ?>
      <div class="alert alert-success m-0"><?php echo e(Session::get('success')); ?></div>
  <?php endif; ?>

  <div id="msg-success"></div>

  <div class="container text-end my-3 p-0">
    <a href="<?php echo e(route('user.create')); ?>" class="btn btn-secondary">Tambah Pengguna</a>
  </div>
  
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Role</th>
        <th class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($no++); ?></td>
          <td><?php echo e($item['name']); ?></td>
          <td><?php echo e($item['email']); ?></td>
          <td>
            <?php if($item['role'] == 'admin'): ?>
                Admin
            <?php else: ?>
                Kasir
            <?php endif; ?>
          </td>
          
          <td class="d-flex justify-content-center">
            <a href="<?php echo e(route('user.edit', $item['id'])); ?>" class="btn btn-primary me-3">Edit</a>
            <button type="button" onclick="deleteUser(<?php echo e($item['id']); ?>)" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus</button>
            
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Yakin ingin menghapus data ini?
        </div>
        <div class="modal-footer">
          <form method="post" id="form-stock">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Hapus</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      function deleteUser(id) {
        var url = "<?php echo e(route('user.delete', ":id")); ?>";
        url = url.replace(':id', id);
        $.ajax({
          type:"POST",
          url: url,
          dataType: 'json',
          success: function(res){
            $('#edit-stock').modal('show');
            $('#id').val(res.id);
            $('#name').val(res.name);
            $('#stock').val(res.stock);
          }
        });
      }

      $('#form-stock').submit(function(e) {
        e.preventDefault();

        var id = $('#id').val();
        var urlForm = "<?php echo e(route('user.delete', ":id")); ?>"
        urlForm = urlForm.replace(':id', id);

        var data = {
          stock: $('#stock').val(),
        }

        $.ajax({
          type:'DELETE',
          url: urlForm,
          data: data,
          cache: false,
          success: (data) => {
            $("#edit-stock").modal('hide');
            sessionStorage.reloadAfterPageLoad = true;
            window.location.reload();
          },
          error: function(data){
            $('#msg').attr("class", "alert alert-danger");
            $('#msg').text(data.responseJSON.message);
          }
        });
      });

      $(function() {
        if(sessionStorage.reloadAfterPageLoad) {
          $('#msg-success').attr("class", "alert alert-warning");
          $('#msg-success').text("Berhasil menghapus data pengguna!");
          sessionStorage.clear();
        }
      })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Documents\doni\apotek-app\apotek-app\resources\views/user/index.blade.php ENDPATH**/ ?>