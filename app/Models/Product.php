<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $primaryKey = "ProductID";

    public function Item()
    {
        return $this->belongsTo(Item::class);
    }
}
