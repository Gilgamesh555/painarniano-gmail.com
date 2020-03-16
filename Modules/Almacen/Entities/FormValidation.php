<?php

namespace Modules\Almacen\Entities;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Module\Almacen\Entities\MaterialOrder;
class FormValidation extends Model
{
    protected $fillable = [
        'status', 'observation', 'date', 'type', 'user_id', 'material_order_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);    
    }
    public function material_order(){
        return $this->belongsTo(MaterialOrder::class);
    }
}
