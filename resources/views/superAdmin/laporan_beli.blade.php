@extends('app')\

@section('content')
    <h2 class="active" style="font-size: 30px;">Laporan Beli Sampah</h2>

    <style>
     .card {
  background-color: #86A789;
  border-radius: 10px; /* Adjust for desired corner roundness */
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* Optional shadow effect */
  margin: 50px;
  width: 300px; /* Adjust for card width */
  display: flex; /* Arranges content vertically */
  flex-direction: column; /* Stacks content on top of each other */
}

.card-container {
    display: flex;
    justify-content: flex-end; /* Aligns the cards to the right */
}

.card {
    float: right;
    margin-left: 20px; /* Adjust margin for spacing */
}

.card-image {
  /* Adjust width and height for your image */
  width: 100%;
  height: 200px;
  border-radius: 10px 10px 0 0; /* Rounded top corners */
}

.card-content {
  padding: 20px;
  flex: 1; /* Fills remaining space */
}

.card-title {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

.card-description {
  font-size: 16px;
  color: #777;
}
</style>

<div class="card">
    <div class="card-content">
        <form action="/search/year" method="get">
            <label for="year">Search by Year:</label>
            <input type="number" id="year" name="year">
            <button type="submit">Search</button>
          </form>
    </div>
  </div>

      <div class="card">
        <div class="card-content">
            <form action="/search/month" method="get">
                <label for="month">Search by Month:</label>
                <input type="month" id="month" name="month">
                <button type="submit">Search</button>
              </form>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
            <form action="/search/date" method="get">
                <label for="date">Search by Date:</label>
                <input type="date" id="date" name="date">
                <button type="submit">Search</button>
              </form>
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
                <td>10/03/2024</td>
                <td>1</td>
                <td>Kardus</td>
                <td>5Kg</td>
                <td>5000</td>
                <td>25000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>10/03/2024</td>
                <td>2</td>
                <td>Botol</td>
                <td>5Kg</td>
                <td>3000</td>
                <td>15000</td>
            </tr>
        </tbody>

        <tbody>
    </table>

    <a href="#">
        <button><i class="fa fa-print" aria-hidden="true"></i>Cetak</button>
    </a>
@endsection
