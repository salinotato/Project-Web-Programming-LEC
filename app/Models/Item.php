<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $primaryKey = 'ItemID';
    protected $guarded = [];

    public function Cart (){
        return $this->belongsTo(Cart::class,'CartID','CartID');
    }
    
    public function Product(){
        return $this->hasOne(product::class,'ProductID','ProductID');
    }
}
