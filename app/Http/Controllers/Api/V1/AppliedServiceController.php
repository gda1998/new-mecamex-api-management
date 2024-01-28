<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\AppliedService;
use App\Http\Requests\StoreAppliedServiceRequest;
use App\Http\Requests\UpdateAppliedServiceRequest;

class AppliedServiceController extends Controller
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
    public function store(StoreAppliedServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AppliedService $appliedService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppliedServiceRequest $request, AppliedService $appliedService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AppliedService $appliedService)
    {
        //
    }
}
