<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Permission;
use App\Model\System;
class Module extends Model
{
    protected $fillable = [
        'name', 'description', 'system_id', 'slug'
    ];
    public function permissions(){
        return $this->hasMany(Permission::class);
    }
    public function system(){
        return $this->belongsTo(System::class);
    }
}
