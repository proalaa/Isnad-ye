<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $dates = ['shareable_until' , 'open_until' , 'votable_until'];


//    public function Orginal_Order()
//    {
//        return $this->hasOne(Order::class);
//    }
    public function Facilities()
    {
        return $this->belongsToMany(User::class , 'facility_order' , 'order_id' , 'facility_id')->using(FacilityOrder::class)->withPivot('products','is_owner', 'status' , 'voted_for');
    }
    public function Owner()
    {
        return $this->belongsTo(User::class , 'owner_id' );
//        return $this->belongsToMany(User::class , 'facility_order' , 'order_id' , 'owner_id')->withPivot('products','is_owner','owner_id' , 'status' , 'voted_for');
    }
    public function Offers()
    {
        $this->hasMany(Offer::class);
    }


}
