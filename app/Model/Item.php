<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Departament;
use App\Model\Designation;
use App\Model\Position;
class Item extends Model
{
    protected $fillable = [
        'nro_item', 'departament_id', 'position_id'
    ];
    public function departament(){
        return $this->belongsTo(Departament::class);
    }
    public function position(){
        return $this->belongsTo(Position::class);
    }
    public function designations(){
        return $this->hasMany(Designation::class);
    }
}
