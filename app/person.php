<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    protected $guarded=[];
       public function room(){
        return $this->belongsTo('App\Room');
    }
}
