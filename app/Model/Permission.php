<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\Role;
use App\Model\Module;
class Permission extends Model
{
    protected $fillable = [
        'name', 'slug', 'description'
    ];
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
    public function module(){
        return $this->belongsTo(Module::class);
    }
}
