<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qualifications;

class QualController extends Controller
{
    //
    public function allskills(){
      $skills=Qualifications::all();
      return view('admin.skills',compact('skills'));
    }
    public function storeskills(Request $request){
      Qualifications::insert([
        'qual_name'=>$request->qual_name,
        'qual_des'=>$request->qual_des,

      ]);
      return Redirect()->back()->with('success','Skill added successfully');
    }
    public function editskills($id){
      $skills=Qualifications::find($id);
      return view('admin.skills_update',compact('skills'));
    }
    public function update(Request $request ,$id){
      $skills=Qualifications::find($id)->update([
        'qual_name'=>$request->qual_name,
        'qual_des'=>$request->qual_des,

      ]);
      return Redirect()->route('all.skills')->with('success','Skill updated successfully');
    }
    public function delete($id){
      $skills=Qualifications::find($id);
      Qualifications::find($id)->delete();
      return Redirect()->back()->with('success','Skill deleted successfully');
    }

}
