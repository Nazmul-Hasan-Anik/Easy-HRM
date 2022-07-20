<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job_Category;

class JobCategoryController extends Controller
{
    //
    public function allcat(){
      $jobcats=Job_Category::all();
      return view('admin.jobcat',compact('jobcats'));
    }
    public function storecat(Request $request){
      Job_Category::insert([
        'catgories_name'=>$request->catgories_name,

      ]);
      return Redirect()->back()->with('success','Category Added successfully');
    }
    public function editcat($id){
      $jobcats=Job_Category::find($id);
      return view('admin.updatecats',compact('jobcats'));
    }
    public function update(Request $request ,$id){
      $update=Job_Category::find($id)->update([
          'catgories_name'=>$request->catgories_name
      ]);
      return Redirect()->route('all.jobscat')->with('success','Category updated successfully');
    }
    public function delete($id){
      $users=Job_Category::find($id);
      Job_Category::find($id)->delete();
      return Redirect()->back()->with('success','Category deleted successfully');
    }
}
