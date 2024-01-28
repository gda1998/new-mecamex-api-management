<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\ServiceDetail;
use App\Http\Requests\StoreServiceDetailRequest;
use App\Http\Requests\UpdateServiceDetailRequest;

class ServiceDetailController extends Controller
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
    public function store(StoreServiceDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceDetail $serviceDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceDetailRequest $request, ServiceDetail $serviceDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceDetail $serviceDetail)
    {
        //
    }
}
