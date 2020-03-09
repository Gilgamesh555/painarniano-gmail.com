<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Module;
class System extends Model
{
    protected $fillable = [
        'name', 'description', 'slug'
    ];
    public function modules(){
        return $this->hasMany(Module::class);
    }
}
