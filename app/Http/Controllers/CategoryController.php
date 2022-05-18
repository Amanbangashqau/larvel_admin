<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\UserRole;
use App\tbl_company;
use App\Status;
use App\JobSource;
use App\Category;
use App\categories_types;



class CategoryController extends Controller
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
     public function category()
     {
       $categories = Category::all(['id', 'cat_name']);
       return view('category.index',compact('categories'));
     }
     public function save_category(Request $request)
     {
       $userId = Auth::id();
       $Category = new Category([
       'cat_name' => $request->get('cat_name'),
       'added_by' => $userId
      ]);
      $Category->save();
      return  redirect('/category');
     }


     public function jobtype($cat_id)
     {
       $categories_types = categories_types::where('cat_id',$cat_id)->get();
       return view('category.jobtype',compact('cat_id','categories_types'));
     }
     public function add_cat()
     {
         return view('category.add_cat');
     }
     public function edit_category($id)
     {
       $category = Category::find($id);
       return view('category.edit_cat',compact('category'));
     }
     public function update_category(Request $request)
     {
       $this->validate(request(),[
       //put fields to be validated here
       ]);
       $category = Category::find($request['id']);
       $category->cat_name= $request['cat_name'];
       $category->save();
       return  redirect('/category');
     }
     public function destroy($id)
     {
        $category = Category::find($id);
        $category->delete();
        return  redirect('/category');
     }

     public function add_job_type($cat_id)
     {
         return view('category.add_child_cat',compact('cat_id'));
     }
     public function save_job_type(Request $request)
     {
       $userId = Auth::id();
       $categories_types = new categories_types([
       'cat_id' => $request->get('cat_id'),
       'cat_type' => $request->get('cat_type'),
       'added_by' => $userId
      ]);
      $categories_types->save();
        return  redirect('/jobtype/'.$request->get('cat_id'));
     }

     public function edit_job_type($id)
     {
       $category_type = categories_types::find($id);
       return view('category.edit_child_cat',compact('category_type'));
     }
     public function update_job_type(Request $request)
     {
       $this->validate(request(),[
       //put fields to be validated here
       ]);
       $categories_type = categories_types::find($request['id']);
       $categories_type->cat_type= $request['cat_type'];
       $categories_type->save();
       return  redirect('/category');
     }
     public function delete_job_type($id)
     {
        $categories_type = categories_types::find($id);
        $categories_type->delete();
        return  redirect('/category');
     }





}
