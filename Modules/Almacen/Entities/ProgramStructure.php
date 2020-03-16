<?php

namespace Modules\Almacen\Entities;

use Illuminate\Database\Eloquent\Model;
use Module\Almacen\Entities\ProgramActivity;
use App\User;
class ProgramStructure extends Model
{
    protected $fillable = [
        'code_program_structure', 'description', 'year', 'user_id'
    ];
    public function program_activities(){
        return $this->hasMany(ProgramActivity::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
