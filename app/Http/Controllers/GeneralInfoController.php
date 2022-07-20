<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General_information;

class GeneralInfoController extends Controller
{
    //
    public function info(){
      $infos=General_information::all();
      return view('admin.gen_info',compact('infos'));
    }
    public function editinfo($id){
      $infos=General_information::find($id);
      return view('admin.updategen_info',compact('infos'));
    }
    public function storeinfo(Request $request){
      General_information::insert([
        'org_name'=>$request->org_name,
        'emp_num'=>$request->emp_num,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'add_str1'=>$request->add_str1,
        'add_str2'=>$request->add_str2,
        'city'=>$request->city,
        'zip_code'=>$request->zip_code,
        'note'=>$request->note,
        'tax_id'=>$request->tax_id,
        'reg_num'=>$request->reg_num,
        'fax'=>$request->fax,
        'state'=>$request->state,
        'country'=>$request->country,
        ]);
      return Redirect()->back();
    }
    public function update(Request $request ,$id){
      $infos=General_information::find($id)->update([
        'org_name'=>$request->org_name,
        'emp_num'=>$request->emp_num,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'add_str1'=>$request->add_str1,
        'add_str2'=>$request->add_str2,
        'city'=>$request->city,
        'zip_code'=>$request->zip_code,
        'note'=>$request->note,
        'tax_id'=>$request->tax_id,
        'reg_num'=>$request->reg_num,
        'fax'=>$request->fax,
        'state'=>$request->state,
        'country'=>$request->country,
      ]);
      return Redirect()->route('gen.info')->with('success','Information updated successfully');
    }
}
