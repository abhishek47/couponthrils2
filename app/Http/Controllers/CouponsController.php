<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if(request()->has('page') && request('page') > 0)
       {
         $page = request('page');
       } else {
        $page = 1;
       }

        $data['coupons'] = 
            json_decode(file_get_contents("https://www.coupomated.com/apiv3/6c2a-d0b8-bbaf-b9e6/getBatchCoupons/50/". $page . "/json"));

        $data['page'] = $page;
        
        $data['totalCoupons'] = json_decode(file_get_contents("https://www.coupomated.com/apiv3/6c2a-d0b8-bbaf-b9e6/getCouponCount"));    
        
        $data['pages'] = $data['totalCoupons'] / 50;
        
        return view('coupons.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Redeem a coupon to user.
     *
     * @return \Illuminate\Http\Response
     */
    public function redeem()
    {
        $coupon = json_decode(request('coupon'));

        preg_match_all('!\d+!', $coupon->DISCOUNT, $matches);
            
        $tokens = 5; 
        
        if(isset($matches[0][0])) { 
        if($matches[0][0] <= 20) { $tokens = 100; }

        if($matches[0][0] < 50 && $matches[0][0] > 20) { $tokens = 150; }

        if($matches[0][0] >= 50) { $tokens = 200; } 
        } 

        if(auth()->user()->tokens >= $tokens) {

            auth()->user()->tokens = auth()->user()->tokens - $tokens;
            auth()->user()->save(); 

           // auth()->user()->coupons()->attach($coupon);

            session()->flash('coupon_redeemed' , $coupon);

        } else {
            //flash("You don't have enough tokens")->error();
        }

        return back();    
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
