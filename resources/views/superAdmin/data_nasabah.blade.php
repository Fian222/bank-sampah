@extends('app')

@section('content')
<h2 style="font-size: 30px;">Data Nasabah</h2>
	<br>

    <link rel="stylesheet" href="./assets/compiled/css/all.view.css">

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
                        <div class="search-container">
                            <input type="text" id="searchBar" placeholder="Search..." oninput="toggleClearButton()">
                            <button class="clear-button" onclick="clearSearchBar()">X</button>
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
              <div>
                <div class="row">
                  <div class="d-flex justify-content-between">
                      <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries
                      </div>
                        <div class="btn-container">
                          <button class="btn btn-previous">Previous</button>
                          <button style="background-color: #4F6F52; border: none; border-radius: 5px;"><a class="paginate_button current" aria-controls="example" style="color: white; data-dt-idx="1" tabindex="0">1</a></button>
                          <button class="btn btn-next">Next</button>
                        </div>
                  </div>
              </div>

              <div>
                <div class="d-flex justify-content-between">
                    <a href="#" style= "background-color: #4F6F52; "class="btn">
                        <i class="fa-solid fa-user-plus" style="color: white; margin-right: 5px;"></i>
                        <span style="color: white;">Tambah</span>
                    </a>
                </div>
              </div>
          </div>
      </div>
      </div>
      </div>
      </div>
      @endsection
