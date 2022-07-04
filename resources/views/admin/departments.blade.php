@extends('admin.admin_master')
@section('admin')

<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" > Add Department</button>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-header">Please Input New Department</div>

          <form action="{{route('departments')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Department Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>

            <button type="submit" class="btn btn-primary">Add Department</button>
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

<!-- ....................................................... -->
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
       <div class="card-header">
         All Department

       </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Department Name</th>
      <th scope="col">Created At</th>
        <th scope="col" style="text-align: center;">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($departments as $department)
    <tr>
      <th scope="row">{{$departments->firstitem()+$loop->index}}</th>
      <td>{{$department->name}}</td>
      <td>{{$department->created_at->diffForHumans()}}</td>
      <td><a href="{{route('departments',$department->id)}}"class="btn btn-info">Edit</a></td>
    <td><a href=""class="btn btn-danger">Delete</a></td>
    </tr>
  @endforeach

  </tbody>
  </table>
  {{$departments->links()}}

    </div>
  </div>

</div>




</div>
@endsection
