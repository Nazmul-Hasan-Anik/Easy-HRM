@extends('admin.admin_master')
@section('admin')

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
              Task List

            </div>


        <table class="table">
<thead>
  <tr>
    <th scope="col">SL</th>
    <th scope="col">Task Name</th>
    <th scope="col">Task Image</th>
    <th scope="col">Created At</th>
      <th scope="col">Action</th>
  </tr>
</thead>
<tbody>
    <!-- @php $j=1 @endphp -->
@foreach($brands as $brand)
  <tr>
    <th scope="row">{{$brands->firstitem()+$loop->index}}</th>
    <td>{{$brand->brand_name}}</td>
    <td> <img src="{{asset($brand->brand_image)}}" style="height:40px;width:70px;"> </td>
    <td>{{$brand->created_at->diffForHumans()}}</td>
    <td><a href="{{route('edit.brands',$brand->id)}}"class="btn btn-info">Edit</a></td>
    <td><a href="{{route('delete.brand',$brand->id)}}"class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</a></td>

  </tr>
@endforeach

</tbody>
</table>
{{$brands->links()}}
</div>

</div>


      <div class="col-md-4">
        <div class="card">
          <div class="card-header">Add Task</div>

          <form action="{{route('add.brand')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Task Name</label>
              <input type="text" name="brand_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('brand_name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Task Image</label>
              <input type="file" name="brand_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('brand_image')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>

            <button type="submit" class="btn btn-primary">Add Task</button>
          </form>



        </div>
            </div>

    </div>
        </div>
    </div>
@endsection
