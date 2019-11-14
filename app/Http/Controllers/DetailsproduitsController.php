<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mycat;
use App\Myprod;
use DB;

class DetailsproduitsController extends Controller
{
    public function cool($slug){
        $products = Myprod::with('mycats')->where('cat_id',$slug)->get();
        return view('detailsProduits',compact(['products'],['pages']));
    }
    /*public function filter($id)
    {
     $pages=Mycat::find($id)->myprods;
     return view('detailsProduits')->with('pages',$pages);
    }*/
}
