@extends('layouts.template')

@section('content')

  @if (Session::get('success'))
      <div class="alert alert-success m-0">{{ Session::get('success') }}</div>
  @endif

  <div id="msg-success"></div>

  <div class="container text-end my-3 p-0">
    <a href="{{ route('user.create') }}" class="btn btn-secondary">Tambah Pengguna</a>
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
      @php $no = 1; @endphp
      @foreach ($users as $item)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $item['name'] }}</td>
          <td>{{ $item['email'] }}</td>
          <td>
            @if ($item['role'] == 'admin')
                Admin
            @else
                Kasir
            @endif
          </td>
          {{-- <td>{{ $item['role'] }}</td> --}}
          <td class="d-flex justify-content-center">
            <a href="{{ route('user.edit', $item['id']) }}" class="btn btn-primary me-3">Edit</a>
            <button type="button" onclick="deleteUser({{ $item['id'] }})" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus</button>
            {{-- <form action="{{ route('user.delete', $item['id']) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" onclick="delete({{ $item['id'] }})" class="btn btn-danger">Hapus</button>
            </form> --}}
          </td>
        </tr>
      @endforeach
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
@endsection

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      function deleteUser(id) {
        var url = "{{ route('user.delete', ":id") }}";
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
        var urlForm = "{{ route('user.delete', ":id") }}"
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
@endpush