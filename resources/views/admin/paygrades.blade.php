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
          <div class="card-header">Please Input New Pay Grades</div>

          <form action="{{route('store.pay')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" name="pay_grade" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Currency</label>
              <input type="text" name="currency" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Max Salary</label>
              <input type="text" name="max_sal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Min Salary</label>
              <input type="text" name="min_sal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
      <div class="card-header"> Pay Grades</div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Pay Grade</th>
      <th scope="col">Currency</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @php($i=1)
    @foreach($pays as $pay)
    <tr>
      <th scope="row">{{$i++}}</th>
  <td>  <a href="{{route('edit.pay',$pay->id)}}">{{$pay->pay_grade}} </a></td>
      <td>{{$pay->currency}}</td>
      <td><a href="{{route('delete.pay',$pay->id)}}"class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</a></td>
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
