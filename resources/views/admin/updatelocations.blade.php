@extends('admin.admin_master')
@section('admin')


<div class="py-12">



<div class="container">
  <div class="row">

    <div class="col-md-8">


    <div class="card">
      <div class="card-header">Edit Locations</div>
      <form action="{{route('update.locations',$locations->id)}}" method="post">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="locations_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$locations->locations_name}}">
          @error('category_name')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Country</label>
          <input type="text" name="locations_country" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$locations->locations_country}}">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Country</label>
          <input type="text" name="locations_country" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$locations->locations_country}}">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">State/Province</label>
          <input type="text" name="locations_state" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$locations->locations_state}}">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">City</label>
          <input type="text" name="locations_city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$locations->locations_city}}">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Address</label>
          <input type="text" name="locations_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$locations->locations_address}}">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Zip/Postal Code</label>
          <input type="text" name="locations_zip" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$locations->locations_zip}}">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Phone</label>
          <input type="text" name="locations_phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$locations->locations_phone}}">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Fax</label>
          <input type="text" name="locations_fax" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$locations->locations_fax}}">
        </div>



        <div class="form-group">
          <label for="exampleInputEmail1">Note</label>
          <input type="text" name="locations_note" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$locations->locations_note}}">
          @error('category_name')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Number Of Employees</label>
          <input type="text" name="locations_numemp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$locations->locations_numemp}}">
        </div>

        <button type="submit" class="btn btn-primary">Update Location</button>
      </form>



</div>
</div>
  </div>

</div>
</div>

@endsection
