@extends('admin.admin_master')
@section('admin')
<div class="py-12">



<div class="container">
  <div class="row">

    <div class="col-md-8">


    <div class="card">
      <div class="card-header">Edit</div>
      <form action="{{route('update.gen.info',$infos->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Organization Name </label>
          <input type="text" name="org_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infos->org_name}}">


        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Number of Employees:</label>
          <input type="text" name="emp_num" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infos->emp_num}}">


        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">  <p>Phone Number</p> </label>
          <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infos->phone}}">


        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email Address </label>
          <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infos->email}}">


        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Address Street 1: </label>
          <input type="text" name="add_str1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infos->add_str1}}">


        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Address Street 2: </label>
          <input type="text" name="add_str2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infos->add_str2}}">


        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">City </label>
          <input type="text" name="city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infos->city}}">


        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Zip/Postal Code </label>
          <input type="text" name="zip_code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infos->zip_code}}">


        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Note </label>
          <input type="text" name="note" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infos->note}}">


        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Tax </label>
          <input type="text" name="tax_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infos->tax_id}}">


        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Registration Number : </label>
          <input type="text" name="reg_num" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infos->reg_num}}">


        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Fax </label>
          <input type="text" name="fax" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infos->fax}}">


        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">State</label>
          <input type="text" name="state" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infos->state}}">


        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Country </label>
          <input type="text" name="country" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infos->country}}">


        </div>

        <button type="submit" class="btn btn-primary">Update </button>


      </form>



</div>
</div>
  </div>

</div>
</div>
@endsection
