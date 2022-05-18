<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SystemLogs;

class MainController extends Controller
{
  public static  function system_logs($module,$action,$query)
  {
    $company_id =  session('company_id');
    $userId  =  session('userId');
    $SystemLog = new SystemLogs([
    'company_id' => $company_id,
    'module' => $module,
    'action' =>$action,
    'query' => $query,
    'added_by' => $userId
   ]);
   $SystemLog->save();


  }
}
