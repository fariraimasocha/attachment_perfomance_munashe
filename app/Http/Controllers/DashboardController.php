<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Report;
use App\Models\User;
use App\Models\Obook;
use App\Models\Assessment;
use App\Charts\UsersChart;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(UsersChart $chart) {
        $users = User::all();
        $obooks = Obook::all();
        $reports = Report::all();
        $roles = Role::all();
        $permissions = Permission::all();
        $assessments = Assessment::all();
        return view('dashboard.index',
            compact('users', 'obooks', 'reports', 'assessments', 'roles', 'permissions'),
            ['chart' => $chart->build()] // key => value
        );
    }
}
