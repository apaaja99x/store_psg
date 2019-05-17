@include('shop.headeer')
  <style type="text/css">
    .card-product{
      box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
      border-radius: 5px;
    }
    .card-product:hover{
      box-shadow:  0 2px 8px 0 rgba(0,0,0,.16), 0 2px 13px 0 rgba(0,0,0,.12);
    }
    .content-display{
      padding: 7px;
      margin-top: 10px;
    }
    .add{
      font-size: 17px;
      color: white;
      padding:9px 13px;
      background-color: #929fba;
      border-radius: 30px;
      float: right;
      border: none;
      margin:-23px 20px 0px auto;
      position: relative;
      box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
    }
    .add:hover{
      box-shadow: 0px 0px 20px 0px rgba(0,0,0,.2), 0px 0px 20px 9px rgba(0,0,0,.19);
    }
    .add:focus{
      color: #929fba;
      background: white;
    }
    .card-image{
      box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
      width:100%;
      height:230px;
      border-radius: 5px 5px  0 0;
    }
    .hr{
      margin-top: 0;
      margin-bottom: 0;
      border-top: 1px solid #929fba;
    }
    .price{
      margin-left: 20px;
      color: #4285F4;
      font-size: 16px;
    }
    .fa-share-alt, .fa-heart{
      color:#f91d1d;
      letter-spacing: 5px;
      float: right;
      margin-right: 5px;
      margin-top: 5px;
      font-size: 18px;
    }
    .container{
      margin: 20px 0;
    }
    @media (max-width:768px) {
      .two{
        width: 50%;
        float:left;
      }
    }
    @media (max-width:430px) {
      .two{
        width:100%;
        float:left;
      }
    }
    .w3-content{max-width:980px;margin:auto}
    .w3-animate-fading{animation:fading 10s infinite}@keyframes fading{0%{opacity:0}50%{opacity:1}100%{opacity:0}}
    
  </style>
    <div class="w3-content" style="max-width:100%">
    <img class="mySlides w3-animate-fading" src="shop/image/slider1.png" style="width:100%;">
    <img class="mySlides w3-animate-fading" src="image/slider2.png" style="width:100%;">
    <img class="mySlides w3-animate-fading" src="image/slider3.png" style="width:100%;">
    <img class="mySlides w3-animate-fading" src="image/slider4.jpg" style="width:100%;">
    <img class="mySlides w3-animate-fading" src="image/slider5.jpg" style="width:100%;">
    <img class="mySlides w3-animate-fading" src="image/slider6.jpg" style="width:100%;">
    <img class="mySlides w3-animate-fading" src="image/slider7.jpg" style="width:100%;">
    <img class="mySlides w3-animate-fading" src="image/slider8.png" style="width:100%;">
    <img class="mySlides w3-animate-fading" src="image/slider9.jpg" style="width:100%;">
  </div>
  <div class="container">
    <div class="row">
      @foreach($datas as $data)
      <div class="col-sm-3 pro two" style="padding: 15px;float: left;">
        <div class="card-product">
        <a href="{{ url('detail/'.$data->id)}}"><img src="{{ asset('image/'.$data->picture) }}" alt="" class="card-image"></a>
        <form action="{{ url('/cart')}}" method="post">
            {!! csrf_field() !!}
               <input type="hidden" name="id" value="{{ $data->id }}">
               <input type="hidden" name="name" value="{{ $data->name }}">
               <input type="hidden" name="price" value="{{ $data->price }}">
          <button type="submit" class="add"><i class="fa fa-shopping-cart"></i></button>
          </form>
          <div class="content-display">
            <a href="{{ url('detail/'.$data->id)}}"><h4 style="text-align:center;color:#4285F4;"><strong>{{str_limit($data->name, 25) }}</strong></h4></a>
            <h5 style="text-align:center">{{ $data->category}}</h5>
            <p style="text-align:justify;color:#a0a0a0;">
              {{ str_limit($data->description, 100) }}
              <hr class="hr">
            </p>
            <span class="price"><strong>Rp.{{ number_format($data->price,2) }}</strong></span>
            <a href="#"><i class="fa fa-heart fa-lg"></i></a>
            <a href="#"><i class="fa fa-share-alt fa-lg"></i></a>
          </div>
        </div>
        </div>
      @endforeach
      {{ $datas->render() }}
  
  </div>
</div>
<script type="text/javascript">
  var myIndex = 0;
  carousel();
  function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
      x[myIndex-1].style.display = "block";
      setTimeout(carousel, 9000);
  }
  </script>


@include('shop.footer')

