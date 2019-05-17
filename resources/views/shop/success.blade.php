<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Success, Mazoa</title>
    <link rel="stylesheet" href="{{ asset('shop/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
    .logo{
      width:150px;
      margin:-7px;
    }
    .orange{
      background:#11f64e;
      border-radius:0;
      border:none;
      color: white;
      padding:10px 15px;
      width: 100%;
      margin:15px 0 20px 5px;
    }
    .orange:hover{
      background:#12f51e;
    }
    button:focus{outline: none;}
    </style>
  </head>
  <body style="overflow-x:hidden">
    <nav class="nav navbar-default" style="background:#8cb1ff">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-brand">
            <img src="{{ asset('shop/image/mazoa.png')}}" alt=""class="logo">
          </a>
        </div>
      </div>
    </nav>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <center>
          <img src="{{ asset('shop/image/berhasil.jpeg')}}" style="width:100%;" alt="">
          <h4> Terimakasih anda telah membeli barang di mazoa<br> Barang akan dikirim 1 - 3 hari</h4>
          <h3>Alamat pengiriman dan penagihan</h3>
        <table class="table">
          
          <tr>
            <td>
              Nama : {{ $detail->nama }}<br>
              Email : {{ $detail->email }}<br>
              Alamat Lengkap : {{ $detail->alamat }}<br>
              Kode Pos : {{ $detail->kode_pos }}<br>
              Nomer Handphone : {{ $detail->telepon }}<br>
              Kode Transaksi : {{ $detail->kode_trans }} 
            </td>
           
          </tr>
        </table>
          <table class="table table-striped" style="margin: 5px; overflow-x:block;">
            <thead>
              <?php 
              $no = 1;
               ?>
              <tr>
                <th class="data">No</th>
                <th class="data">Nama</th>
                <th class="data">Jumlah</th>
                <th class="data">Harga</th>
              </tr>
            </thead>
            <tbody>
              <form class="" action="index.html" method="post">
                <tr>

                  @foreach($penjualan as $data)
                  <td class="data"><?php echo $no++ ?></td>
                  <td class="data">{{ $data->membeli}}</td>
                  <td class="data">{{ $data->jumlah_brg }}</td>
                  <td class="data">Rp.{{ $data->harga }},00</td>
                </tr>
               @endforeach
               <tr>
                <td colspan="3"><h4>Total :</h4></td>
                  <td><h4>Rp.{{ $detail->total }}</h4></td>
                </tr>
                <tr>
                  <td><a href="{{ url('success/pdf/'.$detail->kode_trans)}}" class="btn btn-info btn-md"><span class="glyphicon glyphicon-print"></span> Print</a></td>
                </tr>
              </form>
            </tbody>
          </table>
          <button type="button" name="button" onclick="location.href='{{url('/')}}';" class="orange">Belanja lagi</button>
        </center>
      </div>
      <div class="col-md-3"></div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
