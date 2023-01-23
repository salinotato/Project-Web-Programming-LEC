<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $primaryKey="CartID";
    protected $guarded = [];

    public function User (){
        return $this->belongsTo(User::class);
    }
    public function Item(){
        return $this->hasMany(Item::class,'CartID','CartID');
    }
}
