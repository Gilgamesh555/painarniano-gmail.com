<?php

namespace Modules\Almacen\Entities;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Module\Almacen\Entities\Property;
use Module\Almacen\Entities\Unity;
class Sorter extends Model
{
    protected $table = 'almacen.sorters';
    protected $fillable = [
        'code_sorter', 'name', 'description', 'status', 'year', 'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function properties(){
        return $this->hasMany(Property::class);
    }
    public function unities(){
        return $this->hasMany(Unity::class);
    }
}
