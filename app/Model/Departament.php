<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Item;
class Departament extends Model
{
    protected $fillable = [
        'name', 'address'
    ];
    public function items(){
        return $this->hasMany(Item::class);
    }
}
