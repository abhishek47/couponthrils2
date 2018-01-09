<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
    	$data['banners'] = json_decode(file_get_contents("https://www.coupomated.com/apiv3/6c2a-d0b8-bbaf-b9e6/getBatchCoupons/4/1/json"));


    	$data['categories'] = json_decode(file_get_contents("https://www.coupomated.com/apiv3/6c2a-d0b8-bbaf-b9e6/getCategories/json"));

    	$data['stores'] = json_decode(file_get_contents("https://www.coupomated.com/apiv3/6c2a-d0b8-bbaf-b9e6/getStores/Y/json"));

    	$data['couponsData'] = json_decode(file_get_contents("https://www.coupomated.com/apiv3/6c2a-d0b8-bbaf-b9e6/getBatchCoupons/100/1/json"));

    	$data['dealsData'] = json_decode(file_get_contents("https://www.coupomated.com/apiv3/6c2a-d0b8-bbaf-b9e6/getBatchCoupons/20/1/json"));

    	$data['coupons'] = [];

    	foreach ($data['couponsData'] as $key => $coupon) {
    		if($coupon->TYPE == 'coupon')
    		{
    			$data['coupons'][] = $coupon;
    		}
    	}

    	$data['deals'] = [];

    	foreach ($data['dealsData'] as $key => $deal) {
    		if($coupon->TYPE == 'discount')
    		{
    			$data['deals'][] = $deal;
    		}
    	}


       return view('welcome', $data);


    }
}
