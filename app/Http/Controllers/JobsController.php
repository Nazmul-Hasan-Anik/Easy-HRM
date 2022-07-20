<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobsController extends Controller
{
    //
    public function alljobs(){
      $jobs=Job::all();
      return view('admin.jobs',compact('jobs'));
    }
    public function storejobs(Request $request){
      Job::insert([
        'job_title'=>$request->job_title,
        'job_description'=>$request->job_description,
        'file'=>$request->file,
        'note'=>$request->note
      ]);
      return Redirect()->back()->with('success','Job added successfully');
    }
    public function editjobs($id){
      $jobs=Job::find($id);
      return view('admin.updatejobs',compact('jobs'));
    }
    public function update(Request $request ,$id){
      $update=Job::find($id)->update([
        'job_title'=>$request->job_title,
        'job_description'=>$request->job_description,
        'file'=>$request->file,
        'note'=>$request->note
      ]);
      return Redirect()->route('all.users')->with('success','Job updated successfully');
    }
    public function delete($id){
      $jobs=Job::find($id);
      Job::find($id)->delete();
      return Redirect()->back()->with('success','Job deleted successfully');
    }

}
