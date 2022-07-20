<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employment_status;

class EmploymentStatusController extends Controller
{
    //
    public function allstatus(){
      $status=Employment_status::all();
      return view('admin.emp-status',compact('status'));
    }
    public function storestatus(Request $request){
      Employment_status::insert([
        'employment_status'=>$request->employment_status,

      ]);
      return Redirect()->back()->with('success','Employment Status Added successfully');
    }
    public function editstatus($id){
      $status=Employment_status::find($id);
      return view('admin.emp-stat-update',compact('status'));
    }
    public function delete($id){
      $status=Employment_status::find($id);
      Employment_status::find($id)->delete();
      return Redirect()->back()->with('success','Employment Status deleted successfully');
    }
    public function update(Request $request ,$id){
      $status=Employment_status::find($id)->update([
          'employment_status'=>$request->employment_status
      ]);
      return Redirect()->route('all.status')->with('success','Employment Status updated successfully');
    }
}
