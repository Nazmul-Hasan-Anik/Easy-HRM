<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Department

        </h2>
    </x-slot>
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
          All Department

        </div>


    <table class="table">
<thead>
<tr>
<th scope="col">SL</th>
<th scope="col">Department Name</th>
<th scope="col">Admin Id</th>
<th scope="col">Created At</th>
  <th scope="col">Action</th>
</tr>
</thead>
<tbody>
<!-- @php $j=1 @endphp -->
@foreach($categories as $category)
<tr>
<th scope="row">{{$categories->firstitem()+$loop->index}}</th>
<td>{{$category->category_name}}</td>
<td>{{$category->user->name}}</td>
<td>{{$category->created_at->diffForHumans()}}</td>
<td><a href="{{route('edit.category',$category->id)}}"class="btn btn-info">Edit</a></td>
<td><a href="{{route('softdelete.category',$category->id)}}"class="btn btn-danger">Delete</a></td>
</tr>
@endforeach

</tbody>
</table>
{{$categories->links()}}
</div>

</div>


  <div class="col-md-4">
    <div class="card">
      <div class="card-header">Add Department</div>

      <form action="{{route('add.category')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Department Name</label>
          <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          @error('category_name')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

        </div>

        <button type="submit" class="btn btn-primary">Add Department</button>
      </form>



    </div>
        </div>

</div>
<!-- Trash Mode -->
<div class="container">
  <div class="row">
    <div class="col-md-8">

      <div class="card">
        <div class="card-header">
          Trash List

        </div>


    <table class="table">
<thead>
<tr>
<th scope="col">SL</th>
<th scope="col">Category Name</th>
<th scope="col">Admin Id</th>
<th scope="col">Created At</th>
  <th scope="col">Action</th>
</tr>
</thead>
<tbody>
<!-- @php $j=1 @endphp -->
@foreach($trashcat as $category)
<tr>
<th scope="row">{{$categories->firstitem()+$loop->index}}</th>
<td>{{$category->category_name}}</td>
<td>{{$category->user->name}}</td>
<td>{{$category->created_at->diffForHumans()}}</td>
<td><a href="{{route('restore.category',$category->id)}}"class="btn btn-info">Restore</a></td>
<td><a href="{{route('pdelete.category',$category->id)}}"class="btn btn-danger"> P. Delete</a></td>
</tr>
@endforeach

</tbody>
</table>
{{$trashcat->links()}}
</div>

</div>


  <div class="col-md-4">

        </div>
<!-- End Trash -->
</div>
    </div>
</div>
</x-app-layout>
