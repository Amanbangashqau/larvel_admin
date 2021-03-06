<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\UserRole;
use App\Technician;
use App\Service;
use App\Customer;

class CustomerController extends Controller
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
    { $customers = Customer::all();
      return view('customer.index',compact('customers'));
    }
    public function add_customer()
    {
        return view('customer.create');
    }  
    public function save_customer(Request $request)
    {
      $this->validate(request(),[
      //put fields to be validated here
      ]);
      $customer= new Customer();
      $customer->name= $request['name'];
      $customer->email= $request['email'];
      $customer->password= $request['password'];
      $customer->address= $request['address'];
      $customer->zip_code= $request['zip_code'];
      $customer->mobile_number= $request['mobile_number'];
      $customer->profile_img= $request['profile_img'];
      $customer->save();
      return  redirect('/customer');
    }

    public function edit_customer($id)
    {
      $customer = Customer::find($id);
      return view('customer.edit',compact('customer'));
    }
    public function update_customer(Request $request)
    {
      $this->validate(request(),[
      //put fields to be validated here
      ]);
      $customer = Customer::find($request['id']);
      $customer->name= $request['name'];
      $customer->email= $request['email'];
      $customer->password= $request['password'];
      $customer->address= $request['address'];
      $customer->zip_code= $request['zip_code'];
      $customer->mobile_number= $request['mobile_number'];
      $customer->profile_img= $request['profile_img'];
      $customer->save();
      return  redirect('/customer');
    }
    public function destroy($id)
    {
       $customer = Customer::find($id);
       $customer->delete();
       return  redirect('/customer');
    }
}          
