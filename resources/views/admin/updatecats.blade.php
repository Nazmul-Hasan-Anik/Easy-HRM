@extends('admin.admin_master')
@section('admin')
<div class="py-12">



<div class="container">
  <div class="row">

    <div class="col-md-8">


    <div class="card">
      <div class="card-header">Edit Category</div>
      <form action="{{route('update.cat',$jobcats->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Update Category Name</label>
          <input type="text" name="catgories_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$jobcats->catgories_name}}">
          @error('category_name')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

        </div>


        <button type="submit" class="btn btn-primary">Update Category</button>


      </form>



</div>
</div>
  </div>

</div>
</div>
@endsection
