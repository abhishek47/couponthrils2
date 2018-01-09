<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCoupon extends Model
{
    protected $fillable = ['coupon', 'user_id'];


    public function setCouponAttribute($value)
    {
    	$this->attributes['coupon'] = json_encode($value);
    }

    public function getCouponAttribute()
    {
    	return json_decode($this->attributes['coupon']);
    }

}
