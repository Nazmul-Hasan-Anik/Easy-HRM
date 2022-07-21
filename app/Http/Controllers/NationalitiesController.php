<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nationalities;

class NationalitiesController extends Controller
{
    //
    public function allnationalities(){
      $nationalities=Nationalities::all();
      return view('admin.nationalities',compact('nationalities'));
    }
    public function storenationalities(Request $request){
      Nationalities::insert([
        'nationalities'=>$request->nationalities,


      ]);
      return Redirect()->back()->with('success','Nationality added successfully');
    }
    public function editnationalities($id){
      $nationalities=Nationalities::find($id);
      return view('admin.nationalities_update',compact('nationalities'));
    }
    public function deletenationalities($id){
      $nationalities=Nationalities::find($id);
    Nationalities::find($id)->delete();
      return Redirect()->back()->with('success','Nationality deleted successfully');
    }
    public function updatenationalities(Request $request ,$id){
      $nationalities=Nationalities::find($id)->update([
      'nationalities'=>$request->nationalities,

      ]);
      return Redirect()->route('all.nationalities')->with('success','Nationality updated successfully');
    }
}
