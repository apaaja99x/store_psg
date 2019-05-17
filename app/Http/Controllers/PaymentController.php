<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckoutRequest;
use PDF;
use \Cart as Cart;
use App\payment;
use App\product;
use DB;
use View;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop.payment');
    }


    public function getAdminIndex()
    {
        $data = DB::table('penjualan')
                     ->groupBy('kode_trans')
                     ->get();
        return view('admin.customer', compact('data'));
    }

    public function success(Request $request)
    {
        $penjualan = payment::where('kode_trans', '=', $request->kode_trans)->get();
        $detail = payment::where('kode_trans', '=', $request->kode_trans)->first();

        return view('shop.success', compact('penjualan', 'detail'));
    }

    public function getPdf(Request $request)
    {
        $print = payment::where('kode_trans', '=', $request->kode_trans)->get();
        $detail = payment::where('kode_trans', '=', $request->kode_trans)->first();

        $pdf = PDF::loadView('shop.pdf', compact('print', 'detail'))->setPaper('a4', 'potrait');
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shop.checkout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request)
    {
        $membeli = $request->get('product');
        $save = count($membeli);

        for($i=0; $i<$save; $i++){
            $pay = new payment();
            $pay->membeli = $membeli[$i];
            $pay->email = $request['email'];
            $pay->nama = $request['name'];
            $pay->alamat = $request['address'];
            $pay->telepon = $request['telepon'];
            $pay->kode_pos = $request['kode'];
            $pay->kode_trans = time();
            $pay->jumlah_brg = $request->qty[$i];
            $pay->harga = $request->harga[$i];
            $pay->total = $request['total'];
            $pay->save();
        }

        for ($u=0; $u<count($request->update); $u++) {
        $product = product::find($request->update[$u]);
        $qty = $request->qty[$u];
        $dqty = $product->stock;
        $sisa = $dqty-$qty;
        DB::table('product')
            ->where('id',$request->update[$u])
            ->update([
                'stock' => $sisa,
 
        ]);
 
        } 
        Cart::destroy();
        $penjualan = payment::where('email', '=', $request->email)->orderBy('id', 'DESC')->first();
        return redirect()->to('success/'.$penjualan->kode_trans);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $get = payment::where('kode_trans','=',$request->kode_trans)->get();
        $user = payment::where('kode_trans','=',$request->kode_trans)->first();
        $total = payment::where('kode_trans','=',$request->kode_trans)->first();
        return view('admin.det_trans', compact('get','user','total'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
