<table class="table table-compact table-stripped" id="myTable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama pelanggan</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pelanggan as $p)
        <tr>
            <td>{{ $i = !isset($i)?$i=1:++$i}}</td>
            <td>{{ $p->nama_pelanggan}}</td>
            <td>
                <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#editPelangganModal" data-mode="edit" data-id="{{ $p->id}}" data-nama="{{ $p->nama_pelanggan}}">
                    <i class="fas fa-edit"></i>
                </button>
                <form action="{{ route('pelanggan.destroy', $p->id) }}" method="post" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-delete"><i class="fas fa-trash"></i></button>
            </td>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>