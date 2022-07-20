<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinfo;

class UserinfoController extends Controller
{
    //
    public function allusers(){
      $users=Userinfo::all();
      return view('admin.users',compact('users'));
    }

    public function storeusers(Request $request){
      Userinfo::insert([
        'user_name'=>$request->user_name,
        'user_role'=>$request->user_role,
        'employee_name'=>$request->employee_name,
        'status'=>$request->status
      ]);
      return Redirect()->back()->with('success','User Added successfully');
    }

    public function editusers($id){
      $users=Userinfo::find($id);
      return view('admin.updateusers',compact('users'));
    }
    public function update(Request $request ,$id){
      $update=Userinfo::find($id)->update([
        'user_name'=>$request->user_name,
        'user_role'=>$request->user_role,
        'employee_name'=>$request->employee_name,
        'status'=>$request->status
      ]);
      return Redirect()->route('all.users')->with('success','Users updated successfully');
    }
    public function delete($id){
      $users=Userinfo::find($id);
      Userinfo::find($id)->delete();
      return Redirect()->back()->with('success','User deleted successfully');
    }
}
