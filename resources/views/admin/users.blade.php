@extends('admin.admin_master')
@section('admin')
<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" > Add User</button>
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
          <div class="card-header">Please Input New User Info</div>

          <form action="{{route('store.users')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">User Name</label>
              <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <select class="form-select" aria-label="Default select example" name="user_role">
              <option selected>User Role</option>
        <option value="Admin">Admin</option>
        <option value="ESS">ESS</option>

      </select>
            <div class="form-group">
              <label for="exampleInputEmail1">Employee Name</label>
              <input type="text" name="employee_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <select class="form-select" aria-label="Default select example" name="status">
              <option selected>Status</option>
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>

      </select>

<br> <br>

            <button type="submit" class="btn btn-primary">Add user</button>

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
      <div class="card-header">
        Users</div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">UserName</th>
      <th scope="col">User Role</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($users as $user)

    <tr>
      <th scope="row">{{$i++}}</th>
  <td>  <a href="{{route('edit.users',$user->id)}}"> {{$user->user_name}}</a></td>
      <td>{{$user->user_role}}</td>
      <td>{{$user->employee_name}}</td>
      <td>{{$user->status}}</td>
      <td><a href="{{route('delete.user',$user->id)}}"class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</a></td>
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
