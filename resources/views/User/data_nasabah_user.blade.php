@extends('layout.app_user')

@section('content')
    <h2 style="font-size: 30px;">Data Nasabah</h2>
    <br>

    <link rel="stylesheet" href="./assets/compiled/css/all.view.css">
    <link rel="stylesheet" href="./assets/compiled/css/dataTables.bootstrap4.min.css">

    <div class="back-button-container" style="margin-bottom: 5px; margin-left: 1px;">
        <a class="btn back-button" onclick="goBack()">
            <i class="fa-solid fa-arrow-left" style="color: white;"></i>
            <span style="color: white;">Back</span>
        </a>
    </div>

    <div class="mb-3"></div>
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table_nasabah_user" class="table table-bordered">
                            <thead class="table-secondary">
                                <tr>
                                    <th>No</th>
                                    <th>Id_Nasabah</th>
                                    <th>Nama</th>
                                    <th>RW</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th>Sampah</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                <tr>
                                    <td>1</td>
                                    <td>212</td>
                                    <td>John Doe</td>
                                    <td>1</td>
                                    <td>123-456-7890</td>
                                    <td>Jl. Duri Kepa</td>
                                    <td>50Kg</td>
                                </tr>
                                <tr id="tableBody">
                                    <td>2</td>
                                    <td>132</td>
                                    <td>John Cena</td>
                                    <td>2</td>
                                    <td>123-555-7890</td>
                                    <td>Jl. Duri Kepa 2</td>
                                    <td>30Kg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/assets/compiled/js/jquery.min.js"></script>
    <script src="/assets/compiled/js/jquery.dataTables.min.js"></script>
    <script src="/assets/compiled/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#table_nasabah_user').DataTable();
        });
    </script>
@endsection
