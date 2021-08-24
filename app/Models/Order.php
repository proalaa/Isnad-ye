<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use function Symfony\Component\Translation\t;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $dates = ['posted_at' , 'share_end_at','offering_end_at' , 'vote_end_at'];

    protected $casts=[
        'products' => 'array'
    ];
    protected $appends=[
        'share_end_at','offering_end_at' , 'vote_end_at'
    ];

    public function getShareEndAtAttribute(){
//        return  $this->posted_at;
        if($this->is_shareable)
//            return Carbon::parse($this->posted_at)->addDays($this->share_duration)->format('Y-m-d H:i:s');
            return "2021-08-21 08:11:40";
    }
    public function getOfferingEndAtAttribute(){
        return  Carbon::parse($this->posted_at)->addDays($this->share_duration ?? 0)->addDays($this->open_duration)->format('Y-m-d H:i:s');
    }
    public function getVoteEndAtAttribute(){
        if($this->is_shareable)
            return  Carbon::parse($this->posted_at)->addDays($this->share_duration ?? 0)
                ->addDays($this->open_duration)->addDays($this->vote_duration ?? 0)->format('Y-m-d H:i:s');
    }

//    public function Orginal_Order()
//    {
//        return $this->hasOne(Order::class);
//    }

    public function FacilityOrder()
    {
        return $this->hasMany(FacilityOrder::class, 'order_id', 'id');
    }
    public function Facilities()
    {

        return $this->belongsToMany(User::class , 'facility_order' , 'order_id' , 'facility_id')
            ->using(FacilityOrder::class)
            ->withPivot('products','is_owner', 'status' , 'voted_for')
            ->select('users.*' , 'facility_order.products as products');
    }
    public function Owner()
    {
        return $this->belongsTo(User::class , 'owner_id' );
//        return $this->belongsToMany(User::class , 'facility_order' , 'order_id' , 'owner_id')->withPivot('products','is_owner','owner_id' , 'status' , 'voted_for');
    }
    public function Offers()
    {
        return$this->hasMany(Offer::class , 'order_id' , 'id');
    }


}
