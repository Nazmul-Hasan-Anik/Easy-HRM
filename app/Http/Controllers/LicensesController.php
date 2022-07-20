<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Licenses;

class LicensesController extends Controller
{
    //
    public function alllic(){
      $lics=Licenses::all();
      return view('admin.licenses',compact('lics'));
    }
    public function storelic(Request $request){
      Licenses::insert([
        'lic_name'=>$request->lic_name,


      ]);
      return Redirect()->back()->with('success','Licenses added successfully');
    }
    public function editlic($id){
      $lics=Licenses::find($id);
      return view('admin.licenses_update',compact('lics'));
    }
    public function updatelic(Request $request ,$id){
      $lics=Licenses::find($id)->update([
      'lic_name'=>$request->lic_name,

      ]);
      return Redirect()->route('all.licenses')->with('success','Licenses updated successfully');
    }
    public function deletelic($id){
      $lics=Licenses::find($id);
      Licenses::find($id)->delete();
      return Redirect()->back()->with('success','Licenses deleted successfully');
    }

}
