<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mycat;

class IndexController extends Controller
{
    //
    public function show(){
        $pages = Mycat::all();
        return view('index')->with('pages',$pages);
           }
}
