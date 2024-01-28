<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\AcquisitionDetail;
use App\Http\Requests\StoreAcquisitionDetailRequest;
use App\Http\Requests\UpdateAcquisitionDetailRequest;

class AcquisitionDetailController extends Controller
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
    public function store(StoreAcquisitionDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AcquisitionDetail $acquisitionDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAcquisitionDetailRequest $request, AcquisitionDetail $acquisitionDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AcquisitionDetail $acquisitionDetail)
    {
        //
    }
}
