<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivingController extends Controller
{
    public function cool(){
        return view('living');
    }
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
