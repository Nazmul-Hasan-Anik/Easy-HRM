@extends('admin.admin_master')
@section('admin')

<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" > Add Designation</button>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Designation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-header">Please Input New Designation</div>

          <form action="{{route('designations')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Designation Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
                        <label>Department <span class="text-danger">*</span></label>
                        <select class="select" name="department" title="Select Department">
                            @if(!empty($departments->count()))
                            @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>

            <button type="submit" class="btn btn-primary">Add Designation</button>
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

<!-- ....................................................... -->
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
         All Designation

       </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Designation </th>
      <th scope="col">Department </th>
      <th scope="col">Created At</th>
        <th scope="col" style="text-align: center;">Action</th>
    </tr>
  </thead>
  <tbody>

    @if (!empty($designations->count()))
                      @foreach ($designations as $designation)
                       <tr>
                           <td>{{$designation->id}}</td>
                           <td>{{$designation->name}}</td>
                           <td>{{$designation->department->name}}</td>
                           <td class="text-right">
                           <div class="dropdown dropdown-action">
                                   <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                               <div class="dropdown-menu dropdown-menu-right">
                                   <a data-id="{{$designation->id}}" data-name="{{$designation->name}}" data-department="{{$designation->department->name}}" class="dropdown-item editbtn" href="javascript:void(0)" data-toggle="modal"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                   <a data-id="{{$designation->id}}" class="dropdown-item deletebtn" href="javascript:void(0)" data-toggle="modal"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                               </div>
                               </div>
                           </td>
                       </tr>
@endforeach
 @endif
  </tbody>
  </table>


    </div>
  </div>

</div>




</div>
@endsection
