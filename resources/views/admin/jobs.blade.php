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
          <div class="card-header">Please Input New Job Info</div>

          <form action="{{route('store.jobs')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Job Title</label>
              <input type="text" name="job_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Job Description</label>
              <input type="text" name="job_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Job Specification</label>
              <input type="file" name="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Note</label>
              <input type="text" name="note" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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



<div class="py-12">



<div class="container">
  <div class="row">

    <div class="col-md-8">

      @if(Session('success'))
      <div class="alert alert-success" role="alert">
        {{Session('success')}}
      </div>


      @endif
    <div class="card">
      <div class="card-header"> Job Titles</div>

    <table class="table">
  <thead>
    <tr>

      <th scope="col">Job Title</th>
      <th scope="col">Job Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @php($i=1)
    @foreach($jobs as $job)
    <tr>

  <td>  <a href="{{route('edit.jobs',$job->id)}}">{{$job->job_title}} </a></td>
      <td>{{$job->job_description}}</td>
      <td><a href="{{route('delete.job',$job->id)}}"class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</a></td>
  </tr>
    @endforeach
  </tbody>
</table>

</div>
</div>
  </div>

</div>
</div>

@endsection
