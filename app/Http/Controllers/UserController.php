<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use App\tbl_company;
use App\ShowroomGodown;
use App\UserRole;
use Auth;
class UserController extends Controller
{
  public function index(Request $request)
  {
    if(\Auth::check())
    {
    $buid = $request->get('id'); //exit();
    $company_id = $request->get('company_id');
    $company = tbl_company::find($company_id);
    $user_roles = UserRole::all();
    $users = User::where('buid', $buid)->get();
    //print_r($showroomgodown); exit();
    $comp_id = Auth::user()->company_id;
    $role_id = Auth::user()->role_id;
    $user_rol = UserRole::find($role_id);
    $u_role = $user_rol['name'];
    $showroomgodown = showroomgodown::where('company_id', $company_id)->get();

    return view('user.index', compact('company','users','user_roles','u_role','comp_id','showroomgodown'));
    }
    else
    {
      return redirect('/login');
    }

  }

  protected function create(Request $request)
  {

        $userId = Auth::id();
        $user =new User([
            'name' => $request->get('user_name'),
            // 'username' => $request->get('username'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'role_id' => $request->get('role_id') ,
            'login_time_from' =>$request->get('login_time_from'),
            'login_time_to' => $request->get('login_time_to') ,
            'buid' =>$request->get('u_buid_id'),
            'company_id' => $request->get('company_id'),
            'added_by' => $userId ,
        ]);
        $user->save();
        $buid = $request->get('buid');
        $users = User::where('buid', $buid)->get();
      return  response()->json($users);
 }

 public function update(Request $request)
 {
   if(\Auth::check())
   {
     $userId = Auth::id();
     $id = $request->get('id');
     // $request->validate([
     //  'name'=>'required',
     //  'address'=> 'required',
     //  'city' => 'required',
     //  'email'=> 'required|email'
     // ]);
     $user = User::find($id);
     $user->name = $request->get('user_name');
     $user->email = $request->get('email');
     $user->password = Hash::make($request->get('password'));
     $user->role_id = $request->get('role_id');
     $user->login_time_from = $request->get('login_time_from');
     $user->login_time_to = $request->get('login_time_to');
     $user->updated_by = $userId;
     $user->save();

     $buid = $request->get('buid');
     $users = User::where('buid', $buid)->get();
    return  response()->json($users);
   }
   else
   {
     return redirect('/login');
   }
 }

 public function destroy(Request $request)
 {
   if(\Auth::check())
   {
     $id = $request->get('user_id');
     $users= User::find($id);
     $users->delete();
     $buid = $request->get('buid');
     $users = User::where('buid', $buid)->get();
     return  response()->json($users);
   }
   else
   {
     return redirect('/login');
   }
 }
}
