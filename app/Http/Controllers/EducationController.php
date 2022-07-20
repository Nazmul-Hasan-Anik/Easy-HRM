<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    //
    public function alledu(){
      $educations=Education::all();
      return view('admin.education',compact('educations'));
    }
    public function storeedu(Request $request){
      Education::insert([
        'level'=>$request->level,

      ]);
      return Redirect()->back()->with('success','Level added successfully');
    }
    public function editedu($id){
      $educations=Education::find($id);
      return view('admin.education_update',compact('educations'));
    }
    public function delete($id){
      $educations=Education::find($id);
      Education::find($id)->delete();
      return Redirect()->back()->with('success','Level deleted successfully');
    }
    public function update(Request $request ,$id){
      $educations=Education::find($id)->update([
      'level'=>$request->level,
      ]);
      return Redirect()->route('all.education')->with('success','Job updated successfully');
    }

}
