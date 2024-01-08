@extends('layouts.template')

@section('content')

    @if (Session::get('success'))
        <div class="alert alert-success"> {{Session::get('success') }} </div>
    @endif

    @if (Session::get('deleted'))
        <div class="alert alert-warning"> {{Session::get('deleted') }} </div>
    @endif
    <button class="btn btn-success">
        <a class="dropdown-item" href="{{ route('student.create') }}">Register Akun Baru</a>
    </button>
     <br><br>
    <table class="table table-striped table-bordered table-hover" >
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Role</th>
                <th>Email</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($student as $item)
            <tr>
                <td> {{ $no++ }} </td>
                <td> {{ $item['name']}} </td>
                <td> {{ $item['role']}} </td>
                <td> {{ $item['email']}} </td>
                <td class="d-flex justify-content-center">
                    <a href="{{route('student.edit', $item['id'])}}" class="btn btn-primary me-3">Edit</a>
                    <!-- Erase -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#warning{{ $item['id'] }}">
                        Hapus
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="warning{{ $item['id'] }}" tabindex="-1" role="dialog"
                        aria-labelledby="warning" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Warning</h5>
                                    <button type="button" class="close btn-close float-end" data-dismiss="modal" aria-label="Close"></button>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Hapus akun ini?
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('student.delete', $item['id']) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div onclick="DELETE({{$item['id']}})" class="btn-danger btn me-3" style="cursor: pointer">Hapus</div> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


{{-- <div class="modal" tabindex="-1" id="DELETE">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('student.delete', $item['id'])}}" method="POST" id="delete-stock">
                <div class="modal-body">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="model-header">
                        <h5 class="modal-title" >Ubah Data Stock</h5>
                    </div> <br>
                    @csrf
                    @method('DELETE')
                    <div class="mb-3">
                        <button type="submit" class="btn btn-danger" >Hapus</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> --}}

{{-- @push('script')
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    }
});

function DELETE(id){
    var url = "{{ route('student.delete', ":id") }}";
    url = url.replace(':id',id);
    $.ajax({
        type:"GET",
        url: url,
        dataType: 'json',
        success: function(res){
            $('#delete-stock').modal('show');
            $('#id').val(res.id);
        }
    });
}
$('#delete-stock').submit(function(e){
    e.preventDefault();

    var id = $('#id').val();
    var urlForm = "{{ route('student.delete', ":id") }}";
    urlForm = urlForm.replace(':id', id);

    var data = {
        stock: $('#stock').val(),
    }

    $.ajax({
        type: 'PATCH',
        url: urlForm,
        data: data,
        cache:false,
        success: (data) => {
            $("#edit-stock").modal('hide');
            sessionStorage.reloadAfterPageLoad = true;
            window.location.reload();
        },
        error: function(data){
            $('#msg').attr("class", "alert alert-danger");
            $('#msg').text(data.responseJSON.message);
        }
    })
});

$(function(){
    if(sessionStorage.reloadAfterPageLoad){
        $('#msg-success').attr("class", "alert alert-success");
        $('#msg-success').text("Berhasil menambahkan data stock obat!");
        sessionStorage.clear();
    }
})
</script>
@endpush --}}
@endsection

<script language="JavaScript" type="text/javascript">
    function checkDelete(){
        return confirm('Are you sure?');
    }
    </script>
