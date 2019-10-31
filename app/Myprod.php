<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Myprod extends Model
{
        public function Mycat(){
        return $this->belongsTo(Mycat::class);
    }
    protected $fillable = [
        'designation_prod', 'image_prod','prix','quantite'
       ];
}
