<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Relations\Pivot;

class FacilityOrder extends Pivot
{

    public function getProductsAttribute($value){
        return json_decode($value);
    }

    protected $guarded = [];

    protected $table = 'facility_order';
    public $incrementing = true;
    public function Supplier()
    {
        return $this->hasOne(User::class , 'voted_for');
    }


}
