<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Battery;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;

class BatteryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $battery = Battery::all();

        return response()->json([
            'status' => true,
            'battery' => $battery
        ]);
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
        $battery = Battery::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "battery Created successfully!",
            'battery' => $battery
        ], 200);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Battery  $battery
     * @return \Illuminate\Http\Response
     */
    public function show(Battery $battery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Battery  $battery
     * @return \Illuminate\Http\Response
     */
    public function edit(Battery $battery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Battery  $battery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Battery $battery)
    {
        $battery->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "battery Updated successfully!",
            'battery' => $battery
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Battery  $battery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Battery $battery)
    {
        $battery->delete();

        return response()->json([
            'status' => true,
            'message' => "battery Deleted successfully!",
        ], 200);
    }
}
