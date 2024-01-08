    @push('script')
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
                    $('#edit-stock').modal('show');
                    $('#id').val(res.id);
                    $('#name').val(res.name);
                    $('#stock').val(res.stock);
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
    @endpush
@endsection

