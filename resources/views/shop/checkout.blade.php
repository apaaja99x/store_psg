<html>

<head>
  <meta name="description" content="CSS Tabs" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Checkout</title>
  <link rel="shorcut icon" href="{{asset('image/mazoa-big.png')}}">
  <link rel="stylesheet" href="{{ asset('shop/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{ asset('shop/form.css')}}">
  <link rel="stylesheet" href="{{ asset('shop/font-awesome/css/font-awesome.css')}}">
  <meta charset=utf-8>
  <style>
  @import "compass/css3";
  * { box-sizing: border-box; }
  body{font-family: myriad pro;}
  .tabbed { width: 100%; margin:10px; }
  .tabbed > input { display: none; }
  .tabbed > label {
    display:block;
    float: left; padding: 12px 20px;
    margin-right: 5px;
    cursor: pointer;
    transition: background-color .3s; }
  .tabbed > label:hover, .tabbed > input:checked + label {background-color: #8cb1ff;color: white;}
  .tabs { clear: both;margin-bottom: 320px;}
  .tabs > div { width: 90%;
    position:absolute; border: 2px solid #8cb1ff; padding: 10px 30px;margin-right: 100px;
  line-height: 1.4em; opacity: 0; transform: rotateX(-20deg);
  transform-origin: top center; transition: opacity .3s, transform 1s; z-index: 0; }
  #tab-nav-1:checked ~ .tabs > div:nth-of-type(1),
  #tab-nav-2:checked ~ .tabs > div:nth-of-type(2),
  #tab-nav-3:checked ~ .tabs > div:nth-of-type(3),
  #tab-nav-4:checked ~ .tabs > div:nth-of-type(4),
  #tab-nav-5:checked ~ .tabs > div:nth-of-type(5),
  #tab-nav-6:checked ~ .tabs > div:nth-of-type(6)
  { transform: rotateX(0); opacity: 1; z-index: 1; }
  label{margin-bottom: 0}
  .orange{
    width:100%;
    background:	#11f64e;
    border-radius:0;
    border:none;
    color: white;
    padding:10px 15px;
    font-size: 17px;
  }
  .orange:hover{
    background: 	#12f51e;
  }
  .orange:focus{
    background: #13f51e;
  }
  .navbar-header:after{clear: right;}
  button:focus{outline: none;}
  .image-responsive{
    position:relative;
    width:400px;
    height:49.5px;
    float:right;
    display: block;
  }
  .logo{
    width:150px;
    margin:-7px;
  }
  h3{text-align: center;}
  @media (max-width:598px) {
    .image-responsive{
      display: none;
    }
    .logo{
      margin-left:50%;
    }
  }
  </style>
</head>
<body style="overflow-x:hidden">
  <nav class="nav navbar-default" style="background:#8cb1ff">
    <div class="container">
      <div class="navbar-header">
        <a href="{{url('/')}}" class="navbar-brand">
          <img src="shop/image/mazoa.png" alt=""class="logo">
        </a>
      </div>
    </div>
  </nav>
  <div class="row">
    <div class="col-sm-6" style="padding:20px;">
          <h3>Alamat pengiriman</h3>
          <form class="" action="{{ url('store')}}" method="post">
            {{ csrf_field() }}
            <div class="group">
              <input  class="insert" type="email" name="email" value="" required>
              <label class="lab">Email</label>
              <span class="bar"></span>
            </div>
            <div class="group">
              <input  class="insert" type="text" name="name" value="" required>
              <label class="lab">Nama</label>
              <span class="bar"></span>
            </div>
            <div class="group">
              <input  class="insert" type="text" name="address" value="" required>
              <label class="lab">Alamat</label>
              <span class="bar"></span>
            </div>
            <div class="group">
              <input  class="insert" type="text" name="kode" value="" required>
              <label class="lab">Kode Pos</label>
              <span class="bar"></span>
            </div>
            <div class="group">
              <input  class="insert" type="text" name="telepon" value="" required>
              <label class="lab">Telepon</label>
              <span class="bar"></span>
            </div>
        <h3>Metode Pembayaran</h3>
      <div class="tabbed">
        <input type="radio" name="tabs" id="tab-nav-1" checked>
        <label for="tab-nav-1">Bayar di tempat</label>
        <input type="radio" name="tabs" id="tab-nav-2">
        <label for="tab-nav-2">BCA</label>
        <input type="radio" name="tabs" id="tab-nav-3">
        <label for="tab-nav-3">BNI</label>
        <input type="radio" name="tabs" id="tab-nav-4">
        <label for="tab-nav-4">MANDIRI</label>
        <input type="radio" name="tabs" id="tab-nav-5">
        <label for="tab-nav-5">BRI</label>
        <div class="tabs">
          <div>
            <h3>Bayar di tempat</h3>
            <p style="font-size:16px;">Pembayaran di tempat hanya bisa dengan cash/uang tunai dengan nilai maximum
            order Rp.5.000.000,- pesanan diatas nilai maximum tersebut akan dibatalkan.</p>
            <button type="submit" name="button" class="orange"><i class="fa fa-lock"></i> Lanjutkan Pembayaran</button>
          </div>
          <div>
            <h3>BCA</h3>
            <p style="font-size:16px;">Untuk pembayaran via kartu kredit silahkan transfer ke alamat rekening 1237849619947. Barang akan dikirim setelah uang ditransfer ke rekening tersebut.</p>
            <button type="submit" name="button" class="orange"><i class="fa fa-lock"></i> Lanjutkan Pembayaran</button>
          </div>
          <div>
            <h3>BNI</h3>
            <p style="font-size:16px;">Untuk pembayaran via kartu kredit silahkan transfer ke alamat rekening 1237849619947. Barang akan dikirim setelah uang ditransfer ke rekening tersebut.</p>
            <button type="submit" name="button" class="orange"><i class="fa fa-lock"></i> Lanjutkan Pembayaran</button>
          </div>
          <div>
            <h3>MANDIRI</h3>
            <p style="font-size:16px;">Untuk pembayaran via kartu kredit silahkan transfer ke alamat rekening 1237849619947. Barang akan dikirim setelah uang ditransfer ke rekening tersebut.</p>
            <button type="submit" name="button" class="orange"><i class="fa fa-lock"></i> Lanjutkan Pembayaran</button>
          </div>
          <div>
            <h3>BRI</h3>
            <p style="font-size:16px;">Untuk pembayaran via kartu kredit silahkan transfer ke alamat rekening 1237849619947. Barang akan dikirim setelah uang ditransfer ke rekening tersebut.</p>
            <button type="submit" name="button" class="orange"><i class="fa fa-lock"></i> Lanjutkan Pembayaran</button>
          </div>
        </div>
      </div>
      
    </div>
    <div class="col-sm-6" style="padding:20px;">
      <h3>Rincian pengiriman</h3>
      <table class="table">

      <thead>
        <tr>
          <th >Product</th>
          <th style="text-align:center">Jumlah</th>
          <th style="text-align:right">Harga</th>
        </tr>
      </thead>
      
      <tbody>
        @foreach(Cart::content() as $item)
        <tr>
          <td ><input type="hidden" name="update[]" value="{{ $item->id }}"><input type="hidden" name="product[]" value="{{$item->name}}">{{ $item->name }}</td>
          <td style="text-align:center">{{ $item->qty }}<input type="hidden" name="qty[]" value="{{$item->qty}}"><input type="hidden" name="jumlah[]" value="{{$item->qty}}"></td>
          <td style="text-align:right"><input type="hidden" name="harga[]" value="{{$item->subtotal}}">Rp.{{ $item->subtotal }},00</td>
        </tr>
        @endforeach
        <tr>
          <td colspan="2">
            TOTAL
          </td>
          <td style="text-align:right"><input type="hidden" name="total" value="{{ Cart::instance('default')->subtotal() }}">RP.{{ Cart::instance('default')->subtotal() }}</td>
        </tr>
        <tr>
          <td colspan="2"><b>Informasi Pengiriman</b><br>
          Pengiriman Standar : Gratis
          Dapatkan pada Senin, 27-30 Nov 2017</td>
          <td><img src="{{ asset('shop/image/verified.png')}}" width="75px"></td>
        </tr>
      </tbody>
    </table>
    </form>
  </div>
  </div>
    <script src={{asset('shop/js/jquery.min.js')}}></script>
    <script src={{asset('shop/js/bootstrap.min.js')}}></script>
    <script src={{asset('shop/js/index.js')}}></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('input').blur(function(){
        if($(this).val())
          $(this).addClass('used');
        else
          $(this).removeClass('used');
      });
    });
    </script>
</body>
</html>
