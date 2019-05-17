<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login / Register</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    body{
      font-family: myriad pro;
    }
    .lende{
      margin: 15px;
      box-shadow: 0 0 10px 0 rgba(0,0,0,30);
      padding:20px;
    }
    h2 {
      line-height: 0.8em;
      text-align: center;
      color: #85e1d5;}
    a {
        text-decoration: none;
    }
    button:focus,
    input[type="radio"]:focus,
    textarea:focus,
    select:focus {
      outline: none; }
    .tabs {
      display: block;
      display: -webkit-flex;
      display: -moz-flex;
      display: flex;
      -webkit-flex-wrap: wrap;
      -moz-flex-wrap: wrap;
      flex-wrap: wrap;
      margin: 0;
      overflow: hidden; }
      .tabs [class^="tab"] .bel,
      .tabs [class*=" tab"] .bel {
        color: #000;
        cursor: pointer;
        display: block;
        font-weight: 500;
        font-size: 20px;
        padding: 20px 0;
        text-align: center; }
      .tabs [class^="tab"] [type="radio"],
      .tabs [class*=" tab"] [type="radio"] {
        border-bottom: 3px solid #85e1d5;
        cursor: pointer;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        display: block;
        width: 100%;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out; }
        .tabs [class^="tab"] [type="radio"]:hover, .tabs [class^="tab"] [type="radio"]:focus,
        .tabs [class*=" tab"] [type="radio"]:hover,
        .tabs [class*=" tab"] [type="radio"]:focus {
          border-bottom: 3px solid #ff006a; }
        .tabs [class^="tab"] [type="radio"]:checked,
        .tabs [class*=" tab"] [type="radio"]:checked {
          border-bottom: 3px solid #ff006a; }
        .tabs [class^="tab"] [type="radio"]:checked + div,
        .tabs [class*=" tab"] [type="radio"]:checked + div {
          opacity: 1; }
        .tabs [class^="tab"] [type="radio"] + div,
        .tabs [class*=" tab"] [type="radio"] + div {
          display: block;
          opacity: 0;
          padding: 2rem 0;
          width: 90%;
          -webkit-transition: all 0.3s ease-in-out;
          -moz-transition: all 0.3s ease-in-out;
          -o-transition: all 0.3s ease-in-out;
          transition: all 0.3s ease-in-out; }
      .tabs .tab-2 {
        width: 50%; }
        .tabs .tab-2 [type="radio"] + div {
          width: 200%;
          margin-left: 200%; }
        .tabs .tab-2 [type="radio"]:checked + div {
          margin-left: 0; }
        .tabs .tab-2:last-child [type="radio"] + div {
          margin-left: 100%; }
        .tabs .tab-2:last-child [type="radio"]:checked + div {
          margin-left: -100%; }
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
    </style>
  </head>
  <body>
    <nav class="nav navbar-default" style="background:#8cb1ff">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-brand">
            <img src="image/mazoa.png" alt="" style="width:150px; margin:-7px; margin-left:30px;">
          </a>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="lende">
            <div class="tabs">
              <div class="tab-2">
                <label class="bel" for="tab2-1">Register</label>
                <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
                <div>
                  <form>
                  <h2>Register</h2>
                  <div class="group">
                    <input  class="insert" type="text" name="" value="" required="">
                    <label class="lab">Username</label>
                    <span class="bar"></span>
                  </div>
                  <div class="group">
                    <input  class="insert" type="email" name="" value="" required="">
                    <label class="lab">Email</label>
                    <span class="bar"></span>
                  </div>
                  <div class="group">
                    <input  class="insert" type="password" name="" value="" required="">
                    <label class="lab">Password</label>
                    <span class="bar"></span>
                  </div>
                  <div class="group">
                    <input  class="insert" type="password" name="" value="" required="">
                    <label class="lab">Confirm Password</label>
                    <span class="bar"></span>
                  </div>
                  <button type="submit" name="button" class="orange">Register</button>
                </div>
              </form>
              </div>
              <div class="tab-2">
                <label class="bel" for="tab2-2">Login</label>
                <input id="tab2-2" name="tabs-two" type="radio">
                <div>
                  <form action="{{ route('login')}}" method="post">
                  <h2>Login</h2>
                  {{ csrf_field() }}
                  <div class="group">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" class="insert" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    <label class="lab">Email</label>
                     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                     @endif
                    <span class="bar"></span>
                  </div>
                  <div class="group">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" class="insert" type="password" name="password" required="">
                    <label class="lab">Password</label>
                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    <span class="bar"></span>
                  </div>
                  <button type="button" name="button" class="orange">Login</button>
                  <a href="#">Forgot password ?</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
    <img src="image/footer-blue.png" alt="" style="width:100%;bottom:0;position:fixed;left:0;">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
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
