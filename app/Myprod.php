<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Myprod extends Model
{
        public function Mycat(){
        return $this->belongsTo(Mycat::class,'cat_id');
    }
    protected $fillable = [
        'designation_prod', 'image_prod','prix','quantite','cat_id','designation_cat'
       ];
}
