<?php

namespace App\Http\Controllers;
use App\Models\category;
use Illuminate\Http\Request;

class sendcategory extends Controller
{
    //
    public function index(){
        $send = category::all(); // Replace 'Category' with your actual model name
        return view('addProduct',['send'=>$send]);
    }
}
