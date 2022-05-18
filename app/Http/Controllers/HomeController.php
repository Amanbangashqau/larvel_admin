<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\UserRole;

class HomeController extends Controller
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
        $company_id = Auth::user()->company_id;
        $userId = Auth::id();
        $role_id = Auth::user()->role_id;
        $user_rol = UserRole::find($role_id);
        $u_role = $user_rol['name'];
        session(['company_id' => $company_id]);
        session(['userId' => $userId]);
        session(['u_role' => $u_role]);
        session(['role_id' => $role_id]);

        return view('home');
    }
}
