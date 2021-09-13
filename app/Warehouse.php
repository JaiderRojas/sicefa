<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Inventory;
use App\Appy;

class Warehouse extends Model
{
	public function apps(){
        return $this->belongsTo('App\App');
    }
     public function inventories(){
        return $this->hasMany('App\Inventory');
    }
    
}
