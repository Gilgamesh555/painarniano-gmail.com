<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\Permission;
class Role extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'special'
    ];
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }
}
