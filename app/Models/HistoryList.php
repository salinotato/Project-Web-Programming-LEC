<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryList extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function History(){
        return $this->belongsTo(History::class);
    }

    public function Product(){
        return $this->hasOne(product::class);
    }   
}
