<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Yajra\Datatables\Datatables;
use Grimthorr\LaravelToast\Toast;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }
    public function addindex(){
        return view('admin.add');
    }
    public function getMazoaIndex(){
        $datas = product::orderBy('id', 'DESC')->paginate(16);
        return view('shop.mazoa')->with('datas', $datas);
    }


    public function show(Request $request, $id){
        $product = product::find($id);
        return view('shop.detail',compact('product'));
    }

    public function cartshow(){
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
    public function dataproduct()
    {
        $data = product::query()->get();
        return view('admin.home',compact('data'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category' => 'required',
            
        ]);

        $add = new product();
        $add->name = $request['name'];
        $add->description = $request['description'];
        $add->price = $request['price'];
        $add->stock = $request['stock'];
        $add->category = $request['category'];
        $add->size = $request['size'];

        //add image
        $file = $request->file('gambar');
        $filename = $file->getClientOriginalName();
        $request->file('gambar')->move("image/", $filename);

        $add->picture = $filename;
        $add->save();

        //Alert::success('Demo', 'Successfull...');
        //session()->set('success','success');
        Toast()->success('Successfully to add...');
        return redirect()->to('/product');

    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $datas = product::where('name', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('shop.result', compact('datas', 'query'));
    }

    public function cSearch(Request $request)
    {
        $query = $request->get('cat');
        $cat = product::where('category', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('shop.category', compact('cat', 'query'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = product::findOrFail($id);
        return view('admin.edit', compact('product'));
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
        $update = product::where('id', $id)->first();
        $update->name = $request['name'];
        $update->price = $request['price'];
        $update->stock = $request['stock'];
        $update->size = $request['size'];
        $update->category = $request['category'];
        $update->description = $request['description'];

        if($request->file('picture') == "")
        {
            $update->picture = $update->picture;
        } 
        else
        {
            $file       = $request->file('picture');
            $fileName   = $file->getClientOriginalName();
            $request->file('picture')->move("image/", $fileName);
            $update->picture = $fileName;
        }

        $update->update();

        Toast()->success('Edit Success');
        return redirect()->to('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = product::find($id);
        $delete->delete();

        Toast()->warning('Delete Successfull');
        return redirect()->to('/product');
    }
}
