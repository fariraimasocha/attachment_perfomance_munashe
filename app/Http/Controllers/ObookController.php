<?php

namespace App\Http\Controllers;

use App\Models\Obook;
use App\Http\Requests\StoreObookRequest;
use App\Http\Requests\UpdateObookRequest;

class ObookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('obook.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obook.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreObookRequest $request)
    {
        Obook::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Obook $obook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Obook $obook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateObookRequest $request, Obook $obook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obook $obook)
    {
        //
    }
}
