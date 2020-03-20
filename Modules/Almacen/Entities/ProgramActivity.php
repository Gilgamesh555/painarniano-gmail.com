<?php

namespace Modules\Almacen\Entities;

use Illuminate\Database\Eloquent\Model;
use Module\Almacen\Entities\MaterialOrder;
use Module\Almacen\Entities\ProgramStructure;
use App\User;
class ProgramActivity extends Model
{
    protected $table = 'almacen.program_activities';
    protected $fillable = [
        'code_program_activity', 'description', 'year', 'user_id', 'program_structure_id'
    ];
    public function material_orders(){
        return $this->hasMany(MaterialOrder::class);
    }
    public function program_structure(){
        return $this->belongsTo(ProgramStructure::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
