<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mycat extends Model
{
       public function Myprod(){
        return $this->HasMany(Myprod::class);
    }
    protected $fillable = [
        'designation_cat', 'image'
       ];
}
    
    

