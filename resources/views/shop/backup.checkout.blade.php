@include('shop.headeer')
  <head>
    <meta charset="utf-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="{{ asset('shop/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('shop/form.css')}}">
    <link rel="stylesheet" href="{{ asset('shop/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('shop/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
    <style>
      .navbar-header:after{clear: right;}
      h3{
        color:#8cb1ff;
      }
      label{font-weight: normal;}
      .orange{
        width: 100%;
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
      button:focus{outline: none;}
      ::-webkit-scrollbar{
        width: 6px;
        background:white;
      }
      ::-webkit-scrollbar-thumb{
        box-shadow: inset 0 0 4px rgba(0,0,0,.3);
        background-color:#11f64e;
      }
    </style>
  </head>
  <body style="overflow-x:hidden;">
    <nav class="nav navbar-default" style="background:#8cb1ff">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-brand">
            <img src="image/mazoa.png" alt="" style="width:150px; margin:-7px;">
          </a>
        </div>
        <img src="image/pengiriman.png" alt="" class="image-responsive" style="position:relative; width:400px; height:49.5px; float:right;">
      </div>
    </nav>
        <div class="col-md-6" style="padding:3%;">
          <h3>Alamat pengiriman</h3>
          <form class="" action="{{ url('store')}}" method="post">
            {{ csrf_field() }}
            <div class="group">
              <input  class="insert" type="text" name="email" value="">
              <label class="lab">Email</label>
              <span class="bar"></span>
            </div>
            <div class="group">
              <input  class="insert" type="text" name="name" value="">
              <label class="lab">Nama</label>
              <span class="bar"></span>
            </div>
            <div class="group">
              <input  class="insert" type="text" name="address" value="">
              <label class="lab">Alamat</label>
              <span class="bar"></span>
            </div>
            <div class="sel sel--black-panther">
            <select name="provinsi" id="select-profession">
              <option value="" disabled>Provinsi</option>
              <option value="hacker">Hacker</option>
              <option value="gamer">Gamer</option>
              <option value="developer">Developer</option>
              <option value="programmer">Programmer</option>
              <option value="designer">Designer</option>
            </select>
          </div>
          <div class="sel sel--superman">
            <select name="kabupaten" id="select-superpower">
              <option value="" disabled>Kabupaten / Kota</option>
              <option>Power</option>
              <option>Speed</option>
              <option>Acrobatics</option>
              <option>Accuracy</option>
            </select>
          </div>
          <div class="sel kecamatan">
            <select name="kecamatan" id="kecamatan">
              <option value="" disabled>Kecamatan</option>
              <option>Power</option>
              <option>Speed</option>
              <option>Acrobatics</option>
              <option>Accuracy</option>
            </select>
          </div>
            <div class="group">
              <input  class="insert" type="text" name="telepon" value="">
              <label class="lab">Telepon</label>
              <span class="bar"></span>
            </div>
          </div>
        </div>
        <div class="col-md-6" style="padding:3%;">
          <h3>Rincian pengiriman</h3>
          <table class="table">
          <thead>
            <tr>
              <th >Product</th>
              <th style="text-align:center">Quantity</th>
              <th style="text-align:right">Harga</th>
            </tr>
          </thead>
          <tbody>
            @foreach(Cart::content() as $item)
            <tr>
              <td><!--<input type="hidden" name="product[]" value="{{ $item->id }}">-->
                <input type="hidden" name="product[]" value="{{$item->name}}">{{ $item->name }}</td>
              <td style="text-align:center">{{ $item->qty }}</td>
              <td style="text-align:right">Rp.{{ number_format($item->subtotal,2) }}</td>
            </tr>
             @endforeach
            <tr>
              <td colspan="2">
                TOTAL
              </td>
              <td style="text-align:right">RP.{{ Cart::instance('default')->subtotal() }}</td>
            </tr>

            <tr>
              <td colspan="2"><b>Informasi Pengiriman</b><br>
              Pengiriman Standar : Gratis
              Dapatkan pada Senin, 27-30 Nov 2017</td>
              <td><img src="image/verified.png" width="75px"></td>
            </tr>
            <tr>
              <td colspan="3">
                <button type="submit" class="orange">Lanjutkan</button>
              </td>
            </tr>
          </tbody>
        </table>
        </form>
        </div>
      </div>
      
    <script src="{{ asset('shop/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('shop/js/jquery.min.js')}}"></script>
    <script src="{{ asset('shop/js/index.js')}}"></script>
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
