<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use App\Http\Requests\StoreLogbookRequest;
use App\Http\Requests\UpdateLogbookRequest;
use ProtoneMedia\Splade\Facades\Toast;

class LogbookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logbooks = Logbook::all();
        return view('logbook.index', compact('logbooks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('logbook.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLogbookRequest $request)
    {
        Logbook::create($request->validated());

        Toast::title('Success!')
            ->message('Log Created Successfully!')
            ->success()
            ->info()
            ->leftTop()
            ->backdrop()
            ->autoDismiss(3);
        return redirect()->route('logbooks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Logbook $logbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logbook $logbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLogbookRequest $request, Logbook $logbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logbook $logbook)
    {
        //
    }
}
