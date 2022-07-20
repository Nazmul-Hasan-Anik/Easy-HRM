@extends('admin.admin_master')
@section('admin')


<div class="py-12">



<div class="container">
  <div class="row">

    <div class="col-md-8">


    <div class="card">
      <div class="card-header">Edit jobs</div>
      <form action="{{route('update.jobs',$jobs->id)}}" method="post">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Update Job Title</label>
          <input type="text" name="job_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$jobs->job_title}}">
          @error('category_name')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Job Description</label>
          <input type="text" name="job_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$jobs->job_description}}">
          @error('category_name')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Job Specification</label>
          <input type="file" name="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$jobs->file}}">
          @error('category_name')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Note</label>
          <input type="text" name="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$jobs->note}}">
          @error('category_name')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

        </div>

        <button type="submit" class="btn btn-primary">Update Job</button>
      </form>



</div>
</div>
  </div>

</div>
</div>

@endsection
