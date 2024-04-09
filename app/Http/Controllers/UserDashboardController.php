<?php

namespace App\Http\Controllers;
use App\Models\Report;
use App\Models\Obook;
use App\Models\Assessment;
use App\Models\Task;


use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index():
    \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|
    \Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $reports = Report::all();
        $assessments = Assessment::all();
        $tasks = Task::all();
        $obooks = Obook::all();
        return view('userdash.index', compact('reports', 'assessments', 'tasks', 'obooks'));
    }
}
