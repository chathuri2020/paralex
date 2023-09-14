<?php

namespace App\Http\Controllers;
use App\Models\category;
use Illuminate\Http\Request;

class sendeditproduct extends Controller
{
    public function index(){
        $send = category::all(); // Replace 'Category' with your actual model name
        return view('editproduct',['send'=>$send]);
     
    }
}
