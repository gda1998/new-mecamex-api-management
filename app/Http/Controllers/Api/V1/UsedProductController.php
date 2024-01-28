<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\UsedProduct;
use App\Http\Requests\StoreUsedProductRequest;
use App\Http\Requests\UpdateUsedProductRequest;

class UsedProductController extends Controller
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
    public function store(StoreUsedProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UsedProduct $usedProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsedProductRequest $request, UsedProduct $usedProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UsedProduct $usedProduct)
    {
        //
    }
}
