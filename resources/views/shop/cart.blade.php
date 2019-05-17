@include('shop.headeer')




        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif
        <style>
            .hapus{
            position: relative;
            font-family: FontAwesome;
            padding: 5px;
            color:red;
            font-size: 18px;
            background: none;
            border:none;
            left: 0;
          }
          .hapus:focus{
            outline: none;
          }
        </style>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3><i class="fa fa-shopping-cart" ></i> Troli Belanja Saya</h3>
            <p class="qty-cart">{{ Cart::instance('default')->count(false) }} Product</p>
          </div>
        </div>
         @if(sizeof(Cart::content()) > 0)
        <div class="row">
          <div class="col-md-7" style="margin-bottom:10px;">
            <table class="table table-striped" style="margin: 5px;">
              <thead>
                <tr>
                  <th class="data">Gambar</th>
                  <th class="data">Nama</th>
                  <th class="data">Qty</th>
                  <th class="data">Harga</th>
                  <th class="data">Aksi</th>
                </tr>
              </thead>
              <?php $count =1;?>
              @foreach(Cart::content() as $item)
              <tbody>
                <tr>
                  <td class="data"><img src="{{ asset('image/'.$item->model->picture) }}" width="60px" height="50px"></td>
                  <td class="data"><input type="hidden" name="product[]" value="{{ $item->id }}">{{ $item->name }}</td>
                  
                  <td class="data">
                    <!--<input type="number" size="2" value="{{ $item->qty }}" data-id="{{ $item->rowId }}" autocomplete="off" style="text-align:center; max-width:50px;" MIN="1" MAX="30">-->
                    <select class="quantity" data-id="{{ $item->rowId }}">
                                <option {{ $item->qty == 1 ? 'selected' : '' }}>1</option>
                                <option {{ $item->qty == 2 ? 'selected' : '' }}>2</option>
                                <option {{ $item->qty == 3 ? 'selected' : '' }}>3</option>
                                <option {{ $item->qty == 4 ? 'selected' : '' }}>4</option>
                                <option {{ $item->qty == 5 ? 'selected' : '' }}>5</option>
                                <option {{ $item->qty == 6 ? 'selected' : '' }}>6</option>
                                <option {{ $item->qty == 7 ? 'selected' : '' }}>7</option>
                                <option {{ $item->qty == 8 ? 'selected' : '' }}>8</option>
                                <option {{ $item->qty == 9 ? 'selected' : '' }}>9</option>
                                <option {{ $item->qty == 10 ? 'selected' : '' }}>10</option>

                            </select>
                  </td>
                  
                  <td class="data">Rp.{{ number_format($item->subtotal,2) }}</td> 
                  <td class="data">
                    <form action="{{ url('cart', [$item->rowId])}}" method="POST">
                      {{ csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" class="hapus" value="&#xf00d;" onclick="return confirm('Anda yakin?')">
                    </form>
                  </td>
                </tr>
                <?php $count++;?>
              @endforeach
            </table>
          </div>
          <div class="col-md-5" style="margin-top:11px;margin-bottom:10px;">
            <b>Rincian pesanan</b>
            <table style="margin: 10px 0px;">
              <tr style="border-top:2px solid #eeeeee">
                <td class="bayar">Subtotal </td>
                <td class="bayar">:</td>
                <td class="bayar">Rp.{{ Cart::instance('default')->subtotal() }}</td>
              </tr>
              <tr style="border-bottom:2px solid #eeeeee">
                <td class="bayar">Ongkir</td>
                <td class="bayar">:</td>
                <td class="bayar">GRATIS</td>
              </tr>
              <tr style="margin-bottom:10px;">
                <td class="bayar">Total</td>
                <td class="bayar">:</td>
                <td class="bayar">Rp.{{ Cart::instance('default')->subtotal()}}</td>
              </tr>
              <tr>
                <td colspan="3" class="bayar">Gratis untuk min order RP 50.000 dari produk yang disediakan oleh Mazoa (7 kg pertama)</td>
              </tr>
              <tr>
                <td colspan="3"><a href="{{ url('/checkout')}}"><button style="width:100%;" class="orange">lanjutkan ke pembayaran</button></a></td>
              </tr>
            </table>
          </div>
          
        </div>
         @else
        <div class="row">
          <div class="col-md-12">
            <center>
              <img src="shop/image/kosong.png" style="width:35%">
              <h2>Troli belanja anda kosong</h2>
              <button onclick="location.href='{{url('/')}}';" style="width:35%;" class="orange">lanjutkan belanja</button>
            </center>
          </div>
        </div>
        @endif
        <div class="row" style="margin-top:20px;border-top:5px solid #11f64e;">
          <div class="col-md-3" style="padding:5px 10px">
            <p class="break">Kapan saya akan menerima produk pesanan saya?</p>
            <p style="text-align:justify">
              Estimasi waktu pengiriman adalah perkiraan kapan anda dapat
              menerima produk pesanan anda. Termasuk didalamnya proses verifikasi,
              proses persiapan produk dan juga proses pengiriman di jasa kurir.
              Kami akan memberikan informasi yang lebih akurat mengenai estimasi
              pengiriman pesanan anda disaat anda melakukan proses check out
              Informasi lebih lengkap silahkan buka tautan Shipping & Delivery.
            </p>
          </div>
          <div class="col-md-3" style="padding:5px 10px">
            <p class="break">Metode Pembayaran apa yang dapat saya gunakan?</p>
            <p style="text-align:justify">
              Untuk memberikan pengalaman berbelanja yang terbaik, Mazoa menyediakan
              beberapa metode pembayaran yaitu: Cash On Delivery (Bayar Ditempat)
              Kartu kredit Bank Transfer Mandiri Klikpay BCA Klikpay Informasi
              lebih lengkap silahkan buka tautan Payment options.
            </p>
          </div>
          <div class="col-md-3" style="padding:5px 10px">
            <p class="break">Bagaimanakah Kebijakan Mazoa mengenai Pengembalian produk dan Pengembalian dana?</p>
            <p style="text-align:justify">
              Seluruh produk yang dijual di Mazoa mendapat jaminan 100% Buyer
              Protection dan/atau Satisfaction Guaranteed. Sesuai jaminan yang berlaku,
              anda dapat mengembalikan produk dalam jangka waktu 7 atau 14 hari kalender.
              Informasi lebih lengkap silahkan buka tautan Returns & Refunds.
            </p>
          </div>
          <div class="col-md-3" style="padding:5px 10px">
            <p class="break">Bagaimana Mazoa menjamin produk yang saya pesan?</p>
            <p style="text-align:justify">
              Mazoa menjamin produk yang dijual adalah produk baru, asli,
              tidak cacat atau rusak. Jika tidak termasuk pada alasan diatas,
              maka Anda dapat mengembalikan produk dalam 7 hari kalender dan
              kami akan mengembalikan keseluruhan pembayaran Anda. Selain itu,
              produk yang tercakup pada Jaminan Kepuasan dapat klaim pengembalian
              dalam 14 hari kalender. Informasi selengkapnya silahkan klik pada
              tautan berikut Returns & Refunds
            </p>
          </div>
        </div>
      </div>

@section('script')

    <script>
        (function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.quantity').on('change', function() {
                var id = $(this).attr('data-id')
                $.ajax({
                  type: "PATCH",
                  url: '{{ url("/cart") }}' + '/' + id,
                  data: {
                    'quantity': this.value,
                  },
                  success: function(data) {
                    window.location.href = '{{ url('/cart') }}';
                  }
                });

            });

        })();

    </script>
@stop

@include('shop.footer')