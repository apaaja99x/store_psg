<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png')}}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin Page</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('assets/css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('assets/css/demo.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">

    

    <!--add on-->

    <link href="{{ asset('css/dataTables.bootstrap.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <script src="//code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> 

    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" style="background-image: url({{ asset('assets/img/sidebar-2.jpg')}});">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Admin Page
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="{{ url('/product')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('add')}}">
                            <i class="material-icons">person</i>
                            <p>Tambahkan Produk</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/sell')}}">
                            <i class="material-icons">content_paste</i>
                            <p>Data Pembeli</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/')}}">
                            <i class="material-icons">library_books</i>
                            <p>Ke Home Page</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="#">
                            <i class="material-icons">unarchive</i>
                            <p>&copyBy Us 2017</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    @yield('content')

<script src="{{ asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/js/material.min.js')}}" type="text/javascript"></script>
<!--  Charts Plugin -->
<!--  Dynamic Elements plugin -->
<script src="{{ asset('assets/js/arrive.min.js')}}"></script>
<!--  PerfectScrollbar Library -->
<script src="{{ asset('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('assets/js/bootstrap-notify.js')}}"></script>
<!--  Google Maps Plugin    -->
<!-- Material Dashboard javascript methods -->
<script src="{{ asset('assets/js/material-dashboard.js?v=1.2.0')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->


    @yield('script')
 



@section('js')
@show

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
</body>
</html>