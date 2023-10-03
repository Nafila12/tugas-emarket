<!-- Modal -->
<div class="modal fade" id="modalFormProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Pengajuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="pengajuan">
                    @csrf
                <form>
                    <div class="form-group row">
                        

                        <label for="nama_pelanggan" class="col-sm-2 col-form-label">Nama Pengaju</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Pengaju" name="nama_pengaju">
                        </div>

                        <label for="nama_pelanggan" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Barang" name="nama_barang">
                        </div>

                        <label for="nama_pelanggan" class="col-sm-2 col-form-label">Tanggal Pengajuan</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="inputEmail3" placeholder="Tanggal " name="tanggal_pengajuan">
                        </div>

                        <label for="nama_pelanggan" class="col-sm-2 col-form-label">Quantity</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder=" Quantity" name="quantity">
                        </div>

                        <label for="nama_pelanggan" class="col-sm-2 col-form-label">Terpenuh</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="terpenuhi" id="terpenuhi">
                                <option value="0">tidak</option>
                                <option value="1">ya</option>
                                
                            </select>
                        </div>
                        
                        
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>
            </form>
        </div>
    </div>
</div>