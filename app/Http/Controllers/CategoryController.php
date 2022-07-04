<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    //
    public function cat(){
      $categories=Category::paginate(5);
      $trashcat=Category::onlyTrashed()->paginate(5);
      return view('admin.category.index',compact('categories','trashcat'));
    }

    public function add(Request $request){
      $validated = $request->validate([
        'category_name' => 'required|unique:categories|max:255',

    ],
[
'category_name.required'=>'Please input the category name ',

]  );
Category::insert([
  'category_name'=>$request->category_name,
  'user_id'=>Auth::user()->id,
  'created_at'=>Carbon::now()
]  );
return Redirect()->back()->with('success','Category inserted successfully');


    }
    public function edit($id){
      $categories=Category::find($id);
      return view('admin.category.edit',compact('categories'));
    }

    public function update(Request $request ,$id){
      $update=Category::find($id)->update([
        'category_name'=>$request->category_name,
        'user_id'=>Auth::user()->id
      ]);
      return Redirect()->route('All.Category')->with('success','Category inserted successfully');
    }
    public function softdelete($id){
      $delete=Category::find($id)->delete();
      return Redirect()->back()->with('success','Category deleted successfully');
    }
    public function restore($id){
      $delete=Category::withTrashed()->find($id)->restore();
      return Redirect()->back()->with('success','Category restored successfully');
    }
    public function pdelete($id){
      $delete=Category::onlyTrashed()->find($id)->forcedelete();
      return Redirect()->back()->with('success','Category permanent  successfully');
    }
}
