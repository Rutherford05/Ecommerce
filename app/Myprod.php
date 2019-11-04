<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Myprod extends Model
{
        public function Mycat(){
        return $this->hasMany('App\Mycat');
    }
    protected $fillable = [
        'designation_prod', 'image_prod','prix','quantite'
       ];
}
