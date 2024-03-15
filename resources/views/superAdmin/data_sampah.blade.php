@extends('app')

@section('content')

<h2 style="font-size: 30px;">Data Sampah</h2>
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
                                     <td><img src="https://down-id.img.susercontent.com/file/d41d0ab1c03c710ae114912cf4297f74"width="60px"height="60px"></td>
                                      <td>Semua Jenis Kardus</td>
                                      <td> <a href="#" class="btn btn-warning btn-sm"> <i class="fas fa-edit"></i> </a>
                                          <a href="#" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </a>
                                          </td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>Botol</td>
                                      <td>KG</td>
                                      <td>3000</td>
                                      <td><img src="https://st4.depositphotos.com/1971587/25483/i/1600/depositphotos_254834222-stock-photo-new-unused-blue-empty-plastic.jpg" width="60px" height="60px"></td>
                                      <td>Botol Tanpa Tutup</td>
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
