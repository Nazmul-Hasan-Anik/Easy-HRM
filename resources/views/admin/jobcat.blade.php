@extends('admin.admin_master')
@section('admin')
<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" > Add Category</button>
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
          <div class="card-header">Please Input New Job Category</div>

          <form action="{{route('store.cat')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Job Category</label>
              <input type="text" name="catgories_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>



<br> <br>

            <button type="submit" class="btn btn-primary">Add Job Category</button>

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
          Job Categories

        </div>


    <table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">SL</th>
<th scope="col">Job Category</th>
<th scope="col">Action</th>

</tr>
</thead>
<tbody>


@php($i=1)
@foreach($jobcats as $jobcat)
<tr>
<th scope="row">{{$i++}}</th>
<td>  <a href="{{route('edit.cat',$jobcat->id)}}"> {{$jobcat->catgories_name}}</a></td>
<td><a href="{{route('delete.cat',$jobcat->id)}}"class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</a></td>


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
