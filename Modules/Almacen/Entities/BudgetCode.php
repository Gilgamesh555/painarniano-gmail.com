<?php

namespace Modules\Almacen\Entities;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Module\Almacen\Entities\OrderDescription;
class BudgetCode extends Model
{
    protected $table = 'almacen.budget_codes';
    protected $fillable = [
        'code_budget', 'name', 'description', 'user_id' 
    ];
    public function user(){
        return  $this->belongsTo(User::class);
    }
    public function order_descriptions(){
        return $this->hasMany(OrderDescription::class);
    }
}
