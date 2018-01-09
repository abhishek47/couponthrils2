<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $data['stores'] = 
            json_decode(file_get_contents("https://www.coupomated.com/apiv3/6c2a-d0b8-bbaf-b9e6/getStores/Y/json"));

      
          return view('stores.index', $data);
    
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
        $data['coupons'] = 
            json_decode(file_get_contents("https://www.coupomated.com/apiv3/6c2a-d0b8-bbaf-b9e6/getStoreCoupons/" . $id . "/json"));

      
         $data['storeName'] = $data['coupons'][0]->STORE_NAME;

          $pieces = parse_url($data['coupons'][0]->LINK);
              $domain = isset($pieces['host']) ? $pieces['host'] : '';
              if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
                $logo_path = "https://logo.clearbit.com/" . $regs['domain'];
                
              } else {
                 $logo_path = '';
              } 

         $data['storeLogo'] = $logo_path;

        
      
        
         return view('stores.show', $data);
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

    public static function  binarySearch($arr, $key, $low, $high) {

        while($low < $high)
        { 
           $mid = $low + $high/2;
           $store = $arr[$mid];

           if($store->STORE_ID == $key)
           {

              return $store;

           } else if($store->STORE_ID > $key)
           {
              $high = $mid-1;
           } else if($store->STORE_ID < $key)
           {
              $low = $mid+1;
           }
        }
         

     }
      
}
