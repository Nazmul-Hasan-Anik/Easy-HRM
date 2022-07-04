@extends('admin.admin_master')
@section('admin')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="container">
      <div class="row">


      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Edit Department</div>

          <form action="{{route('update.category',$categories->id)}}" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Update Department Name</label>
              <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$categories->category_name}}">
              @error('category_name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>

            <button type="submit" class="btn btn-primary">Update Department</button>
          </form>



        </div>
            </div>

    </div>
        </div>
    </div>
@endsection
