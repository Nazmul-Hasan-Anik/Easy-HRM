<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationsController extends Controller
{
    //
    public function alllocations(){
      $locations=Location::all();
      return view('admin.locations',compact('locations'));
    }
    public function storelocations(Request $request){
      Location::insert([
        'locations_name'=>$request->locations_name,
        'locations_country'=>$request->locations_country,
        'locations_state'=>$request->locations_state,
        'locations_city'=>$request->locations_city,
        'locations_address'=>$request->locations_address,
        'locations_zip'=>$request->locations_zip,
        'locations_phone'=>$request->locations_phone,
        'locations_fax'=>$request->locations_fax,
        'locations_note'=>$request->locations_note,
        'locations_numemp'=>$request->locations_numemp,

      ]);
      return Redirect()->back()->with('success','Locations added successfully');
    }
    public function editlocation($id){
      $locations=Location::find($id);
      return view('admin.updatelocations',compact('locations'));
    }
    public function update(Request $request ,$id){
      $locations=Location::find($id)->update([
        'locations_name'=>$request->locations_name,
        'locations_country'=>$request->locations_country,
        'locations_state'=>$request->locations_state,
        'locations_city'=>$request->locations_city,
        'locations_address'=>$request->locations_address,
        'locations_zip'=>$request->locations_zip,
        'locations_phone'=>$request->locations_phone,
        'locations_fax'=>$request->locations_fax,
        'locations_note'=>$request->locations_note,
        'locations_numemp'=>$request->locations_numemp,
      ]);
      return Redirect()->route('all.locations')->with('success','Job updated successfully');
    }
    public function delete($id){
      $locations=Location::find($id);
      Location::find($id)->delete();
      return Redirect()->back()->with('success','Job deleted successfully');
    }
}
