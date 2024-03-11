@extends('app')

@section('content')
<h2 class="active" style="font-size: 30px;">Data Nasabah</h2>
	<br>

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

          <style>

      .btn-container {
                  text-align: right;
                  margin-left: auto; /* Posisikan ke kanan */
              }
              #search {
          margin-bottom: 5px;
          float: right;
              }

          #search input {
          width: 300px;
      }
      .row {
          width: 100%;
      }

          </style>

      <div class="mb-3"></div>
      <div class="row">
      <div class="col">
          <div class="card shadow">
              <div class="card-body">

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
                        </div>
                      </div>
                    </div>

                  <div class="table-responsive">
                      <table class="table table-bordered">
                          <thead class="table-secondary">
                              <tr>
                                  <th>No</th>
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
                                      <td>1</td>
                                      <td>123</td>
                                      <td>John Doe</td>
                                      <td>1</td>
                                      <td>123-456-7890</td>
                                      <td>Jl. Duri Kepa</td>
                                      <td>50Kg</td>
                                      <td> <a href="#" class="btn btn-warning btn-sm"> <i class="fas fa-edit"></i> </a>
                                          <a href="#" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </a>
                                          </td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>132</td>
                                      <td>John Cena</td>
                                      <td>2</td>
                                      <td>123-555-7890</td>
                                      <td>Jl. Duri Kepa 2</td>
                                      <td>30Kg</td>
                          <td> <a href="#" class="btn btn-warning btn-sm"> <i class="fas fa-edit"></i> </a>
                          <a href="#" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </a>
                          </td>
                      </tr>
                  </tbody>
              </table>
              <div class="row" >
                  <div class="d-flex justify-content-between">
                  <div>
                  <a href="#">
                  <button><i class="fa fa-plus" aria-hidden="true"></i>Tambah</button>
                  </a>
              </div>
              <div>
                  <div class="btn-container">
                      <button class="btn btn-previous">Previous</button>
                      <button><a class="paginate_button current" aria-controls="example" data-dt-idx="1" tabindex="0">1</a></button>
                      <button class="btn btn-next">Next</button>
                  </div>
              </div>
          </div>
      </div>
      </div>
      </div>
      </div>
      @endsection
