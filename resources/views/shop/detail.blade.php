@include('shop.headeer')

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('shop/css/style.css')}}">
    <style>
    .orange{
      font-size: 17px;
    }
    .navbar-header:after{clear: right;}
    .fa-star{color:#ffc900;}
    .fa-check-circle{color:#11f64e}
    .fa-times-circle{color:red;}
    .col-sm-4{margin: 30px 0;}
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="margin-bottom:10px;">
          <h2>{{ $product->name }}</h2>
          <h3 style="line-height:0px; color:#11f64e;">{{ $product->category}}</h3>
          </div>
      </div>
      <div class="row" style="margin:20px 0;">
        <div class="col-sm-4">
          <img src="{{ asset('image/'.$product->picture) }}" alt="" style="width:100%">
        </div>
        <div class="col-sm-4">
          <h3>Detail Product {{ $product->name }}</h3>
          <p><br>{{ $product->description }}
          </p>
          <div class="sel sel--black-panther" style="width:80px">
          <select name="select-profession" id="select-profession">
            <option value="" disabled>size</option>
            <option value="S">S</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
          </select>
        </div>
        <div class="sel sel--superman" style="width:80px;">
          <select name="select-superpower" id="select-superpower">
            <option value="" disabled>color</option>
            <option value="RED">RED</option>
            <option value="WHITE">WHITE</option>
            <option value="BLACK">BLACK</option>
            <option value="BLUE">BLUE</option>
          </select>
        </div>
          <h4><i class="{{($product->stock!=0) ? 'fa fa-check-circle' : 'fa fa-times-circle'}}"></i>
            {{($product->stock!=0) ? 'Stock tersedia ' : 'Stock Habis'}} 
            ({{($product->stock!=0) ? ($product->stock) : '0'}})</h4>
          <h3>Rp.{{ number_format($product->price,2) }}</h3>
          <form action="{{ url('/cart')}}" method="post">
            {!! csrf_field() !!}
               <input type="hidden" name="id" value="{{ $product->id }}">
               <input type="hidden" name="name" value="{{ $product->name }}">
               <input type="hidden" name="price" value="{{ $product->price }}">
          <button type="submit" class="{{($product->stock!=0) ? 'orange' : 'abu disabled'}}" {{($product->stock!=0) ? '' : 'disabled'}} style="width:100%;">{{($product->stock!=0) ? 'Tambahkan ke keranjang' : 'Tidak tersedia'}}</button>
        </form>
        </div>
        <div class="col-sm-4">
          <table class="table">
            <tr>
              <td><i class="fa fa-truck"></i> Dapatkan pada 1-3 hari setelah pembayaran</td>
            </tr>
            <tr>
              <td><i class="fa fa-money"></i> Bayar di Tempat tidak berlaku untuk produk ini</td>
            </tr>
            <tr>
              <td><i class="fa fa-undo"></i> 14 hari pengembalian</td>
            </tr>
            <tr>
              <td><i class="fa fa-check"></i> Garansi Pusat Pelayanan Lokal 1 Tahun</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="{{ asset('shop/js/index.js')}}"></script>
   
  </body>
</html>
@include('shop.footer')
