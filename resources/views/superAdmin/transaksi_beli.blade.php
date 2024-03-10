@extends('app')

@section('content')
<h2 class="active" style="font-size: 30px;">Transaksi Beli Sampah</h2>
	<br>

    <div class="row">
        <div class="d-flex justify-content-between">
          <!-- Bagian "Show Entries" di kiri -->
          <div>
            <label for="entries">Show Entries:</label>
            <select id="entries" onchange="changeEntries()">
              <option value="10">10</option>
              <option value="25">25</option>
              <option value="50">50</option>
              <option value="100">100</option>
            </select>
          </div>
          <!-- Bagian "Search" di kanan -->
          <div>
            <label for="search">Search:</label>
            <input type="text" id="search" name="search" placeholder="Type your search query..." />
            <button onclick="performSearch()">Search</button>
          </div>
        </div>
      </div>

      <style>
        table {
        border-collapse: collapse;
        width: 100%;
      }

      th, td {
        border: 1px solid; /* warna awal garis */
        padding: 8px;
      }

      th {
        text-align: left;
      }

      tr:nth-child(even) {
        background-color: #f2f2f2;
      }

      .search-bar {
        width: 200px;
        padding: 5px;
        margin-bottom: 10px;
      }

      .pagination {
        text-align: center;
      }

      .pagination a {
        padding: 5px;
        border: 1px solid #ddd;
        margin-right: 5px;
      }

      .pagination a:hover {
        background-color: #ddd;
      }

      .pagination a.active {
        background-color: #000;
        color: #fff;
      }

      /* Menyesuaikan warna garis berdasarkan mode gelap */
      @media (prefers-color-scheme: dark) {
        table {
          background-color: #D2E3C8; /* warna background untuk dark mode */
        }

        th, td {
          border-color: #fff; /* warna garis untuk dark mode */
        }
      }
        </style>

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
            <tr>
                <td>5454</td>
                <td>10/03/2024</td>
                <td>Kardus</td>
                <td>5353</td>
                <td>5Kg</td>
                <td>5000</td>
                <td>25000</td>
                <td>123</td>
                <td><button>Edit</button> <button>Delete</button></td>
            </tr>
            <tr>
                <td>5555</td>
                <td>10/03/2024</td>
                <td>Botol</td>
                <td>5353</td>
                <td>5Kg</td>
                <td>3000</td>
                <td>15000</td>
                <td>123</td>
                <td><button>Edit</button> <button>Delete</button></td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>

        <tbody>

</table>

                <a href="admin.php?page=tambah-data-setor">
                <button><i class="fa fa-plus" aria-hidden="true"></i>Tambah</button>
                </a>

                <style>
                    .button-container {
                        display: flex;
                        justify-content: flex-end;
                        gap: 10px; /* Jarak antara tombol */
                        margin-right: 10px; /* Jarak dari tepi kanan */
                    }
                </style>
            <div class="button-container">
                        <button onclick="previousPage()">Previous</button>
                        <button onclick="nextPage()">Next</button>
            </div>
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
