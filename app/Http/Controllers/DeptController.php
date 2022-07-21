<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Structure;

class DeptController extends Controller
{
    //
    public function alldept(){
      $depts=Structure::all();
      return view('admin.dept',compact('depts'));
    }
    public function storedept(Request $request){
      Structure::insert([
        'department_name'=>$request->department_name,


      ]);
      return Redirect()->back()->with('success','Department added successfully');
    }
    public function editdept($id){
      $depts=Structure::find($id);
      return view('admin.dept_update',compact('depts'));
    }
    public function deletedept($id){
      $depts=Structure::find($id);
      Structure::find($id)->delete();
      return Redirect()->back()->with('success','Department deleted successfully');
    }
    public function updatedept(Request $request ,$id){
      $depts=Structure::find($id)->update([
      'department_name'=>$request->department_name,

      ]);
      return Redirect()->route('all.dept')->with('success','Department updated successfully');
    }
}
