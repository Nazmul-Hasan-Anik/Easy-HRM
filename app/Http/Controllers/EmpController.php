<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Structure;
use App\Models\Job_Category;
use App\Models\Emp;

class EmpController extends Controller
{
    //
    public function allemp()
  {
      $title="employees";
      $designations = Job_Category::get();
      $departments = Structure::get();
      $employees = Emp::with('department','designation')->get();
      return view('admin.emp',compact('title','designations','departments','employees'));
  }

    public function storeemp(Request $request)
  {
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'phone'=>'nullable|max:15',

            'avatar'=>'file|image|mimes:jpg,jpeg,png,gif',
            'department'=>'required',
            'designation'=>'required',
        ]);
        $imageName = Null;
        if ($request->hasFile('avatar')){
            $imageName = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path('storage/employees'), $imageName);
        }

        Employee::create([

            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'phone'=>$request->phone,

            'dept_name'=>$request->dept,
            'job_Category_name'=>$request->job__category,
            'avatar'=>$imageName,
        ]);
        return back()->with('success',"Employee has been added");
    }


}
