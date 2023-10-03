<!-- Modal -->
<div class="modal fade" id="modalFormPemasok" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form pemasok</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="{{route('stok.store')}}">
            <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="staticEmail1" class="col-sm-4 col-form-label">Nama Pemasok</label>
                        <input type="text" class="form-control" id="nama_pemasok" value="" name="nama_pemasok">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
</div>
