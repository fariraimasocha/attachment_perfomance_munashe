<?php

namespace App\Http\Controllers;

use App\Models\Obook;
use App\Http\Requests\StoreObookRequest;
use App\Http\Requests\UpdateObookRequest;
use ProtoneMedia\Splade\Facades\Toast;

class ObookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obooks = Obook::all();
        return view('obook.index', compact('obooks'));
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

        Toast::title('Success!')
            ->message('Log Entry Created Successfully!')
            ->success()
            ->info()
            ->leftTop()
            ->backdrop()
            ->autoDismiss(3);
        return redirect()->route('obook.index');
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
        $obook->delete();
        Toast::title('Success!')
            ->message('Log Entry Deleted Successfully!')
            ->success()
            ->info()
            ->leftTop()
            ->backdrop()
            ->autoDismiss(3);
        return redirect()->route('obook.index');
    }
}
