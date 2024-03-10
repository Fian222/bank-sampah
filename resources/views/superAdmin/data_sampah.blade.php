@extends('app')

@section('content')

<h2 class="active" style="font-size: 30px;">Data Sampah</h2>
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

    <table id="example" class="display" cellspacing="0" width="100%" border="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Sampah</th>
                <th>Satuan</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Kardus</td>
                <td>KG</td>
                <td>5000</td>
                <td><img src="https://down-id.img.susercontent.com/file/d41d0ab1c03c710ae114912cf4297f74" width="60px" height="60px"></td>
                <td>Semua Jenis Kardus</td>
                <td><button>Edit</button> <button>Delete</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Botol</td>
                <td>KG</td>
                <td>3000</td>
                <td><img src="https://st4.depositphotos.com/1971587/25483/i/1600/depositphotos_254834222-stock-photo-new-unused-blue-empty-plastic.jpg" width="60px" height="60px"></td>
                <td>Botol Tanpa Tutup</td>
                <td><button>Edit</button> <button>Delete</button></td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>

</table>

             <a href="admin.php?page=tambah-data-sampah">
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
    <script type="text/javascript" src="vendor/datatables/js/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
