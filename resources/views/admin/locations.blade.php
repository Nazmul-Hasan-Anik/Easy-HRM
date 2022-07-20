@extends('admin.admin_master')
@section('admin')
<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" > Add Location</button>
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
          <div class="card-header">Please Input New Loaction</div>

          <form action="{{route('store.locations')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" name="locations_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Country</label>
              <input type="text" name="locations_country" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">State/Province</label>
              <input type="text" name="locations_state" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">City</label>
              <input type="text" name="locations_city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Address</label>
              <input type="text" name="locations_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Zip/Postal Code</label>
              <input type="text" name="locations_zip" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Phone</label>
              <input type="text" name="locations_phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Fax</label>
              <input type="text" name="locations_fax" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Notes</label>
              <input type="text" name="locations_note" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Number Of Employees</label>
              <input type="text" name="locations_numemp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>

<br> <br>

            <button type="submit" class="btn btn-primary">Add Location</button>

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
    <div class="col-md-8">
      @if(Session('success'))
      <div class="alert alert-success" role="alert">
        {{Session('success')}}
      </div>


      @endif
      <div class="card">
        <div class="card-header">
        <h3>Locations</h3>
        </div>
<br>

    <table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">SL</th>
<th scope="col">Name</th>
<th scope="col">City</th>
<th scope="col">Country</th>
<th scope="col">Phone</th>
<th scope="col">Number of Employees</th>
<th scope="col">Action</th>

</tr>
</thead>
<tbody>


@php($i=1)
  @foreach($locations as $location)
<tr>
<th scope="row">{{$i++}}</th>
<td>  <a href="{{route('edit.locations',$location->id)}}">{{$location->locations_name}} </a></td>
<td>{{$location->locations_city}}</td>
<td>{{$location->locations_country}}</td>
<td>{{$location->locations_phone}}</td>
<td>{{$location->locations_numemp}}</td>
<td><a href="{{route('delete.locations',$location->id)}}" class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</a></td>


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
