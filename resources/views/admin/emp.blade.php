@extends('admin.admin_master')
@section('admin')

<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" > Add </button>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
        <div class="card">
          <div class="card-header">Add Languages</div>

          <form action="{{route('store.emp')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">First Name</label>
              <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Last Name</label>
              <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Phone </label>
              <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Department</label>
              <input type="text" name="dept" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <select name="dept" class="select">
									<option>Select Department</option>
									@foreach ($employees as $employee)
										<option value="{{$employee->dept->id}}"></option>
									@endforeach
								</select>
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Job Category</label>
              <input type="text" name="job_category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <select name="job_category" class="select">
									<option>Select Job Category </option>
									@foreach ($employees as $employee)
										<option value="{{$employee->job_Category->catgories_name}}">{{$employee->job_Category_name}}</option>
									@endforeach
								</select>
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Picture </label>
              <input type="file" name="avatar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>



            <button type="submit" class="btn btn-primary">Save</button>
          </form>



        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add </button>
      </div> -->
    </div>
  </div>
</div>





@endsection
