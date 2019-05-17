<!DOCTYPE html>
<html>
<title>Mazoa Shop</title>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shorcut icon" href="{{asset('image/mazoa-big.png')}}">
    <link rel="stylesheet" href="{{asset('shop/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('shop/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('shop/inside.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css"> 
        <!-- Store CSRF token for AJAX calls -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style type="text/css">
      .check{
      width: 250px;
      bottom: 10px;
      position: absolute;
      left: 10px;
      right: 10px;
      background: rgba(0,0,0,0);
      border: 1px solid black;
      color: black;
      
    }
    .check:hover{
      color: white;
      background: #0088ff;
      border: 1px solid #0088ff;
    }
    .fa-remove{color:red;font-size: 20px;}
      .qty-cart{
        font-size: 20px;
        color: #11f64e;
      }
      .bayar{
        padding:8px;
      }
      .qua{
        padding: 2px;
        text-align: center;
      }
    .kat{
      background: none;
      border:none;
      padding:3px 3px 3px 20px;
    }
    button:focus{
      outline: none;
    } class="kat"
    </style>
  </head>
  <body style="font-family: Lato;">
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <img src="{{asset('shop/image/mazoa.png')}}" class="sidenav-image">
       @if(sizeof(Cart::content())>0)
      <div style="margin: 10px;">
        <div style="margin:20px 0; font-size:20px;">
          <i class="fa fa-shopping-cart"><span style="color:#8cb1ff"> {{ Cart::instance('default')->count(false) }}</span></i>
          <span style="color:#8cb1ff;float:right;">Rp.{{ Cart::instance('default')->subtotal() }}</span>
          <span style="float:right";>Total : </span>
        </div>
        @foreach(Cart::content() as $item)
        <div style="width: 100%;margin:10px 0;">
          <img src="{{asset('image/'.$item->model->picture)}}" style="max-width:50px;height:50px;float:left;margin-right:20px;">
          <span style="text-transform: uppercase;">{{ $item->name }}</span><br>
          <span style="color:#8cb1ff;font-size:15px">Rp.{{$item->price}}</span>
          <span style="font-size:15px">Jumlah : {{$item->qty}}</span>
        </div>
        @endforeach
        @else
        <center>
          <img src="shop/image/kosong.png" style="width:75%">
          <h4>Troli belanja anda kosong</h4>
          <button onclick="location.href='{{url('/')}}';" style="width:75%;" class="orange">lanjutkan belanja</button>
        </center>
        @endif
        <div style="margin:10px;">
          <button type="button" name="button" class="check"><a href="{{ url('cart')}}">CHECKOUT</a></button>
        </div>
        
    </div>
    </div>
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closebar()">&times;</a>
      <a href="#">Download App</a>
      <a href="#">Mejadi Seller</a>
      <a href="#">Costumer Care</a>
      <a href="{{url('/login')}}">Login</a>
      <a href="{{url('/login')}}">Register</a>
      <ul class="nav">
        <li><a href="#" class="dropdown" data-toggle="dropdown" style="padding:8px 8px 8px 32px;">Category</a>
          <ul class="dropdown-menu" style="margin-bottom:5px;">
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Fashion Men"><button type="submit" class="kat">Men Fashion</button></li>
            </form>
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Girl Fashion"><button type="submit" class="kat">Girl Fashion</button></li>
            </form>
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Kids Fashion"><button type="submit" class="kat">Kids Fashion</button></li>
            </form>
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Busana Muslim"><button type="submit" class="kat">Busana Muslim</button></li>
            </form>
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Bayi"><button type="submit" class="kat">Bayi</button></li>
            </form>
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Kaos"><button type="submit" class="kat">Kaos</button></li>
            </form>
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Sweater"><button type="submit" class="kat">Sweater</button></li>
            </form>
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Jaket"><button type="submit" class="kat">Jaket</button></li>
            </form>
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Sepatu/Sandal"><button type="submit" class="kat">Sepatu/Sandal</button></li>
            </form>
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Pakaian Dalam"><button type="submit" class="kat">Pakaian Dalam</button></li>
            </form>
          </ul>
        </li>
      </ul>
    </div>


  <div id="main" class="header-dekstop">
    <div class="sub-header">
      <a href="#">Download App</a>
      <a href="#">Menjadi Seller</a>
      <a href="#">Costumer Care</a>
      <a href="{{url('/login')}}">Login / Register</a>
    </div>
    <div class="header">
        <a href="{{ url('/')}}"><span><img  src="{{asset('shop/image/mazoa.png')}}" style="width:150px;float:left;margin-top:8px;"></span></a>
      </a>
        <form action="{{ url('query') }}" method="GET" class="form-dekstop cf">
          <input type="text" name="q" placeholder="Search here..." required>
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      <a href="#" class="klik"><i class="fa fa-shopping-cart" style="cursor:pointer" onclick="openNav()"> {{ Cart::instance('default')->count(false) }}</i></a>
      <ul class="nav navbar-right">
        <li><a href="#" class="dropdown klik" data-toggle="dropdown" style="padding:17px;">Category</a>
          <ul class="dropdown-menu">
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Fashion Men"><button type="submit" class="kat">Men Fashion</button></li>
            </form>
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Girl Fashion"><button type="submit" class="kat">Girl Fashion</button></li>
            </form>
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Kids Fashion"><button type="submit" class="kat">Kids Fashion</button></li>
            </form>
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Busana Muslim"><button type="submit" class="kat">Busana Muslim</button></li>
            </form>
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Bayi"><button type="submit" class="kat">Bayi</button></li>
            </form>
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Kaos"><button type="submit" class="kat">Kaos</button></li>
            </form>
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Sweater"><button type="submit" class="kat">Sweater</button></li>
            </form>
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Jaket"><button type="submit" class="kat">Jaket</button></li>
            </form>
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Sepatu/Sandal"><button type="submit" class="kat">Sepatu/Sandal</button></li>
            </form>
            <form action="{{ url('catSearch')}}" method="get">
            <li><input type="hidden" name="cat" value="Pakaian Dalam"><button type="submit" class="kat">Pakaian Dalam</button></li>
            </form>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="header-mobile">
    <div class="container-fluid"style="background-color:#85e1d5">
      <center>
      <img src="{{asset('shop/image/mazoa.png')}}" alt="" class="heres" style="width:150px;">
      <i class="fa fa-shopping-cart fa-lg ico" style="cursor:pointer;position:relative;" onclick="openNav()">
        <span class="cart-no">{{ Cart::instance('default')->count(false)}}</span>
      </i>
      <i class="fa fa-bars fa-lg ico" style="position:relative;cursor:pointer" onclick="openbar()"></i>
      </center>
    </div>
    <form action="{{ url('query') }}" method="GET" class="form-mobile cf">
      <input type="text" name="q" placeholder="Search here..." required>
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>

  @yield('header')
    <script src="{{asset('shop/js/jquery.min.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript">
      function openNav() {
        document.getElementById("mySidenav").style.width = "270px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
      function openbar() {
        document.getElementById("mySidebar").style.width = "250px";
      }

      function closebar() {
        document.getElementById("mySidebar").style.width = "0";
      }
    </script>
    @if(Session::has('toasts'))
    <script type="text/javascript">
        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right"
        };
        @foreach(Session::get('toasts') as $toast)
            toastr["{{ $toast['level'] }}"]("{{ $toast['message'] }}","{{ $toast['title'] }}");
        @endforeach
    </script>
@endif


