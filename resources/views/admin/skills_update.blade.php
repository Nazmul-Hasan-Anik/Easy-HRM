@extends('admin.admin_master')
@section('admin')
<div class="py-12">



<div class="container">
  <div class="row">

    <div class="col-md-8">


    <div class="card">
      <div class="card-header">Edit Skills</div>
      <form action="{{route('update.skills',$skills->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1"> Name</label>
          <input type="text" name="qual_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$skills->qual_name}}">

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <input type="text" name="qual_des" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$skills->qual_name}}">

        </div>

        <button type="submit" class="btn btn-primary">Update Skill</button>


      </form>



</div>
</div>
  </div>

</div>
</div>
@endsection
