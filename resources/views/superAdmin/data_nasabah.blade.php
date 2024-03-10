@extends('app')

@section('content')
<h2 class="active" style="font-size: 30px;">Data Nasabah</h2>
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
            <th>Id_User</th>
            <th>Nama</th>
            <th>RW</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Sampah</th>
            <th>Aksi</th>
        </tr>
        </thead>

        <tbody>
            <tr>
                <td>1212</td>
                <td>John Doe</td>
                <td>1</td>
                <td>123-456-7890</td>
                <td>Jl. Duri Kepa</td>
                <td>50Kg</td>
                <td><button>Edit</button> <button>Delete</button></td>
            </tr>
            <tr>
                <td>1213</td>
                <td>John Cena</td>
                <td>2</td>
                <td>123-456-7891</td>
                <td>Jl. Duri Kepa 1</td>
                <td>30Kg</td>
                <td><button>Edit</button> <button>Delete</button></td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>

    </table>

                <a href="admin.php?page=tambah-data-nasabah">
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
        } );
    </script>
@endsection
