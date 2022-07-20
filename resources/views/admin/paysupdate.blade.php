@extends('admin.admin_master')
@section('admin')
<div class="py-12">



<div class="container">
  <div class="row">

    <div class="col-md-8">


    <div class="card">
      <div class="card-header">Edit Pay Grade</div>
      <form action="{{route('update.cat',$pays->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Update  Name</label>
          <input type="text" name="pay_grade" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pays->pay_grade}}">
          @error('category_name')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Update Currency</label>
          <input type="text" name="currency" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pays->currency}}">
          @error('category_name')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Max Salary</label>
          <input type="text" name="max_sal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pays->max_sal}}">
          @error('category_name')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Min Salary</label>
          <input type="text" name="min_sal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pays->min_sal}}">
          @error('category_name')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

        </div>


        <button type="submit" class="btn btn-primary">Update Pay-Grade</button>


      </form>



</div>
</div>
  </div>

</div>
</div>
@endsection
