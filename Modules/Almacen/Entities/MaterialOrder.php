<?php

namespace Modules\Almacen\Entities;

use Illuminate\Database\Eloquent\Model;
use Module\Almacen\Entities\FundingSource;
use Module\Almacen\Entities\FinancingAgency;
use Module\Almacen\Entities\ProgramActivity;
use Module\Almacen\Entities\FormValidation;
use Module\Almacen\Entities\OrderDescription;

use App\User;
class MaterialOrder extends Model
{
    protected $fillable = [
        'order_number', 'reason', 'funding_source_id', 'financing_agency_id', 'program_activity_id', 'user_id', 'year'
    ];
    public function funding_source(){
        return $this->belongsTo(FundingSource::class);
    }
    public function financing_agency(){
        return $this->belongsTo(FinancingAgency::class);
    }
    public function program_activity(){
        return $this->belongsTo(ProgramActivity::class);
    }
    public function form_validations(){
        return $this->hasMany(FormValidation::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function order_descriptions(){
        return $this->hasMany(OrderDescription::class);
    }

}
