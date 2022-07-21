@extends('admin.admin_master')
@section('admin')
<div class="py-12">



<div class="container">
  <div class="row">

    <div class="col-md-8">


    <div class="card">
      <div class="card-header">Edit </div>
      <form action="{{route('update.nationalities',$nationalities->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1"> Name</label>
          <input type="text" name="nationalities" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$nationalities->nationalities}}">

        </div>


        <button type="submit" class="btn btn-primary">Update Skill</button>


      </form>



</div>
</div>
  </div>

</div>
</div>
@endsection
