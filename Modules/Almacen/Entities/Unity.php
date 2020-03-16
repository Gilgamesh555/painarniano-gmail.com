<?php

namespace Modules\Almacen\Entities;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Unity extends Model
{
    protected $fillable = [
        'name', 'status', 'year', 'user_id'
    ];

    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
