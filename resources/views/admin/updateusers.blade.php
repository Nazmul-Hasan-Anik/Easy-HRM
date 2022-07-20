@extends('admin.admin_master')
@section('admin')


<div class="py-12">



<div class="container">
  <div class="row">

    <div class="col-md-8">


    <div class="card">
      <div class="card-header">Edit users</div>
      <form action="{{route('update.users',$users->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Update User Name</label>
          <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$users->user_name}}">
          @error('category_name')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Update User Role</label>
          <input type="text" name="user_role" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$users->user_role}}">
          @error('category_name')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Update Employee Name</label>
          <input type="text" name="employee_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$users->employee_name}}">
          @error('category_name')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Update Status</label>
          <input type="text" name="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$users->status}}">
          @error('category_name')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

        </div>


        <button type="submit" class="btn btn-primary">Update User</button>
        

      </form>



</div>
</div>
  </div>

</div>
</div>

@endsection
