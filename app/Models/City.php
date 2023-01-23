<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $primaryKey = "CityID";
    protected $guarded = [];

    public function City(){
        return $this->belongsTo(Product::class);
    }
}
