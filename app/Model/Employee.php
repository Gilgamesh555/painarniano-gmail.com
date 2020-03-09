<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Person;
class Employee extends Model
{
    protected $fillable = [
        'type', 'dedication', 'person_id'
    ];
    public function designations()
    {
        return $this->hasMany('App\Model\Designation');
    }
    
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
