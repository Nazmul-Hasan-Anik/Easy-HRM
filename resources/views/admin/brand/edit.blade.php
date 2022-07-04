<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Tasks

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="container">
      <div class="row">


      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Edit Task</div>
          @if(Session('success'))
          <div class="alert alert-success" role="alert">
            {{Session('success')}}
          </div>


          @endif

          <form action="{{route('update.brands',$brands->id)}}" method="post" enctype="multipart/form-data">
            @csrf
              <input type="hidden" name="old_images" value="{{$brands->brand_image}}">
            <!-- Update Task name -->
            <div class="form-group">
              <label for="exampleInputEmail1">Update Task Name</label>

              <input type="text" name="brand_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$brands->brand_name}}">
              @error('brand_name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror
              <!-- Update Task Image -->
              <label for="exampleInputEmail1">Update Task Image</label>
              <input type="file" name="brand_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$brands->brand_image}}">
              @error('brand_image')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror
            </div>
            <div class="form-group">
            <img src="{{asset($brands->brand_image)}}" style="width:400px; height:200px;">
            </div>

            <button type="submit" class="btn btn-primary">Update Image</button>
          </form>



        </div>
            </div>

    </div>
        </div>
    </div>
</x-app-layout>
