<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\CarType;
use App\Http\Requests\StoreCarTypeRequest;
use App\Http\Requests\UpdateCarTypeRequest;

class CarTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CarType $carType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarTypeRequest $request, CarType $carType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarType $carType)
    {
        //
    }
}
