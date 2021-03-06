<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\UserRole;
use App\Technician;
use App\Service;
use App\Job;
use App\categories_types;
use App\Status;
use App\JobSource;
use App\tbl_company;
use App\Country;
class JobController extends Controller
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
    public function index()
    {
        // return view('job.index');
        // $jobs = Job::all();
        // $companies = tbl_company::all();
        // $categories_types = categories_types::all();
        // $countries = Country::all();
        $jobs = DB::table('jobs')
        ->join('tbl_companies', 'jobs.external_company_id', '=', 'tbl_companies.id')
        ->join('categories_types', 'jobs.job_type', '=', 'categories_types.id')
        ->join('jobsources', 'jobs.job_source', '=', 'jobsources.id')
        ->join('country', 'jobs.country', '=', 'country.id')
        ->join('status', 'jobs.status', '=', 'status.id')
        ->select('jobs.id','status.parent_status as status','status.sub_status','jobs.description','jobs.status as status_id','jobsources.name as job_source','country.name as country_name', 'tbl_companies.name as external_company', 'categories_types.cat_type as job_type')
        ->get();

         return view('job.index',compact('jobs'));
    }


    public function create_job()
    {
      $categories_types = categories_types::all();
      $jobsources = JobSource::all(['id', 'name', 'description']);
      $companies = tbl_company::all();
      $countries = Country::all();
      return view('job.create',compact('categories_types','jobsources','companies','countries'));
    }

    public function save_job(Request $request)
    {
      $this->validate(request(),[
      //put fields to be validated here
      ]);
      $job= new Job();
      $job->client_name= $request['client_name'];
      $job->company_name= $request['company_name'];
      $job->phone= $request['phone'];
      $job->email= $request['email'];
      $job->address= $request['address'];
      $job->city= $request['city'];
      $job->state= $request['state'];
      $job->zip_code= $request['zip_code'];
      $job->country= $request['country'];
      $job->metro_area= $request['metro_area'];
      $job->job_type= $request['job_type'];
      $job->job_source= $request['job_source'];
      $job->description= $request['description'];
      $job->external_company_id= $request['external_company_id'];
      $job->note= $request['note'];
      $job->start_date= $request['start_date'];
      $job->start_time= $request['start_time'];
      $job->end_date= $request['end_date'];
      $job->end_time= $request['end_time'];
      $job->save();
      return  redirect('/jobs');
    }
    public function edit_job($id)
    {
      $job = Job::find($id);
      $categories_types = categories_types::all();
      $jobsources = JobSource::all(['id', 'name', 'description']);
      $companies = tbl_company::all();
      $countries = Country::all();
      $status = Status::all(['id', 'parent_status', 'sub_status']);
      return view('job.edit',compact('job','categories_types','jobsources','companies','countries','status'));
    }
    public function update_job(Request $request)
    {
      $this->validate(request(),[
      //put fields to be validated here
      ]);
      $job = Job::find($request['id']);
      $job->status= $request['status'];
      $job->client_name= $request['client_name'];
      $job->company_name= $request['company_name'];
      $job->phone= $request['phone'];
      $job->email= $request['email'];
      $job->address= $request['address'];
      $job->city= $request['city'];
      $job->state= $request['state'];
      $job->zip_code= $request['zip_code'];
      $job->country= $request['country'];
      $job->metro_area= $request['metro_area'];
      $job->job_type= $request['job_type'];
      $job->job_source= $request['job_source'];
      $job->description= $request['description'];
      $job->external_company_id= $request['external_company_id'];
      $job->note= $request['note'];
      $job->start_date= $request['start_date'];
      $job->start_time= $request['start_time'];
      $job->end_date= $request['end_date'];
      $job->end_time= $request['end_time'];
      $job->save();
      return  redirect('/jobs');
    }
    public function destroy($id)
    {
       $job = Job::find($id);
       $job->delete();
       return  redirect('/jobs');
    }
}          
