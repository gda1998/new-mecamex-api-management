<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\ServiceStatusHistory;
use App\Http\Requests\StoreServiceStatusHistoryRequest;
use App\Http\Requests\UpdateServiceStatusHistoryRequest;

class ServiceStatusHistoryController extends Controller
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
    public function store(StoreServiceStatusHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceStatusHistory $serviceStatusHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceStatusHistoryRequest $request, ServiceStatusHistory $serviceStatusHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceStatusHistory $serviceStatusHistory)
    {
        //
    }
}
