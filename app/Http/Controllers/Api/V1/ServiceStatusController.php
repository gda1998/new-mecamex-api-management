<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\ServiceStatus;
use App\Http\Requests\StoreServiceStatusRequest;
use App\Http\Requests\UpdateServiceStatusRequest;

class ServiceStatusController extends Controller
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
    public function store(StoreServiceStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceStatus $serviceStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceStatusRequest $request, ServiceStatus $serviceStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceStatus $serviceStatus)
    {
        //
    }
}
