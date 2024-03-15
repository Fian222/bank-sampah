@extends('app')

@section('content')
    <h2 style="font-size: 30px;">Laporan Beli Sampah</h2>
<br>

    <form action="#" method="post" name="form10" target="_self">
        <div class="row">
          <div class="col-lg-3">
            <input name="txtTglAwal" type="date" class="form-control"  size="10" />
          </div>
          <div class="col-lg-3">
           <input name="txtTglAkhir" type="date" class="form-control"  size="10" />
          </div>

          <div class="col-lg-3">
            <input name="btnTampil" style="background-color: #4F6F52; color: white;" class="btn" type="submit" value="Tampilkan" />
        </div>
        </div>
        </form>

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

<style>

    </style>

                        <div  class="search-container">
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
                                  <th>Tanggal Jual</th>
                                  <th>RW</th>
                                  <th>Jenis Sampah</th>
                                  <th>Banyak</th>
                                  <th>Harga Satuan</th>
                                  <th>Total</th>
                              </tr>
                          </thead>
                          <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>11/03/2024</td>
                                      <td>1</td>
                                      <td>Kardus</td>
                                      <td>5Kg</td>
                                      <td>5000</td>
                                      <td>25000</td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>11/03/2024</td>
                                      <td>2</td>
                                      <td>Botol</td>
                                      <td>5Kg</td>
                                      <td>3000</td>
                                      <td>15000</td>
                      </tr>
                  </tbody>
              </table>
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
                        <a href="#" style= "background-color: #4F6F52; "class="btn">
                            <i class="fa-solid fa-print" style="color: white;"></i> <span style="color: white;">Cetak</span>
                        </a>
                    </div>
              <div>

              </div>
          </div>
      </div>
      </div>
      </div>
      </div>
@endsection

@section('script')

<script>
function toggleClearButton() {
    var searchBar = document.getElementById("searchBar");
    var clearButton = document.querySelector(".clear-button");
    clearButton.style.display = searchBar.value ? "block" : "none";
}

function clearSearchBar() {
    var searchBar = document.getElementById("searchBar");
    searchBar.value = "";
    toggleClearButton();
}
</script>
@endsection


