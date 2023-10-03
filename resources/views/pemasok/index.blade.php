<!-- @extends('templates.layout')

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Pemasok</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    {{ session('errors')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            @endif
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFormPemasok">
                Tambah pemasok
            </button>
        </div>
        @include('pemasok.data')
        @include('pemasok.edit')
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
    @include('pemasok.form')
</section>
@endsection

@push('script')
<script>
    $('.alert-success').fadeTo(1000.300).slideUp(300, function() {
        $('.alert-success').slideUp(300)
    })
</script>
<script>
    $(document).ready(function() {

        $('#editPemasokModal').on('show.bs.modal', function(e) {
            let button = $(e.relatedTarget)
            let id = button.data('id')
            let nama = button.data('nama')
            $('#nama_pemasok_edit').val(nama)
            $('.form-edit').attr('action', `/stok/${id}`)
        })
    })
</script>
@endpush -->