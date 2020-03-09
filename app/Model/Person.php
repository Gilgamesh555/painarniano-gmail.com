<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Employee;
class Person extends Model
{
    protected $table = 'persons';
    protected $fillable = [
        'ci', 'paternal_name', 'maternal_name', 'name', 'gender', 'birth', 'phone', 'cell_phone', 'address'
    ];
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
