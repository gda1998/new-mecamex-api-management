<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\CarSeries;
use App\Http\Requests\StoreCarSerieRequest;
use App\Http\Requests\UpdateCarSerieRequest;

class CarSerieController extends Controller
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
    public function store(StoreCarSerieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CarSeries $carSeries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarSerieRequest $request, CarSeries $carSeries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarSeries $carSeries)
    {
        //
    }
}
