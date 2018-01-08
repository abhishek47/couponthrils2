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
        $data['categories'] = json_decode(file_get_contents("https://www.coupomated.com/apiv3/6c2a-d0b8-bbaf-b9e6/getCategories/json"));

        $data['stores'] = json_decode(file_get_contents("https://www.coupomated.com/apiv3/6c2a-d0b8-bbaf-b9e6/getCategories/json"));

        $data['coupons'] = json_decode(file_get_contents("https://www.coupomated.com/apiv3/6c2a-d0b8-bbaf-b9e6/getOnlyCoupons/json"));

        $data['deals'] = json_decode(file_get_contents("https://www.coupomated.com/apiv3/6c2a-d0b8-bbaf-b9e6/getCategories/json"));


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
