<!-- Modal -->
<div class="modal fade" id="editPelangganModal" tabindex="-1" aria-labpemasokelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="" class="form-edit">
                    @csrf
                    @method('put')
                    <div class="form-group row">
                        <label for="nama_pelanggan" class="col-sm-2 col-form-label">Nama Pelanggan/label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_pelanggan_edit" name="nama_pelanggan" placeholder="Nama pelanggan">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            </form>
        </div>
    </div>
</div