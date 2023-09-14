<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = product::all();
        // dd($students);
        return view('manageproduct', ['products' => $products]);
        // 'manageproduct' mean return this category variable to  the managecategory.blade.php file
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $productnew = new product();
        $productnew->product_name = $request->productname;
        $productnew->price = $request->price;
        $productnew->category = $request->category;
        $productnew->save();
        return redirect('addnewproduct')->with('status', 'saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $producttfind = product::findOrFail($id);
        return view('editproduct',['product'=>$producttfind]);
        
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
        $productfind = product::findOrFail($id);
        $productfind -> firstname = $request -> firstname;
        $productfind -> lastname = $request -> lastname;
        $productfind -> address = $request -> address;
        $productfind -> tp = $request -> tp;
        $productfind -> save();
        return redirect('student/'.$productfind->id.'/edit')->with('status','updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productfind = product::findOrFail($id);
        $productfind->delete();
        return redirect('/product');
    }
}
