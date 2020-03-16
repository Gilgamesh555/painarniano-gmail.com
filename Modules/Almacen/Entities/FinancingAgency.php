<?php

namespace Modules\Almacen\Entities;

use Illuminate\Database\Eloquent\Model;
use App\User;
class FinancingAgency extends Model
{
    protected $table = 'almacen.financing_agencies';
    protected $fillable = [
        'code_financing_agency', 'description', 'year', 'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
