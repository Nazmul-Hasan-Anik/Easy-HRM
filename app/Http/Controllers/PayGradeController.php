<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pay_grades;

class PayGradeController extends Controller
{
    //
    public function allpay(){
      $pays=Pay_grades::all();
      return view('admin.paygrades',compact('pays'));
    }
    public function storepay(Request $request){
      Pay_grades::insert([
        'pay_grade'=>$request->pay_grade,
        'currency'=>$request->currency,
        'max_sal'=>$request->max_sal,
        'min_sal'=>$request->min_sal,

      ]);
      return Redirect()->back()->with('success','Pay Grade Added successfully');
    }
    public function editpay($id){
        $pays=Pay_grades::find($id);
      return view('admin.paysupdate',compact('pays'));
    }
    public function update(Request $request ,$id){
      $update=Pay_grades::find($id)->update([
          'pay_grade'=>$request->pay_grade,
          'currency'=>$request->currency,
          'max_sal'=>$request->max_sal,
          'min_sal'=>$request->min_sal,
      ]);
      return Redirect()->route('all.pay')->with('success','Pay Grade updated successfully');
    }
    public function delete($id){
      $pays=Pay_grades::find($id);
    Pay_grades::find($id)->delete();
      return Redirect()->back()->with('success','Pay Grade deleted successfully');
    }
}
