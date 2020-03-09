<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Employee;
use App\Model\Item;
use App\User;
class Designation extends Model
{
    protected $fillable = [
        'item_id', 'employee_id'
    ];
    public function user() {
        return $this->hasOne(User::class);
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function item(){
        return $this->belongsTo(Item::class);
    }
}
