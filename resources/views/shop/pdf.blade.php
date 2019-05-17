<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Laporan Provinsi</title>
        <body>
            <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
                .tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
            </style>
  
            <div style="font-family:Arial; font-size:12px;">
                <center><h2>Data Pembelian Produk<br>
                 Di Online Shop Mazoa</h2></center>  
            </div>
            <hr>
            <br><br>
              Nama : {{ $detail->nama }}<br>
              Email : {{ $detail->email }}<br>
              Alamat Lengkap : {{ $detail->alamat }}
              Kode Pos : {{ $detail->kode_pos }}<br>
              Nomer Handphone : {{ $detail->telepon }}<br>
              Kode Transaksi : {{ $detail->kode_trans }} 
            <br><br>
            <?php 
            $no = 1;
             ?>
            <table class="tg">
              <tr>
                <th class="tg-3wr7">No</th>
                <th class="tg-3wr7">Nama Barang<br></th>
                <th class="tg-3wr7">Jumlah<br></th>
                <th class="tg-3wr7">Harga<br></th>
              </tr>
              @foreach ($print as $data)
              <tr>
                <td class="tg-rv4w" width="20%"><?php echo $no++ ?></td>
                <td class="tg-rv4w" width="40%">{{ $data->membeli }}</td>
                <td class="tg-rv4w" width="30%">{{ $data->jumlah_brg }}</td>
                <td class="tg-rv4w" width="30%">Rp.{{ number_format($data->harga,2) }}</td>
              </tr>
              @endforeach
              <tr>
                  <td colspan="3" class="tg-rv4w" width="30%">Total</td>
                  <td class="tg-rv4w" width="30%">Rp.{{ $detail->total }}</td>
              </tr>
            </table><br><br><br><hr>
            ©copyright 2017 mazoa.com
        </body>
    </head>
</html>