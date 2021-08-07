<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{
    use HasFactory , SoftDeletes;

    protected $casts=[
        'products' => 'array'
    ];

    public function Supplier()
    {
        return $this->belongsTo(User::class);
    }
    public function Order()
    {
        return $this->belongsTo(Order::class);
    }
    public function Facilities()
    {
        return $this->belongsToMany(User::class , 'offer_facility' , 'offer_id' , 'facility_id')->as('votes')->withTimestamps();
    }
    public function Voters()
    {
        return $this->hasMany(FacilityOrder::class , 'voted_for' , 'id');
    }

}
