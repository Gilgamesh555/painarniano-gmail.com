<?php

namespace Modules\Almacen\Entities;

use Illuminate\Database\Eloquent\Model;
use App\User;
class FundingSource extends Model
{
    protected $table = 'almacen.funding_sources';
    protected $fillable = [
        'code_funding_source', 'description', 'year', 'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
