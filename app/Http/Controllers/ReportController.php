<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::all();
        return view('report.index' , compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('report.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReportRequest $request)
    {
        $directory = 'reports';

        // Check if the directory exists, if not, create it
        if (!Storage::exists($directory)) {
            Storage::makeDirectory($directory);
        }

        $file = $request->file('report');

        // Store the file with its original name in the reports directory
        $filePath = $file->storeAs($directory, $file->getClientOriginalName());

        Report::create([
            'description' => $request->description,
            'additional' => $request->additional,
            'report' => $filePath,
        ]);

        return redirect()->route('report.index')->with('success', 'Report created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReportRequest $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}
