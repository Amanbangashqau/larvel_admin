<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\UserRole;
use App\Technician;
use App\Service;


class MemberController extends Controller
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
      $technicians = Technician::all();
      $services = Service::all();
      return view('member.index',compact('technicians','services'));
    }


    public function add_member()
    {
       $services = Service::all();
        return view('member.create',compact('services'));
    }
    public function save_technician(Request $request)
    {
      $this->validate(request(),[
      //put fields to be validated here
      ]);
      $technician= new Technician();
      $technician->name= $request['name'];
      $technician->email= $request['email'];
      $technician->password= $request['password'];
      $technician->service_id= $request['service_id'];
      $technician->latitude= $request['latitude'];
      $technician->longitude= $request['longitude'];
      $technician->address= $request['address'];
      $technician->zip_code= $request['zip_code'];
      $technician->mobile_number= $request['mobile_number'];
      $technician->credit_card_name= $request['credit_card_name'];

      $technician->bank_mailing_address= $request['bank_mailing_address'];
      $technician->bank_routing_number= $request['bank_routing_number'];
      $technician->account_number= $request['account_number'];
      $technician->account_type= $request['account_type'];

      $technician->credit_card_no= $request['credit_card_no'];
      $technician->credit_card_expire_date= $request['credit_card_expire_date'];
      $technician->charge_per_hour= $request['charge_per_hour'];
      $technician->experience= $request['experience'];
      $technician->member_img= $request['member_img'];
      $technician->save();
      return  redirect('/members');
    }

    public function edit_technician($id)
    {
      $technician = Technician::find($id);
      $services = Service::all();
      return view('member.edit',compact('technician','services'));
    }
    public function update_technician(Request $request)
    {
      $this->validate(request(),[
      //put fields to be validated here
      ]);
      $technician = Technician::find($request['id']);
      $technician->name= $request['name'];
      $technician->email= $request['email'];
      $technician->password= $request['password'];
      $technician->service_id= $request['service_id'];
      $technician->latitude= $request['latitude'];
      $technician->longitude= $request['longitude'];
      $technician->address= $request['address'];
      $technician->zip_code= $request['zip_code'];
      $technician->mobile_number= $request['mobile_number'];
      $technician->credit_card_name= $request['credit_card_name'];

      $technician->bank_mailing_address= $request['bank_mailing_address'];
      $technician->bank_routing_number= $request['bank_routing_number'];
      $technician->account_number= $request['account_number'];
      $technician->account_type= $request['account_type'];

      $technician->credit_card_no= $request['credit_card_no'];
      $technician->credit_card_expire_date= $request['credit_card_expire_date'];
      $technician->charge_per_hour= $request['charge_per_hour'];
      $technician->experience= $request['experience'];
      $technician->member_img= $request['member_img'];
      $technician->save();
      return  redirect('/members');
    }
    public function destroy($id)
    {
       $technician = Technician::find($id);
       $technician->delete();
       return  redirect('/members');
    }
    public function customer_index()
    {
        return view('customer.index');
    }


    public function add_customer()
    {
        return view('customer.create');
    }


    public function reports()
    {
        return view('reports.index');
    }



}
