<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\UserRole;
use App\Technician;
use App\Service;

class ServiceController extends Controller
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
      $services = Service::all();
      return view('service.index',compact('services'));
    }
    public function create_service()
    {
        return view('service.create');
    }  
    public function save_service(Request $request)
    {
      $this->validate(request(),[
      //put fields to be validated here
      ]);
      $service= new Service();
      $service->service_name= $request['service_name'];
      $service->service_detail= $request['service_detail'];
      if($request->service_image !="")
      {
        $service->service_image= Storage::disk('public')->put('images',$request->service_image);
      }

      $service->background_color= $request['background_color'];
      $service->save();
      return  redirect('/service');
    }
    public function edit_service($id)
    {
      $service = Service::find($id);
      return view('service.edit',compact('service'));
    }
    public function update_service(Request $request)
    {
      $this->validate(request(),[
      //put fields to be validated here
      ]);
      $service = Service::find($request['id']);
      $service->service_name= $request['service_name'];
      $service->service_detail= $request['service_detail'];
      if($request->service_image !="")
      {
        $service->service_image= Storage::disk('public')->put('images',$request->service_image);
      }
      $service->background_color= $request['background_color'];
      $service->save();
      return  redirect('/service');
    }
    public function destroy($id)
    {
       $service = Service::find($id);
       $service->delete();
       return  redirect('/service');
    }
}          
