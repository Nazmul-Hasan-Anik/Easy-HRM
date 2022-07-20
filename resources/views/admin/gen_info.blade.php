@extends('admin.admin_master')
@section('admin')



<div class="container">
  <form  method="POST">
    @csrf
    <h3>General Information</h3>
    <br> <br>
@foreach($infos as $info)
    <fieldset>
    Organization Name : <input type="text" placeholder="{{$info->org_name}}"  required autofocus>
    </fieldset>
    <br>
    <fieldset>
    Number of Employees: <input type="text" placeholder="{{$info->emp_num}}"  required autofocus>
    </fieldset>
    <br>
    <fieldset>
    Phone Number:  <input type="tel" placeholder="{{$info->phone}}"  required>
    </fieldset>
    <br>
    <fieldset>
    Email Address  <input  type="email" placeholder="{{$info->email}}"  required>
    </fieldset>
    <br>
    <fieldset>
    Tax ID :  <input type="tel" placeholder="{{$info->tax_id}}"   required>
    </fieldset>
    <br>
    <fieldset>
      Registration Number : <input  type="tel" placeholder="{{$info->reg_num}}"  required>
    </fieldset>
    <br>
    <fieldset>
      Fax : <input  type="tel" placeholder="{{$info->fax}}"  required>
    </fieldset>
    <br>
    <fieldset>
    Address Street 1: <input type="text" placeholder="{{$info->add_str1}}"  required autofocus>
    </fieldset>
    <br>
    <fieldset>
    Address Street 2: <input type="text" placeholder="{{$info->add_str2}}"  required autofocus>
    </fieldset>
    <br>
    <fieldset>
    City: <input type="text" placeholder="{{$info->city}}" required autofocus>
    </fieldset>
    <br>
    <fieldset>
    State: <input type="text" placeholder="{{$info->state}}"  required autofocus>
    </fieldset>
    <br>
    <fieldset>
    Zip/Postal Code: <input type="text" placeholder="{{$info->zip_code}}" name="zip_code" required autofocus>
    </fieldset>
    <br>
    <fieldset>
    Country: <input type="text" placeholder="{{$info->country}}" name="country" required autofocus>
    </fieldset>
    <br>

    <fieldset>
    Note:   <textarea name="note" placeholder="{{$info->note}}"   required></textarea>
    </fieldset>
    <br><br><br>

    <a href="{{route('edit.gen.info',$info->id)}}" class="btn btn-primary"> Edit </a>
  @endforeach
    </form>
  <br><br><br>



</div>

@endsection
