<?php

namespace App\Models;

use App\Notifications\ResetPassword;
use App\Notifications\VerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable,
        HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'birth_date',
        'phone_number',
        'country_id',
        'city_id',
        'district',
        'commercial_register_number',
        'commercial_register_certificate',
        'profile_image',
        'password',
        'role',
        'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'products' => 'array'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'photo_url',
    ];

    public function scopeFacility($query)
    {
        return $query->where('role' , 2);
    }
    public function scopeSupplier($query)
    {
        return $query->where('role' , 1);
    }
    public function Orders()
    {

        return $this->belongsToMany(Order::class , 'facility_order' , 'facility_id' , 'order_id')
            ->using(FacilityOrder::class)
            ->withPivot('products' ,'is_owner', 'status' , 'voted_for')
            ->select('orders.*' , 'facility_order.products as products');
    }
    public function MyOrders()
    {
        return $this->hasMany(Order::class , 'owner_id');
    }
    public function Offers()
    {
        return $this->hasMany(Offer::class , 'supplier_id');
    }


    /**
     * Get the profile photo URL attribute.
     *
     * @return string
     */
    public function getPhotoUrlAttribute()
    {
        return vsprintf('https://www.gravatar.com/avatar/%s.jpg?s=200&d=%s', [
            md5(strtolower($this->email)),
            $this->name ? urlencode("https://ui-avatars.com/api/$this->name") : 'mp',
        ]);
    }
    public function getCommercialRegisterCertificateAttribute($value)
    {
        return $value;
    }
    public function getProfileImageAttribute($value)
    {
        if($value)
            return $value;
        return 'avatars/default-avatar.jpg';
    }

    /**
     * Get the oauth providers.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function oauthProviders()
    {
        return $this->hasMany(OAuthProvider::class);
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }

    /**
     * @return int
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
