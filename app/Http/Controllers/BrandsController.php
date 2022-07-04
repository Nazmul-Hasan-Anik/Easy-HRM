<?php

namespace App\Http\Controllers;
use App\Models\Brands;
use App\Models\Multipic;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;
use Auth;

class BrandsController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function all(){
      $brands=Brands::paginate(5);
      return view('admin.brand.index',compact('brands'));
    }
    public function add(Request $request){
      $validatedData = $request->validate([
        'brand_name' => 'required|unique:brands|min:4',
        //'brand_image' => 'required|files',

    ],
[
'brand_name.required'=>'Please input the Brand Name ',
'brand_image.min' => 'Brand Longer then 4 Characters',

]  );

$brand_image=$request->file('brand_image');
// $name_gen = hexdec(uniqid());
// $img_ext = strtolower($brand_image->getClientOriginalExtension());
// $img_name = $name_gen.'.'.$img_ext;
// $up_location = 'image/brand/';
// $last_img = $up_location.$img_name;
// $brand_image->move($up_location,$img_name);

  $name_gen = hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
  Image::make($brand_image)->resize(300,200)->save('image/brand/'.$name_gen);
  $last_img='image/brand/'.$name_gen;

Brands::insert([
    'brand_name' => $request->brand_name,
    'brand_image' => $last_img,
    'created_at' => Carbon::now()
]  );
return Redirect()->back()->with('success','Task inserted successfully');

}
public function edit($id){
  $brands=Brands::find($id);
  return view('admin.brand.edit',compact('brands'));

}
public function update(Request $request,$id){
  $validatedData = $request->validate([
    'brand_name' => 'required|min:4',
    //'brand_image' => 'required|files',

],
[
'brand_name.required'=>'Please input the Brand Name ',
'brand_image.min' => 'Brand Longer then 4 Characters',

]  );
$old_images=$request->old_images;
// $brand_image=$request->file('brand_image');
$brand_image=$request->file('brand_image');
if($brand_image){
  $name_gen = hexdec(uniqid());
  $img_ext = strtolower($brand_image->getClientOriginalExtension());
  $img_name = $name_gen.'.'.$img_ext;
  $up_location = 'image/brand/';
  $last_img = $up_location.$img_name;
  $brand_image->move($up_location,$img_name);

  unlink($old_images);
  Brands::find($id)->update([
  'brand_name' => $request->brand_name,
  'brand_image' => $last_img,
  'created_at' => Carbon::now()
  ]  );
  return Redirect()->back()->with('success','Task updated successfully');
}
else{
  Brands::find($id)->update([
  'brand_name' => $request->brand_name,
  'created_at' => Carbon::now()
  ]  );
  return Redirect()->back()->with('success','Task updated successfully');
}


}
public function delete($id){
  $images=Brands::find($id);
  $old_images=$images->brand_image;
  Brands::find($id)->delete();
  return Redirect()->back()->with('success','Task deleted successfully');
}

public function multipic(){
  $images=Multipic::all();
  return view('admin.multipic.index',compact('images'));
}

public function StoreImg(Request $request){
  $image=$request->file('image');

foreach ($image as $multi_img) {
  // code...

    $name_gen = hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
    Image::make($multi_img)->resize(300,300)->save('image/multi/'.$name_gen);
    $last_img='image/multi/'.$name_gen;

  Multipic::insert([

      'image' => $last_img,
      'created_at' => Carbon::now()
  ]  );
}
  return Redirect()->back()->with('success','Image inserted successfully');

}
public function logout(){
  Auth::logout();
  return Redirect()->route('login')->with('success','User Logout');
}
}
