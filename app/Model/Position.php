<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Item;
class Position extends Model
{
    protected $fillable = [
        'name'
    ];
    public function items(){
        return $this->hasMany(Item::class);
    }
}
