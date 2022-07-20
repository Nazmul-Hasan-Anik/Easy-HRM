<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Languages;

class LanguagesController extends Controller
{
    //
    public function alllan(){
      $langs=Languages::all();
      return view('admin.languages',compact('langs'));
    }
    public function storelan(Request $request){
      Languages::insert([
        'lan_name'=>$request->lan_name,


      ]);
      return Redirect()->back()->with('success','Language added successfully');
    }
    public function editlan($id){
      $langs=Languages::find($id);
      return view('admin.languages_update',compact('langs'));
    }
    public function updatelan(Request $request ,$id){
      $langs=Languages::find($id)->update([
      'lan_name'=>$request->lan_name,

      ]);
      return Redirect()->route('all.languages')->with('success','Language updated successfully');
    }
    public function deletelan($id){
      $langs=Languages::find($id);
      Languages::find($id)->delete();
      return Redirect()->back()->with('success','Languages deleted successfully');
    }
}
