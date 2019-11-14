<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myprod;
use App\Mycat;

class LivingController extends Controller
{
    /*public function cool($id){
        //$categories=Mycat::find($id)->myprods;
        $products = Myprod::all();
        return view('living',compact('products'));
    }*/
    public function drd(){
        return view('accessoires');
    }
    public function deco(){
       return view('decorative');
    }
    public function mau(){
        return view('mauris');
    }
    public function fus(){
        return view('fusce');
    }
    public function lib(){
        return view('libero');
    }
    public function lou(){
        return view('lounge');
    }
    public function por(){
        return view('portable');
    }
    public function ele(){
        return view('elephant');
    }
    public function mol(){
        return view('molded');
    }
    public function bath(){
        return view('bathroom');
    }
}
