<?php

namespace Modules\Almacen\Entities;

use Illuminate\Database\Eloquent\Model;
use Module\Almacen\Entities\BudgetCode;
use Module\Almacen\Entities\Property;
use Module\Almacen\Entities\MaterialOrder;
use App\User;
class OrderDescription extends Model
{
    protected $table = 'almacen.order_descriptions';
    protected $fillable = [
        'requested_amount', 'approved_amount', 'delivered_amount', 'year', 'status', 'observation', 'budget_code_id', 'property_id', 'material_order_id', 'user_id' 
    ];
    public function budget_code(){
        return $this->belongsTo(BudgetCode::class);
    }
    public function property(){
        return $this->belongsTo(Property::class);
    }
    public function material_order(){
        return $this->belongsTo(MaterialOrder::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
