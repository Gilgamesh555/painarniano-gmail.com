<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Model\Designation;
use App\Model\Role;
use App\Model\Permission;
use Modules\Almacen\Entities\BudgetCode;
use Modules\Almacen\Entities\FormValidation;
use Modules\Almacen\Entities\FundingSource;
use Modules\Almacen\Entities\MaterialOrder;
use Modules\Almacen\Entities\OrderDescription;
use Modules\Almacen\Entities\ProgramActivity;
use Modules\Almacen\Entities\ProgramStructure;
use Modules\Almacen\Entities\Property;
use Modules\Almacen\Entities\Unity;
use Modules\Almacen\Entities\Sorter;

use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;
class User extends Authenticatable
{
    use Notifiable;

    use HasRoleAndPermission;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'designation_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }   
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }
    public function budget_codes(){
        return $this->hasMany(BudgetCode::class);
    }
    public function form_validations(){
        return $this->hasMany(FormValidation::class);
    }
    public function funding_sources(){
        return $this->hasMany(FundingSource::class);
    }
    public function material_orders(){
        return $this->hasMany(MaterialOrder::class);
    }
    public function order_descriptions(){
        return $this->hasMay(OrderDescription::class);
    }
    public function program_activities(){
        return $this->hasMany(ProgramActivity::class);
    }
    public function program_structures(){
        return $this->hasMay(ProgramStructure::class);
    }
    public function properties(){
        return $this->hasMany(Property::class);
    }
    public function unities(){
        return $this->hasMany(Unity::class);
    }
    public function sorters(){
        return $this->hasMany(Sorter::class);
    }
    
}
