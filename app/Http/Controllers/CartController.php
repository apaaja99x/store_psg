<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use \Cart as Cart;
use Grimthorr\LaravelToast\Toast;
use Validator;
use Illuminate\Support\Facades\Input;
use App\product;
use DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop.cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if (!$duplicates->isEmpty()) {
            Toast()->warning('Sudah ada di keranjang anda!', $request->name);
            return redirect('cart');
        }

        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\product');
        Toast()->success('Berhasil ditambahkan ke keranjang!', $request->name);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response

    /**

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // Validation on max quantity

        Cart::update($id, $request->quantity);
        Toast()->success('Jumlah produk berhasil di update!');

        return response()->json(['success' => true]);
    }



    //function checkout

    /*public function checkout(Request $request)
    {
    for ($i=0; $i<count($request->product); $i++) {
        $product = product::find($request->product[$i]);
        $qty = $request->qty[$i];
        $dqty = $product->stock;
        $sisa = $dqty-$qty;
        DB::table('product')
            ->where('id',$request->product[$i])
            ->update([
                'stock' => $sisa,
 
        ]);

    } 
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        Toast()->warning('Berhasil dihapus dari keranjang');
        return redirect('/cart');
    }
}
