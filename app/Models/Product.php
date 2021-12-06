<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public function products_type(){
    	return $this -> belongTi('App\Model\Product', 'id_type','id');
    }
   }
