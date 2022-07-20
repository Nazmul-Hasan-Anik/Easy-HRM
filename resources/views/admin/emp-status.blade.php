@extends('admin.admin_master')
@section('admin')
<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" > Add</button>
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
          <div class="card-header">Please Input New Status</div>

          <form action="{{route('store.status')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Employment Status</label>
              <input type="text" name="employment_status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>



<br> <br>

            <button type="submit" class="btn btn-primary">Add </button>

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
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="container">
  <div class="row">
    <div class="col-md-4">
      @if(Session('success'))
      <div class="alert alert-success" role="alert">
        {{Session('success')}}
      </div>


      @endif
      <div class="card">
        <div class="card-header">
          Employment Status

        </div>


    <table class="table">
<thead>
<tr>
<th scope="col">SL</th>
<th scope="col">Employment Status</th>
<th scope="col">Action</th>


</tr>
</thead>
<tbody>


@php($i=1)
@foreach($status as $stat)
<tr>
<th scope="row">{{$i++}}</th>
<td>  <a href="{{route('edit.status',$stat->id)}}"> {{$stat->employment_status}}</a></td>
<td><a href="{{route('delete.status',$stat->id)}}"class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</a></td>


</tr>
@endforeach

</tbody>
</table>

</div>

</div>




</div>
</div>
    </div>
</div>





@endsection
