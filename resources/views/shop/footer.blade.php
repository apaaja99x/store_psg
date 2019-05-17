


    <link rel="stylesheet" href="{{asset('shop/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('shop/form.css')}}">
    <link rel="stylesheet" href="{{asset('shop/font-awesome/css/font-awesome.min.css')}}">
    <style>
      div a{
        text-decoration: none;
        color:#5d5d5d;
        text-align: -webkit-center;
      }
      div a:hover,div a:focus{
        color:black;
        text-decoration: none;
      }
      .break{margin:5px 0; font-weight: bold; color: #2e3192;text-align: center;}
      .image{border-radius: 5px; padding: 1px; background-color:white; margin: 1px;}
      .fa-facebook{padding: 5px;}
      .fa-pinterest{padding: 5px;}
      .fa-google-plus{padding:5px;}
      .fa-instagram{padding:5px;}
      .fa-twitter{padding:5px;}
      .fa-youtube-play{padding:5px;}
      .abu{
        background:#ccc;
        border-radius:0;
        border:none;
        color: black;
        padding:10px 15px;
        cursor: not-allowed;
      }
      .orange{
        background:#11f64e;
        border-radius:0;
        border:none;
        color: white;
        padding:10px 15px;
      }
      .orange:hover{
        background:#12f51e;
      }
      button:focus{outline: none;}
      .load{margin: 15px 0;}
    </style>
  </head>
  <body>
    <div class="container-fluid" style="border-top:7px solid #11f64e;background-color:#bde1fd;">
      <div class="container">
        <div class="row" style="border-bottom:1px solid #11f64e">
          <div class="col-sm-3 load">
            <center><img src="{{asset('shop/image/jaminan.png')}}" alt="">
            <p class="break">Perlindungan Konsumen</p>
            <p style="color:#5d5d5d">Kami akan mengembalikan uang Anda secara penuh,
            jika barang tidak sesuai dengan deskripsi,
            berkualitas buruk atau tidak terkirim</p></center>
          </div>
          <div class="col-sm-3 load">
            <center><img src="{{asset('shop/image/kredit.png')}}" alt="">
            <p class="break">Pembayaran Aman</p>
            <p style="color:#5d5d5d">Kami menghadirkan pilihan metode pembayaran yang aman dan bervariasi</p></center>
          </div>
          <div class="col-sm-3 load">
            <center><img src="{{asset('shop/image/jam.png')}}" alt="">
            <p class="break">Respon Cepat</p>
            <p style="color:#5d5d5d">Pertanyaan akan ditanggapi dalam<br> waktu 24 jam</p></center>
          </div>
          <div class="col-sm-3 load">
            <center><img src="{{asset('shop/image/asli.png')}}" alt="">
            <p class="break">Jaminan Keaslian</p>
            <p style="color:#5d5d5d">Kami menjamin produk yang kami jual 100% bukan barang palsu</p></center>
          </div>
        </div>
        <div class="row" style="border-bottom:1px solid #11f64e">
          <div class="col-sm-3 load">
            <p class="break">BANTUAN</p>
            <center><a href="#">Pembayaran</a><br>
            <a href="#">Pengiriman</a><br>
            <a href="#">Status Pesanan</a><br>
            <a href="#">Pengembalian Produk</a><br>
            <a href="#">Blibli Rewards</a><br>
            <a href="#">Cara Berbelanja</a><br>
            <a href="#">Hubungi Kami</a></center>
          </div>
          <div class="col-sm-3 load">
            <center><p class="break">CUSTOMER CARE</p>
            <p style="color:#5d5d5d">Buka 24 jam setiap hari<br>
            <i class="fa fa-phone"></i> 081515851296<br>
            <i class="fa fa-envelope-o"></i> customer@mazoa.com<br></p>
            <button type="button" name="button" class="orange">
              Saya butuh bantuan
            </button></center>
          </div>
          <div class="col-sm-3 load">
            <center><p class="break">INFO MAZOA.COM</p>
            <a href="#">Tentang mazoa.com</a><br>
            <a href="#">Siaran Pers</a><br>
            <a href="#">Kabar Terbaru</a><br>
            <a href="#">Daftar Brand</a><br>
            <a href="#">Karir</a><br>
            <a href="#">Ulas Puas</a><br>
            <a href="#">Blog Competition</a></center>
          </div>
          <div class="col-sm-3 load">
            <center><p class="break">KERJA SAMA DENGAN MAZOA.COM</p>
            <a href="#">Affiliate Program</a><br>
            <a href="#">Jual di mazoa.com</a><br>
            <a href="#">B2B Program</a></center>
          </div>
        </div>
        <div class="row center">
          <div class="col-sm-3 load">
            <p class="break">METODE PEMBAYARAN</p>
            <center><a href=""><img src="{{asset('shop/image/cas on delevery.png')}}" alt="" class="image"></a>
            <a href=""><img src="{{asset('shop/image/bca.png')}}" alt="" class="image"></a>
            <a href=""><img src="{{asset('shop/image/bni.png')}}" alt="" class="image"></a>
            <a href=""><img src="{{asset('shop/image/mandiri.png')}}" alt="" class="image"></a>
            <a href=""><img src="{{asset('shop/image/visa.png')}}" alt="" class="image"></a>
            <a href=""><img src="{{asset('shop/image/bri.png')}}" alt="" class="image"></a></center>
          </div>
          <div class="col-sm-3 load">
            <p class="break">JASA PENGIRIMAN</p>
            <center><a href=""><img src="{{asset('shop/image/ncs.jpg')}}" alt="" class="image"></a>
            <a href=""><img src="{{asset('shop/image/pos.png')}}" alt="" class="image"></a>
            <a href=""><img src="{{asset('shop/image/jne.jpg')}}" alt="" class="image"></a>
            <a href=""><img src="{{asset('shop/image/tiki.png')}}" alt="" class="image"></a></center>
          </div>
          <div class="col-sm-3 load">
            <center><a href=""><p class="break">IKUTI KAMI</p>
            <a href=""><i class="fa fa-facebook fa-2x"></i></a>
            <a href=""><i class="fa fa-pinterest fa-2x"></i></a>
            <a href=""><i class="fa fa-google-plus fa-2x"></i></a>
            <a href=""><i class="fa fa-instagram fa-2x"></i></a>
            <a href=""><i class="fa fa-twitter fa-2x"></i></a>
            <a href=""><i class="fa fa-youtube-play fa-2x"></i></a></center>
          </div>
          <div class="col-sm-3 load">
            <p class="break">Download App</p>
              <a href=""><center><img src="{{asset('shop/image/apps-sprite.png')}}" alt="" style="text-align:center"></center></a>
          </div>
        </div>
        <div class="row" style="border-top:1px solid #11f64e">
            <div class="col-sm-12 load">
            <p class="break" style="text-align:left;">CONTRIBUTOR</p>
            <a href="#">M.Wildan Al-Fitras Salam(SMKN 2 MOJOKERTO)</a><br>
            <a href="#">Maulana Ahmad Reza Abadi(SMKN 2 MOJOKERTO)</a><br>
            <a href="#">Wahyu Prasetyo(DesainWeb.com)</a><br>
            <a href="#">Faisal(UNESA)</a><br>
            <a href="#">Aldio(UNESA)</a><br>
            <a href="#">Reiza Mustika(UNESA)</a><br>
            <a href="#">Reti(UNESA)</a><br>
          </div>
        </div>
      </div>
      <img src="{{asset('shop/image/footer.png')}}" alt="" style="width:100%">
    </div>
    <nav class="nav navbar-default" style="background:#8cb1ff;">
      <div class="container">
        <div class="navbar-header">
           <li class="navbar-brand" style="color:black">
             <i class="fa fa-copyright"></i>
             Copyright 2017
          <li>
        </div>
      </div>
    </nav>
    <script src="{{asset('shop/js/jquery.min.js')}}"></script>
    <script src="{{asset('shop/js/bootstrap.min.js')}}"></script>
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

    @yield('script')
  </body>
</html>
