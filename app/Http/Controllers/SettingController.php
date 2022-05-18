<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\UserRole;
use App\tbl_company;
use App\Status;
use App\JobSource;


class SettingController extends Controller
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
      $companies = tbl_company::all(['id', 'name', 'email','address','phone_number','work_sync_email','note']);
      $status = Status::all(['id', 'parent_status', 'sub_status']);
      $JobSources = JobSource::all(['id', 'name', 'description']);

        return view('setting.index',compact('companies','status','JobSources'));
    }

    public function add_company()
    {
        return view('setting.add_company');
    }


    public function save_company(Request $request)
    {
      $this->validate(request(),[
      //put fields to be validated here
      ]);
      $company= new tbl_company();
      $company->name= $request['name'];
      $company->email= $request['email'];
      $company->address= $request['address'];
      $company->phone_number= $request['phone_number'];
      $company->work_sync_email= $request['work_sync_email'];
      $company->note= $request['note'];
      $company->commission= $request['commission'];
      $company->save();
      return  redirect('/setting');
    }
    public function edit_company($id)
    {
      $company = tbl_company::find($id);
      return view('setting.edit_company',compact('company'));
    }
    public function update_company(Request $request)
    {
      $this->validate(request(),[
      //put fields to be validated here
      ]);
      $company = tbl_company::find($request['id']);
      $company->name= $request['name'];
      $company->email= $request['email'];
      $company->address= $request['address'];
      $company->phone_number= $request['phone_number'];
      $company->work_sync_email= $request['work_sync_email'];
      $company->note= $request['note'];
      $company->commission= $request['commission'];
      $company->save();
      return  redirect('/setting');
    }
    public function delete_company($id)
    {
       $company = tbl_company::find($id);
       $company->delete();
       return  redirect('/setting');
    }

    public function add_sub_status()
    {
        return view('setting.add_sub_status');
    }

    public function save_sub_status(Request $request)
    {
      $this->validate(request(),[
      //put fields to be validated here
      ]);
      $status= new Status();
      $status->parent_status= $request['parent_status'];
      $status->sub_status= $request['sub_status'];
      $status->save();
      return  redirect('/setting');
    }
    public function edit_sub_status($id)
    {
      $status = Status::find($id);
      return view('setting.edit_sub_status',compact('status'));
    }
    public function update_sub_status(Request $request)
    {
      $this->validate(request(),[
      //put fields to be validated here
      ]);
      $status = Status::find($request['id']);
      $status->parent_status= $request['parent_status'];
      $status->sub_status= $request['sub_status'];
      $status->save();
      return  redirect('/setting');
    }
    public function delete_sub_status($id)
    {
       $status = Status::find($id);
       $status->delete();
       return  redirect('/setting');
    }


    public function add_ad_group()
    {
        return view('setting.add_group');
    }

    public function save_job_source(Request $request)
    {
      $this->validate(request(),[
      //put fields to be validated here
      ]);
      $jobsource= new JobSource();
      $jobsource->name= $request['name'];
      $jobsource->description= $request['description'];
      $jobsource->save();
      return  redirect('/setting');
    }

    public function edit_job_source($id)
    {
      $jobsource = JobSource::find($id);
      return view('setting.edit_group',compact('jobsource'));
    }
    public function update_job_source(Request $request)
    {
      $this->validate(request(),[
      //put fields to be validated here
      ]);
      $jobsource = JobSource::find($request['id']);
      $jobsource->name= $request['name'];
      $jobsource->description= $request['description'];
      $jobsource->save();
      return  redirect('/setting');
    }
    public function delete_job_source($id)
    {
       $jobsource = JobSource::find($id);
       $jobsource->delete();
       return  redirect('/setting');
    }




}
