<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memberships;

class MembershipsController extends Controller
{
    //
    public function allmembership(){
      $memberships=Memberships::all();
      return view('admin.memberships',compact('memberships'));
    }
    public function storemembership(Request $request){
      Memberships::insert([
        'memberships'=>$request->memberships,


      ]);
      return Redirect()->back()->with('success','Department added successfully');
    }
    public function editmembership($id){
      $memberships=Memberships::find($id);
      return view('admin.membershipst_update',compact('memberships'));
    }
    public function deletemembership($id){
      $memberships=Memberships::find($id);
      Memberships::find($id)->delete();
      return Redirect()->back()->with('success','Department deleted successfully');
    }
    public function updatemembership(Request $request ,$id){
      $memberships=Memberships::find($id)->update([
      'memberships'=>$request->memberships,

      ]);
      return Redirect()->route('all.membership')->with('success','Membership updated successfully');
    }
}
