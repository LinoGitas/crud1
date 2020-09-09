<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = ['title', 'note']; 
	
	public function product(){
		return $this->hasMany('App\Product'); 
	}
}
