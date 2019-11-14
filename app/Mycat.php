<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mycat extends Model
{
    protected $primaryKey = 'id';
       public function myprods(){
        return $this->hasMany(Myprod::class,'id');
    }
    protected $fillable = [
        'designation_cat', 'image'
       ];
}
    
    

