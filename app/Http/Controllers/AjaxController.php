<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_company;
use App\User;
use App\ShowroomGodown;
use App\ChartOfAccounts;
use App\Models;
use Auth;
use App\Vendor;
use App\Products;
use App\Brands;
use App\UserRole;
use App\categories_types;
use App\Category;
use App\City;



class AjaxController extends Controller
{
  public function index(Request $request)
  {
    $id = $request->get('id');
    $company = tbl_company::find($id);
    $msg = "This is a simple message.";
    return response()->json(array('company'=> $company), 200);
  }


  public function check_exist(Request $request)
  {
    $model_id = $request->get('value');
    $Models_total = Models::where('model_id', $model_id)->get();
    $msg = "";
    if(count($Models_total)>0)
    {
      $msg = "Model ID Already Exist.";
    }
    return response()->json(array('msg'=> $msg), 200);
  }

  public function get_model(Request $request)
  {
    $id = $request->get('id');
    $Models = Models::find($id);
    return response()->json(array('models'=> $Models), 200);
  }


  public function get_product(Request $request)
  {
    $id = $request->get('id');
    $Products = Products::find($id);
    return response()->json(array('products'=> $Products), 200);
  }

  public function get_brand(Request $request)
  {
    $id = $request->get('id');
    $Brands = Brands::find($id);
    return response()->json(array('Brands'=> $Brands), 200);
  }

  public function get_vendor(Request $request)
  {
    $id = $request->get('id');
    $Vendor = Vendor::find($id);
    return response()->json(array('vendor'=> $Vendor), 200);
  }

  public function get_user(Request $request)
  {
    $id = $request->get('id');
    $user = User::find($id);
   return response()->json(array('user'=> $user), 200);
  }


  public function getshowroom_godown(Request $request)
  {
    $id = $request->get('id');
    $showroomgodown = showroomgodown::find($id);
   return response()->json(array('showroomgodown'=> $showroomgodown), 200);
  }

  public function generate_account_no(Request $request)
  {
    $company_id = $request->get('company_id');
    $parentAccounts = ChartOfAccounts::where('company_id', $company_id)->get();
    return response()->json(array('parentAccounts'=> $parentAccounts), 200);
  }
  public function create_post_vendor(Request $request)
  {
    $company_id = session('company_id');
    $userId =session('userId');
    $ChartOfAccounts = ChartOfAccounts::where('company_id', $company_id)->get();
    $account_no= $company_id.''.count($ChartOfAccounts)+1;
    $ChartOfAccount_Vendors = ChartOfAccounts::where('company_id', $company_id)->where('ac_title', 'Vendors')->get();
    $parent_account = $ChartOfAccount_Vendors[0]->ac_code;
    $ChartOfAccount = new ChartOfAccounts([
    'ac_code' => $account_no,
    'ac_title' => $request->get('account_title'),
    'parent_ac_code' => $parent_account,
    'company_id'=> $company_id,
    'added_by' => $userId
    ]);
    $ChartOfAccount->save();

    ///////////////////////////////////////////////////////////////////////////////////
    $Vendor_deatials = Vendor::where('company_id', $company_id)->get();
    $vendorid= $company_id.''.count($Vendor_deatials)+1;
    ///////////////////////////////////////////////////////////////////////////////////
    $Vendor = new Vendor([
     'company_id' => $company_id,
     'vendorid' => $vendorid,
     'vendor_name' => $request->get('vendor_name'),
     'ac_code' => $account_no,
     'address' => $request->get('address'),
     'city' => $request->get('city'),
     'contact_person' => $request->get('contact_person'),
     'contact_number' => $request->get('contact_number'),
     'added_by' => $userId
    ]);
    $Vendor->save();
    return  response()->json($Vendor);
 }
}
