<?php

namespace Modules\Almacen\Entities;

use Illuminate\Database\Eloquent\Model;
use Module\Almacen\Entities\Sorter;
use Module\Almacen\Entities\Unity;
use App\User;
class Property extends Model
{
    protected $fillable = [
        'code_property', 'name', 'year', 'status', 'user_id', 'sorter_id', 'unity_id'
    ];
    public function sorter(){
        return $this->belongsTo(Sorter::class);
    }
    public function unity(){
        return $this->belongsTo(Unity::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
