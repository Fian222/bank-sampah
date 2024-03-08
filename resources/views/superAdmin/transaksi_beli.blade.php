@extends('app')

@section('content')
<h2 class="active" style="font-size: 30px;">Transaksi Beli Sampah</h2>
	<br>
	<table id="example" class="display" cellspacing="0" width="100%" border="0" >
        <thead>
        <tr>
            <th>Id Beli</th>
            <th>Tanggal Beli</th>
            <th>Jenis Sampah</th>
            <th>Id Nasabah</th>
            <th>Berat</th>
            <th>Harga</th>
            <th>Total</th>
            <th>Id_User</th>
            <th>Aksi</th>
        </tr>
        </thead>

        <tbody>

</table>

                <a href="admin.php?page=tambah-data-setor">
                <button><i class="fa fa-plus" aria-hidden="true"></i>Tambah</button>
                </a>
@endsection
@section('script')
                   <script type="text/javascript" src="../datatables/js/jquery.min.js"></script>
                   <script type="text/javascript" src="../datatables/js/jquery.dataTables.min.js"></script>
                   <script>
                        $(document).ready(function() {
                        $('#example').DataTable();
                        } );
                   </script>
@endsection
