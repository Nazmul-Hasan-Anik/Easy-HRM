@extends('admin.admin_master')
@section('admin')
<div class="py-12">



<div class="container">
  <div class="row">

    <div class="col-md-8">


    <div class="card">
      <div class="card-header">Edit </div>
      <form action="{{route('update.status',$status->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Employment Status</label>
          <input type="text" name="employment_status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$status->employment_status}}">
          @error('category_name')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

        </div>


        <button type="submit" class="btn btn-primary">Update</button>


      </form>



</div>
</div>
  </div>

</div>
</div>
@endsection
