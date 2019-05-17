@section('js')

<script type="text/javascript">
  
    function readURL(input){
      if (input.files && input.files[0]){
        var reader = new FileReader();

        reader.onload = function (e) {
          $('#showgambar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);

      }
    }

    $("#inputgambar").change(function () {
      readURL(this);
    });

</script>


@stop

@extends('layouts.header')
@section('content')

<div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Add Products </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Add Products</h4>
                                    <p class="category">Add A Products Here</p>
                                </div>
                                <div class="card-content">
                                    <!--<form action="{{ url('store') }}" method="POST" enctype="multipart/form-data">-->
                                    
                                    {{ Form::open(['action' => 'ProductController@store', 'enctype', '=', 'multipart/form-data']) }}


                                        @include('admin.form')
                                        
                                        <button type="submit" class="btn btn-primary pull-right">Add</button>
                                        <div class="clearfix"></div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" width="100%" src="http://placehold.it/100x100" id="showgambar" style="max-width: 100%;max-height:100%;" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="category text-gray">Image</h6>
                                    <h4 class="card-title">Image of Product</h4>
                                    <p class="card-content">
                                        Featured image upload here(required).
                                    </p>
                                    <!--<a href="#pablo" class="btn btn-primary btn-round">Follow</a>-->
                                    <a>
                                    <input style="width:100%;" type="file" id="inputgambar" name="gambar" class="btn btn-primary btn-round" value="Upload/Choose" required=""></a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                    </p>
                </div>
            </footer>
        </div>
    </div>




@endsection