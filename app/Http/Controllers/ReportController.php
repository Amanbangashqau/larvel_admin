<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\UserRole;

class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        return view('reports.index');
    }


    public function technician_report()
    {
        return view('reports.technician_report');
    }
    public function statistics_report()
    {
        return view('reports.statistics_report');
    }

    public function activity_report()
    {
        return view('reports.activity_report');
    }

    public function time_clock_report()
    {
        return view('reports.time_clock_report');
    }
    public function mileage_report()
    {
        return view('reports.mileage_report');
    }
    public function jobtype()
    {
        return view('category.jobtype');
    }

    public function jobs_report()
    {
        return view('reports.jobs_report');
    }
    public function add_cat()
    {
        return view('category.add_cat');
    }
    public function add_job_type()
    {
        return view('category.add_child_cat');
    }
}
