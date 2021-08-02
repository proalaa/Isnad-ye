<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class FacilityOrder extends Pivot
{
    protected $table = 'facility_order';
    public function Owner()
    {
        return $this->belongsTo(User::class  , 'owner_id');
    }
    protected $casts = [
        'products' => 'array'
    ];
}
